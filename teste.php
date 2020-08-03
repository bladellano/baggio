<!doctype html>
<html lang="en">
<head>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.4.2/css/ol.css" type="text/css">
	

	<style>
		* {
			margin:0;
			padding:0;
			outline:0;
			box-sizing:border-box;
		}
		.map {
			height: 400px;
			width: 100%;
			margin:0px;
			padding: 0px;
		}
		.wrap-map{
			position: relative;

		}
		.form-box-search{
			width: 300px;
			height: 200px;
			position: fixed;
			right: 0;
			top: 0;
			border:1px solid #561;
			background-color: #5617;
		}
	</style>


	<script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.4.2/build/ol.js"></script>
	<title>OpenLayers example</title>
</head>
<body>

	
	<div class="wrap-map">
		<div id="map" class="map">    		
		</div>
		<div class="form-box-search">
			<h3>Hello World</h3>
		</div>
	</div>


	<script type="text/javascript">
		var map = new ol.Map({
			target: 'map',
			layers: [
			new ol.layer.Tile({
				source: new ol.source.OSM()
			})
			],
			view: new ol.View({
				center: ol.proj.fromLonLat([37.41, 8.82]),
				zoom: 4
			})
		});
	</script>

	
</body>
</html>