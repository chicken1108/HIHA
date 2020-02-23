@extends('admin.pages.master')
@section('title','Danh mục tin tức')
@section('main')
<div id="main-content-wp" class="list-cat-page">
    <div class="section" id="title-page">
        <div class="clearfix">
            <a href="{{ route('category.create')}}" title="" id="add-new" class="fl-left">Thêm mới</a>
            <h3 id="index" class="fl-left">Danh sách danh mục tin tức</h3>
        </div>
    </div>
    <div class="wrap clearfix">
        @include('admin.pages.sidebar')
        <div id="content" class="fl-right">                       
            <div class="section" id="detail-page">
                <div class="section-detail">
                    @include('errors.note')
                    <div class="table-responsive">
                        <table class="table list-table-wp">
                            <thead>
                                <tr>
                                    <td><span class="thead-text">STT</span></td>
                                    <td><span class="thead-text">Tiêu đề</span></td>
                                    <td><span class="thead-text">Chức năng</span></td>
                                    <td><span class="thead-text">Tiêu đề không dấu</span></td>
                                    <td><span class="thead-text">Thời gian</span></td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=0; ?>
                                @foreach($list_cate as $lc)
                                <?php $i++; ?>
                                <tr>
                                    <td><span class="tbody-text">{{$i}}</h3></span>
                                    <td class="clearfix">
                                        <div class="tb-title fl-left">
                                            <p href="" title="">{{$lc->cate_title}}</p>
                                        </div> 
                                    </td>
                                    <td>
                                        <div>
                                            <form action="{{ route('category.edit',['category'=>$lc->cate_id]) }}" method="GET">
                                                <input type="submit" value="Sửa">
                                            </form>
                                        </div>
                                       <div>
                                            <form action="{{ route('category.destroy',['category'=>$lc->cate_id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" value="Xoá" onclick="return confirm('Bạn có chắc muốn xoá?');">
                                            </form>
                                       </div>
                                    </td>
                                    <td><span class="tbody-text">{{$lc->cate_slug}}</span></td>
                                    <td><span class="tbody-text">{{$lc->created_at}}</span></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="section" id="paging-wp">
                <div class="section-detail clearfix">
                    <ul id="list-paging" class="fl-right">
                        <li>
                            <a href="" title=""><</a>
                        </li>
                        <li>
                            <a href="" title="">1</a>
                        </li>
                        <li>
                            <a href="" title="">2</a>
                        </li>
                        <li>
                            <a href="" title="">3</a>
                        </li>
                        <li>
                            <a href="" title="">></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection