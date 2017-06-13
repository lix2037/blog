@extends('layouts.admin')
@section('content')
	<!--面包屑导航 开始-->
	<div class="crumb_warp">
		<!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
		<i class="fa fa-home"></i> <a href="{{url('admin/info')}}">首页</a> &raquo; <a href="#">系统设置</a> &raquo; 系统信息
	</div>
	<!--面包屑导航 结束-->

    <div class="result_wrap">
        <div class="result_title">
            <h3>系统基本信息</h3>
        </div>
        <div class="result_content">
            <ul>
                @foreach($info as $key=> $value)
                    <li>
                        <label>{{$key}}</label><span>{{$value}}</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    
    <div class="result_wrap">
        <div class="result_title">
            <h3>使用帮助</h3>
        </div>
        <div class="result_content">
            <ul>
                <li>
                    <label>官方交流网站：</label><span><a href="/">{{config('app.name')}}</a></span>
                </li>
                <li>
                    <label>官方交流QQ群：</label><span><a href="#"><img border="0" src="http://pub.idqqimg.com/wpa/images/group.png"></a></span>
                </li>
            </ul>
        </div>
    </div>
	<!--结果集列表组件 结束-->
@endsection