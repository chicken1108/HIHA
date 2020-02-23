<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <base href="{!! asset('') !!}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="public/backend/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="public/backend/css/bootstrap/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="public/backend/reset.css" rel="stylesheet" type="text/css"/>
    <link href="public/backend/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="public/backend/style.css" rel="stylesheet" type="text/css"/>
    <link href="public/backend/responsive.css" rel="stylesheet" type="text/css"/>
    <link href="public/backend/css/import/list_post.css" rel="stylesheet" type="text/css"/>
    <link href="public/backend/css/import/fonts.css" rel="stylesheet" type="text/css"/>
    <link href="public/backend/css/import/global.css" rel="stylesheet" type="text/css"/>
    <link href="public/backend/css/import/list_product.css" rel="stylesheet" type="text/css"/>
    <link href="public/backend/css/import/add_cat.css" rel="stylesheet" type="text/css"/>
    <link href="public/backend/css/import/info_account.css" rel="stylesheet" type="text/css"/>
    <link href="public/backend/css/import/change_pass.css" rel="stylesheet" type="text/css"/>
    <link href="public/backend/css/import/sidebar.css" rel="stylesheet" type="text/css"/>
    <link href="public/backend/css/import/menu.css" rel="stylesheet" type="text/css"/>
    <link href="public/backend/css/import/detail_order.css" rel="stylesheet" type="text/css"/>
    <script src="public/backend/js/jquery-2.2.4.min.js" type="text/javascript"></script>
    <script src="public/backend/js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
    <script src="public/backend/js/main.js" type="text/javascript"></script>
    <script type="text/javascript" src="public/editor/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="public/editor/ckfinder/ckfinder.js"></script>
<body>
    <div id="site">
        <div id="container">
            <div id="header-wp">
                <div class="wp-inner clearfix">
                    <a href="{{ route('home')}}" title="" id="logo" class="fl-left">HOME</a>
                    <ul id="main-menu" class="fl-left">
                        <li>
                            <a href="{{ route('document.index') }}" title="">Tài liệu</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{ route('document.create') }}" title="">Thêm mới</a> 
                                </li>
                                <li>
                                    <a href="{{ route('document.index') }}" title="">Danh sách tài liệu</a> 
                                </li>
                            </ul>
                        </li>
                         <li>
                            <a href="{{ route('docate.index') }}" title="">Danh mục tài liệu</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{ route('docate.create') }}" title="">Thêm mới</a> 
                                </li>
                                <li>
                                    <a href="{{ route('docate.index') }}" title="">Danh sách tài liệu</a> 
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('news.index') }}" title="">Tin tức</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{ route('news.create') }}" title="">Thêm mới</a> 
                                </li>
                                <li>
                                    <a href="{{ route('news.index') }}" title="">Danh sách bài viết</a> 
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('category.index') }}" title="">Danh mục tin tức</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{ route('category.index') }}" title="">Thêm mới</a> 
                                </li>
                                <li>
                                    <a href="{{ route('category.index') }}" title="">Danh sách danh mục</a> 
                                </li>
                            </ul>
                        </li>
                          <li>
                            <a href="{{ route('banner.index') }}" title="">Banner</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{ route('banner.index') }}" title="">Thêm mới</a> 
                                </li>
                                <li>
                                    <a href="{{ route('banner.index') }}" title="">Danh sách banner</a> 
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div id="dropdown-user" class="dropdown dropdown-extended fl-right">
                        <button class="dropdown-toggle clearfix" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <div id="thumb-circle" class="fl-left">
                                <img src="public/backend/avatar/admin.jpg" width="50" height="30">
                            </div>
                            <h3 id="account" class="fl-right">{{Auth::user()->name}}</h3>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('get.user') }}" title="Thông tin cá nhân">Thông tin tài khoản</a></li>
                            <li><a href="{{ route('get.signout') }}" title="Thoát">Đăng xuất</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @yield('main')
            <div id="footer-wp">
                <div class="wp-inner">
                    <p id="copyright">2020 Trắc nghiệm tin học</p>
                </div>
            </div>
        </div>
    </div>
    @yield('script')
</body>
</html>