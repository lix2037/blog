@extends('layouts.home')
@section('content')

  <!--/超小屏幕可见-->
  <div class="content-wrap"><!--内容-->
    <div class="content">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> <!--banner-->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="item active"> <a href="" target="_blank"><img src="{{asset('style/images/img1.jpg')}}" alt="" /></a>
            <div class="carousel-caption"> 欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等 </div>
            <span class="carousel-bg"></span> </div>
          <div class="item"> <a href="异清轩技术博客bootstrap响应式模板/content.html" target="_blank"><img src="{{asset('style/images/img2.jpg')}}" alt="" /></a>
            <div class="carousel-caption"> 欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等 </div>
            <span class="carousel-bg"></span> </div>
          <div class="item"> <a href="异清轩技术博客bootstrap响应式模板/content.html" target="_blank"><img src="{{asset('style/images/img3.jpg')}}" alt="" /></a>
            <div class="carousel-caption"> 欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等 </div>
            <span class="carousel-bg"></span> </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
      <!--/banner-->
      <div class="content-block hot-content hidden-xs">
        <h2 class="title"><strong>本周热门排行</strong></h2>
        <ul>
          <li class="large"><a href="异清轩技术博客bootstrap响应式模板/content.html" target="_blank"><img src="{{asset('style/images/img3.jpg')}}" alt="">
            <h3> 欢迎来到异清轩技术博客 </h3>
            </a></li>
          <li><a href="异清轩技术博客bootstrap响应式模板/content.html" target="_blank"><img src="异清轩技术博客bootstrap响应式模板/images/logo.jpg" alt="">
            <h3> 欢迎来到异清轩技术博客,在这里可以看到网站前端和后端的技术等 </h3>
            </a></li>
          <li><a href="异清轩技术博客bootstrap响应式模板/content.html" target="_blank"><img src="{{asset('style/images/img2.jpg')}}" alt="">
            <h3> 欢迎来到异清轩技术博客,在这里可以看到网站前端和后端的技术等 </h3>
            </a></li>
          <li><a href="异清轩技术博客bootstrap响应式模板/content.html" target="_blank"><img src="{{asset('style/images/img1.jpg')}}" alt="">
            <h3> 欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等 </h3>
            </a></li>
          <li><a href="异清轩技术博客bootstrap响应式模板/content.html" target="_blank"><img src="{{asset('style/images/login.jpg')}}" alt="">
            <h3> 欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等 </h3>
            </a></li>
        </ul>
      </div>
      <div class="content-block new-content">
        <h2 class="title"><strong>最新文章</strong></h2>
        <div class="row">
          @foreach($articles as $article)
            <div class="news-list">
              {{--<div class="news-img col-xs-5 col-sm-5 col-md-4"> <a target="_blank" href="index.html"><img src="{{asset('style/images/logo.jpg')}}" alt=""> </a> </div>--}}
              <div class="news-info col-xs-7 col-sm-7 col-md-8">
                <dl>
                  <dt> <a href="{{url('article/'.$article->article_id)}}" target="_blank" >{!! $article->article_title !!} </a> </dt>
                  <dd><span class="name"><a href="index.html" title="由 {!! $article->article_author !!} 发布" rel="author">{!! $article->article_author !!}</a></span> <span class="identity"></span> <span class="time"> {!! $article->created_at !!} </span></dd>
                  {{--<dd class="text">{!! $article->article_content !!}</dd>--}}
                </dl>
                <div class="news_bot col-sm-7 col-md-8"> {{--<span class="tags visible-lg visible-md"> <a href="index.html">本站</a> <a href="index.html">{!! $article->article_author !!}</a> </span>--}} <span class="look"> 共 <strong>{!! $article->article_view !!}</strong> 人围观{{--，发现 <strong> 12 </strong> 个不明物体 --}}</span> </div>
              </div>
            </div>
          @endforeach
        </div>
        <!--<div class="news-more" id="pagination">
        	<a href="index.html">查看更多</a>
        </div>-->
        <div class="quotes" style="margin-top:15px">{{--<span class="disabled">首页</span><span class="disabled">上一页</span><span class="current">1</span><a href="index.html">2</a><a href="index.html">下一页</a><a href="index.html">尾页</a>--}}{!! $articles->links() !!}</div>

      </div>
    </div>
  </div>
  <!--/内容-->
  <aside class="sidebar visible-lg"><!--右侧>992px显示-->
    <div class="sentence"> <strong>每日一句</strong>
      <h2>2015年11月1日 星期日</h2>
      <p>你是我人生中唯一的主角，我却只能是你故事中的一晃而过得路人甲。</p>
    </div>
    <div id="search" class="sidebar-block search" role="search">
      <h2 class="title"><strong>搜索</strong></h2>
      <form class="navbar-form" action="search.php" method="post">
        <div class="input-group">
          <input type="text" class="form-control" size="35" placeholder="请输入关键字">
          <span class="input-group-btn">
          <button class="btn btn-default btn-search" type="submit">搜索</button>
          </span> </div>
      </form>
    </div>
    <div class="sidebar-block recommend">
      <h2 class="title"><strong>热门推荐</strong></h2>
      <ul>
        <li><a target="_blank" href="index.html"> <span class="thumb"><img src="异清轩技术博客bootstrap响应式模板/images/icon/icon.png" alt=""></span> <span class="text">异清轩技术博客的SHORTCUT和ICON图标 ...</span> <span class="text-muted">阅读(2165)</span></a></li>
        <li><a target="_blank" href="index.html"> <span class="thumb"><img src="异清轩技术博客bootstrap响应式模板/images/icon/icon.png" alt=""></span> <span class="text">异清轩技术博客的SHORTCUT和ICON图标 ...</span> <span class="text-muted">阅读(2165)</span></a></li>
        <li><a target="_blank" href="index.html"> <span class="thumb"><img src="异清轩技术博客bootstrap响应式模板/images/icon/icon.png" alt=""></span> <span class="text">异清轩技术博客的SHORTCUT和ICON图标 ...</span> <span class="text-muted">阅读(2165)</span></a></li>
        <li><a target="_blank" href="index.html"> <span class="thumb"><img src="异清轩技术博客bootstrap响应式模板/images/icon/icon.png" alt=""></span> <span class="text">异清轩技术博客的SHORTCUT和ICON图标 ...</span> <span class="text-muted">阅读(2165)</span></a></li>
        <li><a target="_blank" href="index.html"> <span class="thumb"><img src="异清轩技术博客bootstrap响应式模板/images/icon/icon.png" alt=""></span> <span class="text">异清轩技术博客的SHORTCUT和ICON图标 ...</span> <span class="text-muted">阅读(2165)</span></a></li>
      </ul>
    </div>
    <div class="sidebar-block comment">
      <h2 class="title"><strong>最新评论</strong></h2>
      <ul>
        <li data-toggle="tooltip" data-placement="top" title="站长的评论"><a target="_blank" href="index.html"><span class="face"><img src="异清轩技术博客bootstrap响应式模板/images/icon/icon.png" alt=""></span> <span class="text"><strong>异清轩站长</strong> (2015-10-18) 说：<br />
          欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等 ...</span></a></li>
        <li data-toggle="tooltip" data-placement="top" title="读者墙上的评论"><a target="_blank" href="index.html"><span class="face"><img src="异清轩技术博客bootstrap响应式模板/images/icon/icon.png" alt=""></span> <span class="text"><strong>异清轩站长</strong> (2015-10-18) 说：<br />
          欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等 ...</span></a></li>
        <li data-toggle="tooltip" data-placement="top" title="异清轩技术博客的SHORTCUT和ICON图标...的评论"><a target="_blank" href="index.html"><span class="face"><img src="异清轩技术博客bootstrap响应式模板/images/icon/icon.png" alt=""></span> <span class="text"><strong>异清轩站长</strong> (2015-10-18) 说：<br />
          欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等 ...</span></a></li>
        <li data-toggle="tooltip" data-placement="top" title="异清轩技术博客的SHORTCUT和ICON图标...的评论"><a target="_blank" href="index.html"><span class="face"><img src="异清轩技术博客bootstrap响应式模板/images/icon/icon.png" alt=""></span> <span class="text"><strong>异清轩站长</strong> (2015-10-18) 说：<br />
          欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等 ...</span></a></li>
        <li data-toggle="tooltip" data-placement="top" title="异清轩技术博客的SHORTCUT和ICON图标...的评论"><a target="_blank" href="index.html"><span class="face"><img src="异清轩技术博客bootstrap响应式模板/images/icon/icon.png" alt=""></span> <span class="text"><strong>异清轩站长</strong> (2015-10-18) 说：<br />
          欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等 ...</span></a></li>
      </ul>
    </div>
  </aside>
  <!--/右侧>992px显示-->
  @endsection

