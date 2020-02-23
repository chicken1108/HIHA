@extends('pages.layouts.index')
@section('title', 'Kết quả bài thi')
@section('content')
<div class="container" style="margin-top: 70px;">
	<div class="col-12" align="center">
		<h2>Kết quả bài thi</h2>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="card">
				<h3 class="card-header"> {{ $test->test_name }} </h3>
				<div class="card-body">
					<p style="font-size: 22px; color: blue;">Số câu trả lời đúng: {{ $result->ter_num_correct}}</p>
					<p style="font-size: 22px; color: red;">Số câu trả lời sai: {{ $result->ter_num_wrong}}</p>
					<p style="font-weight: bold; font-size: 22px;">Kết quả {{ $result->ter_num_correct}}/{{ $test->test_total_questions }}</p>
				</div>
				<div>
					<a href="{{ route('listTest') }}" class="btn btn-danger">Thi tiếp</a>
					<a href="{{ route('home') }}" class="btn btn-success">Quay về trang chủ</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
