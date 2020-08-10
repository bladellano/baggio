<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<style type="text/css">
		ul, li{
			list-style: none;
		} 
		.wrap-result-itens {
			background-color: #EEE;
			height: 108px;
			width: 455px;
			border-radius: 8px;
			box-shadow: 2px 2px 4px #CCC8;
			margin: 10px 0px;
		}
		.wrap-result-itens div:first-child img {
			max-width:80px!important; 
		}
		.wrap-result-itens div:first-child {
			float: left;
			width: 40%;
			height: inherit;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.wrap-result-itens div:last-child {
			float: right;
			width: 57%;
			height: inherit;
			border-left: 1px solid #777;
			padding-left: 6px;
		}
	</style>
</head>
<body>

	<h1>Interesses próximos</h1>

	<div id="data-container"></div>
	<div id="pagination-container"></div>

	<div class="data-container"></div>
	<div id="pagination-demo2"></div>

	<script src="bower_components/jquery/dist/jquery.js"></script>
	<script src="assets/js/pagination.js"></script>

	<script>
		$(function(){
// JSON.stringify
// 

var datao  = {"items":[
	{
		"distance": "400m",
		"schedule": "08hhs as 23h",
		"telephone": "00 0000-0000",
		"website": "www.havainas.com.br",
		"logo":"assets/images/logo_3170210.png"
	},
	{
		"distance": "200m",
		"schedule": "08hhs as 23h",
		"telephone": "00 0000-0000",
		"website": "www.drogaria.com.br",
		"logo":"assets/images/logo_970530.png"
	},
	{
		"distance": "100m",
		"schedule": "08hhs as 10h",
		"telephone": "00 0000-0000",
		"website": "www.sorveteria.com.br",
		"logo":"assets/images/kabum-logo.png"
	},
	{
		"distance": "300m",
		"schedule": "08hhs as 11h",
		"telephone": "00 0000-0000",
		"website": "www.redenorte.com.br",
		"logo":"assets/images/duracell-logo-1536x512.png"
	},
	{
		"distance": "300m",
		"schedule": "08hhs as 12h",
		"telephone": "00 0000-0000",
		"website": "www.redenorte.com.br",
		"logo":"assets/images/duracell-logo-1536x512.png"
	},
	{
		"distance": "300m",
		"schedule": "08hhs as 23h",
		"telephone": "00 0000-0000",
		"website": "www.redenorte.com.br",
		"logo":"assets/images/duracell-logo-1536x512.png"
	},
	{
		"distance": "300m",
		"schedule": "08hhs as 23h",
		"telephone": "00 0000-0000",
		"website": "www.redenorte.com.br",
		"logo":"assets/images/duracell-logo-1536x512.png"
	}

]};

var datinha = {items:[{website:'www.google.com.br'},{website:'www.google.com.br'},{website:'www.google.com.br'},{website:'www.google.com.br'}]};

			$('#pagination-container').pagination({
				// dataSource: {items:[{website:'www.google.com.br'},{website:'www.google.com.br'},{website:'www.google.com.br'},{website:'www.google.com.br'}]},
				// dataSource: [1,2,3,4,5,6,7,8,10,11,12],
				// dataSource: datinha,
				dataSource: datao,
				// dataSource: "data.json",
				// dataSource:"https://api.flickr.com/services/feeds/photos_public.gne?tags=cat&tagmode=any&format=json&jsoncallback=?",
				locator:'items',
				// async:false,
		
				// totalNumber: 10,
				pageSize: 3,
				callback: function(data, pagination) {
					var html = simpleTemplating(data);
					$('#data-container').html(html);
				}
			})
		});

		function simpleTemplating(data) {

		console.log("PASSANDO", data);

			var html = '<ul>';
			$.each(data, function(index, item){
				html += '<li>'+ item.website +'</li>';
			});
			html += '</ul>';
			return html;
		}
	</script>
</body>
</html>