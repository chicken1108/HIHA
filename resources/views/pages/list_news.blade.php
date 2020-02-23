@extends('pages.layouts.index')
@section('title')

@section('content')
<div class="container" style="margin-top: 70px;">
	<div class="col-9">
		<a href="{{ route('home') }}" style="text-decoration: none;">Trang chủ </a>/ <span style="color: blue;">Tin tức hoạt động</span>
	</div>
	<div class="row">
			@foreach($list_news as $ln)
			<?php $cate_slug = $ln->category->cate_slug; ?>
			<div class="col-9" style="margin-top: 20px;">
				<div class="card">
					<div class="row">
						<div class="col-4">
							<a href="{{ route('get.news.detail',['cate_slug'=>$cate_slug, 'news_slug'=>$ln->news_slug, 'news_id'=>$ln->news_id]) }}"><img width="280px" height="210px" src="public/backend/news/{{ $ln->news_image}}" alt=""></a>
						</div>
						<div class="col-8">
							<a href="{{ route('get.news.detail',['cate_slug'=>$cate_slug, 'news_slug'=>$ln->news_slug, 'news_id'=>$ln->news_id]) }}" style="text-decoration: none;"><h5>{{ $ln->news_title }}</h5></a>
							<p>{{ $ln->news_desc }}</p>
						</div>
					</div>
				</div>
			</div>
			@endforeach
	</div>
	<div class="col-3" style="margin-top: 20px;">
		{!! $list_news->links(); !!}
	</div>
</div>
@endsection