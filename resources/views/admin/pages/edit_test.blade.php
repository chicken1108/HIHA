@extends('admin.pages.master')
@section('title','Sửa bài thi')
@section('main')
<div id="main-content-wp" class="add-cat-page">
    <div class="section" id="title-page">
        <div class="clearfix">
            <a href="{{ route('test.create') }}" title="" id="add-new" class="fl-left">Thêm mới</a>
            <h3 id="index" align="center">Sửa bài thi</h3>
        </div>
    </div>
    <div class="wrap clearfix">
        @include('admin.pages.sidebar')
        <div id="content" class="fl-right">                       
            <div class="section" id="detail-page">
                @include('errors.note')
                <div class="section-detail">
                    <form method="POST" action="{{ route('test.update', ['test'=>$edit_test->test_id]) }}" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <label for="name">Tên bài thi</label>
                        <input type="text" name="name" id="name" value="{{ $edit_test->test_name }}">
                        <label for="desc">Mô tả</label>
                        <textarea name="desc" id="desc" value="{{ $edit_test->test_description}}"></textarea>
                        <label for="note">Ghi chú</label>
                        <textarea name="note" id="note">{{ $edit_test->test_note }}</textarea>
                        <label for="cate">Tổng số câu hỏi</label>
                        <input type="number" name="total_question" value="{{ $edit_test->test_total_questions }}">
                        <label for="time">Thời gian làm bài (phút)</label>
                        <input type="number" name="time" value="{{ $edit_test->test_times }}">
                        <hr>
                        <button type="submit" name="btn-submit" id="btn-submit">Lưu</button>
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