
<div id="sidebar" class="fl-left">
    <ul id="sidebar-menu">
        <li class="nav-item">
            <a href="?page=list_page" title="" class="nav-link nav-toggle">
                <span class="fa fa-map icon"></span>
                <span class="title">Tài liệu</span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item">
                    <a href="{{ route('document.create') }}" title="" class="nav-link">Thêm mới</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('document.index') }}" title="" class="nav-link">Danh sách</a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="?page=list_page" title="" class="nav-link nav-toggle">
                <span><i class="fas fa-desktop"></i></span>
                <span class="title">Danh mục tài liệu</span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item">
                    <a href="{{ route('docate.create') }}" title="" class="nav-link">Thêm mới</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('docate.index') }}" title="" class="nav-link">Danh sách</a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="" title="" class="nav-link nav-toggle">
                <span class="fa fa-pencil-square-o icon"></span>
                <span class="title">Tin tức</span>
            </a>
            <ul class="sub-menu">
                 <li class="nav-item">
                    <a href="{{ route('news.create') }}" class="nav-link">Thêm mới</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('news.index') }}" title="" class="nav-link">Danh sách bài viết</a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="" title="" class="nav-link nav-toggle">
                <i class="fas fa-calendar-plus"></i>
                <span class="title">Danh mục tin tức</span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item">
                    <a href="{{ route('category.create') }}" title="" class="nav-link">Thêm mới</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('category.index') }}" title="" class="nav-link">Danh sách danh mục</a>
                </li>
            </ul>
        </li>
         <li class="nav-item">
            <a href="" title="" class="nav-link nav-toggle">
                <i class="fas fa-newspaper"></i>
                <span class="title">Bài thi</span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item">
                    <a href="{{ route('test.create') }}" title="" class="nav-link">Thêm mới</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('test.index') }}" title="" class="nav-link">Danh sách bài thi</a>
                </li>
            </ul>
        </li>
         <li class="nav-item">
            <a href="" title="" class="nav-link nav-toggle">
               <i class="far fa-question-circle"></i>
                <span class="title">Câu hỏi</span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item">
                    <a href="{{ route('question.create') }}" title="" class="nav-link">Thêm mới</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('question.index') }}" title="" class="nav-link">Danh sách câu hỏi</a>
                </li>
            </ul>
        </li>

           <li class="nav-item">
            <a href="" title="" class="nav-link nav-toggle">
                <i class="far fa-images"></i>
                <span class="title">Banner</span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item">
                    <a href="{{ route('banner.create') }}" title="" class="nav-link">Thêm mới</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('banner.index') }}" title="" class="nav-link">Danh sách banner</a>
                </li>
            </ul>
        </li>

    </ul>
</div>
