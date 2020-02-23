<nav class="navbar navbar-expand-md bg-primary navbar-dark fixed-top">
		<!-- Brand -->
		<a class="navbar-brand" href="#"><img src="" alt=""></a>

		<!-- Links -->
		<ul class="navbar-nav">
			<!-- Dropdown -->
			<li class="nav-item">
				<a class="nav-link" href="{{ route('home') }}"><img src="public/images/logo2.png" height="20px;" width="50px;" alt=""></a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
					TIN HỌC
				</a>
				<div class="dropdown-menu">
					<div class="dropdown-menu-1">
						<h5>Tin học cơ bản </h5>
						<hr>
						@foreach($documents as $dcm)
							<a class="dropdown-item" href="{{ route('get.document', ['doc_id'=>$dcm->doc_id, 'doc_slug'=>$dcm->doc_slug]) }}">{{ $dcm->doc_title}}</a>
						@endforeach
					</div>
					<div class="dropdown-menu-2">
						<h5>Tin học nâng cao </h5>
						<hr>
						@foreach($documents_advanced as $dcma)
							<a class="dropdown-item" href="{{ route('get.document', ['doc_id'=>$dcma->doc_id, 'doc_slug'=>$dcma->doc_slug]) }}">{{ $dcma->doc_title}}</a>
						@endforeach
					</div>
				</div>
			</li>

			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">TIN TỨC</a>
				<div class="dropdown-menu tin-tuc">
					@foreach($categories as $ct)
					<a class="dropdown-item" href="{{ route('get.list.news',['cate_id'=>$ct->cate_id, 'cate_slug'=>$ct->cate_slug]) }}"><i class="fa fa-arrow-circle-right"></i>{{ $ct->cate_title}}</a>
					@endforeach
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ route('listTest') }}">THI THỬ</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ route('solveTheTest') }}">GIẢI ĐỀ</a>
			</li>
			<form class="form-inline" action="/action_page.php">
				<input class="form-control mr-sm-2" type="text" placeholder="Hãy nhập gì đó ...">
				<button class="btn btn-success" type="submit">Tìm kiếm</button>
			</form>
			@if(Auth::check())
			<li class="nav-item" style="margin-left: 40px;">
				<a class="btn btn-danger" href="{{ route('get.user') }}">{{Auth::user()->name}}</a>
				@if(Auth::user()->level==1)
				<a class="btn btn-warning" href="{{ route('news.index') }}">ADMIN</a>
				@endif
			</li>
			@else
			<li class="nav-item" style="margin-left: 40px;">
				<a class="btn btn-danger" href="{{ route('get.signin') }}">ĐĂNG NHẬP</a>
			</li>
			<li class="nav-item">
				<a class="btn btn-warning" href="{{ route('get.signup') }}">ĐĂNG KÝ</a>
			</li>
			@endif
		</ul>
	</nav>