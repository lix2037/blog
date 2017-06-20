<?php

namespace App;

use App\Http\Controllers\Admin\CommonController;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Article extends Model
{
    //
    protected $table = 'article';
    protected $primaryKey = 'article_id';
//    public $timestamps=false;
    protected $fillable = ['article_title','article_content','cate_id','article_view'];

    public function getAllArticleList()
    {
        $datas = $this->orderBy('article_order','asc')->orderBy('article_id','desc')->paginate(10);

        foreach ($datas as $data)
        {
            $data->cate_name = Category::find($data->cate_id)->cate_name;
        }
//        dd($datas);
        return $datas;
    }

    public function getArticleByArticleId($article_id)
    {
        $data = Article::find($article_id);
        $data->cate_name = Category::find($data->cate_id)->cate_name;
        return $data;
    }
    //获取最新的文章
    public function getArticleNow()
    {
        $datas = $this->orderBy('created_at','desc')->paginate(10);
        //限制显示内容
        foreach ($datas as $data)
        {
//            substr($data->article_content,0);
        }
        return $datas;
    }
}
