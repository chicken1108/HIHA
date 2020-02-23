@extends('pages.layouts.index')
@section('title', 'Giải đề')
@section('content')
<div class="container" style="margin-top: 70px;">
	<div class="row">
		<div class="col-12" align="center">
			<h3>Danh sách các bài giảng</h3>
			<hr>
		</div>
		<div class="col-4">
			<video width="320" height="240" controls>
				<source src="public/videos/video-1.mp4" type="video/mp4">
				Your browser does not support the video tag.
			</video>
			<p align="center">Bài giảng số 1</p>
		</div>
		<div class="col-4">
			<video width="320" height="240" controls>
				<source src="public/videos/video-2.mp4" type="video/mp4">
				Your browser does not support the video tag.
			</video>
			<p align="center">Bài giảng số 2</p>
		</div>
		<div class="col-4">
			<video width="320" height="240" controls>
				<source src="public/videos/3389.mp4" type="video/mp4">
				Your browser does not support the video tag.
			</video>
			<p align="center">Bài giảng số 3</p>
		</div>
	</div>
</div>
@endsection