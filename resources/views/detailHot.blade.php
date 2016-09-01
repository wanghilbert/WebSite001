@extends('layouts.basicStruct')

@section('head')
<title>详情</title>
@endsection

@section('section')
	@include('contents.search')


			<br />
			<div class="wray" id="main-text">
 				<div class="goods clearFix">
		        <!--左边开始-->
		            <div class="clearFix fl goods_1">
		            	<div class="goods_header clearFix fl">
		            		<div class="goods_left fl">
                                <div class="xq_topleft">
                                    <div class="xq_top clearFix">
                                        <div class="xq_img fl">
                                            <img src="/bootstrap/img/image7.png" />
                                        </div>
                                        <div class="xq_top_right fl">
                                            <h3 title="独立鱼电影">独立鱼电影</h3>
                                            <div class="clearFix">                                                  
                                            <div class="wxh_wary" title="yifengzhiyin">微信号:
                                                <span class="f_orange">duliyumovie</span>
                                            </div>
                                        </div>                                      
                                    </div>
                                    <ul class="xq_ul clearFix">
                                        <li>
                                            <span class="f_orange xq_ul_sd">50万</span><span class="f_orange xq_ul_sx">粉丝数</span>
                                            <div class="xq_ul_xian"></div>
                                        </li>
                                        <li>
                                            <span class="xq_ul_sd">97086</span>
                                            <span class="xq_ul_sx">头条平均阅读数</span>
                                        </li>
                                        <li>
                                            <span class="xq_ul_sd">8.22</span><span class="xq_ul_sx">阅读性价比</span>
                                            <div class="xq_ul_xian"></div>
                                        </li>
                                        <li><span class="xq_ul_sd">0</span><span class="xq_ul_sx">收藏数</span></li>
                                    </ul>
                                </div>
							</div>
							<div class="goods_box2">
                                <div class="info">
                                    <div class="info_3">
                                        <a href="#"><span class="label label-warning" style="font-size:larger;">电影频道</span></a>
                                        <a href="#"><span class="label label-warning pull-right" style="font-size:larger;">收藏</span></a>
                                    </div>
                                    <div class="info_1" title="">
                                    独立鱼(duliyu.com)专注电影领域，是目前最大的电影知识平台。
                                    </div>
                                </div>
                                <div class="clearFix info_2 ">
                            		<h3 class="fl">现价&nbsp;<span id="price" class="f_orange f_30">13000元</span></h3>
                            		<div class="fr tongji">
                                		<div class="fr tongji_1">
                                    		<h4>0</h4>
                                    		<p>评价</p>
                                		</div>
                                		<div class="fr tongji_2">
                                    		<h4>0</h4>
                                    		<p>购买</p>
                                		</div>
                            		</div>
                            	</div>

                        		<div class="clearFix info_1"> <span class="fl f_name">发布位置&nbsp;</span>
                            		<ul class="fl clearFix f_list">
                                    	<li class="news_position news_position_1 list_active" style="display: block;">
                                    		<a href="javascript:changePrice('13000','1');">头条</a>
                                   		</li>
                                    	<li class="news_position news_position_2" style="display: block;">
                                        	<a href="javascript:changePrice('5500','2');">非头条</a>
                                   		</li>
                                	</ul>
                        		</div>
                        		<div>
                            		<div class="sm fl">为保证您的订单能够顺利执行，请与客服预约档期无误后确认预约</div>
                            		<a target="_blank" href="#"><img src="/bootstrap/img\image-6.png" alt="点击这里给我发消息" title="点击这里给我发消息" border="0"></a>
                        		</div>
                        		<br />
                        		<div class="info_button clearFix">
                            		<a class="info_button_1 fl" onclick="selectThis()">确认预约</a>
                            		<a class="info_button_2 fl" onclick="addCart()"><span class="glyphicon glyphicon-shopping-cart"></span>加入购物车</a>
                        		</div>
							</div>					
		            	</div>
					</div>
				</div>
			</div>
			<!--end of <div class="row" id="main-text"> -->
			<br /><br /><br /><br /><br />				
<script type="text/javascript">
    function changePrice(price, i) {
        $('.news_position').removeClass('list_active');
        $('.news_position_' + i).addClass('list_active');
        $('#price').text(price + '元');
    }
    function selectThis(){
        alert("预约！")
    };
    function addCart(){
        alert("购买！")
    };


</script>

@endsection