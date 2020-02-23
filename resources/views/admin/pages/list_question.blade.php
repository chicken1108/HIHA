@extends('admin.pages.master')
@section('title','Danh sách câu hỏi')
@section('main')
<div id="main-content-wp" class="list-post-page">
    <div class="section" id="title-page">
        <div class="clearfix">
            <a href="{{ route('question.create') }}" title="" id="add-new" class="fl-left">Thêm mới</a>
            <h3 id="index" class="fl-left">Danh sách câu hỏi</h3>
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
                                    <td><span class="thead-text">Nội dung</span></td>
                                    <td><span class="thead-text">Chức năng</span></td>
                                    <td><span class="thead-text">Đáp án A</span></td>
                                    <td><span class="thead-text">Đáp án B</span></td>
                                    <td><span class="thead-text">Đáp án C</span></td>
                                    <td><span class="thead-text">Đáp án D</span></td>
                                    <td><span class="thead-text">Đáp án đúng</span></td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=0; ?>
                                @foreach($list_question as $lq)
                                <?php $i++; ?>
                                <tr>
                                    <td><span class="tbody-text">{{$i}}</h3></span>
                                    <td class="clearfix">
                                        <div class="tb-title fl-left">
                                            <a href="" title="">{{$lq->qes_content}}</a>
                                        </div>
                                     </td>
                                      <td>
                                        <div>
                                            <form action="{{ route('question.edit',['question'=>$lq->qes_id]) }}" method="GET">
                                                    <input type="submit" value="Sửa">
                                                </form>
                                        </div>
                                        <div>
                                            <form action="{{ route('question.destroy',['question'=>$lq->qes_id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" value="Xoá" onclick="return confirm('Bạn có chắc muốn xoá?');">
                                            </form>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tb-title fl-left">
                                            <a href="" title="">{{$lq->qes_answer_a}}</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tb-title fl-left">
                                            <a href="" title="">{{$lq->qes_answer_b}}</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tb-title fl-left">
                                            <a href="" title="">{{$lq->qes_answer_c}}</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tb-title fl-left">
                                            <a href="" title="">{{$lq->qes_answer_d}}</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tb-title fl-left">
                                            <a href="" title="">{{$lq->qes_correct_answer}}</a>
                                        </div>
                                    </td>
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