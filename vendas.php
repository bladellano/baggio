<?php require("__header.php"); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 bg-sales-baggio d-none d-md-block">
			<!-- BACKGROUND -->
			<div class="main-title-sales">
				<h3>ALUGUE OU VENDA SEU IMÓVEL de forma prática e segura!</h3>
				<p>Com o Baggio Imóveis.
				Você tem toda a facilidade que deseja e toda a segurança que você precisa.</p>
			</div>
		</div>
		<div class="col-md-6" >

			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="./">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Vendas</li>
			</ol>

			<div class="section wrap-contact">
				<h3><span>PREENCHA SEUS DADOS</span></h3>
				<div class="row">
					<div class="col-md-12">
						<p>...e ganhe uma consultoria exclusiva e gratuita para seu imóvel</p>
					</div>						
				</div>

				<form>
					<div class="form-group">
						<input type="text" class="form-control" id="name" name="name" placeholder="Nome">
					</div>

					<div class="form-group">
						<input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
					</div>

					<div class="form-group">
						<input type="text" class="form-control" onkeyup="mascara(this,mtel);" id="phone" name="phone" placeholder="+55">
					</div>

					<div class="form-group">
						<input type="text" class="form-control" id="district" name="district" placeholder="Bairro que seu imóvel está localizado">
					</div>

					<div class="form-group">
						<select id="subject" name="subject" class="form-control">
							<option selected>Eu quero*</option>
							<option>Lorem Ipsum não é simplesmente</option>
							<option>Literatura latina clássica datada</option>
							<option>Sua indubitável origem</option>
						</select>
					</div>
					<br/>
					<h3><span>Meu imóvel é: </span></h3>

					<div class="form-group">
						<div class="form-check form-check-inline">
							<input type="radio" name="immobile" id="residencial" value="residencial">
							<label for="residencial">Residencial</label>
						</div>
						<div class="form-check form-check-inline">
							<input type="radio" name="immobile" id="comercial" value="comercial">
							<label for="comercial">Comercial</label>
						</div>
					</div>

					<button type="submit" class="btn btn-baggio btn-block">Quero Marcar</button>
				</form>

			
			</div><!-- SECTION -->
		</div>
	</div>

</div> <!-- CONTAINER-FLUID -->

<?php require("__footer.php") ?>