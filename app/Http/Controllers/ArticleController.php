<?php

namespace App\Http\Controllers;

use App\Article;
use App\Events\ArticleView;
use App\Events\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class ArticleController extends Controller
{
    //内容展示页
    public function index($article_id)
    {

        if(!Cache::has('staticPageArticleCache_'.$article_id))
        {
            $article = new Article();
            $data = $article->getArticleByArticleId($article_id);

            Cache::forever('staticPageArticleCache_'.$article_id,$data);
        }
        event(new ArticleView(Cache::get('staticPageArticleCache_'.$article_id)));//监听阅读量

        return view('content',['data'=>Cache::get('staticPageArticleCache_'.$article_id)]);

    }
}
