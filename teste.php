<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>TESTE DIV</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<style>
		
		.wrap-general{
			max-width: 90%;
			margin: 0 auto;
			border:1px dashed #888;
			position: relative;
			/*margin:0px 10px;*/
		}

		/*Pra baixo levar*/
		.mapColapse{
			background-color:#98F5FF;
			width:30%;
			height: 100px;
			transition: all .4s;
			position: relative;
		}
		.mapColapse > a#btnExpandMap{
			position: absolute;
			right: 0;
			bottom: 0;
			color: #888;
			margin: 4px;
			z-index: 999;
		}
		.filter{
			background-color: #364FC7;
			width:30%;
			height: 400px;
		}
		.result{
			background-color: #EEE;
			height: 100%;  
			width:70%;
			position: absolute;
			right: 0;
			bottom: 0;
			transition: all .4s;
		}
		.activeMap{
			width:100%;
		}
		.activeResult{
			height: 400px; 
		}

		@media (max-width: 512px) {
			.result{
				position: relative;
				width: 98%;
			}
			.filter{
				width: 98%;				
			}
			.mapColapse{
				display: none;
			}
		}
	</style>
</head>
<body>

	<div class="wrap-general">
		<div class="mapColapse"><a href="#" id="btnExpandMap">[X]</a></div>
		<div class="filter">
			
				
		</div>
		<div class="result">

		</div>
	</div>
	

	<script>
		$(function(){
			$("#btnExpandMap").click(function() {
				$(".mapColapse").toggleClass("activeMap");
				$(".result").toggleClass("activeResult");
			});
		});
	</script>


</body>
</html>