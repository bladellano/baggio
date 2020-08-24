<?php require("__header.php"); ?>

<ol class="breadcrumb">
	<li class="breadcrumb-item"><a href="#">Home</a></li>
	<li class="breadcrumb-item active" aria-current="page">Resultado de Pesquisa</li>
</ol>

<div class="wrap-general">
	<div class="mapColapse">


		<div id="map-of-interest" style="display:none">
			<div class="btn-close">x</div> 
			<h3>MAPA DE INTERESSE</h3> 
			<p>Você pode utilizar nossa ferramenta de Bezier para desenhar uma região onde você queira encontrar novos imóveis.</p>
			<a class="btnNode"> <img src="assets/images/node.png"> </a>
		</div>


		<div id="map" class="map"></div>
		<a href="#" id="btnExpandMap">
			<i class="fas fa-expand-arrows-alt"></i>
			<i class="fas fa-compress-arrows-alt" style="display: none"></i>
		</a>

		<div class="wrap-btn-node" style="display: none">			
			<a href="#" class="btnNode"> 
				<img src="assets/images/node.png"> 
			</a>
		</div>

	</div>
	<div class="filter">
		<div class="wrap-filter">
			<form>
				<h3>O que você procura?</h3>
				<p>
					<input class="custom-radio-button-baggio" type="radio" name="modality" id="comprar" value="comprar" checked="">
					<label for="comprar">Comprar</label>

					<input class="custom-radio-button-baggio" type="radio" name="modality" id="alugar" value="alugar">
					<label for="alugar">Alugar</label>
				</p>

				<div class="form-group">
					<label for="like-property">Tipo de imóvel</label>
					<select id="like-property" name="like-property" class="form-control">
						<option selected>Selecione</option>
						<option>Lorem Ipsum não é simplesmente</option>
						<option>Literatura latina clássica datada</option>
						<option>Sua indubitável origem</option>
					</select>
				</div>

				<div class="form-group">
					<label for="city">Onde?</label>
					<select id="city" name="city" class="form-control">
						<option selected>Cidade</option>
						<option>Lorem Ipsum não é simplesmente</option>
						<option>Literatura latina clássica datada</option>
						<option>Sua indubitável origem</option>
					</select>
				</div>
				<div class="form-group">
					<select id="district" name="district" class="form-control">
						<option selected>Bairro</option>
						<option>Lorem Ipsum não é simplesmente</option>
						<option>Literatura latina clássica datada</option>
						<option>Sua indubitável origem</option>
					</select>
				</div>

				<div class="form-group">
					<label>Valores</label>
					<div class="wrap-values-range">
						<div id="v-left">R$ 10000</div>
						<div>até</div>
						<div id="v-right">R$ 55000</div>					
					</div>
					<hr>						
					<input type="hidden" id="amount" readonly>
					<div id="slider-range"></div>
				</div>

				<!-- Nº de Quartos -->
				<div class="form-group">
					<label>Características</label>
					<p>Nº de Quartos</p>

					<label class="number-of-options">
						<input type="radio" name="rooms" value="1" checked>
						<h5>1</h5>
					</label>

					<label class="number-of-options">
						<input type="radio" name="rooms" value="2">
						<h5>2</h5>
					</label>

					<label class="number-of-options">
						<input type="radio" name="rooms" value="3">
						<h5>3</h5>
					</label>

					<label class="number-of-options">
						<input type="radio" name="rooms" value="4">
						<h5>4</h5>
					</label>

					<label class="number-of-options">
						<input type="radio" name="rooms" value="5">
						<h5>+5</h5>
					</label>
				</div>

				<!-- Nº de Banheiros -->
				<div class="form-group">
					<p>Nº de Banheiros</p>

					<label class="number-of-options">
						<input type="radio" name="bathroom" value="1" checked>
						<h5>1</h5>
					</label>

					<label class="number-of-options">
						<input type="radio" name="bathroom" value="2">
						<h5>2</h5>
					</label>

					<label class="number-of-options">
						<input type="radio" name="bathroom" value="3">
						<h5>3</h5>
					</label>

					<label class="number-of-options">
						<input type="radio" name="bathroom" value="4">
						<h5>4</h5>
					</label>

					<label class="number-of-options">
						<input type="radio" name="bathroom" value="5">
						<h5>+5</h5>
					</label>
				</div>

				<!-- Nº de Banheiros -->
				<div class="form-group">
					<p>Nº de Banheiros</p>

					<label class="number-of-options">
						<input type="radio" name="bathroom_" value="1" checked>
						<h5>1</h5>
					</label>

					<label class="number-of-options">
						<input type="radio" name="bathroom_" value="2">
						<h5>2</h5>
					</label>

					<label class="number-of-options">
						<input type="radio" name="bathroom_" value="3">
						<h5>3</h5>
					</label>

					<label class="number-of-options">
						<input type="radio" name="bathroom_" value="4">
						<h5>4</h5>
					</label>

					<label class="number-of-options">
						<input type="radio" name="bathroom_" value="5">
						<h5>+5</h5>
					</label>
				</div>

				<div class="form-group">
					<label>Interesses</label>
					<br/>
					<label class="interest-options">
						<input type="radio" name="interest" value="padaria" checked>
						<i class="fas fa-bread-slice"></i>
						<p>Padaria</p>
					</label>

					<label class="interest-options">
						<input type="radio" name="interest" value="farmacia">
						<i class="fas fa-clinic-medical"></i>
						<p>Farmácia</p>
					</label>

					<label class="interest-options">
						<input type="radio" name="interest" value="padaria">
						<i class="fas fa-chalkboard-teacher"></i>
						<p>Escola</p>
					</label>

					<label class="interest-options">
						<input type="radio" name="interest" value="farmacia">
						<i class="fab fa-shopify"></i>
						<p>Supermercado</p>
					</label>

					<label class="interest-options">
						<input type="radio" name="interest" value="padaria">
						<i class="fas fa-university"></i>
						<p>Banco</p>
					</label>

					<label class="interest-options">
						<input type="radio" name="interest" value="farmacia">
						<i class="fas fa-utensils"></i>
						<p>Restaurante</p>
					</label>

					<label class="interest-options">
						<input type="radio" name="interest" value="padaria">
						<i class="fas fa-cocktail"></i>
						<p>Bar</p>
					</label>

					<label class="interest-options">
						<input type="radio" name="interest" value="farmacia">
						<i class="fas fa-film"></i>
						<p>Cinema</p>
					</label>

					<label class="interest-options">
						<input type="radio" name="interest" value="padaria">
						<i class="fas fa-theater-masks"></i>
						<p>Teatro</p>
					</label>

					<label class="interest-options">
						<input type="radio" name="interest" value="farmacia">
						<i class="fas fa-shopping-cart"></i>
						<p>Shopping</p>
					</label>

				</div>
			</form>
		</div>

	</div>
	<div class="result">

		<div class="wrap-result section">
			<h3><span>2667 Imóveis encontrados</span></h3>
			<ul>
				<li>						
					<div class="card-spotlight">
						<img src="assets/images/loose.jpg" alt="title">
						<h4>APARTAMENTO, 2 QUARTOS, CURITIBA</h4>
						<p class="card-spotlight-end">R. Lorenzo Lorenzia, São Luiz, Curitiba</p>
						<hr>
						<ul>
							<li><a href="#"><i class="fa fa-home"></i></a>230km²</li>
							<li><a href="#"><i class="fa fa-bed"></i></a>04</li>
							<li><a href="#"><i class="fas fa-shower"></i></a>02</li>
							<li><a href="#"><i class="fa fa-car"></i></a>02</li>
						</ul>
						<hr>
						<p class="card-spotlight-price">R$ 4.500,00</p>
					</div>
				</li>
				<li>						
					<div class="card-spotlight">
						<img src="assets/images/loose.jpg" alt="title">
						<h4>APARTAMENTO, 2 QUARTOS, CURITIBA</h4>
						<p class="card-spotlight-end">R. Lorenzo Lorenzia, São Luiz, Curitiba</p>
						<hr>
						<ul>
							<li><a href="#"><i class="fa fa-home"></i></a>230km²</li>
							<li><a href="#"><i class="fa fa-bed"></i></a>04</li>
							<li><a href="#"><i class="fas fa-shower"></i></a>02</li>
							<li><a href="#"><i class="fa fa-car"></i></a>02</li>
						</ul>
						<hr>
						<p class="card-spotlight-price">R$ 4.500,00</p>
					</div>
				</li>
				<li>						
					<div class="card-spotlight">
						<img src="assets/images/loose.jpg" alt="title">
						<h4>APARTAMENTO, 2 QUARTOS, CURITIBA</h4>
						<p class="card-spotlight-end">R. Lorenzo Lorenzia, São Luiz, Curitiba</p>
						<hr>
						<ul>
							<li><a href="#"><i class="fa fa-home"></i></a>230km²</li>
							<li><a href="#"><i class="fa fa-bed"></i></a>04</li>
							<li><a href="#"><i class="fas fa-shower"></i></a>02</li>
							<li><a href="#"><i class="fa fa-car"></i></a>02</li>
						</ul>
						<hr>
						<p class="card-spotlight-price">R$ 4.500,00</p>
					</div>
				</li>

				<li>						
					<div class="card-spotlight">
						<img src="assets/images/loose.jpg" alt="title">
						<h4>APARTAMENTO, 2 QUARTOS, CURITIBA</h4>
						<p class="card-spotlight-end">R. Lorenzo Lorenzia, São Luiz, Curitiba</p>
						<hr>
						<ul>
							<li><a href="#"><i class="fa fa-home"></i></a>230km²</li>
							<li><a href="#"><i class="fa fa-bed"></i></a>04</li>
							<li><a href="#"><i class="fas fa-shower"></i></a>02</li>
							<li><a href="#"><i class="fa fa-car"></i></a>02</li>
						</ul>
						<hr>
						<p class="card-spotlight-price">R$ 4.500,00</p>
					</div>
				</li>

				<li>						
					<div class="card-spotlight">
						<img src="assets/images/loose.jpg" alt="title">
						<h4>APARTAMENTO, 2 QUARTOS, CURITIBA</h4>
						<p class="card-spotlight-end">R. Lorenzo Lorenzia, São Luiz, Curitiba</p>
						<hr>
						<ul>
							<li><a href="#"><i class="fa fa-home"></i></a>230km²</li>
							<li><a href="#"><i class="fa fa-bed"></i></a>04</li>
							<li><a href="#"><i class="fas fa-shower"></i></a>02</li>
							<li><a href="#"><i class="fa fa-car"></i></a>02</li>
						</ul>
						<hr>
						<p class="card-spotlight-price">R$ 4.500,00</p>
					</div>
				</li>

				<li>						
					<div class="card-spotlight">
						<img src="assets/images/loose.jpg" alt="title">
						<h4>APARTAMENTO, 2 QUARTOS, CURITIBA</h4>
						<p class="card-spotlight-end">R. Lorenzo Lorenzia, São Luiz, Curitiba</p>
						<hr>
						<ul>
							<li><a href="#"><i class="fa fa-home"></i></a>230km²</li>
							<li><a href="#"><i class="fa fa-bed"></i></a>04</li>
							<li><a href="#"><i class="fas fa-shower"></i></a>02</li>
							<li><a href="#"><i class="fa fa-car"></i></a>02</li>
						</ul>
						<hr>
						<p class="card-spotlight-price">R$ 4.500,00</p>
					</div>
				</li>

			</ul>
		</div><!-- wrap-result section -->
		<div class="container">				
			<button class="btn btn-default btn-baggio btn-block">Carregar mais</button>
		</div>
	</div><!-- result -->
</div>

<?php require("__footer.php") ?>