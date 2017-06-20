<?php

namespace App\Http\Controllers\Admin;

/*
 * 节点管理
 *
 * */

use App\Node;
use App\Http\Requests\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class NodeController extends CommonController
{
    //
    public function index()
    {
        $node_pid = Input::get('node_pid');
        if($node_pid <1 )
            $node_pid = 0;

        if($node_pid == 0){
            $search= array('node_pid'=>$node_pid);
        }else{
            $search= array('node_pid_path'=>','.$node_pid.',');
        }

        $node = new Node();

        $list = $node->getNodeList($search);

        $datas = list_to_tree($list,'node_id', 'node_pid', '_sub', $node_pid);

//        dd($datas);
        return view('node.index', compact('datas') );
    }
    //post
    public function store()
    {
        $input = Input::except('_token');

        $rules = [
            'node_name' => 'required',
        ];
        $messages = [
            'node_name.required'=> '分类名称不能为空',
        ];

        $validator = Validator::make($input,$rules,$messages);

        if($validator->passes())
        {
            $first = Node::where('node_name', '=' , $input['node_name'])->first();
            if($first)
                return back()->with('errors','节点名称重复');
//            $re = Node::insert($input);
            $node = new Node();
            $re = $node->insertArray($input);
//            dd($re);
            if($re){
                return redirect('admin/node');
            }else{
                return back()->with('errors','数据填充失败，请重试');
            }
        }else{
            return back()->withErrors($validator);
        }
//        return 111;
    }
    //get
    public function create()
    {
        $tags = [
            '0'=>'顶部菜单',
            '1'=>'左边一级菜单',
            '2'=>'左边二级菜单',
            '3'=>'隐藏菜单',
        ];
        $data = Node::where('node_pid', '=' , 0)->get();
//        dd($data);
        return view('node.add',compact('data','tags'));
    }

    public function show($node_pid)
    {
        if($node_pid <1 )
            $node_pid = 0;

        if($node_pid == 0){
            $search= array('node_pid'=>$node_pid);
        }else{
            $search= array('node_pid_path'=>',0,'.$node_pid.',');
        }

        $node = new Node();

        $list = $node->getNodeList($search);

        $datas = list_to_tree($list,'node_id', 'node_pid', '_sub', $node_pid);

        return view('node.index',compact('datas'));
    }

    public function edit($node_id)
    {
        $data = Node::find($node_id);
        $nodes = Node::where('node_pid', 0)->get();
        $tags = [
            '0'=>'顶部菜单',
            '1'=>'左边一级菜单',
            '2'=>'左边二级菜单',
            '3'=>'隐藏菜单',
        ];
//        dd($nodes);
        return view('node.edit',compact('data','nodes','tags'));
    }

    //删除
    public function destroy($node_id)
    {
        $re = Node::where('node_id',$node_id)->delete();
        Node::where('node_id',$node_id)->update(['node_pid'=>0]);
        if($re){
            $data = [
                'status' => 0,
                'msg' => '分类删除成功！',
            ];
        }else{
            $data = [
                'status' => 1,
                'msg' => '分类删除失败，请稍后重试！',
            ];
        }
        return $data;
    }

    //修改edit
    public function update($node_id)
    {
//        $input = Input::all();
        $input = Input::except('_token','_method');
        $re = Node::where('node_id',$node_id)->update($input);
        if($re){
            return redirect('admin/node');
        }else{
            return back()->with('errors','数据修改失败，请检查后重试');
        }

    }

    /*
     * 更改排序
     * */
    public function changeOrder()
    {
//        dd(Input::all());
        $input = Input::except('_token');
        $node = Node::find($input['node_id']);
        $node->px = $input['px'];
        $re = $node->update();
        if($re){
            $data = [
                'status' => 0,
                'msg' => '排序更新成功'
            ];
        }else{
            $data = [
                'status' => 1,
                'msg' => '排序更新失败，请检查重试'
            ];
        }
        return $data;
    }
}


