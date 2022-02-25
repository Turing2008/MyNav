<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>导航</title>
{{--    <link rel="shortcut icon" href="https://api.nosoxo.com/static/nav/favcion.ico"/>--}}
    <link rel="stylesheet" href="{{asset('static/nav/css/iconfont.css')}}">
    <link rel="stylesheet" href="{{asset('static/nav/css/style.css')}}">
    <script>
        var _hmt = _hmt || [];
        (function () {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?29e86ad3e85fd17c2c8246e875827c59";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>

</head>

<body>
<div class="container" id="container">
    <aside class="left-bar" id="leftBar">
        <div class="title">
            <p>导航</p>
        </div>
        <nav class="nav">
            <div class="item active"><a href=""><i class="iconfont icon-daohang2"></i>导航</a><i class="line"></i></div>
            <ul class="nav-item" id="navItem">
                <!-- 遍历左侧导航 -->
                @foreach($categories as $category)
                    <li><a href="#{{$category->id}}" class="active">{!!$category->name!!}</a></li>
                @endforeach
{{--                <li><a href="#study" class="active"><i class="iconfont icon-xuexi1"></i>学无止境</a></li>--}}
{{--                <li><a href="#bbs"><i class="iconfont icon-shequ"></i>开发社区</a></li>--}}
{{--                <li><a href="#sill"><i class="iconfont icon-blogger"></i>技术博客</a></li>--}}
{{--                <li><a href="#docs"><i class="iconfont icon-wendangdocument78"></i>开发文档</a></li>--}}
{{--                <li><a href="#tools"><i class="iconfont icon-tool"></i>实用工具</a></li>--}}
{{--                <li><a href="#design"><i class="iconfont icon-designer"></i>设计资源</a></li>--}}
{{--                <li><a href="#study"><i class="iconfont icon-xuexi1"></i>学无止境</a></li>--}}
{{--                <li><a href="#operation"><i class="iconfont icon-yunying"></i>网络运营</a></li>--}}
            </ul>
            <div class="item comment"><a target="_blank" href="#"><i class="iconfont icon-liuyan"></i>留言</a></div>
        </nav>
    </aside>
    <section class="main">
        <div id="mainContent">
            <!-- 手机端菜单 -->
            <div id="menu"><a href="#">菜单</a></div>
            <!-- 遍历 -->
            @foreach($categories as $category)
                <div class="box">
                    <a href="#" name="{{$category->id}}"></a>
                    <div class="sub-category">
                        <div>{!!$category->name!!}</div>
                    </div>
                    <div>
                        @foreach($category->links as $link)
                            <a target="_blank" href="/url/{{$link->id}}">
                                <div class="item">
                                    <div class="no-logo">{{$link->title}}</div>
                                    <div class="desc">{{$link->description}}</div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
        @endforeach

{{--        <!-- 学无止境 -->--}}
{{--            <div class="box">--}}
{{--                <a href="#" name="study"></a>--}}
{{--                <div class="sub-category">--}}
{{--                    <div><i class="iconfont icon-xuexi1"></i>学无止境</div>--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <a target="_blank" href="qq_tel">--}}
{{--                        <div class="item">--}}
{{--                            <div class="no-logo">Q绑查询</div>--}}
{{--                            <div class="desc">QQ查询绑定手机号</div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <a target="_blank" href="tel_qq">--}}
{{--                        <div class="item">--}}
{{--                            <div class="no-logo">反查绑定Q</div>--}}
{{--                            <div class="desc">手机号查QQ</div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <a target="_blank" href="qq_lm">--}}
{{--                        <div class="item">--}}
{{--                            <div class="no-logo">QQ老密</div>--}}
{{--                            <div class="desc">QQ号查老密</div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <a target="_blank" href="tel_address">--}}
{{--                        <div class="item">--}}
{{--                            <div class="no-logo">手机归属地</div>--}}
{{--                            <div class="desc">手机号码归属地查询</div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <a target="_blank" href="wb_tel">--}}
{{--                        <div class="item">--}}
{{--                            <div class="no-logo">微博查询</div>--}}
{{--                            <div class="desc">微博uid查询手机号</div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <a target="_blank" href="tel_wb">--}}
{{--                        <div class="item">--}}
{{--                            <div class="no-logo">微博反查</div>--}}
{{--                            <div class="desc">手机号查询微博uid</div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <a target="_blank" href="qq_lol">--}}
{{--                        <div class="item">--}}
{{--                            <div class="no-logo">LOL查询</div>--}}
{{--                            <div class="desc">QQ查询LOL</div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                    <a target="_blank" href="lol_qq">--}}
{{--                        <div class="item">--}}
{{--                            <div class="no-logo">LOL反查</div>--}}
{{--                            <div class="desc">LOL查询QQ</div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- 开发社区 -->--}}
{{--            <div class="box">--}}
{{--                <a href="#" name="bbs"></a>--}}
{{--                <div class="sub-category">--}}
{{--                    <div><i class="iconfont icon-shequ"></i>开发社区</div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- 技术博客 -->--}}
{{--            <div class="box">--}}
{{--                <a href="#" name="sill"></a>--}}
{{--                <div class="sub-category">--}}
{{--                    <div><i class="iconfont icon-blogger"></i>技术博客</div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <!-- 参考文档 -->--}}
{{--            <div class="box">--}}
{{--                <a href="" name="docs"></a>--}}
{{--                <div class="sub-category">--}}
{{--                    <div><i class="iconfont icon-wendangdocument78"></i>参考文档</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- 实用工具 -->--}}
{{--            <div class="box">--}}
{{--                <a href="" name="tools"></a>--}}
{{--                <div class="sub-category">--}}
{{--                    <div><i class="iconfont icon-tool"></i>实用工具</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- 设计资源 -->--}}
{{--            <div class="box">--}}
{{--                <a href="" name="design"></a>--}}
{{--                <div class="sub-category">--}}
{{--                    <div><i class="iconfont icon-wendangdocument78"></i>设计资源</div>--}}
{{--                </div>--}}
{{--            </div>--}}


            <footer class="footer">
                <div class="copyright">
                    <div>
                        Copyright © 2018- 2050
                        <a href="http://www.nosoxo.com">nosoxo</a>
                    </div>
                </div>
            </footer>

        </div>
    </section>
    <script>
        var oMenu = document.getElementById('menu');
        var oBtn = oMenu.getElementsByTagName('a')[0];
        var oLeftBar = document.getElementById('leftBar');
        oBtn.onclick = function () {
            if (oLeftBar.offsetLeft == 0) {
                oLeftBar.style.left = -249 + 'px';
            } else {
                oLeftBar.style.left = 0 + 'px';
            }
            if (document.documentElement.clientWidth <= 481) {
                document.onclick = function () {
                    if (oLeftBar.offsetLeft == 0) {
                        console.log(123);
                        oLeftBar.style.left = -249 + 'px';
                    }
                }
            }
        }

        var oNavItem = document.getElementById('navItem');
        var aA = oNavItem.getElementsByTagName('a');
        for (var i = 0; i < aA.length; i++) {
            aA[i].onclick = function () {
                for (var j = 0; j < aA.length; j++) {
                    aA[j].className = '';
                }
                this.className = 'active';
            }
        }
    </script>
</div>
</body>
</html>
