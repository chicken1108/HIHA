@extends('admin.pages.master')
@section('title','Thêm banner')
@section('main')
<div id="main-content-wp" class="add-cat-page">
    <div class="section" id="title-page">
        <div class="clearfix">
            <a href="{{ route('banner.create') }}" title="" id="add-new" class="fl-left">Thêm mới</a>
            <h3 id="index" class="fl-left">Thêm banner </h3>
        </div>
    </div>
    <div class="wrap clearfix">
        @include('admin.pages.sidebar')
        <div id="content" class="fl-right">                       
            <div class="section" id="detail-page">
                <div class="section-detail">
                    @include('errors.note')
                    <form method="POST" action="{{ route('banner.store') }}" enctype="multipart/form-data">
                        @csrf
                        <label for="title">Tiêu đề</label>
                        <input type="text" name="title" id="title">
                        <label>Hình ảnh</label>
                        <div id="uploadFile">
                            <input type="file" id="img" name="image" onchange="changeImg(this);" id="upload-thumb">
                            <img id="avatar" src="public/backend/images/img-thumb.png">
                        </div>
                        <label for="title">Kích hoạt</label>
                        <select name="active" id="active">
                            <option value="1">Có</option>
                            <option value="0">Không</option>
                        </select>
                        <button type="submit" name="btn-submit" id="btn-submit">Thêm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
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