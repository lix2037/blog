<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class ArticleController extends CommonController
{

    //get admin/article 
    public function index(){
//        $data = Article::orderBy('article_order','asc')->orderBy('article_id','desc')->paginate(5);
        $data = (New Article())->getAllArticleList();


        return view('admin.article.index',compact('data'));
    }
    //get admin/article/create 
    public function create(){
        //文章分类
        $category = new Category();
        $cate = $category->getAllNodeList();

        return view('admin.article.add',compact('cate'));
    }
    //get admin/article/{article}/edit
    public function edit($id){
        //文章分类
        $category = new Category();
        $cate = $category->getAllNodeList();

        $field = Article::find($id);
        return view('admin.article.edit',compact('field','cate'));
    }
    //get admin/article/{article} 
    public function show(){
        
    }
    //post admin/article 
    public function store(){
        $input = Input::except('_token');
//        $input['article_time'] = time();
//        $input['article_content'] = encrypt($input['article_content']);
//        dd($input);
        $rules = [
            'article_title'=>'required',
        ];
        $msg = [
            'article_title.required'=>'文章标题不能为空!',
        ];
        $validator = Validator::make($input,$rules,$msg);
        if($validator->passes()){
            $ret = Article::create($input);
            if($ret){
                return redirect('admin/article');
            }else{
                return back()->with('errors','添加文章失败,请稍后重试!');
            }
        }else{
            return back()->withErrors($validator);
        }
    }
    //put  admin/article/{article}
    public function update($id){
        $input = Input::except('_method','_token');
        $article = Article::find($id)->update($input);
        if($article){
            return redirect('admin/article');
        }else{
            return back()->with('errors','文章更新失败，请稍后重试!');
        }
    }
    //delete  admin/article/{article}
    public function destroy($id){
        $ret = Article::where('article_id',$id)->delete();
        if($ret){
            $data = [
                'status'=>0,
                'msg'=>'文章删除成功!'
            ];
        }else{
            $data = [
                'status'=>1,
                'msg'=>'文章删除失败,请稍后重试!'
            ];
        }
        return $data;
    }
    public function upload(){
        $file = Input::file('Filedata');
        if($file -> isValid()){
            $entension = $file -> getClientOriginalExtension(); //上传文件的后缀.
            $newName = date('YmdHis').mt_rand(100,999).'.'.$entension;
            $path = $file -> move(base_path().'/uploads',$newName);
            $filepath = 'uploads/'.$newName;
            return $filepath;
        }
    }
}
