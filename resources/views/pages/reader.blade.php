@extends('pages.layouts.index')
@section('title', $document_detail->doc_title);
@section('style')
<style>
.pdfobject-container { height: 40rem; border: 1rem solid rgba(0,0,0,.1); }
</style>
@section('content')
<div class="container" style="margin-top: 70px; margin-bottom: 50px;">
	<div class="row">
		<div class="col-9">
			<h5>{{ $document_detail->doc_title }}</h5>
		</div>
		<div class="col-9">
			<embed src="public/backend/document/{{ $document_detail->doc_file}}" width="800px" height="575" 
			type="application/pdf">
		</div>
		<div class="col-9" id="download" style="margin-top: 20px;">
			Tải xuống tài liệu <a href="public/backend/document/{{ $document_detail->doc_file}}" download="">tại đây</a>
		</div>
	</div>
</div>
@stop
@section('script')
	<script type="text/javascript">
		var file = 
	if(PDFObject.supportsPDFs){
		console.log("Yay, this browser supports inline PDFs.");
	} else {
		console.log("Boo, inline PDFs are not supported by this browser");
	}
	PDFObject.embed("public/backend/pdf/", "#example1", );
</script>
@endsection
