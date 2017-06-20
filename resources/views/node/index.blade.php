@extends('layouts.admin')
@section('content')
        <!--面包屑导航 开始-->
<div class="crumb_warp">
    <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
    <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">首页</a> &raquo; 分类列表
</div>
<!--面包屑导航 结束-->

<!--结果页快捷搜索框 开始-->
{{--<div class="search_wrap">
    <form action="" method="post">
        <table class="search_tab">
            <tr>
                <th width="120">选择分类:</th>
                <td>
                    <select onchange="javascript:location.href=this.value;">
                        <option value="">全部</option>
                        <option value="http://www.baidu.com">百度</option>
                        <option value="http://www.sina.com">新浪</option>
                    </select>
                </td>
                <th width="70">关键字:</th>
                <td><input type="text" name="keywords" placeholder="关键字"></td>
                <td><input type="submit" name="sub" value="查询"></td>
            </tr>
        </table>
    </form>
</div>--}}
<!--结果页快捷搜索框 结束-->

<!--搜索结果页面 列表 开始-->
<form action="#" method="post">
    <div class="result_wrap">
        <!--快捷导航 开始-->
        <div class="result_content">
            <div class="short_wrap">
                <a href="{{url('admin/node/create')}}"><i class="fa fa-plus"></i>添加分类</a>
                <a href="#"><i class="fa fa-recycle"></i>全部分类</a>
                <a href="#"><i class="fa fa-refresh"></i>更新排序</a>
            </div>
        </div>
        <!--快捷导航 结束-->
    </div>

    <div class="result_wrap">
        <div class="result_content">
            <table class="list_tab">
                <tr>
                    <th class="tc" width="5%">排序</th>
                    <th class="tc" width="5%">ID</th>
                    <th >节点名称</th>
                    <th >显示级别</th>
                    <th>操作</th>
                </tr>
                @foreach($datas as $data)
                    <tr>
                        <td class="tc">
                            <input type="text" name="px" value="{{$data['px']}}" onchange="changeOrder(this,{{$data['node_id']}})">
                        </td>
                        <td class="tc">{{$data['node_id']}}</td>
                        <td>
                            <p>
                                {{$data['node_name']}}
                            </p>
                        </td>
                        <td>
                            <p>
                                @if($data['node_level'] == 0) 顶部菜单@elseif($data['node_level'] == 1) 左边一级菜单 @elseif($data['node_level'] == 2)左边二级菜单@elseif($data['node_level'] == 3)隐藏菜单@endif
                            </p>
                        </td>
                        <td>
                            <a href="{{url('admin/node/'.$data['node_id'].'/edit')}}" >修改</a>
                            @if($data['node_pid'] == 0)
                            <a href="{{url('admin/node/'.$data['node_id'])}}" >管理子菜单</a>
                            @else
                                @endif
                            <a href="javascript:;" onclick="delCate({{$data['node_id']}})">删除</a>
                        </td>
                    </tr>
                @endforeach
            </table>

        </div>
    </div>
</form>
<script>
    function delCate(node_id) {
        layer.confirm('您确定要删除这个分类吗？', {
            btn: ['确定','取消'] //按钮
        }, function(){
            $.post("{{url('admin/node/')}}/"+node_id,{'_method':'delete','_token':"{{csrf_token()}}"},function (data) {
                if(data.status==0){
                    layer.msg(data.msg, {icon: 6});
                    location.href = location.href;
                }else{
                    layer.msg(data.msg, {icon: 5});
                }
            });
        }, function(){

        });
    }

    function  changeOrder(obj,node_id){
        var px = $(obj).val();
        $.post("{{url('admin/node/changeOrder')}}",
                {'_token':"{{csrf_token()}}",'node_id':node_id,'px':px},
                function(data){
                if(data.status == 0){
                    layer.msg(data.msg,{icon:6});
                    location.href = location.href;
                }else{
                    layer.msg(data.msg,{icon:5});
                }
        })
    }
</script>
<!--搜索结果页面 列表 结束-->
@endsection



