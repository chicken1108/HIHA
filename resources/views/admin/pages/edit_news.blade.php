@extends('admin.pages.master')
@section('title','Sửa bài viết')
@section('main')
<div id="main-content-wp" class="add-cat-page">
    <div class="section" id="title-page">
        <div class="clearfix">
            <a href="{{ route('news.index') }}" title="" id="add-new" class="fl-left">Thêm mới</a>
            <h3 id="index" class="fl-left">Sửa bài viết</h3>
        </div>
    </div>
    <div class="wrap clearfix">
        @include('admin.pages.sidebar')
        <div id="content" class="fl-right">                       
            <div class="section" id="detail-page">
                @include('errors.note')
                <div class="section-detail">
                    <form action="{{ route('news.update', ['news'=>$edit_news->news_id]) }}" enctype="multipart/form-data" method="POST">
                        @method('PATCH')
                        @csrf
                        <label for="title">Tiêu đề</label>
                        <input type="text" name="title" id="title" value="{{$edit_news->news_title}}">
                        <label for="desc">Mô tả</label>
                        <textarea name="desc" id="desc">{{$edit_news->news_desc}}</textarea>
                        <label for="desc">Nội dung</label>
                        <textarea name="content_txt" id="content_txt">{{$edit_news->news_detail}}</textarea>
                        <label for="category">Danh mục</label>
                        <select name="category" id="category">
                            @foreach($list_cate as $lc)
                            <option @if($edit_news->news_cateid == $lc->cate_id) selected @endif value="{{$lc->cate_id}}" >{{$lc->cate_title}}
                            </option>
                            @endforeach
                        </select>
                        <label>Hình ảnh</label>
                        <div id="uploadFile">
                            <input type="file" name="img" onchange="changeImg(this);" id="img">
                            <img id="avatar" src="public/backend/news/{{$edit_news->news_image}}">
                        </div>
                        <button type="submit" name="btn-submit" id="btn-submit">Sửa</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    CKEDITOR.replace( 'content_txt', {
            filebrowserBrowseUrl: '../../public/editor/ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl: '../../public/editor/ckfinder/ckfinder.html?type=Images',
            filebrowserFlashBrowseUrl: '../../public/editor/ckfinder/ckfinder.html?type=Flash',
            filebrowserUploadUrl: '../../public/editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl: '../../public/editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
            filebrowserFlashUploadUrl: '../../public/editor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
        } );
</script>
<script>
    function changeImg(input){
            //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
            if(input.files && input.files[0]){
                var reader = new FileReader();
                //Sự kiện file đã được load vào website
                reader.onload = function(e){
                    //Thay đổi đường dẫn ảnh
                    $('#avatar').attr('src',e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $(document).ready(function() {
            $('#avatar').click(function(){
                $('#img').click();
            });
        });
</script>
@endsection