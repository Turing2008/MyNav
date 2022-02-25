@extends('layouts.app')
@section('body_class','layui-layout-body layuimini-all')
@section('content')
    <div class="layui-layout layui-layout-admin">

        <div class="layui-header header">
            <div class="layui-logo layuimini-logo"></div>

            <div class="layuimini-header-content">
                <a>
                    <div class="layuimini-tool"><i title="展开" class="fa fa-outdent" data-side-fold="1"></i></div>
                </a>

                <!--电脑端头部菜单-->
                <ul class="layui-nav layui-layout-left layuimini-header-menu layuimini-menu-header-pc layuimini-pc-show">
                </ul>

                <!--手机端头部菜单-->
                <ul class="layui-nav layui-layout-left layuimini-header-menu layuimini-mobile-show">
                    <li class="layui-nav-item">
                        <a href="javascript:;"><i class="fa fa-list-ul"></i> 选择模块</a>
                        <dl class="layui-nav-child layuimini-menu-header-mobile">
                        </dl>
                    </li>
                </ul>

                <ul class="layui-nav layui-layout-right">

                    <li class="layui-nav-item" lay-unselect>
                        <a href="javascript:;" data-refresh="刷新"><i class="fa fa-refresh"></i></a>
                    </li>
                    <li class="layui-nav-item" lay-unselect>
                        <a href="javascript:;" data-clear="清理" class="layuimini-clear"><i class="fa fa-trash-o"></i></a>
                    </li>
                    <li class="layui-nav-item mobile layui-hide-xs" lay-unselect>
                        <a href="javascript:;" data-check-screen="full"><i class="fa fa-arrows-alt"></i></a>
                    </li>
                    <li class="layui-nav-item layuimini-setting">
                        <a href="javascript:;">admin</a>
                        <dl class="layui-nav-child">
                            <dd>
                                <a href="javascript:;" layuimini-content-href="user/setting" data-title="基本资料" data-icon="fa fa-gears">基本资料<span class="layui-badge-dot"></span></a>
                            </dd>
                            <dd>
                                <a href="javascript:;" layuimini-content-href="user/password" data-title="修改密码" data-icon="fa fa-gears">修改密码</a>
                            </dd>
                            <dd>
                                <hr>
                            </dd>
                            <dd>
                                <a href="javascript:;" class="login-out">退出登录</a>
                            </dd>
                        </dl>
                    </li>
                    <li class="layui-nav-item layuimini-select-bgcolor" lay-unselect>
                        <a href="javascript:;" data-bgcolor="配色方案"><i class="fa fa-ellipsis-v"></i></a>
                    </li>
                </ul>
            </div>
        </div>

        <!--无限极左侧菜单-->
        <div class="layui-side layui-bg-black layuimini-menu-left">
        </div>

        <!--初始化加载层-->
        <div class="layuimini-loader">
            <div class="layuimini-loader-inner"></div>
        </div>

        <!--手机端遮罩层-->
        <div class="layuimini-make"></div>

        <!-- 移动导航 -->
        <div class="layuimini-site-mobile"><i class="layui-icon"></i></div>

        <div class="layui-body">

            <div class="layuimini-tab layui-tab-rollTool layui-tab" lay-filter="layuiminiTab" lay-allowclose="true">
                <ul class="layui-tab-title">
                    <li class="layui-this" id="layuiminiHomeTabId" lay-id=""></li>
                </ul>
                <div class="layui-tab-control">
                    <li class="layuimini-tab-roll-left layui-icon layui-icon-left"></li>
                    <li class="layuimini-tab-roll-right layui-icon layui-icon-right"></li>
                    <li class="layui-tab-tool layui-icon layui-icon-down">
                        <ul class="layui-nav close-box">
                            <li class="layui-nav-item">
                                <a href="javascript:;"><span class="layui-nav-more"></span></a>
                                <dl class="layui-nav-child">
                                    <dd><a href="javascript:;" layuimini-tab-close="current">关 闭 当 前</a></dd>
                                    <dd><a href="javascript:;" layuimini-tab-close="other">关 闭 其 他</a></dd>
                                    <dd><a href="javascript:;" layuimini-tab-close="all">关 闭 全 部</a></dd>
                                </dl>
                            </li>
                        </ul>
                    </li>
                </div>
                <div class="layui-tab-content">
                    <div id="layuiminiHomeTabIframe" class="layui-tab-item layui-show"></div>
                </div>
            </div>

        </div>

{{--    <div class="layui-layout layui-layout-admin">--}}
{{--        <div class="layui-header header">--}}
{{--            <div class="layui-logo">--}}
{{--            </div>--}}
{{--            <a>--}}
{{--                <div class="layuimini-tool"><i title="展开" class="fa fa-outdent" data-side-fold="1"></i></div>--}}
{{--            </a>--}}

{{--            <ul class="layui-nav layui-layout-left layui-header-menu layui-header-pc-menu mobile layui-hide-xs">--}}
{{--            </ul>--}}
{{--            <ul class="layui-nav layui-layout-left layui-header-menu mobile layui-hide-sm">--}}
{{--                <li class="layui-nav-item">--}}
{{--                    <a href="javascript:;"><i class="fa fa-list-ul"></i> 选择模块</a>--}}
{{--                    <dl class="layui-nav-child layui-header-mini-menu">--}}
{{--                    </dl>--}}
{{--                </li>--}}
{{--            </ul>--}}

{{--            <ul class="layui-nav layui-layout-right">--}}
{{--                <li class="layui-nav-item" lay-unselect>--}}
{{--                    <a href="{{url ('/')}}" target="_blank" title="浏览官网首页"><i class="iconfont  iconliulan"></i></a>--}}
{{--                </li>--}}
{{--                <li class="layui-nav-item" lay-unselect>--}}
{{--                    <a href="javascript:;" data-refresh="刷新"><i class="fa fa-refresh"></i></a>--}}
{{--                </li>--}}
{{--                <li class="layui-nav-item" lay-unselect>--}}
{{--                    <a href="javascript:;" data-clear="清理" class="layuimini-clear"><i class="fa fa-trash-o"></i></a>--}}
{{--                </li>--}}
{{--                <li class="layui-nav-item mobile layui-hide-xs" lay-unselect>--}}
{{--                    <a href="javascript:;" data-check-screen="full"><i class="fa fa-arrows-alt"></i></a>--}}
{{--                </li>--}}
{{--                <li class="layui-nav-item layuimini-setting">--}}
{{--                    <a href="javascript:;">{{\App\Models\User::showName ($user->id)}}</a>--}}
{{--                    <dl class="layui-nav-child">--}}
{{--                        <dd>--}}
{{--                            <a href="javascript:;" data-iframe-tab="/admin/user/password" data-title="修改密码"--}}
{{--                               data-icon="fa fa-gears">修改密码</a>--}}
{{--                        </dd>--}}
{{--                        <dd>--}}
{{--                            <a href="javascript:;" class="login-out">退出登录</a>--}}
{{--                        </dd>--}}
{{--                    </dl>--}}
{{--                </li>--}}
{{--                <li class="layui-nav-item layuimini-select-bgcolor mobile layui-hide-xs" lay-unselect>--}}
{{--                    <a href="javascript:;" data-bgcolor="配色方案"><i class="fa fa-ellipsis-v"></i></a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}

{{--        <div class="layui-side layui-bg-black">--}}
{{--            <div class="layui-side-scroll layui-left-menu">--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="layui-body">--}}
{{--            <div class="layui-tab" lay-filter="layuiminiTab" id="top_tabs_box">--}}
{{--                <ul class="layui-tab-title" id="top_tabs">--}}
{{--                    <li class="layui-this" id="layuiminiHomeTabId" lay-id=""></li>--}}
{{--                </ul>--}}
{{--                <ul class="layui-nav closeBox">--}}
{{--                    <li class="layui-nav-item">--}}
{{--                        <a href="javascript:;"> <i class="fa fa-dot-circle-o"></i> 页面操作</a>--}}
{{--                        <dl class="layui-nav-child">--}}
{{--                            <dd><a href="javascript:;" data-page-close="other"><i class="fa fa-window-close"></i> 关闭其他</a></dd>--}}
{{--                            <dd><a href="javascript:;" data-page-close="all"><i class="fa fa-window-close-o"></i> 关闭全部</a></dd>--}}
{{--                        </dl>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--                <div class="layui-tab-content clildFrame">--}}
{{--                    <div id="layuiminiHomeTabIframe" class="layui-tab-item layui-show">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}
@endsection

@section('footer')
    <script>
        console.log(new Date())
        function layer_module_tips(module) {
            var index = layer.open({
                title: '',
                type: 2,
                shade: 0.2,
                maxmin: false,
                shadeClose: false,
                area: ['920px', '670px'],
                content: '/admin/manuals?module=' + module,
            });
        }

        layui.use(['element', 'layer', 'miniAdmin'], function () {
            var $ = layui.jquery,
                element = layui.element,
                miniAdmin = layui.miniAdmin,
                layer = layui.layer;
            var options = {
                iniUrl: '{{route ('admin.main.init')}}',    // 初始化接口
                clearUrl: "{{route ('admin.main.clear')}}", // 缓存清理接口
                urlHashLocation: true,      // 是否打开hash定位
                bgColorDefault: 1,      // 主题默认配置
                multiModule: true,          // 是否开启多模块
                menuChildOpen: false,       // 是否默认展开菜单
                loadingTime: 0.0001,             // 初始化加载时间
                pageAnim: true,             // iframe窗口动画
                maxTabNum: 20,              // 最大的tab打开数量
            };
            console.log(new Date())
            miniAdmin.render(options);
            //
            $('.login-out').on("click", function () {
                layer.msg('退出登录成功', {
                    icon: 1,
                    time: SUCCESS_TIME
                    , shade: 0.2
                }, function () {
                    window.location = '{{route ('admin.main.logout')}}';
                });
            });
        });
    </script>
@endsection
