<!doctype html>
<!--
                              _.._        ,------------.
                           ,'      `.    ( We want you! )
                          /  __) __` \    `-,----------'
                         (  (`-`(-')  ) _.-'
                         /)  \  = /  (
                        /'    |--' .  \
                       (  ,---|  `-.)__`
                        )(  `-.,--'   _`-.
                       '/,'          (  Wy",
                        (_       ,    `/,-' )
                        `.__,  : `-'/  /`--'
                          |     `--'  |
                          `   `-._   /
                           \        (
                           /\ .      \.  SUCAIHUO.COM
                          / |` \     ,-\
                         /  \| .)   /   \
                        ( ,'|\    ,'     :
                        | \,`.`--"/      }
                        `,'    \  |,'    /
                       / "-._   `-/      |
                       "-.   "-.,'|     ;
                      /        _/["---'""]
                     :        /  |"-     '
                     '           |      /
                                 `      |
-->
<html>
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{config('app.name')}}</title>
    <link href="{{asset('style/css/bootstrap.min.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('style/css/style.css')}}" type="text/css" rel="stylesheet">
    <link type="text/css" href="{{asset('style/css/nprogress.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{asset('style/js/html5shiv.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('style/js/respond.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('style/js/selectivizr-min.js')}}" type="text/javascript"></script>
    <![endif]-->
    <link rel="apple-touch-icon-precomposed" href="{{asset('style/images/icon/icon.png')}}">
    <link rel="shortcut icon" href="{{asset('style/images/icon/favicon.ico')}}">
    <meta name="Keywords" content="" />
    <meta name="description" content="" />
    <script type="text/javascript">
        //判断浏览器是否支持HTML5
        window.onload = function() {
            if (!window.applicationCache) {
//                window.location.href="异清轩技术博客bootstrap响应式模板/ie.html";
                window.location.href="{{url('ie')}}";
            }
        }
    </script>
</head>

<body>
<section class="container user-select">
    <header>
        <div class="hidden-xs header"><!--超小屏幕不显示-->
            <h1 class="logo"> <a href="/" title="{{config('app.name')}} - POWERED BY WY ALL RIGHTS RESERVED"></a> </h1>
            <ul class="nav hidden-xs-nav">
                <li class="active"><a href="/"><span class="glyphicon glyphicon-home"></span>网站首页</a></li>
                {{--@foreach($cate as $item)
                    <li><a href="index.html"><span class="glyphicon glyphicon-erase"></span>{{$item->cate_name}}</a></li>
                @endforeach--}}
                <li><a href=""><span class="glyphicon glyphicon-erase"></span>服务器相关</a></li>
                <li><a href="index.html"><span class="glyphicon glyphicon-inbox"></span>后端技术</a></li>
                <li><a href=""><span class="glyphicon glyphicon-user"></span>关于我们</a></li>
                <li><a href=""><span class="glyphicon glyphicon-tags"></span>友情链接</a></li>
            </ul>
            <div class="feeds"> <a class="feed feed-xlweibo" href="index.html" target="_blank"><i></i>新浪微博</a> <a class="feed feed-txweibo" href="index.html" target="_blank"><i></i>腾讯微博</a> <a class="feed feed-rss" href="index.html" target="_blank"><i></i>订阅本站</a> <a class="feed feed-weixin" data-toggle="popover" data-trigger="hover" title="微信扫一扫" data-html="true" data-content="<img src='images/weixin.jpg' alt=''>" href="javascript:;" target="_blank"><i></i>关注微信</a> </div>
            <div class="wall"><a href="" target="_blank">读者墙</a> | <a href="" target="_blank">标签云</a></div>
        </div>
        <!--/超小屏幕不显示-->
        <div class="visible-xs header-xs"><!--超小屏幕可见-->
            <div class="navbar-header header-xs-logo">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-xs-menu" aria-expanded="false" aria-controls="navbar"><span class="glyphicon glyphicon-menu-hamburger"></span></button>
            </div>
            <div id="header-xs-menu" class="navbar-collapse collapse">
                <ul class="nav navbar-nav header-xs-nav">
                    <li class="active"><a href="/"><span class="glyphicon glyphicon-home"></span>网站首页</a></li>
                    <li><a href="index.html"><span class="glyphicon glyphicon-erase"></span>网站前端</a></li>
                    <li><a href="index.html"><span class="glyphicon glyphicon-inbox"></span>后端技术</a></li>
                    <li><a href=""><span class="glyphicon glyphicon-user"></span>关于我们</a></li>
                    <li><a href=""><span class="glyphicon glyphicon-tags"></span>友情链接</a></li>
                </ul>
                <form class="navbar-form" action="" method="post" style="padding:0 25px;">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="请输入关键字">
                        <span class="input-group-btn">
            <button class="btn btn-default btn-search" type="submit">搜索</button>
            </span> </div>
                </form>
            </div>
        </div>
    </header>
@yield('content')

    {{--<footer class="footer">POWERED BY &copy;<a href="/">{{config('app.name')}}</a> ALL RIGHTS RESERVED &nbsp;&nbsp;&nbsp;<span><a href="http://www.miitbeian.gov.cn/" target="_blank">豫ICP备15026801号-1</a></span> <span style="display:none"><a href="">网站统计</a></span> </footer>--}}
</section>
<div><a href="javascript:;" class="gotop" style="display:none;"></a></div>
<!--/返回顶部-->
<script src="{{asset('style/js/jquery-2.1.4.min.js')}}" type="text/javascript"></script>
<script src="{{asset('style/js/nprogress.js')}}" type="text/javascript" ></script>
<script src="{{asset('style/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script type="text/javascript">
    //页面加载
    $('body').show();
    $('.version').text(NProgress.version);
    NProgress.start();
    setTimeout(function() { NProgress.done(); $('.fade').removeClass('out'); }, 1000);
    //返回顶部按钮
    $(function(){
        $(window).scroll(function(){
            if($(window).scrollTop()>100){
                $(".gotop").fadeIn();
            }
            else{
                $(".gotop").hide();
            }
        });
        $(".gotop").click(function(){
            $('html,body').animate({'scrollTop':0},500);
        });
    });
    //提示插件启用
    $(function () {
        $('[data-toggle="popover"]').popover();
    });
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
    //鼠标滑过显示 滑离隐藏
    //banner
    $(function(){
        $(".carousel").hover(function(){
            $(this).find(".carousel-control").show();
        },function(){
            $(this).find(".carousel-control").hide();
        });
    });
    //本周热门
    $(function(){
        $(".hot-content ul li").hover(function(){
            $(this).find("h3").show();
        },function(){
            $(this).find("h3").hide();
        });
    });
    //相关推荐
    $(function(){
        $(".related-content ul li").hover(function(){
            $(this).find("h3").show();
        },function(){
            $(this).find("h3").hide();
        });
    });
    //页面元素智能定位
    $.fn.smartFloat = function() {
        var position = function(element) {
            var top = element.position().top; //当前元素对象element距离浏览器上边缘的距离
            var pos = element.css("position"); //当前元素距离页面document顶部的距离
            $(window).scroll(function() { //侦听滚动时
                var scrolls = $(this).scrollTop();
                if (scrolls > top) { //如果滚动到页面超出了当前元素element的相对页面顶部的高度
                    if (window.XMLHttpRequest) { //如果不是ie6
                        element.css({ //设置css
                            position: "fixed", //固定定位,即不再跟随滚动
                            top: 0 //距离页面顶部为0
                        }).addClass("shadow"); //加上阴影样式.shadow
                    } else { //如果是ie6
                        element.css({
                            top: scrolls  //与页面顶部距离
                        });
                    }
                }else {
                    element.css({ //如果当前元素element未滚动到浏览器上边缘，则使用默认样式
                        position: pos,
                        top: top
                    }).removeClass("shadow");//移除阴影样式.shadow
                }
            });
        };
        return $(this).each(function() {
            position($(this));
        });
    };
    //启用页面元素智能定位
    $(function(){
        $("#search").smartFloat();
    });


    //ajax更新点赞值
    $(function(){
        $(".content .zambia a").click(function(){
            var zambia = $(this);
            var id = zambia.attr("rel"); //对应id
            zambia.fadeOut(1000); //渐隐效果
            $.ajax({
                type:"POST",
                url:"zambia.php",
                data:"id="+id,
                cache:false, //不缓存此页面
                success:function(data){
                    zambia.html(data);
                    zambia.fadeIn(1000); //渐显效果
                }
            });
            return false;
        });
    })
</script>
</body>
</html>
