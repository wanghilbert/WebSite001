@extends('layouts.basicStruct')

@section('section')
	<div>
	<h1>新建微信资源</h1>
	<!--<form  method="POST" action="http://localhost:8000/res/add" accept-charset="UTF-8"> -->
	<form method="GET" action="http://localhost:8000/user/registerUser" accept-charset="UTF-8">
		<input name="_token" type="hidden">
		<div class="form-group">
			<label for="Name">微信名</label>
			<input class="form-control" type="string" name="Name">
		</div>
		<div class="form-group">
			<label for="HeadPic">微信头像</label>
			<input class="form-control" type="string" name="HeadPic"> 
			<!--头像可以是file类型
			<input type="file" name="HeadPic"> 			
			 -->
		</div>
		<div class="form-group">
			<label for="SmallPic">缩略图</label>
			<input class="form-control" type="string" name="SmallPic"> 
			<!--缩略图可以是file类型
			<input type="file" name="SmallPic"> 			
			 -->
		</div>
		<div class="form-group">
			<label for="WeChat">微信号</label>
			<input class="form-control" type="string" name="WeChat">
		</div>
		<div class="form-group">
			<label for="QQ">QQ号</label>
			<input class="form-control" type="string" name="QQ">
		</div>
		<div class="form-group">
			<label for="Region">显示区域</label>
			<input class="form-control" type="string" name="Region">
		</div>
		<div class="form-group">
			<label for="AuthByWeChat">是否有微信授权</label>
			<div>
			<input class="form-control" type="checkbox" name="AuthByWeChat">
			</div>
		</div>

		<div class="form-group">
			<label for="AvgViewNum">平均访问量</label>
			<input class="form-control" type="integer" name="AvgViewNum">
		</div>
		<div class="form-group">
			<label for="FansNum">粉丝数</label>
			<input class="form-control" type="integer" name="FansNum">
		</div>
		<div class="form-group">
			<label for="HeadLinePrice">头条价格</label>
			<input class="form-control" type="decimal" name="HeadLinePrice">
		</div>
		<div class="form-group">
			<label for="NonHeadLinePrice">非头条价格</label>
			<input class="form-control" type="decimal" name="NonHeadLinePrice">
		</div>
		<div class="form-group">
			<label for="CostEffective">税率</label>
			<input class="form-control" type="decimal" name="CostEffective">
		</div>
		<div class="form-group">
			<label for="DeliveryRatio">发布率</label>
			<input class="form-control" type="integer" name="DeliveryRatio">
		</div>
		<div class="form-group">
			<label for="Credit">信用</label>
			<input class="form-control" type="integer" name="Credit">
		</div>
		<input class="btn btn-primary form-control" type="submit" value="确认添加">		
	</form>
	</div>
@if($errors->any())
<ul class=”list-group”>
@foreach($errors->all() as $error)
	<li class=”list-group-item list-group-item-danger”> {{ $error }} </li>
@endforeach
</ul>
@endif

	</body>
	

@endsection