@extends('layouts.admin')
@section('content')
        <!--面包屑导航 开始-->
<div class="crumb_warp">
    <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
    <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; 添加分类
</div>
<!--面包屑导航 结束-->

<!--结果集标题与导航组件 开始-->
<div class="result_wrap">
    <div class="result_title">
        <h3>快捷操作</h3>
        @if(count($errors) > 0)
            <div class="mark">
                @if(is_object($errors))
                    @foreach($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                @else
                    <p>{{$errors}}</p>
                @endif
            </div>
        @endif


    </div>
    <div class="result_content">
        <div class="short_wrap">
            <a href="{{url('admin/node/create')}}"><i class="fa fa-plus"></i>新增文章</a>
            <a href="#"><i class="fa fa-recycle"></i>批量删除</a>
            <a href="#"><i class="fa fa-refresh"></i>更新排序</a>
        </div>
    </div>
</div>
<!--结果集标题与导航组件 结束-->

<div class="result_wrap">
    <form action="{{url('admin/node/'.$data->node_id)}}" method="post">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="put">
        <table class="add_tab">
            <tbody>
            <tr>
                <th width="120"><i class="require">*</i>父级分类：</th>
                <td>
                    <select name="node_pid">
                        <option value="0">==顶级节点==</option>
                        @foreach($nodes as $v)
                            <option value="{{$v->node_id}}" @if($v->node_id == $data->node_pid) selected @endif>{{$v->node_name}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>分类名称：</th>
                <td>
                    <input type="text"  name="node_name" value="{{$data->node_name}}"><span></span>
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>节点地址：</th>
                <td>
                    <input type="text"  name="m_c_a" value="{{$data->m_c_a}}"><span></span>
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>节点等级：</th>
                <td>
                    <select name="node_level">
                        @foreach($tags as $k =>$v)
                            <option value="{{$k}}" @if($data->node_level == $k) selected @endif>{{$v}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>排序：</th>
                <td>
                    <input type="text" class="sm" name="px" value="{{$data->px}}">
                </td>
            </tr>
            <tr>
                <th></th>
                <td>
                    <input type="submit" value="提交">
                    <input type="button" class="back" onclick="history.go(-1)" value="返回">
                </td>
            </tr>
            </tbody>
        </table>
    </form>
</div>
@endsection



