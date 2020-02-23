@if(Session::has('themthanhcong'))
<div class="alert alert-success">{{session('themthanhcong')}}</div>
@endif

@if(Session::has('dangnhapthatbai'))
<div class="alert alert-danger">{{session('dangnhapthatbai')}}</div>
@endif

@if(Session::has('matkhaukhongdung'))
<div class="alert alert-danger">{{session('matkhaukhongdung')}}</div>
@endif

@if(Session::has('doimatkhauthanhcong'))
<div class="alert alert-success">{{session('doimatkhauthanhcong')}}</div>
@endif

@if(Session::has('themdanhmucthanhcong'))
<div class="alert alert-success">{{session('themdanhmucthanhcong')}}</div>
@endif

@if(Session::has('suadanhmucthanhcong'))
<div class="alert alert-success">{{session('suadanhmucthanhcong')}}</div>
@endif

@if(Session::has('xoadanhmucthanhcong'))
<div class="alert alert-success">{{session('xoadanhmucthanhcong')}}</div>
@endif

@if(Session::has('themtintucthanhcong'))
<div class="alert alert-success">{{session('themtintucthanhcong')}}</div>
@endif

@if(Session::has('xoatintucthanhcong'))
<div class="alert alert-success">{{session('xoatintucthanhcong')}}</div>
@endif

@if(Session::has('dinhdanghinhanhkhongdung'))
<div class="alert alert-danger">{{session('dinhdanghinhanhkhongdung')}}</div>
@endif

@if(Session::has('suatinthanhcong'))
<div class="alert alert-success">{{session('suatinthanhcong')}}</div>
@endif

@if(Session::has('thembannerthanhcong'))
<div class="alert alert-success">{{session('thembannerthanhcong')}}</div>
@endif

@if(Session::has('xoabannerthanhcong'))
<div class="alert alert-success">{{session('xoabannerthanhcong')}}</div>
@endif

@if(Session::has('suabannerthanhcong'))
<div class="alert alert-success">{{session('suabannerthanhcong')}}</div>
@endif

@if(Session::has('themtailieuthanhcong'))
<div class="alert alert-success">{{session('themtailieuthanhcong')}}</div>
@endif

@if(Session::has('suatailieuthanhcong'))
<div class="alert alert-danger">{{session('suatailieuthanhcong')}}</div>
@endif

@if(Session::has('xoatailieuthanhcong'))
<div class="alert alert-danger">{{session('xoatailieuthanhcong')}}</div>
@endif

@if(Session::has('dinhdangfilekhongdung'))
<div class="alert alert-danger">{{session('dinhdangfilekhongdung')}}</div>
@endif

@if(Session::has('thembaithithanhcong'))
<div class="alert alert-danger">{{session('thembaithithanhcong')}}</div>
@endif

@if(Session::has('suabaithithanhcong'))
<div class="alert alert-danger">{{session('suabaithithanhcong')}}</div>
@endif

@if(Session::has('xoabaithithanhcong'))
<div class="alert alert-danger">{{session('xoabaithithanhcong')}}</div>
@endif

@if(Session::has('themcauhoithanhcong'))
<div class="alert alert-success">{{session('themcauhoithanhcong')}}</div>
@endif

@if(Session::has('suacauhoithanhcong'))
<div class="alert alert-success">{{session('suacauhoithanhcong')}}</div>
@endif

@if(Session::has('xoacauhoithanhcong'))
<div class="alert alert-danger">{{session('xoacauhoithanhcong')}}</div>
@endif





@foreach($errors->all() as $err)
<div class="alert alert-danger">{{$err}}</div>
@endforeach