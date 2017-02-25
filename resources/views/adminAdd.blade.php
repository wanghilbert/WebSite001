@extends('layouts.basicStruct')

@section('head')
<title>新建账号资源</title>
@endsection

@section('section')

<div class="container">
    <div class="row"> 
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align:center">新建资源</div>
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
                                <span class="help-block">
                                    <strong>微信号已存在</strong>
                                </span>

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">上传头像</label>
                            <div class="col-md-7">
                                <input type="file" id="inputfile">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">粉丝数</label>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="FansNum" placeholder="请输入粉丝数">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">头条平均阅读数</label>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="ReadNum" placeholder="请输入头条平均阅读数">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">头条平均阅读数</label>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="ReadNum" placeholder="请输入头条平均阅读数">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">收藏数</label>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="ReadNum" placeholder="请输入收藏数">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label"><span style="color:red;">头条价格</span></label>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="ReadNum" placeholder="请输入头条价格">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">非头条价格</label>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="ReadNum" placeholder="请输入非头条价格">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">标签</label>
                            <div class="col-md-8">
                            <label class="checkbox-inline">
                                <input type="checkbox" id="label1" value="label1">互联网电商
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" id="label2" value="label2">媒体名人
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" id="label3" value="label3">财经营销
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" id="label4" value="label4">生活百科
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" id="label5" value="label5">电影
                            </label>
                             <label class="checkbox-inline">
                                <input type="checkbox" id="label6" value="label6">音乐
                            </label>
                           </div>

                            <div class="col-md-offset-3 col-md-8">
                            <label class="checkbox-inline">
                                <input type="checkbox" id="label7" value="label7">娱乐
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" id="label8" value="label8">视频
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" id="label9" value="label9">美食
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" id="label10" value="label10">旅行
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" id="label1" value="label1">地域
                            </label>
                             <label class="checkbox-inline">
                                <input type="checkbox" id="label2" value="label2">汽车
                            </label>
                             <label class="checkbox-inline">
                                <input type="checkbox" id="label3" value="label3">...
                            </label>
                           </div>


                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" style="width:150px;">提交</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<br /><br /><br /><br /><br />				

@endsection