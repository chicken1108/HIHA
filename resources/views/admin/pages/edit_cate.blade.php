@extends('admin.pages.master')
@section('title','Sửa danh mục')
@section('main')
<div id="main-content-wp" class="add-cat-page">
    <div class="section" id="title-page">
        <div class="clearfix">
            <a href="{{ route('category.create') }}" title="" id="add-new" class="fl-left">Thêm mới</a>
            <h3 id="index" class="fl-left">Sửa danh mục tin tức</h3>
        </div>
    </div>
    <div class="wrap clearfix">
        @include('admin.pages.sidebar')
        <div id="content" class="fl-right">                       
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form method="POST" action="{{ route('category.update',['category'=>$editcate->cate_id]) }}">
                        @method('PATCH')
                        @csrf
                        <label for="title">Tiêu đề</label>
                        <input type="text" name="title" id="title" value="{{$editcate->cate_title}}">
                        <button type="submit" name="btn-submit" id="btn-submit">Sửa</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection