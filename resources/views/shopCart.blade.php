@extends('layouts.basicStruct')

@section('head')
<title>购物车</title>
<link href="/bootstrap/css/css_shopping.css" rel="stylesheet">
@endsection

@section('section')

			<div style="width:1000px;height:800px;margin-left:80px;">

			@include('contents.search')
			<br />

				<div class="userPanel">
					<img src="/bootstrap/img/baby.png" style="width:219px;" alt="新罗免税店">
				</div>
				<div class="cartPanel">
					<div class="userInfoText" style="margin-top:20px;margin-left:20px;">
						<b>购物车(</b>
						<b class="f_red">3</b>
						<b>/</b>
						<b class="f_red">30</b>
						<b>)</b>						
					</div>
					<div class="cartTablePanel">
						<table class="table cartTable">
							<thead class="bg_lightgrey">
								<tr>
									<th style="width:80px;">
										<input type="checkbox" name="selectAll">全选
									</th>
									<th style="width:150px;"></th>
									<th style="width:160px;">
										图文位置
									</th>
									<th>
										头条价格
									</th>
									<th>
										非头条价格
									</th>
									<th>
										操作
									</th>
								</tr>
							</thead>
							<tbody>
								@foreach($items as $item)
									<tr>
										<td>
											<input type="checkbox" name="selectone">
										</td>
										<td>
											<div>{{ $item->Name }}</div>
											<div>{{ $item->WeChat }}</div>
										</td>
										<td>										
											<div class="headSelect">头条</div>
											<div class="nonHeadSelect">非头条</div>
										</td>
										<td>
											<div class="priceValue">{{ $item->HeadLinePrice }}</div>
										</td>
										<td>
											<div class="priceValue">{{ $item->NonHeadLinePrice }}</div>
										</td>
										<td>
											<div class="priceValue">
											<a href="/shop/list/delete-{{$item->ResId}}"><span class="glyphicon glyphicon-trash"></span></a>
											</div>
										</td>
									</tr>		
								@endforeach
							</tbody>
						</table>
					</div>
					<div class="tableFoot">
						<button class="btn btn-warning fr">立即下单</button>
						<a class="priceValue fr" href="#" style="margin-right:10px;">查看更多</a>
						<div class="fr" style="margin-right:20px;">共选择<span class="f_red">{{ $count }}</span>个账号,应付<span class="f_red">{{ $sumprice }}</span>元</div>
					</div>
				</div>
			</div>

@endsection

