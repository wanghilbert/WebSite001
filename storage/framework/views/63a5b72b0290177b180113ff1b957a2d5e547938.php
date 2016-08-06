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
		<?php foreach($items1 as $name=>$href): ?>
			<a class="classbutton" role="button" href="<?php echo e($href); ?>"><?php echo e($name); ?></a>
		<?php endforeach; ?>
<!-- 		<a class="classbutton" id="class-1-1" role="button" data-toggle="popover">影视</a>
		<a class="classbutton" id="class-1-2" role="button" data-toggle="popover">综艺</a>
		<a class="classbutton" role="button" href="#">时尚</a>
		<a class="classbutton" role="button" href="#">美妆</a>
		<a class="classbutton" role="button" href="#">体育</a>
		<a class="classbutton" role="button" href="#">科技</a>
		<a class="classbutton" role="button" href="#">汽车</a> -->
	</div>

	<div class="row" style="margin-top: 20px;">
		<?php foreach($items2 as $name=>$href): ?>
			<a class="classbutton" role="button" href="<?php echo e($href); ?>"><?php echo e($name); ?></a>
		<?php endforeach; ?>
<!-- 		<a class="classbutton" role="button" href="#">游戏</a>
		<a class="classbutton" role="button" href="#">美食</a>
		<a class="classbutton" role="button" href="#">情感</a>
		<a class="classbutton" role="button" href="#">健康</a>
		<a class="classbutton" role="button" href="#">旅行</a>
		<a class="classbutton" role="button" href="#">教育</a>
		<a class="classbutton" role="button" href="#">文化</a> -->
	</div>
</div>