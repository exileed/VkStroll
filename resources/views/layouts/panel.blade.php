
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">

    <title>Team Overview | Remark Admin Template</title>

    <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/bootstrap-extend.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/site.min.css")}}">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{asset("vendor/animsition/animsition.min.css?v2.2.0")}}">
    <link rel="stylesheet" href="{{asset("vendor/asscrollable/asScrollable.min.css?v2.2.0")}}">
    <link rel="stylesheet" href="{{asset("vendor/switchery/switchery.min.css?v2.2.0")}}">
    <link rel="stylesheet" href="{{asset("vendor/intro-js/introjs.min.css?v2.2.0")}}">
    <link rel="stylesheet" href="{{asset("vendor/slidepanel/slidePanel.min.css?v2.2.0")}}">
    <link rel="stylesheet" href="{{asset("vendor/flag-icon-css/flag-icon.min.css?v2.2.0")}}">
    <link rel="stylesheet" href="{{asset("vendor/toastr/toastr.min.css?v2.2.0")}}">
    <link rel="stylesheet" href="{{asset("vendor/alertify-js/alertify.min.css")}}">
    <link rel="stylesheet" href="{{asset("vendor/alertify-js/alertify.min.css")}}">

    <!-- Plugins For This Page -->
    <link rel="stylesheet" href="{{asset("vendor/chartist-js/chartist.min.css?v2.2.0")}}">
    <link rel="stylesheet" href="{{asset("vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.min.css?v2.2.0")}}">
    <link rel="stylesheet" href="{{asset("vendor/aspieprogress/asPieProgress.min.css?v2.2.0")}}">
    <link rel="stylesheet" href="{{asset("vendor/jquery-selective/jquery-selective.min.css?v2.2.0")}}">
    <link rel="stylesheet" href="{{asset("vendor/bootstrap-datepicker/bootstrap-datepicker.min.css?v2.2.0")}}">

    <!-- Page -->
    <link rel="stylesheet" href="assets/examples/css/dashboard/team.min.css?v2.2.0">

    <!-- Fonts -->
    <link rel="stylesheet" href="{{asset("fonts/web-icons/web-icons.min.css?v2.2.0")}}">
    <link rel="stylesheet" href="{{asset("fonts/brand-icons/brand-icons.min.css?v2.2.0")}}">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>



    <!--[if lt IE 9]>
    <script src="{{asset("vendor/html5shiv/html5shiv.min.js")}}"></script>
    <![endif]-->

    <!--[if lt IE 10]>
    <script src="{{asset("vendor/media-match/media.match.min.js")}}"></script>
    <script src="{{asset("vendor/respond/respond.min.js")}}"></script>
    <![endif]-->

    <!-- Scripts -->
    <script src="{{asset("vendor/modernizr/modernizr.min.js")}}"></script>
    <script src="{{asset("vendor/breakpoints/breakpoints.min.js")}}"></script>
    <script>
        Breakpoints();
    </script>
</head>
<body class="dashboard site-navbar-small">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega navbar-inverse"
     role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
                data-toggle="menubar">
            <span class="sr-only">Toggle navigation</span>
            <span class="hamburger-bar"></span>
        </button>
        <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
                data-toggle="collapse">
            <i class="icon wb-more-horizontal" aria-hidden="true"></i>
        </button>
        <a class="navbar-brand navbar-brand-center" href="index.html">
            <img class="navbar-brand-logo navbar-brand-logo-normal" src="{{asset("images/logo.png")}}"
                 title="Remark">
            <img class="navbar-brand-logo navbar-brand-logo-special" src="{{asset("images/logo-blue.png")}}"
                 title="Remark">
            <span class="navbar-brand-text hidden-xs"> Remark</span>
        </a>
        <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-search"
                data-toggle="collapse">
            <span class="sr-only">Toggle Search</span>
            <i class="icon wb-search" aria-hidden="true"></i>
        </button>
    </div>

    <div class="navbar-container container-fluid">
        <!-- Navbar Collapse -->
        <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">


            <!-- Navbar Toolbar Right -->
            <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)" data-animation="scale-up"
                       aria-expanded="false" role="button">
                        <span class="flag-icon flag-icon-us"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation">
                            <a href="javascript:void(0)" role="menuitem">
                                <span class="flag-icon flag-icon-gb"></span> English</a>
                        </li>
                        <li role="presentation">
                            <a href="javascript:void(0)" role="menuitem">
                                <span class="flag-icon flag-icon-fr"></span> French</a>
                        </li>
                        <li role="presentation">
                            <a href="javascript:void(0)" role="menuitem">
                                <span class="flag-icon flag-icon-cn"></span> Chinese</a>
                        </li>
                        <li role="presentation">
                            <a href="javascript:void(0)" role="menuitem">
                                <span class="flag-icon flag-icon-de"></span> German</a>
                        </li>
                        <li role="presentation">
                            <a href="javascript:void(0)" role="menuitem">
                                <span class="flag-icon flag-icon-nl"></span> Dutch</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
                       data-animation="scale-up" role="button">
              <span class="avatar avatar-online">
                <img src="{{asset("portraits/5.jpg")}}" alt="...">
                <i></i>
              </span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation">
                            <a href="javascript:void(0)" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i>Профиль</a>
                        </li>
                        <li role="presentation">
                            <a href="javascript:void(0)" role="menuitem"><i class="icon wb-payment" aria-hidden="true"></i>Оплата</a>
                        </li>
                        <li role="presentation">
                            <a href="javascript:void(0)" role="menuitem"><i class="icon wb-settings" aria-hidden="true"></i>Настройки</a>
                        </li>
                        <li class="divider" role="presentation"></li>
                        <li role="presentation">
                            <a href="javascript:void(0)" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i>Выход</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a data-toggle="dropdown" href="javascript:void(0)" title="Notifications" aria-expanded="false"
                       data-animation="scale-up" role="button">
                        <i class="icon wb-bell" aria-hidden="true"></i>
                        <span class="badge badge-danger up">5</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
                        <li class="dropdown-menu-header" role="presentation">
                            <h5>Уведомления</h5>
                        </li>

                        <li class="list-group" role="presentation">
                            <div data-role="container">
                                <div data-role="content">
                                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="media-left padding-right-10">
                                                <i class="icon wb-order bg-red-600 white icon-circle" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">A new order has been placed</h6>
                                                <time class="media-meta" datetime="2016-06-12T20:50:48+08:00">5 hours ago</time>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="media-left padding-right-10">
                                                <i class="icon wb-user bg-green-600 white icon-circle" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Completed the task</h6>
                                                <time class="media-meta" datetime="2016-06-11T18:29:20+08:00">2 days ago</time>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="media-left padding-right-10">
                                                <i class="icon wb-settings bg-red-600 white icon-circle" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Settings updated</h6>
                                                <time class="media-meta" datetime="2016-06-11T14:05:00+08:00">2 days ago</time>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="media-left padding-right-10">
                                                <i class="icon wb-calendar bg-blue-600 white icon-circle" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Event started</h6>
                                                <time class="media-meta" datetime="2016-06-10T13:50:18+08:00">3 days ago</time>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="media-left padding-right-10">
                                                <i class="icon wb-chat bg-orange-600 white icon-circle" aria-hidden="true"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Message received</h6>
                                                <time class="media-meta" datetime="2016-06-10T12:34:48+08:00">3 days ago</time>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-menu-footer" role="presentation">
                            <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                                <i class="icon wb-settings" aria-hidden="true"></i>
                            </a>
                            <a href="javascript:void(0)" role="menuitem">
                                All notifications
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a data-toggle="dropdown" href="javascript:void(0)" title="Messages" aria-expanded="false"
                       data-animation="scale-up" role="button">
                        <i class="icon wb-envelope" aria-hidden="true"></i>
                        <span class="badge badge-info up">3</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
                        <li class="dropdown-menu-header" role="presentation">
                            <h5>MESSAGES</h5>
                            <span class="label label-round label-info">New 3</span>
                        </li>

                        <li class="list-group" role="presentation">
                            <div data-role="container">
                                <div data-role="content">
                                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="media-left padding-right-10">
                          <span class="avatar avatar-sm avatar-online">
                            <img src="portraits/2.jpg" alt="..." />
                            <i></i>
                          </span>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Mary Adams</h6>
                                                <div class="media-meta">
                                                    <time datetime="2016-06-17T20:22:05+08:00">30 minutes ago</time>
                                                </div>
                                                <div class="media-detail">Anyways, i would like just do it</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="media-left padding-right-10">
                          <span class="avatar avatar-sm avatar-off">
                            <img src="portraits/3.jpg" alt="..." />
                            <i></i>
                          </span>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Caleb Richards</h6>
                                                <div class="media-meta">
                                                    <time datetime="2016-06-17T12:30:30+08:00">12 hours ago</time>
                                                </div>
                                                <div class="media-detail">I checheck the document. But there seems</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="media-left padding-right-10">
                          <span class="avatar avatar-sm avatar-busy">
                            <img src="portraits/4.jpg" alt="..." />
                            <i></i>
                          </span>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">June Lane</h6>
                                                <div class="media-meta">
                                                    <time datetime="2016-06-16T18:38:40+08:00">2 days ago</time>
                                                </div>
                                                <div class="media-detail">Lorem ipsum Id consectetur et minim</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item" href="javascript:void(0)" role="menuitem">
                                        <div class="media">
                                            <div class="media-left padding-right-10">
                          <span class="avatar avatar-sm avatar-away">
                            <img src="portraits/5.jpg" alt="..." />
                            <i></i>
                          </span>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Edward Fletcher</h6>
                                                <div class="media-meta">
                                                    <time datetime="2016-06-15T20:34:48+08:00">3 days ago</time>
                                                </div>
                                                <div class="media-detail">Dolor et irure cupidatat commodo nostrud nostrud.</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown-menu-footer" role="presentation">
                            <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                                <i class="icon wb-settings" aria-hidden="true"></i>
                            </a>
                            <a href="javascript:void(0)" role="menuitem">
                                See all messages
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- End Navbar Toolbar Right -->
        </div>
        <!-- End Navbar Collapse -->

        <!-- Site Navbar Seach -->
        <div class="collapse navbar-search-overlap" id="site-navbar-search">
            <form role="search">
                <div class="form-group">
                    <div class="input-search">
                        <i class="input-search-icon wb-search" aria-hidden="true"></i>
                        <input type="text" class="form-control" name="site-search" placeholder="Search...">
                        <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
                                data-toggle="collapse" aria-label="Close"></button>
                    </div>
                </div>
            </form>
        </div>
        <!-- End Site Navbar Seach -->
    </div>
</nav>
<div class="site-menubar site-menubar-light">
    <div class="site-menubar-body">
        <div>
            <div>
                <ul class="site-menu">
                    <li class="site-menu-category">Аккаунты</li>
                    <li class="site-menu-item has-sub">
                        <a class="dropdown-toggle" href="{{ url('panel') }}" data-dropdown-toggle="false">
                            <i class="icon wb-users" aria-hidden="true"></i>
                            <span class="site-menu-title">Аккаунты</span>
                        </a>
                    </li>
                    <li class="site-menu-category">Таргетинг</li>
                    <li class="site-menu-item has-sub">
                        <a class="dropdown-toggle" href="{{ url('panel/target') }}" data-dropdown-toggle="false">
                            <i class="icon wb-flag" aria-hidden="true"></i>
                            <span class="site-menu-title">Таргетинг</span>
                        </a>
                    </li>
                    <li class="site-menu-category">Задания</li>
                    <li class="site-menu-item has-section has-sub">
                        <a class="dropdown-toggle" href="{{ url('panel/task') }}" data-dropdown-toggle="false">
                            <i class="icon wb-hammer" aria-hidden="true"></i>
                            <span class="site-menu-title">Задания</span>
                        </a>
                    </li>
                    <li class="site-menu-category">Настройки</li>
                    <li class="site-menu-item has-section has-sub">
                        <a class="dropdown-toggle" href="{{ url('panel/settings') }}" data-dropdown-toggle="false">
                            <i class="icon wb-settings" aria-hidden="true"></i>
                            <span class="site-menu-title">Настройки</span>
                        </a>
                    </li>
                    <li class="site-menu-category">Отчет</li>
                    <li class="site-menu-item has-sub">
                        <a class="dropdown-toggle" href="" data-dropdown-toggle="false">
                            <i class="icon wb-stats-bars" aria-hidden="true"></i>
                            <span class="site-menu-title">Отчет</span>
                        </a>
                    </li>
                    <li class="site-menu-category">Поддержка</li>
                    <li class="site-menu-item has-sub">
                        <a class="dropdown-toggle" href="{{ url('panel/help') }}" data-dropdown-toggle="false">
                            <i class="icon wb-chat-working" aria-hidden="true"></i>
                            <span class="site-menu-title">Помощь</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<!-- Page -->
    <div class="page-content padding-30 container-fluid" style="background-color: #E5E5E5; min-height: 100%;">
        @yield('content')
    </div>
<!-- End Page -->
<!-- Core  -->
<script src="{{asset("vendor/jquery/jquery.min.js")}}"></script>
<script src="{{asset("vendor/bootstrap/bootstrap.min.js")}}"></script>
<script src="{{asset("vendor/animsition/animsition.min.js")}}"></script>
<script src="{{asset("vendor/asscroll/jquery-asScroll.min.js")}}"></script>
<script src="{{asset("vendor/mousewheel/jquery.mousewheel.min.js")}}"></script>
<script src="{{asset("vendor/asscrollable/jquery.asScrollable.all.min.js")}}"></script>
<script src="{{asset("vendor/ashoverscroll/jquery-asHoverScroll.min.js")}}"></script>

<!-- Plugins -->
<script src="{{asset("vendor/toastr/toastr.min.js")}}"></script>
<script src="{{asset("vendor/switchery/switchery.min.js")}}"></script>
<script src="{{asset("vendor/intro-js/intro.min.js")}}"></script>
<script src="{{asset("vendor/screenfull/screenfull.min.js")}}"></script>
<script src="{{asset("vendor/slidepanel/jquery-slidePanel.min.js")}}"></script>

<!-- Plugins For This Page -->
<script src="{{asset("vendor/chartist-js/chartist.min.js")}}"></script>
<script src="{{asset("vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.min.js")}}"></script>
<script src="{{asset("vendor/aspieprogress/jquery-asPieProgress.min.js")}}"></script>
<script src="{{asset("vendor/matchheight/jquery.matchHeight-min.js")}}"></script>
<script src="{{asset("vendor/jquery-selective/jquery-selective.min.js")}}"></script>
<script src="{{asset("vendor/bootstrap-datepicker/bootstrap-datepicker.min.js")}}"></script>


<!-- Scripts -->
<script src="{{asset("js/core/core.js")}}"></script>
<script src="{{asset("js/core.min.js")}}"></script>
<script src="{{asset("js/site.min.js")}}"></script>

<script src="{{asset("js/sections/menu.min.js")}}"></script>
<script src="{{asset("js/sections/menubar.min.js")}}"></script>
<script src="{{asset("js/sections/sidebar.min.js")}}"></script>

<script src="{{asset("js/configs/config-colors.min.js")}}"></script>
<script src="{{asset("js/configs/config-tour.min.js")}}"></script>

<script src="{{asset("js/components/asscrollable.min.js")}}"></script>
<script src="{{asset("js/components/animsition.min.js")}}"></script>
<script src="{{asset("js/components/slidepanel.min.js")}}"></script>
<script src="{{asset("js/components/switchery.min.js")}}"></script>

<script src="{{asset("js/components/matchheight.min.js")}}"></script>
<script src="{{asset("js/components/aspieprogress.min.js")}}"></script>
<script src="{{asset("js/components/bootstrap-datepicker.min.js")}}"></script>
<script src="{{asset("vendor/alertify-js/alertify.js")}}"></script>
<script src="{{asset("js/components/alertify-js.min.js")}}"></script>


<script src="{{asset("js/team.min.js")}}"></script>
<script>
    $.ajaxSetup({ headers: { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' } });
</script>
</body>

</html>