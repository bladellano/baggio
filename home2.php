<?php require("__header.php"); ?>

<div class="wrap-map">
	<!-- Dependendo da API é so trocar esta 'div=map' conforme a documentação da API -->
	<div id="map" class="map"></div>

	<div class="form-box-search">
		<h3>O que procura?</h3>
		<p>
			<input class="custom-radio-button-baggio" type="radio" name="modality" id="comprar" value="comprar" checked="">
			<label for="comprar">Comprar</label>

			<input class="custom-radio-button-baggio" type="radio" name="modality" id="alugar" value="alugar">
			<label for="alugar">Alugar</label>
		</p>
		<h3>Onde?</h3>
		<div class="form-group">
			<input type="text" class="form-control form-control-sm" id="city" name="city" placeholder="Cidade">			
		</div>
		<div class="form-group">
			<input type="text" class="form-control form-control-sm" id="district" name="district" placeholder="Bairro">			
		</div>
		<div class="form-group text-right">
			<input type="submit" class="btn btn-default btn-sm btn-baggio" value="Encontrar imóvel">		
		</div>
		<h3>Pesquisa avançada</h3>
		<p>Precisa trazer mais especificidade para sua pesquisa? Sem problemas!</p>
		<div class="form-group">
			<input type="submit" class="btn btn-default btn-sm btn-block btn-baggio" value="Pesquisa avançada">		
		</div>
	</div>
</div>

<div class="container-fluid main-baggio">

	<div class="section">
		<h3><span>IMÓVEIS EM DESTAQUE</span></h3>
		<div class="row">
			<div class="col-md-12">
				<div class="slick-card-spotlight">

					<div class="card-spotlight break-information">
						<img class="img-fluid" src="assets/images/loose.jpg" alt="title">
						<h4>APARTAMENTO, 2 QUARTOS, CURITIBA</h4>
						<p class="card-spotlight-end">R. Lorenzo Lorenzia, São Luiz, Curitiba</p>
						<hr>
						<ul>
							<li><a href="#"><i class="fa fa-home"></i></a>230.123km²</li>
							<li><a href="#"><i class="fa fa-bed"></i></a>04</li>
							<li><a href="#"><i class="fas fa-shower"></i></a>02</li>
							<li><a href="#"><i class="fa fa-car"></i></a>02</li>
						</ul>
						<hr>
						<p class="card-spotlight-price">R$ 4.500,00</p>
					</div>	


					<div class="card-spotlight break-information">
						<img class="img-fluid" src="assets/images/loose.jpg" alt="title">
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

					<div class="card-spotlight break-information">
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

					<div class="card-spotlight break-information">
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

					<div class="card-spotlight break-information">
						<img class="img-fluid" src="assets/images/loose.jpg" alt="title">
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

					<div class="card-spotlight break-information">
						<img class="img-fluid" src="assets/images/loose.jpg" alt="title">
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
				</div>
			</div>
		</div>
	</div>

	<div class="section">
		<!-- <a href=""><img src="assets/images/banner-home.png" alt="banner-home" class="img-fluid"></a> -->
		
		<div class="banner-key">
			<article>
				<h4>Quer vender seu imóvel?</h4>
				<p class="text-white">
				Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae perspiciatis libero accusamus quod, odit voluptas veritatis quos voluptates perferendis, velit molestiae, culpa consectetur cumque at alias vel maiores assumenda ipsum.</p>
			</article>

			<div>
				
				<a href="#" class="btn btn-default btn-baggio">ANUNCIAR MEU IMÓVEL</a>
			</div>
		</div>
	</div>

	
	<div class="section">
		<h3><span>BLOG BAGGIO</span></h3>
		<div class="row">
			<div class="col-md-12">
				<div class="slick-card-blog">
					
					<div class="card-blog">
						<img src="assets/images/loose.jpg" alt="title">
						<h4 class="title">Lorem ipsum dolor</h4>
						<p class="date">01/01/2019</p>
						<p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos quis quod illum velit voluptas, autem animi expedita culpa accusantium repellat, nobis quo iste nostrum commodi fuga unde! Voluptatibus in, fugiat.</p>
						<p class="complete-content"><a href="">Conteúdo completo <i class="fa fa-arrow-right"></i></a> </p>
					</div>

					<div class="card-blog">
						<img src="assets/images/loose.jpg" alt="title">
						<h4 class="title">Lorem ipsum dolor</h4>
						<p class="date">01/01/2019</p>
						<p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos quis quod illum velit voluptas, autem animi expedita culpa accusantium repellat, nobis quo iste nostrum commodi fuga unde! Voluptatibus in, fugiat.</p>
						<p class="complete-content"><a href="">Conteúdo completo <i class="fa fa-arrow-right"></i></a> </p>
					</div>

					<div class="card-blog">
						<img src="assets/images/loose.jpg" alt="title">
						<h4 class="title">Lorem ipsum dolor</h4>
						<p class="date">01/01/2019</p>
						<p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos quis quod illum velit voluptas, autem animi expedita culpa accusantium repellat, nobis quo iste nostrum commodi fuga unde! Voluptatibus in, fugiat.</p>
						<p class="complete-content"><a href="">Conteúdo completo <i class="fa fa-arrow-right"></i></a> </p>
					</div>

					<div class="card-blog">
						<img src="assets/images/loose.jpg" alt="title">
						<h4 class="title">Lorem ipsum dolor</h4>
						<p class="date">01/01/2019</p>
						<p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos quis quod illum velit voluptas, autem animi expedita culpa accusantium repellat, nobis quo iste nostrum commodi fuga unde! Voluptatibus in, fugiat.</p>
						<p class="complete-content"><a href="">Conteúdo completo <i class="fa fa-arrow-right"></i></a> </p>
					</div>

					<div class="card-blog">
						<img src="assets/images/loose.jpg" alt="title">
						<h4 class="title">Lorem ipsum dolor</h4>
						<p class="date">01/01/2019</p>
						<p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos quis quod illum velit voluptas, autem animi expedita culpa accusantium repellat, nobis quo iste nostrum commodi fuga unde! Voluptatibus in, fugiat.</p>
						<p class="complete-content"><a href="">Conteúdo completo <i class="fa fa-arrow-right"></i></a> </p>
					</div>

					<div class="card-blog">
						<img src="assets/images/loose.jpg" alt="title">
						<h4 class="title">Lorem ipsum dolor</h4>
						<p class="date">01/01/2019</p>
						<p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos quis quod illum velit voluptas, autem animi expedita culpa accusantium repellat, nobis quo iste nostrum commodi fuga unde! Voluptatibus in, fugiat.</p>
						<p class="complete-content"><a href="">Conteúdo completo <i class="fa fa-arrow-right"></i></a> </p>
					</div>

					<div class="card-blog">
						<img src="assets/images/loose.jpg" alt="title">
						<h4 class="title">Lorem ipsum dolor</h4>
						<p class="date">01/01/2019</p>
						<p class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos quis quod illum velit voluptas, autem animi expedita culpa accusantium repellat, nobis quo iste nostrum commodi fuga unde! Voluptatibus in, fugiat.</p>
						<p class="complete-content"><a href="">Conteúdo completo <i class="fa fa-arrow-right"></i></a> </p>
					</div>

				</div>

			</div>
		</div>
	</div>

	<div class="section">
		<div class="row">
			<div class="col-md-6">
				<img src="assets/images/bg-left-bathroom.jpg" alt="bathroom" class="img-fluid">
			</div>
			<div class="col-md-6 bg-newsletter">
				<form action="">
					<h3>ACOMPANHE NOVIDADES, DESCUBRA NOVOS IMÓVEIS</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, deserunt tempore, omnis, esse maiores fugiat ipsam officia laboriosam, magni beatae accusantium natus.</p>
					<div class="form-group">
						<input type="text" class="form-control" id="name" name="name" placeholder="Nome">
					</div>

					<div class="form-group">
						<input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
					</div>

					<div class="form-group">
						<input type="submit" class="btn btn-block btn-default btn-baggio" value="Assinar newsletter">
					</div>

				</form>
			</div>
		</div>
	</div>

</div> <!-- CONTAINER-FLUID -->

<?php require("__footer.php") ?>