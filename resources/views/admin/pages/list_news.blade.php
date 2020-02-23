@extends('admin.pages.master')
@section('title','Danh sách bài viết')
@section('main')
<div id="main-content-wp" class="list-post-page">
    <div class="section" id="title-page">
        <div class="clearfix">
            <a href="{{ route('news.create') }}" title="" id="add-new" class="fl-left">Thêm mới</a>
            <h3 id="index" class="fl-left">Danh sách bài viết</h3>
        </div>
    </div>
    <div class="wrap clearfix">
        @include('admin.pages.sidebar')
        <div id="content" class="fl-right">                       
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <div class="filter-wp clearfix">
                    <div class="table-responsive">
                        @include('errors.note')
                        <table class="table list-table-wp">
                            <thead>
                                <tr>
                                    <td><span class="thead-text">STT</span></td>
                                    <td><span class="thead-text">Tiêu đề</span></td>
                                    <td><span class="thead-text">Chức năng</span></td>
                                    <td><span class="thead-text">Tiêu đề không dấu</span></td>
                                    <td><span class="thead-text">Hình ảnh</span></td>
                                    <td><span class="thead-text">Thời gian</span></td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=0; ?>
                                @foreach($list_news as $ln)
                                <?php $i++; ?>
                                <tr>
                                    <td><span class="tbody-text">{{$i}}</h3></span>
                                    <td class="clearfix">
                                        <div class="tb-title fl-left">
                                            <a href="" title="">{{$ln->news_title}}</a>
                                        </div>
                                     </td>
                                      <td>
                                        <div>
                                            <form action="{{ route('news.edit',['news'=>$ln->news_id]) }}" method="GET">
                                                    <input type="submit" value="Sửa">
                                                </form>
                                        </div>
                                        <div>
                                             <form action="{{ route('news.destroy',['news'=>$ln->news_id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" value="Xoá" onclick="return confirm('Bạn có chắc muốn xoá?');">
                                            </form>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tb-title fl-left">
                                            <a href="" title="">{{$ln->news_slug}}</a>
                                        </div>
                                    </td>
                                    <td><img width="100px;" src="public/backend/news/{{$ln->news_image}}" alt=""></td>
                                    <td><span class="tbody-text">{{$ln->created_at}}</span></td>
                                </tr>
                                @endforeach
                            </thead>
                        </table>
                    </div>

                </div>
            </div>
            <div class="section" id="paging-wp">
                <div class="section-detail clearfix">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection