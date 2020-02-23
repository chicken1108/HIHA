@extends('pages.layouts.index')
@section('title', $news_detail->news_title)

@section('content')
<div class="container" style="margin-top: 70px;">
	<div class="row">
		<h5>{{ $news_detail->news_title }}</h5>
		<p>{!! $news_detail->news_detail !!}</p>
	</div>
</div>
@endsection