<script type="text/javascript">
$(function() {
	$('moreTagRow').hide();
  	$("#moreButton").click(function(){
  	 	alert('!!show!!');
 	 	$("#moreTagRow").show();
  	});

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
            });
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
            });
}
</script>

<div class="clearfix">
	<div class="pull-left" style="margin-top:25px;margin-bottom: 15px;margin-left: 10px;font-size: 16px;">
		标签：
	</div>
</div>
<div class="row">
	<div class="row" >
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
	<div class="row" style="margin-left:50px;">
		<div class="row" style="margin-top: 5px;">
			@for($i=1;$i<=7;$i++)
			<div class="classbutton" role="button" href="#">互联网</div>
			@endfor
		</div>
		<div class="row" style="margin-top: 5px;">
			@for($i=1;$i<=6;$i++)
			<div class="classbutton" role="button" href="#">互联网</div>
			@endfor
			<input class="classbutton" type="button" id="moreButton" value="更多分类">
		</div>
		<div class="row" id="moreTagRow" style="margin-top: 5px;">
			@for($i=1;$i<=7;$i++)
			<div class="classbutton" role="button" href="#">互联网</div>
			@endfor
		</div>
	</div>
</div>

