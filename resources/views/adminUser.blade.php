@extends('layouts.basicStruct')

@section('head')
<title>管理用户</title>
<link href="/bootstrap/css/ccs_list.css" rel="stylesheet">
@endsection

@section('section')
<div>
	<div class="row">
		<label class="f_orange" style="width:200px;height:60px;line-height:60px;font-size:30px;">
		全部用户
		</label> 
		<button class="fr btn btn-warning btn-lg" data-toggle="modal" data-target="#addModal">
			添加新用户
		</button>
		<!--添加新用户模态框-->
		<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;
						</button>
						<h4 class="modal-title" id="myModalLabel">
							创建新用户
						</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal" role="form" method="POST" action="##">
                        	<div class="form-group">
                            	<label class="col-md-3 control-label">用户名</label>
                            	<div class="col-md-7">
                                	<input type="text" class="form-control" name="userName" placeholder="请输入用户名">
                            	</div>
                        	</div>
                        	<div class="form-group">
                            	<label class="col-md-3 control-label">密码</label>
                            	<div class="col-md-7">
                                	<input type="text" class="form-control" name="userName" placeholder="请输入密码">
                            	</div>
                        	</div>
                        	<div class="form-group">
                            	<label class="col-md-3 control-label">权限</label>
                            	<div class="col-md-7">
									<label class="checkbox-inline">
										<input type="radio" name="optionsRadios" id="optionsRadios1" value="commonUser" checked> 普通用户
									</label>
									<label class="checkbox-inline">
										<input type="radio" name="optionsRadios" id="optionsRadios2"  value="adminUser"> 管理员
									</label>
 									<label class="checkbox-inline">
										<input type="radio" name="optionsRadios" id="optionsRadios3"  value="superAdmin"> 超级管理员
									</label>
                            	</div>
                        	</div>
                        </form>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">关闭
						</button>
						<button type="submit" class="btn btn-warning">提交
						</button>
					</div>
				</div>
			</div>
		</div>
		<!-- end 添加新用户模态框-->

		<table class="table showTable">
			<thead class="bg_orange">
				<tr>
					<th>用户名</th>
					<th>权限</th>
					<th>最后修改时间</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
				@foreach($items as $item)
					<tr>
						<td><h6>{{ $item->Name }}</h6></td>
						<td>{{ $item->WeChat }}</td>
						<td>{{ $item->AvgViews }}</td>
						<td>
							<a href="#" style="color:#ff6602;margin-right:20px;" data-toggle="modal" data-target="#editModal">编辑</a>
							<a href="#" style="color:#ff6602;">删除</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>

		<!--编辑用户模态框-->
		<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;
						</button>
						<h4 class="modal-title" id="editModalLabel">
							编辑用户信息
						</h4>
					</div>
					<div class="modal-body">
						<form class="form-horizontal" role="form" method="POST" action="##">
                        	<div class="form-group">
                            	<label class="col-md-3 control-label">用户名</label>
                            	<div class="col-md-7">
                                	<input type="text" class="form-control" name="userName" value={{ $item->Name }}>
                            	</div>
                        	</div>
                        	<div class="form-group">
                            	<label class="col-md-3 control-label">密码</label>
                            	<div class="col-md-7">
                                	<input type="text" class="form-control" name="userName" value={{ $item->WeChat }}>
                            	</div>
                        	</div>
                        	<div class="form-group">
                            	<label class="col-md-3 control-label">权限</label>
                            	<div class="col-md-7">
									<label class="checkbox-inline">
										<input type="radio" name="optionsRadios" id="optionsRadios1" value="commonUser" checked> 普通用户
									</label>
									<label class="checkbox-inline">
										<input type="radio" name="optionsRadios" id="optionsRadios2"  value="adminUser"> 管理员
									</label>
 									<label class="checkbox-inline">
										<input type="radio" name="optionsRadios" id="optionsRadios3"  value="superAdmin"> 超级管理员
									</label>
                            	</div>
                        	</div>
                        </form>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">关闭
						</button>
						<button type="submit" class="btn btn-warning">提交
						</button>
					</div>
				</div>
			</div>
		</div>
		<!-- end 编辑用户模态框-->

	</div> <!-- row -->

	<div class="row fl">
		{{ $items->links() }}
	</div>

</div>

@endsection