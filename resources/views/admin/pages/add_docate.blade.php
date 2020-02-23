@extends('admin.pages.master')
@section('title','Thêm danh mục tài liệu')
@section('main')
<div id="main-content-wp" class="add-cat-page">
    <div class="section" id="title-page">
        <div class="clearfix">
            <h3 id="index" align="center">Thêm mới danh mục tài liệu</h3>
        </div>
    </div>
    <div class="wrap clearfix">
        @include('admin.pages.sidebar')
        <div id="content" class="fl-right">    
        @include('errors.note')                   
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form method="POST" action="{{ route('docate.store') }}">
                        @csrf
                        <label for="title">Tiêu đề</label>
                        <input type="text" name="title" id="title">
                        <button type="submit" name="btn-submit" id="btn-submit">Thêm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection