

		<div class="row" id="classify">
			<div class="clearfix">
				<div class="pull-left" style="margin-top:15px;margin-bottom: 15px;margin-left: 10px;margin-top:30px; font-size: small;">
					按分类浏览
				</div>
			</div>
			<!-- <div class="row" style="margin-top: 20px; margin-left:20px;"> -->
				@foreach($tags as $tag)
					@if ($tag->TagId % 8 == 0)
					<div class="row" style="margin-top: 20px; margin-left:20px;">
					@endif
					<a class="classbutton" id="weixin_tags-{{ $tag->TagId }}" role="button" href="list?page=1&weixin_tags={{ $tag->TagId }}" >{{ $tag->Name }}</a>
					@if ($tag->TagId % 8 == 7)
					</div>
					@endif
				@endforeach
				<!-- <a class="classbutton" id="weixin_tags-1" role="button" href="list?page=1&weixin_tags=1" >影视</a> -->
<!-- 				<div id="popover-title" class="hide">
					<label>加入我的列表 </label>
					<input type="checkbox">
				</div>
				<div id="popover-content" class="hide">
					<table class="table table-striped" style="width: 500px;">
						<thead>
							<tr>
								<th>简介</th>
								<th style="width: 50px;">类别</th>
								<th style="width: 50px;">粉丝</th>
								<th style="width: 50px;">备注</th>
								<th style="width: 50px;">价格</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>这是一大段的简介，可能还有图</td>
								<td>leibie</td>
								<td>11万</td>
								<td>无</td>
								<td>￥100.00</td>
							</tr>
						</tbody>
					</table>
				</div> -->

	<!-- 			<a class="classbutton" id="weixin_tags-2" role="button" href="list?page=1&weixin_tags=2" >娱乐</a>
				<a class="classbutton" id="weixin_tags-3" role="button" href="list?page=1&weixin_tags=3" >时尚</a>
				<a class="classbutton" id="weixin_tags-4" role="button" href="list?page=1&weixin_tags=4" >美妆</a>
				<a class="classbutton" id="weixin_tags-5" role="button" href="list?page=1&weixin_tags=5" >体育</a>
				<a class="classbutton" id="weixin_tags-6" role="button" href="list?page=1&weixin_tags=6" >科技</a>
				<a class="classbutton" id="weixin_tags-7" role="button" href="list?page=1&weixin_tags=7" >汽车</a>
			</div>
				<div class="row" style="margin-top: 20px; margin-left:20px;">
					<a class="classbutton" id="weixin_tags-8" role="button" href="list?page=1&weixin_tags=8" >游戏</a>
					<a class="classbutton" id="weixin_tags-9" role="button" href="list?page=1&weixin_tags=9" >美食</a>
					<a class="classbutton" id="weixin_tags-10" role="button" href="list?page=1&weixin_tags=10" >情感</a>
					<a class="classbutton" id="weixin_tags-11" role="button" href="list?page=1&weixin_tags=11">健康</a>
					<a class="classbutton" id="weixin_tags-12" role="button" href="list?page=1&weixin_tags=12">旅行</a>
					<a class="classbutton" id="weixin_tags-13" role="button" href="list?page=1&weixin_tags=13">教育</a>
					<a class="classbutton" id="moreButton" role="button">更多</a>
				</div>
				<div class="row" id="moreTag" style="margin-top: 20px; margin-left:20px;">
					<a class="classbutton" role="button" href="#">游戏</a>
					<a class="classbutton" role="button" href="#">美食</a>
					<a class="classbutton" role="button" href="#">情感</a>
					<a class="classbutton" role="button" href="#">健康</a>
					<a class="classbutton" role="button" href="#">旅行</a>
					<a class="classbutton" role="button" href="#">教育</a>
					<a class="classbutton" role="button" href="#">文化</a>
				</div> -->
		</div>

<script type="text/javascript">
			$(function() {
				$("#moreTag").hide();
				$("#moreButton").click(function(){
					if ($("#moreTag").is(":hidden")) 
					{

						$("#moreTag").show();
						$("#moreButton").text("收起");
					}
					else
					{
						$("#moreTag").hide();
						$("#moreButton").text("更多");						
					}
				});	


			});
</script>
