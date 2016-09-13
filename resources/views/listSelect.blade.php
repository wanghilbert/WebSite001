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
								    <a onclick="cleanReadNumTag()">不限</a>
							</div>
							<div class="filter_select fl ">
								<ul class="clearFix limit_height ">
									<li>
										<a class="hot" id="avg_topreadnum-0-1000" href="javascript:void(0)" onclick="procFilterTag('avg_topreadnum','0-1000')">1000以下</a>
									</li>
									<li>
										<a id="avg_topreadnum-1000-5000" href="javascript:void(0)" onclick="procFilterTag('avg_topreadnum','1000-5000')">1000-5000</a>
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
										<a class="hot" id="weixin_fans-0-1w" href="javascript:void(0)" onclick="procFilterTag('weixin_fans','0-1w')">1万以下</a>
									</li>
									<li>
										<a id="weixin_fans-1w-5w" href="javascript:void(0)" onclick="procFilterTag('weixin_fans','1w-5w')">1万-5万</a>
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
										<a id="weixin_prov-beijing" href="javascript:void(0)" onclick="procFilterTag('weixin_prov','beijing')">北京市</a>
									</li>
									<li>
										<a id="weixin_prov-shanghai" href="javascript:void(0)" onclick="procFilterTag('weixin_prov','shanghai')">上海市</a>
									</li>
									<li>
										<a id="weixin_prov-guangdong" href="javascript:void(0)" onclick="procFilterTag('weixin_prov','guangdong')">广东省</a>
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
            							<option id="news_position-1" onclick="onlyAddTag('news_position','1')">头条</option>
            							<option id="news_position-2" onclick="onlyAddTag('news_position','2')">非头条</option>
									</select>
								</form>
							</div>
							<div class="filter_nolimit fl bg_orange ">
								    <a href="#" onclick="cleanRead()">不限</a>
							</div>
							<div class="filter_select fl ">
								<ul class="clearFix limit_height ">
									<li>
										<a id="price_position-0-1000" href="javascript:void(0)" onclick="procFilterTag('price_position','0-1000')">1000元以下</a>
									</li>
									<li>
										<a id="price_position-1000-5000" href="javascript:void(0)" onclick="procFilterTag('price_position','1000-5000')">1000元-5000元</a>
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
							<br />
							<div style="margin-left:200px">
								<form>
									<input class="form-control" type="text" name="low"  style="float:left;width:80px">
									<label class="control-label fl">--</label>
									<input class="form-control"  type="text" name="high" style="float:left;width:80px;margin-right:20px;">
									<button type="submit" class="btn btn-default fl" onclick="procOnlyAddTag('price_position')">确定</button>
								</form>
							</div>										
						</div>
						<!--END of Line Price -->
						<div class="clearFix filter_list " style="border-bottom: #e5e5e5 1px dotted ">
							<div class="filter_label fl ">
								认证：
							</div>
							<div class="filter_nolimit fl bg_orange ">
								    <a >不限</a>
							</div>
							<div class="filter_select fl ">
								<ul class="clearFix limit_height ">
									<li>
										<a id="weibo_verifytype-yes" href="javascript:void(0)" onclick="procFilterTag('weibo_verifytype','yes')">微博认证</a>
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
									<button class="btn btn-default fl" onclick="procOnlyAddTag('k')">搜索</button>
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
						@foreach($items as $item)
							<tr>
								<td>
									<input type="checkbox" name="selectThis">
								</td>
								<td>
									<h6>{{ $item->Name }}</h6>
									<h6>{{ $item->WeChat }}</h6>
								</td>
								<td>{{ $item->AvgViews }}</td>
								<td>{{ $item->FansNum }}万</td>
								<td>{{ $item->HeadLinePrice }}元</td>
								<td>{{ $item->NonHeadLinePrice }}元</td>
								<td>{{ $item->Tags }}</td>
								<td>100%</td>
								<td>100</td>
								<td>{{ $item->CostEffective }}</td>
								<td><a href="#" style="color:#ff6602">收藏</a></td>						
							</tr>						
						@endforeach
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

<script type="text/javascript">
	var basicHref=window.location.href;
	var finalHref=basicHref;		

	$(document).ready(function(){

		var tagArray=basicHref.split('&');
		var tageNum=0;
		if (tagArray.length>1)		
		{
			tageNum=tagArray.length-1;
			for (var i = tageNum; i >0; i--)
			{
				var tagString = tagArray.pop();
				
				var tagTypePos=tagString.indexOf('=');
				var tagType = tagString.substring(0,tagTypePos);
				var tagNameString = tagString.substring(tagTypePos+1,tagString.length);
				var tagNameArray = tagNameString.split(',');
				var tagNameNum = tagNameArray.length;
				for(var j=0;j<tagNameNum;j++)
				{
					$('#'+tagType+'-'+tagNameArray[j]).addClass('tagSelected');
				}
			}
		}
	});

	function resetPage()
	{
		var pagePos = basicHref.indexOf('page');
		var stringBeforePage = basicHref.substring(0,pagePos);
		var headofHref = stringBeforePage + 'page=1';
		return headofHref;
	}
    
    function getStringBtPageTag(typePos)
    {
    	var stringBeforeTag=basicHref.substring(0,typePos);

    	var firstTagAfterPage=stringBeforeTag.indexOf('&');
    	var stringBtPageTag=stringBeforeTag.substring(firstTagAfterPage,stringBeforeTag.length-1);

    	return stringBtPageTag;
    }

	function checkFirstTagInBasic(){
		var result=false;
		if (basicHref.indexOf('?')==-1)
		{
			basicHref+='?page=1';
			result=true;
		}
		return result;
	}
	function cleanFirstTag()
	{
		if ('-1'==finalTag.indexOf('&'))
		{
			basicHref=basicHref.substring(0,basicHref.indexOf('?'));
		}
	}

    function addFirstTagType(tagType,tagName)
    {
    	var outputHref='';
    	var firstTagPosInBasic=-1;
    	var stringAfterPage='';    	

    	if(checkFirstTagInBasic())
    	{
    		outputHref=basicHref+'&'+tagType+'='+tagName;
    	}
    	else
    	{
     		firstTagPosInBasic=basicHref.indexOf('&');
    		stringAfterPage=basicHref.substring(firstTagPosInBasic,basicHref.length);
    		var herfHead = resetPage();
    		outputHref= herfHead+stringAfterPage+'&'+tagType+'='+tagName;
    	}
    	return outputHref;
    }

    function addMoreTagName(tagType,tagName)
    {

    	var typePos=basicHref.indexOf(tagType);

    	var stringBtPageTag = getStringBtPageTag(typePos);

    	var herfHead = resetPage();
        
    	var stringBeforeNewTag = herfHead + stringBtPageTag;

    	var stringAfterTag=basicHref.substring(typePos,basicHref.length);
    	var nextTagPos=stringAfterTag.indexOf('&');
		var newTag ='';
    	if (-1 == nextTagPos)
    	{
    		newTag = '&'+stringAfterTag+','+tagName;
    	}
    	else
    	{
     		var thisTagString=stringAfterPage.substring(0,nextTagPos);
   			var nextTagString = stringAfterPage.substring(nextTagPos,stringAfterPage.length);

   			newTag = '&'+thisTagString+','+tagName+nextTagString;
    	}

    	var outputTag=stringBeforeNewTag+newTag;
    	return outputTag;
    }
    
    function delTagName(posTagInBasic,tagTypeString,posNextTag,tagName)
    {
    	alert('in:delete');
    	var stringBtPageTag = getStringBtPageTag(posTagInBasic);
    	var herfHead = resetPage();
 
    	var stringAfterTag='';
    	if('-1'==posNextTag)
    	{
 			stringAfterTag='';
    	}
    	else
    	{
    		stringAfterTag = basicHref.substring(posTagInBasic+posNextTag,basicHref.length);
    	}
    	alert('stringAfterTag = '+stringAfterTag);
    	var posNameInThisType = tagTypeString.indexOf(tagName);
    	var posDot = tagTypeString.indexOf(',');
    	var newTagTypeString='';
    	alert('posName = '+posNameInThisType+' posDot='+posDot);

    	if('-1'==posDot)
    	{
    		alert('1');
			newTagTypeString='';
    	}    	
    	else if(posDot < posNameInThisType)
    	{
     		alert('2');
   			newTagTypeString = '&'+tagTypeString.replace(','+tagName,'');
    	}
    	else
    	{
     		alert('3');
   			newTagTypeString = '&'+tagTypeString.replace(tagName+',','');
    	}
    	alert('newTag=' + newTagTypeString);

    	var outputHref = herfHead+stringBtPageTag+newTagTypeString+stringAfterTag;
     	return outputHref;    	
    }

	function procFilterTag(tagType,tagName){

		var typePosInBasic=basicHref.indexOf(tagType);

		if (-1 == typePosInBasic) 
		{
			alert('goto:addFist');
			finalTag=addFirstTagType(tagType,tagName);
		}
		else
		{

			var stringAfterTag=basicHref.substring(typePosInBasic,basicHref.length);
			var posNextTag = stringAfterTag.indexOf('&');
			var thisTagTypeString ='';
			if ('-1'==posNextTag)
			{
				thisTagTypeString = stringAfterTag
			}
			else
			{
				thisTagTypeString = stringAfterTag.substring(0,posNextTag);
			}
			alert(thisTagTypeString);
			var posNameInThisType = thisTagTypeString.indexOf(tagName);

			if('-1'==posNameInThisType)
			{	
				alert('goto:addMore');
				finalTag=addMoreTagName(tagType,tagName);
			}
			else
			{
				alert('goto:delete');
				finalTag=delTagName(typePosInBasic,thisTagTypeString,posNextTag,tagName);
			}
		}
		alert(finalTag);
		window.location = finalTag;		
	}
</script>

@endsection