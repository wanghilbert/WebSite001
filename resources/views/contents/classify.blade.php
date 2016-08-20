<div class="clearfix">
	<div class="pull-left" style="margin-top:15px;margin-bottom: 15px;margin-left: 10px;font-size: small;">
		按分类浏览
	</div>
</div>
<div class="row">
	<div class="row" style="margin-top: 20px;">
		<div id="popover-title" class="hide">
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
		</div>
	</div>
		@foreach ($items1 as $item)
			@if(($item->TagId)%7 == 1)
				<div class="row" style="margin-top: 20px;">
			@endif
			<a class="classbutton" role="button" href="/res/{{$item->TagId}}/1">{{$item->Name}}</a>
			@if(($item->TagId)%7 == 0)
				</div>
			@endif
		@endforeach
	</div>
</div>