@extends('layouts.basicStruct')

@section('head')
<title>关于我们</title>
@endsection

@section('section')
@include('contents.search')

			<br />
			<div class="row" id="main-text">
				<!--	<div class="wray">-->
				<div>
					<div class="company clearFix">
						<ul class="fl company_name">
							<li class="current" id="aboutLabel">
								<div class="sanjiaoxing"></div>
								<span class="glyphicon glyphicon-user"></span>&nbsp;关于我们</li>
							<li id="contactLabel">
								<div class="sanjiaoxing"></div>
								<span class="glyphicon glyphicon-phone-alt"></span>&nbsp;联系我们</li>
							<li class="">
								<div class="sanjiaoxing"></div>
								<span class="glyphicon glyphicon-bookmark"></span>&nbsp;加入我们</li>
							<li>
								<div class="sanjiaoxing"></div>
								<span class="glyphicon glyphicon-question-sign"></span>&nbsp;帮助中心</li>
						</ul>
						<div id="aboutUs" class="company_box fl">
							<div style="display:block;" class="company_box_1">
								<h2>关于我们</h2>
								<h3> DigitalWe简介：</h3>
								<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;为什么要做社会化营销？便宜！</p>
								<br />
								<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;当你考虑要不要做社会化传播的时候，考虑第一点，这个事情是不是便宜。</p>
								<br />
								<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;首先来说要做社会化媒体传播。首先你要明白为什么要做广告？做广告是为了传播也好，其他也好，
								其本质上是为了因为便宜。为什么这么说呢？当你有一天要推广产品的时候，你就有集中可能性去做。如果没有广告的话，那么就只能靠你一个个雇员，去挨家挨户敲门。
								这种情况，第一，成本高，第二，说出来的话是不可控的。
								</p>
								<br />
								<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;……</p>
								<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;……</p>
								<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;……</p>
							</div>
						</div>
						<div id="contectUs" class="company_box fl">
							<div style="display:block;" class="company_box_1">
								<h2>联系我们</h2>
								<h3>电话</h3>
								<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
								<br />
								<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
								<br />
								<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
								<br />
								<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;……</p>
								<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;……</p>
								<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;……</p>
							</div>
						</div>

					</div>
				</div>
			</div>
<script type="text/javascript">

	$(function() {
		$("#contectUs").hide();
		$("#contactLabel").click(function(){
			if ($("#contectUs").is(":hidden")) 
			{
				$("#aboutUs").hide();
				$("#contectUs").show();
			}
		});	
		$("#aboutLabel").click(function(){

			if ($("#aboutUs").is(":hidden")) 
			{
				$("#contectUs").hide();
				$("#aboutUs").show();
			}
		});				
	});

</script>
@endsection