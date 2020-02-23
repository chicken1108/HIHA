<div class="container-fluid" style="margin-top: 60px;">
		<div class="row">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<?php $i=0; ?>
					@foreach($list_banner as $lb)
					<li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}" @if($i==0) class="active" @endif>
					</li>
					<?php $i++; ?>
					@endforeach
				</ol>
				<div class="carousel-inner">
					<?php $i=0; ?>
					@foreach($list_banner as $lb)
					<div @if($i==0) class="carousel-item active"
					@else
						class="carousel-item"
					 @endif
					>
						<img src="public/backend/banner/{{ $lb->ban_image }}" class="d-block w-100" alt="{{ $lb->ban_title }}">
					</div>
					<?php $i++; ?>
					@endforeach
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
	</div>