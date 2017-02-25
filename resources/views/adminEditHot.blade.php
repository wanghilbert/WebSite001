@extends('layouts.basicStruct')

@section('head')
<title>编辑热门推荐</title>
@endsection

@section('section')
<div class="container">
    <div class="row"> 
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align:center">编辑热门推荐</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="##">
                        <div class="form-group">
                            <label class="col-md-3 control-label">微信名称</label>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="WeChatName" value="##" placeholder="请输入微信名称">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">微信号</label>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="WeChatId" placeholder="请输入微信号">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">资源介绍</label>
                            <div class="col-md-7">
                            	<textarea class="form-control" rows="2" placeholder="请输入资源介绍"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">上传头像</label>
                            <div class="col-md-7">
                                <input type="file" id="inputfile">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" style="width:150px;">提交</button>
                            </div>
                        </div>                        
                    </form>
                </div> <!--pannel body-->
            </div>
        </div>
    </div> <!--row-->
</div>

@endsection