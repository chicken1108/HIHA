@extends('admin.pages.master')
@section('title','Thêm câu hỏi')
@section('main')
<div id="main-content-wp" class="add-cat-page">
    <div class="section" id="title-page">
        <div class="clearfix">
            <h3 id="index" align="center">Thêm mới câu hỏi</h3>
        </div>
    </div>
    <div class="wrap clearfix">
        @include('admin.pages.sidebar')
        <div id="content" class="fl-right">                       
            <div class="section" id="detail-page">
                @include('errors.note')
                <div class="section-detail">
                    <form method="POST" action="{{ route('question.store') }}" enctype="multipart/form-data">
                        @csrf
                        <label for="content">Nội dung</label>
                        <textarea name="content"></textarea>
                        <label for="answer_a">Đáp án A</label>
                        <input type="text" name="answer_a" id="answer_a">
                        <label for="answer_b">Đáp án B</label>
                        <input type="text" name="answer_b" id="answer_b">
                        <label for="answer_c">Đáp án C</label>
                        <input type="text" name="answer_c" id="answer_c">
                        <label for="answer_d">Đáp án D</label>
                        <input type="text" name="answer_d" id="answer_d">
                        <label for="correct_answer">Đáp án đúng</label>
                        <select name="correct_answer" id="">
                            <option value="A" selected="">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                        <label for="test">Thuộc bài thi</label>
                        <select name="test" id="test">
                            @foreach($list_test as $lt)
                            <option value="{{ $lt->test_id }}">{{ $lt->test_name }}</option>
                            @endforeach
                        </select>
                        <hr>
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