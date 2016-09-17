@extends('layouts.basicStruct')

@section('head')
<title>明星</title>
<link href="/bootstrap/css/ccs_list.css" rel="stylesheet">
@endsection

@section('section')
	<div style="margin-left:100px;width:800px;">
	@include('contents.search')
	</div>
	<div style="margin-top:30px;">
		<img src="/bootstrap/img/stars.png" usemap="#starMap" alt="明星">
		<map name="starMap" id="starMap">
			<area shape="rect" coords="5,6,360,334" href="#yaochen" alt="姚晨">
			<area shape="rect" coords="370,7,1092,334" href="#liuye" alt="刘烨">
			<area shape="rect" coords="5,340,360,666" href="#nini" alt="倪妮">
			<area shape="rect" coords="370,340,727,666" href="#fengshaofeng" alt="冯绍峰">
			<area shape="rect" coords="736,340,1092,666" href="#tianliang" alt="田亮">
			<area shape="rect" coords="5,674,727,1000" href="#matianyu" alt="马天宇">
			<area shape="rect" coords="736,674,1092,1000" href="#yeyiqian" alt="叶一茜">
			<area shape="rect" coords="5,1008,235,1225" href="#sunli" alt="孙俪">
			<area shape="rect" coords="244,1008,480,1225" href="#chenkun" alt="陈坤">
			<area shape="rect" coords="490,1008,727,1225" href="#chensicheng" alt="陈思成">
			<area shape="rect" coords="736,1008,1092,1225" href="#tongliya" alt="佟丽娅">
			<area shape="rect" coords="5,1234,361,1902" href="#guobiting" alt="郭碧婷">
			<area shape="rect" coords="370,1234,727,1561" href="#yangmi" alt="杨幂">
			<area shape="rect" coords="736,1234,910,1561" href="#libingbing" alt="李冰冰">
			<area shape="rect" coords="919,1234,1092,1561" href="#luyi" alt="陆毅">
			<area shape="rect" coords="370,1570,727,1902" href="#huosiyan" alt="霍思燕">
			<area shape="rect" coords="736,1570,1092,1902" href="#dujiang" alt="杜江">
		</map>
	</div>

@endsection