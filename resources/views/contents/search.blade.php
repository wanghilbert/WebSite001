<div class="row" id="logo-search">
	<div class="col-lg-12 col-md-12 col-sm-12">
		<div class="col-lg-4 col-md-4 col-sm-4" style="padding-left: 25px;">
			<img src="/bootstrap/img/logo.png" />
		</div>
		<div class="col-lg-8 col-md-8 col-sm-8">
			<div class="row" style="padding-top: 15px">
				<form class="bs-example bs-example-form" role="search">
					<div class="input-group">
						<input id="mainSearchInput" type="text" class="form-control">
						<span class="input-group-btn">
						<button class="btn btn-default" onclick="procMainInputSearch('k')">
								<span class="glyphicon glyphicon-search"></span>
						</button>
						</span>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	function procMainInputSearch(tagType)
	{
		var basicHref = window.location.href
		var hrefArray = basicHref.split('/');
		var rootHref = hrefArray[2];
		var nextHref=hrefArray[0]+'/'+hrefArray[1]+'/'+hrefArray[2]+'/'+"list?page=1&"+tagType+'=';
		var input=$('#mainSearchInput').val();
		nextHref+=input;	
		alert(nextHref);
		window.location = nextHref;
		return false;
	}
</script>