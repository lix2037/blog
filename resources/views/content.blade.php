@extends('layouts.home')
@section('content')

  <!--/超小屏幕可见-->
  <div class="content-wrap"><!--内容-->
    <div class="content">
      <header class="news_header">
        <h2>{!! $data->article_title !!}</h2>
        <ul>
          <li>{!! $data->article_author !!} 发布于 {!! $data->created_at !!}</li>
          <li>栏目：<a href="../index.html" title="" target="_blank">{!! $data->cate_name !!}</a></li>
          <li>来源：<a href="../index.html" title="" target="_blank">互联网</a></li>
          <li>共 <strong>{!! $data->article_view !!}</strong> 人围观 </li>
          {{--<li><strong>123</strong> 个不明物体</li>--}}
        </ul>
      </header>
      <article class="news_content">
        {!!$data->article_content!!}
      </article>
      <div class="reprint">转载请说明出处：<a href="../index.html" title="" target="_blank">异清轩技术博客</a> » <a href="../index.html" title="" target="_blank">欢迎来到异清轩技术博客</a></div>
      <div class="zambia"><a href="javascript:;" name="zambia" rel=""><span class="glyphicon glyphicon-thumbs-up"></span> 赞（0）</a></div>
      <div class="tags news_tags">标签： <span data-toggle="tooltip" data-placement="bottom" title="查看关于 本站 的文章"><a href="../index.html">本站</a></span> <span data-toggle="tooltip" data-placement="bottom" title="查看关于 异清轩 的文章"><a href="../index.html">异清轩</a></span> </div>
      <nav class="page-nav"> <span class="page-nav-prev">上一篇<br />
        <a href="../index.html" rel="prev">欢迎来到异清轩技术博客</a></span> <span class="page-nav-next">下一篇<br />
        <a href="../index.html" rel="next">欢迎来到异清轩技术博客</a></span> </nav>
      <div class="content-block related-content visible-lg visible-md">
        <h2 class="title"><strong>相关推荐</strong></h2>
        <ul>
          <li><a target="_blank" href="../index.html"><img src="images/logo.jpg" alt="">
            <h3> 欢迎来到异清轩技术博客,在这里可以看到网站前端和后端的技术等 </h3>
            </a></li>
          <li><a target="_blank" href="../index.html"><img src="images/img1.jpg" alt="">
            <h3> 欢迎来到异清轩技术博客,在这里可以看到网站前端和后端的技术等 </h3>
            </a></li>
          <li><a target="_blank" href="../index.html"><img src="images/img3.jpg" alt="">
            <h3> 欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等 </h3>
            </a></li>
          <li><a target="_blank" href="../index.html"><img src="images/img2.jpg" alt="">
            <h3> 欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等 </h3>
            </a></li>
          <li><a target="_blank" href="../index.html"><img src="images/img2.jpg" alt="">
            <h3> 欢迎来到异清轩技术博客,在这里可以看到网站前端和后端的技术等 </h3>
            </a></li>
          <li><a target="_blank" href="../index.html"><img src="images/img3.jpg" alt="">
            <h3> 欢迎来到异清轩技术博客,在这里可以看到网站前端和后端的技术等 </h3>
            </a></li>
          <li><a target="_blank" href="../index.html"><img src="images/img1.jpg" alt="">
            <h3> 欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等 </h3>
            </a></li>
          <li><a target="_blank" href="../index.html"><img src="images/logo.jpg" alt="">
            <h3> 欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等 </h3>
            </a></li>
        </ul>
      </div>
      <div class="content-block comment">
        <h2 class="title"><strong>评论</strong></h2>
        <form action="comment.php" method="post" class="form-inline" id="comment-form">
          <div class="comment-title">
            <div class="form-group">
              <label for="commentName">昵称：</label>
              <input type="text" name="commentName" class="form-control" id="commentName" placeholder="异清轩">
            </div>
            <div class="form-group">
              <label for="commentEmail">邮箱：</label>
              <input type="email" name="commentEmail" class="form-control" id="commentEmail" placeholder="admin@ylsat.com">
            </div>
          </div>
          <div class="comment-form">
            <textarea placeholder="你的评论可以一针见血" name="commentContent"></textarea>
            <div class="comment-form-footer">
              <div class="comment-form-text">请先 <a href="javascript:;">登录</a> 或 <a href="javascript:;">注册</a>，也可匿名评论 </div>
              <div class="comment-form-btn">
                <button type="submit" class="btn btn-default btn-comment">提交评论</button>
              </div>
            </div>
          </div>
        </form>
        <div class="comment-content">
          <ul>
            <li><span class="face"><img src="images/icon/icon.png" alt=""></span> <span class="text"><strong>异清轩站长</strong> (2015-10-18) 说：<br />
              欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等 ...</span></li>
            <li><span class="face"><img src="images/icon/icon.png" alt=""></span> <span class="text"><strong>异清轩编辑</strong> (2015-10-18) 说：<br />
              欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等 ...</span></li>
            <li><span class="face"><img src="images/icon/icon.png" alt=""></span> <span class="text"><strong>令狐冲</strong> (2015-10-18) 说：<br />
              欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等 ...</span></li>
            <li><span class="face"><img src="images/icon/icon.png" alt=""></span> <span class="text"><strong>任盈盈</strong> (2015-10-18) 说：<br />
              欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等 ...欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等 ...欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等在这里可以看到网站前端和后端的技术等 ...</span></li>
            <li><span class="face"><img src="images/icon/icon.png" alt=""></span> <span class="text"><strong>异清轩站长</strong> (2015-10-18) 说：<br />
              欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等 ...</span></li>
          </ul>
        </div>
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
        <li><a target="_blank" href="../index.html"> <span class="thumb"><img src="images/icon/icon.png" alt=""></span> <span class="text">异清轩技术博客的SHORTCUT和ICON图标 ...</span> <span class="text-muted">阅读(2165)</span></a></li>
        <li><a target="_blank" href="../index.html"> <span class="thumb"><img src="images/icon/icon.png" alt=""></span> <span class="text">异清轩技术博客的SHORTCUT和ICON图标 ...</span> <span class="text-muted">阅读(2165)</span></a></li>
        <li><a target="_blank" href="../index.html"> <span class="thumb"><img src="images/icon/icon.png" alt=""></span> <span class="text">异清轩技术博客的SHORTCUT和ICON图标 ...</span> <span class="text-muted">阅读(2165)</span></a></li>
        <li><a target="_blank" href="../index.html"> <span class="thumb"><img src="images/icon/icon.png" alt=""></span> <span class="text">异清轩技术博客的SHORTCUT和ICON图标 ...</span> <span class="text-muted">阅读(2165)</span></a></li>
        <li><a target="_blank" href="../index.html"> <span class="thumb"><img src="images/icon/icon.png" alt=""></span> <span class="text">异清轩技术博客的SHORTCUT和ICON图标 ...</span> <span class="text-muted">阅读(2165)</span></a></li>
      </ul>
    </div>
    <div class="sidebar-block comment">
      <h2 class="title"><strong>最新评论</strong></h2>
      <ul>
        <li data-toggle="tooltip" data-placement="top" title="站长的评论"><a target="_blank" href="../index.html"><span class="face"><img src="images/icon/icon.png" alt=""></span> <span class="text"><strong>异清轩站长</strong> (2015-10-18) 说：<br />
          欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等 ...</span></a></li>
        <li data-toggle="tooltip" data-placement="top" title="读者墙上的评论"><a target="_blank" href="../index.html"><span class="face"><img src="images/icon/icon.png" alt=""></span> <span class="text"><strong>异清轩站长</strong> (2015-10-18) 说：<br />
          欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等 ...</span></a></li>
        <li data-toggle="tooltip" data-placement="top" title="异清轩技术博客的SHORTCUT和ICON图标...的评论"><a target="_blank" href="../index.html"><span class="face"><img src="images/icon/icon.png" alt=""></span> <span class="text"><strong>异清轩站长</strong> (2015-10-18) 说：<br />
          欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等 ...</span></a></li>
        <li data-toggle="tooltip" data-placement="top" title="异清轩技术博客的SHORTCUT和ICON图标...的评论"><a target="_blank" href="../index.html"><span class="face"><img src="images/icon/icon.png" alt=""></span> <span class="text"><strong>异清轩站长</strong> (2015-10-18) 说：<br />
          欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等 ...</span></a></li>
        <li data-toggle="tooltip" data-placement="top" title="异清轩技术博客的SHORTCUT和ICON图标...的评论"><a target="_blank" href="../index.html"><span class="face"><img src="images/icon/icon.png" alt=""></span> <span class="text"><strong>异清轩站长</strong> (2015-10-18) 说：<br />
          欢迎来到异清轩技术博客，在这里可以看到网站前端和后端的技术等 ...</span></a></li>
      </ul>
    </div>
  </aside>
  <!--/右侧>992px显示-->
@endsection