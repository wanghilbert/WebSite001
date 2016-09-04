@extends('layouts.basicStruct')

@section('head')
<title>列表</title>
<link href="/bootstrap/css/ccs_list.css" rel="stylesheet">
@endsection

@section('section')
@include('contents.search')
@include('contents.classify')
			<div class="row">
				<div class="filter" >
					<h2></h2>
					<div class="filter_1">
						<div class="clearFix filter_list " style="border-bottom: #e5e5e5 1px dotted ">
							<div class="filter_label fl ">
								阅读量：
							</div>
							<div class="filter_nolimit fl bg_orange ">
								    <a href="# ">不限</a>
							</div>
							<div class="filter_select fl ">
								<ul class="clearFix limit_height ">
									<li>
										<a class="hot " href="# ">1000以下</a>
									</li>
									<li>
										<a href="# ">1000-5000</a>
									</li>
									<li>
										<a href="# ">5000-1万</a>
									</li>
									<li>
										<a href="# ">1万-2万</a>
									</li>
									<li>
										<a href="# ">2万-4万</a>
									</li>
									<li>
										<a href="# ">4万-8万</a>
									</li>
									<li>
										<a href="# ">8万-10万</a>
									</li>
									<li>
										<a href="# ">10万以上</a>
									</li>
								</ul>
							</div>										
						</div>
						<!--END of Line 1  -->
						<div class="clearFix filter_list " style="border-bottom: #e5e5e5 1px dotted ">
							<div class="filter_label fl ">
								粉丝数：
							</div>
							<div class="filter_nolimit fl bg_orange ">
								    <a href="# ">不限</a>
							</div>
							<div class="filter_select fl ">
								<ul class="clearFix limit_height ">
									<li>
										<a class="hot " href="# ">1万以下</a>
									</li>
									<li>
										<a href="# ">1万-5万</a>
									</li>
									<li>
										<a href="# ">5万-10万</a>
									</li>
									<li>
										<a href="# ">10万-20万</a>
									</li>
									<li>
										<a href="# ">20万-40万</a>
									</li>
									<li>
										<a href="# ">40万-80万</a>
									</li>
									<li>
										<a href="# ">80万-120万</a>
									</li>
									<li>
										<a href="# ">120万-200万</a>
									</li>
									<li>
										<a href="# ">200万以上</a>
									</li>
								</ul>
							</div>										
						</div>
						<!--END of Line 2  -->
						<div class="clearFix filter_list " style="border-bottom: #e5e5e5 1px dotted ">
							<div class="filter_label fl ">
								区域：
							</div>
							<div class="filter_nolimit fl bg_orange ">
								    <a href="#">不限</a>
							</div>
							<div class="filter_select fl ">
								<ul class="clearFix limit_height ">
									<li>
										<a href="# ">北京市</a>
									</li>
									<li>
										<a href="# ">上海市</a>
									</li>
									<li>
										<a href="# ">广东省</a>
									</li>
									<li>
										<a href="# ">天津市</a>
									</li>
									<li>
										<a href="# ">河北省</a>
									</li>
									<li>
										<a href="# ">山西省</a>
									</li>
									<li>
										<a href="# ">内蒙古自治区</a>
									</li>
									<li>
										<a href="# ">辽宁省</a>
									</li>
									<li>
										<a href="# ">吉林省</a>
									</li>
									<li>
										<a href="# ">黑龙江省</a>
									</li>
									<li>
										<a href="# ">浙江省</a>
									</li>
									<li>
										<a href="# ">更多区域</a>
									</li>
								</ul>								
								<ul  id="moreArea" class="clearFix limit_height">
									<li>
										<a href="# ">北京市</a>
									</li>
									<li>
										<a href="# ">上海市</a>
									</li>
									<li>
										<a href="# ">广东省</a>
									</li>
									<li>
										<a href="# ">天津市</a>
									</li>
									<li>
										<a href="# ">河北省</a>
									</li>
									<li>
										<a href="# ">山西省</a>
									</li>
									<li>
										<a href="# ">内蒙古自治区</a>
									</li>
									<li>
										<a href="# ">辽宁省</a>
									</li>
									<li>
										<a href="# ">吉林省</a>
									</li>
									<li>
										<a href="# ">黑龙江省</a>
									</li>
									<li>
										<a href="# ">浙江省</a>
									</li>
								</ul>
							</div>										
						</div>
						<!--END of Line3  -->

						<div class="clearFix filter_list " style="border-bottom: #e5e5e5 1px dotted ">
							<div class="filter_label fl ">
								价格：
							</div>
							<div class="" style="float:left;width:80px;margin-right:10px;">
								<form>
							       <select class="form-control">
            							<option>头条</option>
            							<option>非头条</option>
									</select>
								</form>
							</div>
							<div class="filter_nolimit fl bg_orange ">
								    <a href="#">不限</a>
							</div>
							<div class="filter_select fl ">
								<ul class="clearFix limit_height ">
									<li>
										<a class="hot " href="# ">1000元以下</a>
									</li>
									<li>
										<a href="# ">1000元-5000元</a>
									</li>
									<li>
										<a href="# ">5000元-1万元</a>
									</li>
									<li>
										<a href="# ">5000元-1万元</a>
									</li>
									<li>
										<a href="# ">1万元-5万元</a>
									</li>
									<li>
										<a href="# ">5万元-10万元</a>
									</li>
									<li>
										<a href="# ">10万元以上</a>
									</li>
								</ul>
							</div>
							<div style="margin-left:200px">
								<form>
									<input class="form-control" type="text" name="low"  style="float:left;width:80px">
									<label class="control-label fl">--</label>
									<input class="form-control"  type="text" name="high" style="float:left;width:80px;margin-right:20px;">
									<button type="submit" class="btn btn-default fl">确定</button>
								</form>
							</div>										
						</div>
						<!--END of Line Price -->
						<div class="clearFix filter_list " style="border-bottom: #e5e5e5 1px dotted ">
							<div class="filter_label fl ">
								认证：
							</div>
							<div class="filter_nolimit fl bg_orange ">
								    <a href="http://taogonghao.com/wemedia.html?weixin_tags=0&page=1 ">不限</a>
							</div>
							<div class="filter_select fl ">
								<ul class="clearFix limit_height ">
									<li>
										<a href="# ">微博认证</a>
									</li>
								</ul>
							</div>										
						</div>
						<!--END of Line RenZheng -->
						<div class="clearFix filter_list " style="border-bottom: #e5e5e5 1px dotted ">
							<div class="filter_label fl ">
								关键词：
							</div>
							<div class="fl">
								<form>
									<input class="form-control" type="text" name="searchID" value="微信名称/微信号" style="float:left;width:300px;margin-left:20px;margin-right:20px;">
									<button type="submit" class="btn btn-default fl">搜索</button>
								</form>
							</div>										
						</div>
						<!--END of Line Search -->
					</div>
				</div>
			</div>
			<!--END of Tags -->
			<div class="row" >
				<div class="f_orange" style="width:200px;height:60px;line-height:60px;font-size:30px;">
					全部账号
				</div>
				<table class="table showTable">
					<thead class="bg_orange">
						<tr>
							<th>
								<input type="checkbox" name="selectAll">全选
							</th>
							<th>
								微博名
							</th>
							<th>
								平均阅读量
							</th>
							<th>
								粉丝数
							</th>
							<th>
								直发价格
							</th>
							<th>
								转发价格
							</th>
							<th>
								标签
							</th>
							<th>
								近一个月接单率
							</th>
							<th>
								信用值
							</th>
							<th>
								阅读性价比
							</th>
							<th>
								操作
							</th>							
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<input type="checkbox" name="selectThis">
							</td>
							<td>
								<h6>戏说娱乐圈</h6>
								<h6>xishuoyule</h6>
							</td>
							<td>23638</td>
							<td>15万</td>
							<td>3500元</td>
							<td>2500元</td>
							<td>女性</td>
							<td>100%</td>
							<td>100</td>
							<td>6.92</td>
							<td><a href="#" style="color:#ff6602">收藏</a></td>						
						</tr>
					</tbody>
				</table>
				<div>
					<div class="fr">
					<form class="fr">
						<label>跳转到第</label>
						<input type="text" name="pageNum" style="width:80px;">
						<label>页</label>
						<button type="submit" class="btn btn-default fr" style="margin-left:20px">确定</button>
					</form>
					</div>
					<div class="fr">
						<ul class="pagination">
    						<li><a href="#">&laquo;</a></li>
   							<li><a href="#">1</a></li>
    						<li><a href="#">2</a></li>
    						<li><a href="#">3</a></li>
    						<li><a href="#">4</a></li>
   							<li><a href="#">5</a></li>
    						<li><a href="#">&raquo;</a></li>
						</ul> 
					</div>
				</div>
			</div>
@endsection