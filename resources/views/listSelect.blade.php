@extends('layouts.basicStruct')

@section('head')
<title>列表</title>
<link href="/bootstrap/css/ccs_list.css" rel="stylesheet">
@endsection

@section('section')
@include('contents.search')
@include('contents.classify')
		<div>
			<div class="row">
				<div class="filter" >
					<h2></h2>
					<div class="filter_1">
						<div class="clearFix filter_list " style="border-bottom: #e5e5e5 1px dotted ">
							<div class="filter_label fl ">
								阅读量：
							</div>
							<div class="filter_nolimit fl bg_orange ">
								    <a href="javascript:void(0)" onclick="noLimitTag('avg_topreadnum')">不限</a>
							</div>
							<div class="filter_select fl ">
								<ul class="clearFix limit_height ">
									<li>
										<a class="hot" id="avg_topreadnum-0-1000" href="javascript:void(0)" onclick="onlyAddTag('avg_topreadnum','0-1000')">1000以下</a>
									</li>
									<li>
										<a id="avg_topreadnum-1000-5000" href="javascript:void(0)" onclick="onlyAddTag('avg_topreadnum','1000-5000')">1000-5000</a>
									</li>
									<li>
										<a id="avg_topreadnum-5000-10000" href="javascript:void(0)" onclick="onlyAddTag('avg_topreadnum','5000-10000')">5000-1万</a>
									</li>
									<li>
										<a id="avg_topreadnum-10000-20000" href="javascript:void(0)" onclick="onlyAddTag('avg_topreadnum','10000-20000')">1万-2万</a>
									</li>
									<li>
										<a id="avg_topreadnum-20000-40000" href="javascript:void(0)" onclick="onlyAddTag('avg_topreadnum','20000-40000')">2万-4万</a>
									</li>
									<li>
										<a id="avg_topreadnum-40000-80000" href="javascript:void(0)" onclick="onlyAddTag('avg_topreadnum','40000-80000')">4万-8万</a>
									</li>
									<li>
										<a id="avg_topreadnum-80000-100000" href="javascript:void(0)" onclick="onlyAddTag('avg_topreadnum','80000-100000')">8万-10万</a>
									</li>
									<li>
										<a id="avg_topreadnum-100000-MAX" href="javascript:void(0)" onclick="onlyAddTag('avg_topreadnum','100000-MAX')">10万以上</a>
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
								    <a href="javascript:void(0)" onclick="noLimitTag('weixin_fans')">不限</a>
							</div>
							<div class="filter_select fl ">
								<ul class="clearFix limit_height ">
									<li>
										<a class="hot" id="weixin_fans-0-10000" href="javascript:void(0)" onclick="onlyAddTag('weixin_fans','0-10000')">1万以下</a>
									</li>
									<li>
										<a id="weixin_fans-1-5" href="javascript:void(0)" onclick="onlyAddTag('weixin_fans','1-5')">1万-5万</a>
									</li>
									<li>
										<a id="weixin_fans-5-10" href="javascript:void(0)" onclick="onlyAddTag('weixin_fans','5-10')">5万-10万</a>
									</li>
									<li>
										<a id="weixin_fans-10-20" href="javascript:void(0)" onclick="onlyAddTag('weixin_fans','10-20')">10万-20万</a>
									</li>
									<li>
										<a id="weixin_fans-20-40" href="javascript:void(0)" onclick="onlyAddTag('weixin_fans','20-40')">20万-40万</a>
									</li>
									<li>
										<a id="weixin_fans-40-80" href="javascript:void(0)" onclick="onlyAddTag('weixin_fans','40-80')">40万-80万</a>
									</li>
									<li>
										<a id="weixin_fans-80-120" href="javascript:void(0)" onclick="onlyAddTag('weixin_fans','80-120')">80万-120万</a>
									</li>
									<li>
										<a id="weixin_fans-120-200" href="javascript:void(0)" onclick="onlyAddTag('weixin_fans','120-200')">120万-200万</a>
									</li>
									<li>
										<a id="weixin_fans-200-MAX" href="javascript:void(0)" onclick="onlyAddTag('weixin_fans','200-MAX')">200万以上</a>
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
								    <a href="javascript:void(0)" onclick="noLimitTag('weixin_prov')">不限</a>
							</div>
							<div class="filter_select fl ">
								<ul class="clearFix limit_height ">
									<li>
										<a id="weixin_prov-beijing" href="javascript:void(0)" onclick="onlyAddTag('weixin_prov','beijing')">北京市</a>
									</li>
									<li>
										<a id="weixin_prov-shanghai" href="javascript:void(0)" onclick="onlyAddTag('weixin_prov','shanghai')">上海市</a>
									</li>
									<li>
										<a id="weixin_prov-guangdong" href="javascript:void(0)" onclick="onlyAddTag('weixin_prov','guangdong')">广东省</a>
									</li>
									<li>
										<a id="weixin_prov-tianjin" href="javascript:void(0)" onclick="onlyAddTag('weixin_prov','tianjin')">天津市</a>
									</li>
									<li>
										<a id="weixin_prov-hebei" href="javascript:void(0)" onclick="onlyAddTag('weixin_prov','hebei')">河北省</a>
									</li>
									<li>
										<a id="weixin_prov-shanxi" href="javascript:void(0)" onclick="onlyAddTag('weixin_prov','shanxi')">山西省</a>
									</li>
									<li>
										<a id="weixin_prov-neimeng" href="javascript:void(0)" onclick="onlyAddTag('weixin_prov','neimeng')">内蒙古自治区</a>
									</li>
									<li>
										<a id="weixin_prov-liaoning" href="javascript:void(0)" onclick="onlyAddTag('weixin_prov','liaoning')">辽宁省</a>
									</li>
									<li>
										<a id="weixin_prov-jilin" href="javascript:void(0)" onclick="onlyAddTag('weixin_prov','jilin')">吉林省</a>
									</li>
									<li>
										<a id="weixin_prov-heilongjiang" href="javascript:void(0)" onclick="onlyAddTag('weixin_prov','heilongjiang')">黑龙江省</a>
									</li>
									<li>
										<a id="weixin_prov-zhejiang" href="javascript:void(0)" onclick="onlyAddTag('weixin_prov','zhejiang')">浙江省</a>
									</li>
									<li>
										<a id="weixin_prov-anhui" href="javascript:void(0)" onclick="onlyAddTag('weixin_prov','anhui')">安徽省</a>
									</li>
									<li>
										<a id="moreProvButton">更多区域</a>
									</li>
								</ul>								
								<ul  id="moreProv_1" class="clearFix limit_height">
									<li>
										<a id="weixin_prov-fujian" href="javascript:void(0)" onclick="onlyAddTag('weixin_prov','fujian')">福建省</a>
									</li>
									<li>
										<a id="weixin_prov-jiangxi" href="javascript:void(0)" onclick="onlyAddTag('weixin_prov','jiangxi')">江西省</a>
									</li>
									<li>
										<a id="weixin_prov-shandong" href="javascript:void(0)" onclick="onlyAddTag('weixin_prov','shandong')">山东省</a>
									</li>
									<li>
										<a id="weixin_prov-henan" href="javascript:void(0)" onclick="onlyAddTag('weixin_prov','henan')">河南省</a>
									</li>
									<li>
										<a id="weixin_prov-hubei" href="javascript:void(0)" onclick="onlyAddTag('weixin_prov','hubei')">湖北省</a>
									</li>
									<li>
										<a id="weixin_prov-hunan" href="javascript:void(0)" onclick="onlyAddTag('weixin_prov','hunan')">湖南省</a>
									</li>
									<li>
										<a id="weixin_prov-guangxi" href="javascript:void(0)" onclick="onlyAddTag('weixin_prov','guangxi')">广西壮族自治区</a>
									</li>
									<li>
										<a id="weixin_prov-hainan" href="javascript:void(0)" onclick="onlyAddTag('weixin_prov','hainan')">海南省</a>
									</li>
									<li>
										<a id="weixin_prov-chongqing" href="javascript:void(0)" onclick="onlyAddTag('weixin_prov','chongqing')">重庆市</a>
									</li>
									<li>
										<a id="weixin_prov-sichuan" href="javascript:void(0)" onclick="onlyAddTag('weixin_prov','sichuan')">四川省</a>
									</li>
									<li>
										<a id="weixin_prov-guizhou" href="javascript:void(0)" onclick="onlyAddTag('weixin_prov','guizhou')">贵州省</a>
									</li>
									<li>
										<a id="weixin_prov-yunnan" href="javascript:void(0)" onclick="onlyAddTag('weixin_prov','yunnan')">云南省</a>
									</li>
								</ul>
								<ul  id="moreProv_2" class="clearFix limit_height">
									<li>
										<a id="weixin_prov-xizang" href="javascript:void(0)" onclick="onlyAddTag('weixin_prov','xizang')">西藏自治区</a>
									</li>
									<li>
										<a id="weixin_prov-shanxi2" href="javascript:void(0)" onclick="onlyAddTag('weixin_prov','shanxi2')">陕西省</a>
									</li>
									<li>
										<a id="weixin_prov-gansu" href="javascript:void(0)" onclick="onlyAddTag('weixin_prov','gansu')">甘肃省</a>
									</li>
									<li>
										<a id="weixin_prov-qinghai" href="javascript:void(0)" onclick="onlyAddTag('weixin_prov','qinghai')">青海省</a>
									</li>
									<li>
										<a id="weixin_prov-ningxia" href="javascript:void(0)" onclick="onlyAddTag('weixin_prov','ningxia')">宁夏回族自治区</a>
									</li>
									<li>
										<a id="weixin_prov-xinjiang" href="javascript:void(0)" onclick="onlyAddTag('weixin_prov','xinjiang')">新疆维吾尔自治区</a>
									</li>
								</ul>
							</div>										
						</div>
						<!--END of Line3  -->

						<div class="clearFix filter_list " style="border-bottom: #e5e5e5 1px dotted ">
							<div class="filter_label fl ">
								价格：
							</div>
							<div class="" style="float:left;width:80px;height:30px; margin-right:10px;">
							       <select>
            							<option id="news_position-1" onclick="onlyAddTag('news_position','1')">头条</option>
            							<option id="news_position-2" onclick="onlyAddTag('news_position','2')">非头条</option>
									</select>
							</div>
							<div class="filter_nolimit fl bg_orange ">
								    <a href="javascript:void(0)" onclick="noLimitTag('price_position')">不限</a>
							</div>
							<div class="filter_select fl">
								<ul class="clearFix limit_height ">
									<li>
										<a id="price_position-0-1000" href="javascript:void(0)" onclick="onlyAddTag('price_position','0-1000')">1000元以下</a>
									</li>
									<li>
										<a id="price_position-1000-5000" href="javascript:void(0)" onclick="onlyAddTag('price_position','1000-5000')">1000元-5000元</a>
									</li>
									<li>
										<a id="price_position-5000-1w" href="javascript:void(0)" onclick="onlyAddTag('price_position','5000-1w')">5000元-1万元</a>
									</li>
									<li>
										<a id="price_position-1w-5w" href="javascript:void(0)" onclick="onlyAddTag('price_position','1w-5w')">1万元-5万元</a>
									</li>
									<li>
										<a id="price_position-5w-10w" href="javascript:void(0)" onclick="onlyAddTag('price_position','5w-10w')">5万元-10万元</a>
									</li>
									<li>
										<a id="price_position-10w-up" href="javascript:void(0)" onclick="onlyAddTag('price_position','10w-up')">10万元以上</a>
									</li>
								</ul>
							</div>
							<br />
							<div style="margin-left:250px;margin-top:20px;">
								<input id="inputPriceLow" class="fl" type="text" style="float:left;width:80px" value="0">
								<label class="fl">--</label>
								<input id="inputPriceHigh" class="fl" type="text" style="float:left;width:80px;margin-right:20px;" value="10000">
								<button class="btn btn-default fl" onclick="procInputPrice('price_position')">确定</button>
							</div>										
						</div>

						<!--END of Line Price -->
						<div class="clearFix filter_list " style="border-bottom: #e5e5e5 1px dotted ">
							<div class="filter_label fl ">
								认证：
							</div>
							<div class="filter_nolimit fl bg_orange ">
								    <a href="javascript:void(0)" onclick="noLimitTag('weibo_verifytype')">不限</a>
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
								<input id="searchInput" type="text" value="微信名称/微信号" style="float:left;width:300px;margin-left:20px;margin-right:20px;">
								<button class="btn btn-default fl" onclick="procInputSearch('k')">搜索</button>
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
			</div>
			<div class="row fl">
				{{ $items->links() }}
			</div>
			<!--end of table -->
			<div class="row fr">
				<div class="pageLabel">跳到第
				</div>
				<input id="inputPage" class="pageLabel" type="text" name="jumpPage" style="width:50px;">
				<div class="pageLabel">页
				</div>
				<input class="btn btn-default" type="button" value="确定" onclick="procInputPage()" style="margin-top:20px;margin-left:10px;">
			</div>
		</div>

<script type="text/javascript">

	var basicHref=window.location.href;
	var finalHref=basicHref;	
	var maxPageNum=$('#totalPageNum').html();

	$(document).ready(function(){
		var tagArray=basicHref.split('&');
		var tageNum=0;
		var curPage=1;
		var pageString=tagArray[0];
		var pagePos = pageString.indexOf('=');
		if (pagePos!=-1) 
		{
			curPage = pageString.substring(pagePos+1,pageString.length);
		}
		$('#page_li_'+curPage).addClass("active");
		if ('1'==curPage)
		{
			$('#page_li_prev').addClass("disabled");
		}
		if (maxPageNum==curPage)
		{
			$('#page_li_next').addClass("disabled");
		}

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
					if('news_position'==tagType)
					{
						$('#'+tagType+'-'+tagNameArray[j]).attr('selected','selected');
					}
					else if('weixin_tags'==tagType)
					{
						$('#'+tagType+'-'+tagNameArray[j]).addClass('bg_orange');
					}
					else
					{
						$('#'+tagType+'-'+tagNameArray[j]).addClass('tagSelected');
					}
				}
			}
		}

		$("#moreProv_1").hide();
		$("#moreProv_2").hide();
		$("#moreProvButton").click(function(){
			if ($("#moreProv_1").is(":hidden")) 
			{
				$("#moreProv_1").show();
				$("#moreProv_2").show();
				$("#moreProvButton").text("收起");
			}
			else
			{
				$("#moreProv_1").hide();
				$("#moreProv_2").hide();
				$("#moreProvButton").text("更多");						
			}
		});	

	});
	function pagePrev(curPage)
	{
		var pageInt= parseInt(curPage);
		if (pageInt>1)
		{
			pageInt=pageInt-1;
		}

		return pageInt.toString();
	}
	function pageNext(curPage)
	{
		var pageInt= parseInt(curPage);
		if(curPage<maxPageNum)
		{
			pageInt=pageInt+1;
		}
		return pageInt.toString();
	}

	function procPage(operate)
	{
		var posPageInBasic=basicHref.indexOf('?page=');
		if (-1==posPageInBasic)
		{
			basicHref=basicHref+'?page=1';
		}
		var posFirstTag = basicHref.indexOf('&');
		var pageString='';
		var otherString ='';
		if (-1==posFirstTag)
		{
			pageString=basicHref;
		}
		else
		{
			pageString = basicHref.substring(0,posFirstTag);
			otherString = basicHref.substring(posFirstTag,basicHref.length);
		}


		var posPage = pageString.indexOf('=');
		var stringBeforePage = pageString.substring(0,posPage+1);
		var curPage = pageString.substring(posPage+1,pageString.length);
		
		if ('next'==operate) 
		{
			curPage=pageNext(curPage);
		}
		else if ('prev'==operate)
		{
			curPage=pagePrev(curPage);
		}
		else
		{
			curPage=operate;
		}
		finalHref= stringBeforePage+curPage+otherString;
		window.location = finalHref;		

	}
	function procInputPage()
	{
		var inputPage=$('#inputPage').val();
		if (inputPage >maxPageNum)
		{
			alert('总页数少于'+maxPageNum+'页，请重新输入!');
		}
		else
		{
			procPage(inputPage);
		}
	}
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
		else if (basicHref.indexOf('&')==-1)
		{
			basicHref=resetPage();
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
     		var thisTagString=stringAfterTag.substring(0,nextTagPos);
   			var nextTagString = stringAfterTag.substring(nextTagPos,stringAfterTag.length);

   			newTag = '&'+thisTagString+','+tagName+nextTagString;
    	}

    	var outputTag=stringBeforeNewTag+newTag;
    	return outputTag;
    }
    
    function delTagName(posTagInBasic,tagTypeString,posNextTag,tagName)
    {
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
    	var posNameInThisType = tagTypeString.indexOf(tagName);
    	var posDot = tagTypeString.indexOf(',');
    	var newTagTypeString='';
 
    	if('-1'==posDot)
    	{
			newTagTypeString='';
    	}    	
    	else if(posDot < posNameInThisType)
    	{
   			newTagTypeString = '&'+tagTypeString.replace(','+tagName,'');
    	}
    	else
    	{
    		newTagTypeString = '&'+tagTypeString.replace(tagName+',','');
    	}

    	var outputHref = herfHead+stringBtPageTag+newTagTypeString+stringAfterTag;
     	return outputHref;    	
    }

	function procFilterTag(tagType,tagName){



		var typePosInBasic=basicHref.indexOf(tagType);

		if (-1 == typePosInBasic) 
		{
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
			var posNameInThisType = thisTagTypeString.indexOf(tagName);

			if('-1'==posNameInThisType)
			{	
				finalTag=addMoreTagName(tagType,tagName);
			}
			else
			{
				finalTag=delTagName(typePosInBasic,thisTagTypeString,posNextTag,tagName);
			}
		}
		window.location = finalTag;		
	}

	function noLimitTag(tagType)
	{
		var posTagInBasic = basicHref.indexOf(tagType);
    	var stringBtPageTag = getStringBtPageTag(posTagInBasic);
    	var herfHead = resetPage();
    	var stringWithThisTag=basicHref.substring(posTagInBasic,basicHref.length);
    	var posNextTag= stringWithThisTag.indexOf('&');
    	var stringAfterTag='';
    	if('-1'==posNextTag)
    	{
 			stringAfterTag='';
    	}
    	else
    	{
    		stringAfterTag = basicHref.substring(posTagInBasic+posNextTag,basicHref.length);
    	}
    	var outputHref = herfHead+stringBtPageTag+stringAfterTag;
		window.location = outputHref;		
	}
 
	function onlyAddTag(tagType,tagName)
	{
		var finalTag='';
		var typePosInBasic=basicHref.indexOf(tagType);

		if (-1 == typePosInBasic) 
		{
			finalTag=addFirstTagType(tagType,tagName);
		}
		else
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
    			newTag = '&'+tagType+'='+tagName;
    		}
    		else
    		{
    			var thisTagString=stringAfterTag.substring(0,nextTagPos);
  				var nextTagString = stringAfterTag.substring(nextTagPos,stringAfterTag.length);
   				newTag = '&'+tagType+'='+tagName+nextTagString;
    		}
    		finalTag=stringBeforeNewTag+newTag;
 		}
		window.location = finalTag;		
	} 

	function procInputSearch(tagType)
	{
		var input=$('#searchInput').val();
		onlyAddTag(tagType,input);
	}
	function procInputPrice(tagType)
	{
		var inputLow = $('#inputPriceLow').val();
		var inputHigh = $('#inputPriceHigh').val();
		var lowInt = parseInt(inputLow);
		var highInt = parseInt(inputHigh);
		if(lowInt < highInt)
		{
			var tagName=inputLow+'-'+inputHigh;
			procFilterTag(tagType,tagName);
		}
		else
		{
			alert('请输入正确的价格区间！');
		}
	}
</script>

@endsection