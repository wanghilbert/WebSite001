@extends('layouts.basicStruct')

@section('section')


<style type="text/css">
	.Col1{
		width: 5%;
	}
		.Col2{
		width: 10%;
	}
	.Col3{
		width: 10%;
	}
	.Col4{
		width: 5%;
	}
	.Col5{
		width: 15%;
	}
	.Col6{
		width: 5%;
	}
	.Col7{
		width: 10%;
	}
	.Col8{
		width: 10%;
	}
	.Col9{
		width: 20%;
	}

</style>

<div class="container" style="width: 1200px;margin-left:-200px;">

	<table class="table">
		<caption>显示EXCEL表格</caption>
		<thead>
			<tr>
				<th style="width:2%;">序号</th>
				<th style="width:5%;">V</th>
				<th style="width:10%;">账号名称</th>
				<th style="width:10%;">链接</th>
				<th style="width:8%;">粉丝数(万)</th>
				<th style="width:15%;">简介</th>
				<th class="Col6">发布建议</th>
				<th class="Col7">参考微任务直发价</th>
				<th class="Col8">参考微任务转发价</th>
				<th class="Col9">备注</th>
			</tr>
		</thead>

		<tbody>

		@foreach($resSearchList as $element)
		<tr>
			<td>{{$element->ResId}}</td>
			<td>{{$element->AuthByWeChat}}</td>
			<td>{{$element->Name}}</td>
			<td>{{$element->Link}}</td>
			<td>{{$element->FansNum}}</td>
			<td>{{$element->Desp}}</td>
			<td>{{$element->Tags}}</td>
			@if($element->HeadLinePrice == 0.00)
				<td>见备注</td>
			@else
				<td>{{$element->HeadLinePrice}}</td>
			@endif
			@if($element->NonHeadLinePrice == 0.00)
				<td>见备注</td>
			@else
				<td>{{$element->NonHeadLinePrice}}</td>
			@endif
			<td>{{$element->Addition}}</td>
		</tr>		
		@endforeach

		</tbody>
		<tfoot>
			<a href="res/pagepre">上一页</a>
			<a href="res/pagenext">下一页</a>
		</tfoot>		

	</table>


@if($errors->any())
<ul class=”list-group”>
@foreach($errors->all() as $error)
	<li class=”list-group-item list-group-item-danger”> {{ $error }} </li>
@endforeach
</ul>
@endif

</div>
@endsection