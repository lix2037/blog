<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index()
    {
        //文章分类
        $category = new Category();
//        $cate = $category->getAllNodeList();

//        dd($cate);
        //最新文章 按照时间排序
        $articles = (new Article() )->getArticleNow();
        //推荐
        //评论 按照时间排序
        //轮播
        //热门排行 选5个阅读量最大的文章

        return view('index',compact('cate','articles'));
    }
}
