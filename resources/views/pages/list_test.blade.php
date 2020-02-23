@extends('pages.layouts.index')
@section('title','Danh sách bài thi')
@section('content')
<div class="container" style="margin-top: 70px;">
	<div class="col-12" align="center">
		<h3>Danh sách bài thi</h3>
		<hr>
	</div>
	<div class="row">
		@foreach($listtest as $lt)
		<div class="col-sm-8 card" align="center" style="margin-bottom: 10px;">
		<p class="card-header" style="color: blue; font-size: 20px;">{{ $lt->test_name }} </p>
			<div class="card-body">
				<p>Tổng số câu: {{ $lt->test_total_questions }}</p>
				<p>Thời gian làm bài: {{ $lt->test_times }} phút</p>
				<a href="{{ route('getDetailTest',['id'=>$lt->test_id]) }}" class="btn btn-primary">Bắt đầu làm bài</a>
			</div>
		</div>
		@endforeach
	</div>
</div>
@endsection
