<?php

namespace App\Listeners;

use App\Events\ArticleView;
use App\Article;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redis;

class ArticleViewListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ArticleView  $event
     * @return void
     */
    public function handle(ArticleView $event)
    {
        //
        $article = $event->article;
        $article_id = $article->article_id;
        $art_db = new Article();
        $art = $art_db::find($article_id);

        //限制IP 同一个IP只计算一次
        $ip = $_SERVER['REMOTE_ADDR'];
        if(!Redis::hget('article:'.$ip,$article_id))
        {
            $art->article_view+=1;
            $art->update();
            Redis::hset('article:'.$ip,$article_id,1);
        }
//        Log::info('这是测试',['id'=>json_encode($art->article_view)]);
    }
}
