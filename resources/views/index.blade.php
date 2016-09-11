@extends('layouts.basicStruct')

@section('head')
    <link href="/bootstrap/css/ccs_home.css" rel="stylesheet">
    <script type="text/javascript">
    	$(function(){
    		$("#class-1-1").popover({
                html: true,
                trigger: 'hover',
                placement: 'auto bottom',
                delay: {
                    show: 0,
                    hide: 1500
                },
                title: function() {
                    return $("#popover-title").html();
                },
                content: function() {
                    return $("#popover-content").html();
                }
            })
            $("#class-1-2").popover({
                html: true,
                trigger: 'hover',
                placement: 'auto bottom',
                delay: {
                    show: 0,
                    hide: 1500
                },
                title: function() {
                    return $("#popover-title").html();
                },
                content: function() {
                    return $("#popover-content").html();
                }
            })
    	});
    </script>
@endsection

@section('section')
<div class="row" style="width:950px;margin-left:80px;">
	@include('contents.search')
	@include('contents.banner')
	@include('contents.staticBanner')

	<div class="row" id="classify">
		@include('contents.classify')
		@include('contents.hotshow')
	</div>
</div>
@endsection