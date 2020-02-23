@extends('pages.layouts.index')
@section('title', $test->test_name)

@section('content')
<div class="container" style="margin-top: 70px;">
	<div class="row">
		<div class="col-12" align="center">
			<h3>{{ $test->test_name }}</h3>
			<hr>
			<p id="demo" style="width: 100px; height: 35px; background: blue; font-size: 20px; color: white; position: fixed; top: 300px; right: 30px;">
				
			</p>
		</div>
		<div class="col-4">
			@for($i = 1; $i <= count($detailtest); $i++)
			<div class="card">
				<a style="text-decoration: none;" href="#quest-{{$i}}}" class="menu-link">Câu {{$i}} <span class="tick" id="tick-{{$i}}"></span>
				</a>
			</div>
			@endfor
		</div>
		<?php $i=1; ?>
		<div class="col-8">
			<form name="myForm" action="{{ route('postDetailTest', ['id'=>$test->test_id]) }}" method="POST" enctype="multipart/form-data">
				@csrf
			@foreach($detailtest as $dt)
			<div class="question-{{$i}}">
				<p style="color: blue;">Câu {{$i}}. {{ $dt->qes_content }}</p>
				<input type="radio" name="answer_{{$i}}" data-stt="{{$i}}" value="a" required="">&nbsp<label for=""> A. {{ $dt->qes_answer_a }}</label>
				<br>
				<input type="radio" name="answer_{{$i}}" data-stt="{{$i}}" value="b" required="">&nbsp<label for=""> B. {{ $dt->qes_answer_b }}</label>
				<br>
				<input type="radio" name="answer_{{$i}}" data-stt="{{$i}}" value="c" required="">&nbsp<label for=""> C. {{ $dt->qes_answer_c }}</label>
				<br>
				<input type="radio" name="answer_{{$i}}" data-stt="{{$i}}" value="d" required="">&nbsp<label for=""> D. {{ $dt->qes_answer_d }}</label>
				<br>
			</div>
			<?php $i++; ?>
			@endforeach
			<div align="center">
				<input type="submit" class="btn btn-danger" value="Nộp bài" onclick="return confirm('Bạn có chắc muốn nộp?')">
			</div>
			</form>
		</div>
		<br>
	</div>
</div>
@endsection
@section('script')
<script>
		var min = {{ $test->test_times }};
		var sec = 0;
		countdown();
	$('input[type=radio]').on("change", function () {
		var stt = $(this).data('stt');
		$('#tick-' + stt).text("✓");
	});

function countdown(){
	cdID = setInterval(function () {
				if (sec == 0) {
					min--;
					sec = 60;
				}
				sec--;
				if (min < 10) {
					$('#demo').css('color', 'red');
					min_text = '0' + min;
				} else {
					min_text = min;
				}
				if (sec < 10)
					sec_text = '0' + sec;
				else
					sec_text = sec;
				$('#demo').text(min_text + ':' + sec_text);
				if (min < 0) {
					 document.forms["myForm"].submit();
				}
			}, 1000);
}

</script>
@endsection