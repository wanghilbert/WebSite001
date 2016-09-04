@extends('layouts.basicStruct')

@section('head')
<title>购物车</title>
<link href="bootstrap/css/css_shopping.css" rel="stylesheet">
@endsection

@section('section')
@include('contents.search')

			<br />
			<div style="width:1000px;height:800px;">
				<div class="userPanel">
					<img src="bootstrap/img/baby.png" style="width:219px;">
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
								<tr>
									<td>
										<input type="checkbox" name="selectone">
									</td>
									<td>
										<div>戏说娱乐圈</div>
										<div>xishuoyule</div>
									</td>
									<td>
										<div class="headSelect">头条</div>
										<div class="nonHeadSelect">非头条</div>
									</td>
									<td>
										<div class="priceValue">130000</div>
									</td>
									<td>
										<div class="priceValue">130000</div>
									</td>
									<td>
										<div class="priceValue">
										<span class="glyphicon glyphicon-trash"></span>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="tableFoot">
						<button class="btn btn-warning fr">立即下单</button>
						<a class="priceValue fr" href="#" style="margin-right:10px;">查看更多</a>
					</div>
				</div>
			</div>

@endsection