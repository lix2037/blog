@extends('layouts.admin')
@section('content')
        <!--面包屑导航 开始-->
<div class="crumb_warp">
    <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
    <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">首页</a> &raquo; 添加分类
</div>
<!--面包屑导航 结束-->

<!--结果集标题与导航组件 结束-->

<div class="result_wrap">
    <form action="{{url('admin/node')}}" method="post">
        {{csrf_field()}}
        <table class="add_tab">
            <tbody>
            <tr>
                <th width="120"><i class="require">*</i>父级分类：</th>
                <td>
                    <select name="node_pid">
                        <option value="0">==顶级节点==</option>
                        @foreach($data as $v)
                            <option value="{{$v->node_id}}">{{$v->node_name}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>分类名称：</th>
                <td>
                    <input type="text"  name="node_name" required>
                    @if(is_object($errors))
                        @if ($errors->has('node_name'))
                            <span >
                            <strong style="color:red">{{ $errors->first('node_name') }}</strong>
                        </span>
                        @endif
                    @else
                        <span >
                            <strong style="color:red">{{ $errors }}</strong>
                        </span>
                    @endif
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>节点地址：</th>
                <td>
                    <input type="text"  name="m_c_a">
                    <span>
                        <i class="fa fa-exclamation-circle yellow">例：以“”分割（模块/控制器/动作），例子： acl/node_add</i>
                    </span>
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>节点等级：</th>
                <td>
                    <select name="node_level">
                         @foreach($tags as $k =>$v)
                             <option value="{{$k}}">{{$v}}</option>
                         @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>排序：</th>
                <td>
                    <input type="text" class="sm" name="px" value="0">
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



