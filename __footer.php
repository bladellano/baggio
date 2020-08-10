
<footer>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<div class="menu-footer-left">
					<div>
						<h4>A BAGGIO</h4>
						<ul>
							<li><a href="#">Conheça a BAGGIO</a></li>
						</ul>
					</div>
					<div>
						<h4>LOCAÇÕES</h4>
						<ul>
							<li><a href="#">Locações</a></li>
							<li><a href="#">Área do Proprietário</a></li>
							<li><a href="#">Área do Inquilíno</a></li>
							<li><a href="#">Pesquisa Avançada</a></li>
						</ul>
					</div>
					<div>
						<h4>VENDAS</h4>
						<ul>
							<li><a href="#">Anuncie seu imóvel</a></li>
						</ul>
					</div>
					<div>
						<h4>BLOG</h4>
						<ul>
							<li><a href="#">Último Post</a></li>
							<li><a href="#">Confira nosso Blog</a></li>
						</ul>
					</div>
					<div>
						<h4>CONTATO</h4>
						<ul>
							<li><a href="#">Entre em contato</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-md-2">
				<div class="menu-footer-right text-xs-center">
					<h4>Nossos Telefones:</h4>
					<p>(41) 3015-2727</p>
					<p>(41) 3015-2727</p>
				</div>
			</div>
			<div class="col-md-2">
				<div class="menu-footer-right text-xs-center">
					<h4>Acompanha a gente</h4>
					<ul class="socials">
						<li><a href="#"><i class="fab fa-facebook"></i></a></li>
						<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li><a href="#"><i class="fab fa-tumblr"></i></a></li>
					</ul>
				</div>
			</div>				
		</div>
	</div>
</footer>

<script src="bower_components/jquery/dist/jquery.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js" ></script>
<script src="bower_components/slick-carousel/slick/slick.js" ></script>
<script	src="assets/js/main.js"></script>
<script async data-id="55962" src="https://cdn.widgetwhats.com/script.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<!-- <script src="assets/js/pagination.js"></script> -->

<!-- Script to Maps -->
<script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.4.2/build/ol.js"></script>
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

	// $.fn.datepicker.defaults.format = "dd/mm/yyyy";
	$('.datepicker').datepicker({
    format: 'dd/mm/yyyy',
    startDate: '-3d'
});
</script>


<!-- <script>
	$(function(){

		function createList(name){

			var container = $('#pagination-' + name);

			var options = {

				dataSource: establishments,
				totalNumber: 2,
				pageSize: 3,
				locator:"items",
				callback: function(response, pagination){

					var dataHtml = '<ul>';

					$.each(response, function(index, item){
						dataHtml += `<li><div class="wrap-result-itens">
						<div><img src="${item.logo}"></div>
						<div>
						<b>Distância: </b>${item.distance}<br/>
						<b>Horário de Funcionamento: </b>${item.schedule}<br/>
						<b>Telefone:</b> ${item.telephone}<br/>
						<b>Website:</b> ${item.website}<br/>
						</div>
						</div><li>`;
					});

					dataHtml += '</ul>';

					container.prev().html(dataHtml);
				}
			};

			container.pagination(options);

			return container;
		}

		createList('filtered-interest');

	});

	//Data Example
	var establishments  = {"items":[
	{
		"distance": "400m",
		"schedule": "08hs as 23h",
		"telephone": "00 0000-0000",
		"website": "www.havainas.com.br",
		"logo":"assets/images/logo_3170210.png"
	},
	{
		"distance": "200m",
		"schedule": "08hs as 23h",
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
		"schedule": "08hs as 11h",
		"telephone": "00 0000-0000",
		"website": "www.redenorte.com.br",
		"logo":"assets/images/duracell-logo-1536x512.png"
	},
	{
		"distance": "300m",
		"schedule": "08hs as 12h",
		"telephone": "00 0000-0000",
		"website": "www.redenorte.com.br",
		"logo":"assets/images/duracell-logo-1536x512.png"
	},
	{
		"distance": "300m",
		"schedule": "08hs as 23h",
		"telephone": "00 0000-0000",
		"website": "www.redenorte.com.br",
		"logo":"assets/images/duracell-logo-1536x512.png"
	},
	{
		"distance": "300m",
		"schedule": "08hs as 23h",
		"telephone": "00 0000-0000",
		"website": "www.redenorte.com.br",
		"logo":"assets/images/duracell-logo-1536x512.png"}
		]};
	</script>
 -->
</body>
</html>

