@extends('admin.pages.master')
@section('title','Thêm tài liệu')
@section('main')
<div id="main-content-wp" class="add-cat-page">
    <div class="section" id="title-page">
        <div class="clearfix">
            <h3 id="index" class="fl-left">Thêm mới tài liệu</h3>
        </div>
    </div>
    <div class="wrap clearfix">
        @include('admin.pages.sidebar')
        <div id="content" class="fl-right">                       
            <div class="section" id="detail-page">
                @include('errors.note')
                <div class="section-detail">
                    <form method="POST" action="{{ route('document.store') }}" enctype="multipart/form-data">
                        @csrf
                        <label for="title">Tiêu đề</label>
                        <input type="text" name="title" id="title">
                        <label for="desc">Mô tả (nếu có)</label>
                        <textarea name="desc" id="desc"></textarea>
                        <label for="desc">Nội dung (nếu có)</label>
                        <textarea name="content" id="content_txt"></textarea>
                        <label for="cate">Danh mục</label>
                        <select name="docate_id" id="docate_id">
                           @foreach($list_docate as $ld)
                             <option value="{{ $ld->docate_id }}">{{ $ld->docate_title}}</option>
                           @endforeach
                        </select>
                        <label>File</label>
                        <div id="uploadFile">
                            <input type="file" name="fileToUpLoad" onchange="changeImg(this);" id="img">
                        </div>
                        <button type="submit" name="btn-submit" id="btn-submit">Thêm mới</button>
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
            filebrowserImageBrowseUrl: '../../../public/editor/ckfinder/ckfinder.html?type=Images',
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