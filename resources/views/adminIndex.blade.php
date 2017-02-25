@extends('layouts.basicStruct')

@section('head')
<title>管理首页内容</title>
@endsection

@section('section')
@include('contents.search')
<div>
<!--编辑轮播图片-->
	<div class="row" style="margin-top:50px;">
		<label class="f_orange" style="width:200px;height:30px;line-height:30px;font-size:20px;">
		编辑轮播图片
		</label>
		<hr \>
		<div class="row">
    		<div class="col-sm-6 col-md-4">
        		<div class="thumbnail">
            		<img src="/bootstrap/img/1.png" alt="轮播缩略图1">
	        		<div class="caption col-sm-offset-1 col-md-offset-1">
        				<form class="form-horizontal" role="form" method="POST" action="##">
        			    	<div class="form-group">
                            	<label class="control-label">上传图片</label>
                            	<input type="file" id="inputfile">
                        	</div>
                       		<div class="form-group">
                            	<button type="submit" class="btn btn-warning" style="width:100px;">提交</button>
                        	</div>
        				</form>
        			</div>
        		</div> <!--thumbnail-->
    		</div>

    		<div class="col-sm-6 col-md-4">
        		<div class="thumbnail">
            		<img src="/bootstrap/img/2.png" alt="轮播缩略图2">
	        		<div class="caption col-sm-offset-1 col-md-offset-1">
        				<form class="form-horizontal" role="form" method="POST" action="##">
        			    	<div class="form-group">
                            	<label class="control-label">上传图片</label>
                            	<input type="file" id="inputfile">
                        	</div>
                       		<div class="form-group">
                            	<button type="submit" class="btn btn-warning" style="width:100px;">提交</button>
                        	</div>
        				</form>
        			</div>
        		</div> <!--thumbnail-->
    		</div>

    		<div class="col-sm-6 col-md-4">
        		<div class="thumbnail">
            		<img src="/bootstrap/img/3.png" alt="轮播缩略图3">
	        		<div class="caption col-sm-offset-1 col-md-offset-1">
        				<form class="form-horizontal" role="form" method="POST" action="##">
        			    	<div class="form-group">
                            	<label class="control-label">上传图片</label>
                            	<input type="file" id="inputfile">
                        	</div>
                       		<div class="form-group">
                            	<button type="submit" class="btn btn-warning" style="width:100px;">提交</button>
                        	</div>
        				</form>
        			</div>
        		</div> <!--thumbnail-->
    		</div>

    	</div>
	</div>
<!-- end 编辑轮播图片-->
<!-- 编辑热门推荐-->
	<div class="row" style="margin-top:20px;">
		<label class="f_orange" style="width:200px;height:30px;line-height:30px;font-size:20px;">
			编辑热门推荐
		</label>
		<hr \>
		@include('contents.editHotShow')
	</div>
<!-- end 编辑热门推荐-->


<!-- 上传EXCEL表-->
	<div class="row" style="margin-top:20px;">
		<label class="f_orange" style="width:200px;height:30px;line-height:30px;font-size:20px;">
			上传EXCEL配置表
		</label>
		<hr \>
		<form class="form-horizontal" role="form" method="POST" action="##">
           	<div class="form-group">
                <input class="col-md-7" type="file" id="inputfile">
           	</div>
        	<div class="form-group">
            	<button type="submit" class="btn btn-warning" style="width:100px;margin-left:20px;">提交</button>
        	</div>
        </form>
	</div>
<!-- 上传EXCEL表-->
</div>
@endsection