<?php require("__header.php"); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 bg-contact-baggio d-none d-md-block">
			<!-- BACKGROUND -->
		</div>
		<div class="col-md-6" >

			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="./">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Contato</li>
			</ol>

			<div class="section wrap-contact">
				<h3><span>CONTATO</span></h3>
				<div class="row">
					<div class="col-md-12">
						<p>Você pode contatar-nos on-line. Preencha os campos abaixo que em breve retornaremos sua mensagem.</p>
						<p>Ou envie uma mensagem diretamente para:<br/><strong>contato@baggioimoveis.com.br</strong></p>
						<p><small>Todos os campos com (*) são de preenchimento obrigatório</small></p>
					</div>						
				</div>

				<form>
					<div class="form-group">
						<input type="text" class="form-control" id="name" name="name" placeholder="Nome">
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
						</div>
						<div class="form-group col-md-6">
							<input maxlength="15" type="text" onkeyup="mascara(this,mtel);" class="form-control" id="phone" name="phone" placeholder="DD+Telefone com 9 dígitos">
						</div>
					</div>
					<div class="form-group">
						<select id="subject" name="subject" class="form-control">
							<option selected>Assunto</option>
							<option>Lorem Ipsum não é simplesmente</option>
							<option>Literatura latina clássica datada</option>
							<option>Sua indubitável origem</option>
						</select>
					</div>
					<div class="form-group">
						<textarea placeholder="Mensagem" name="message" id="message" cols="30" rows="5" class="form-control"></textarea>
					</div>
					<p><div class="g-recaptcha" data-sitekey="6Le7mbcZAAAAAFh6a9kKoJKONovblTVd0MjzeVFg"></div></p>
					<button type="submit" class="btn btn-baggio btn-block">Enviar Mensagem</button>
				</form>

				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="list-contact">
							<h4>Vila Izabel</h4>
							<ul>
								<li><i class="fa fa-phone"></i> (41) 3015-2727</li>
								<li>Rua Prof. Ulisses Vieira, 894.</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="list-contact">
							<h4>Campo Comprido</h4>
							<ul>
								<li> <i class="fa fa-phone"></i> (41) 3015-2727</li>
								<li>Rua Prof. Ulisses Vieira, 894.</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						<div class="list-contact">
							<h4>Horário de Funcionamento</h4>
							<ul>
								<li>De segunda a Sexta das 08:00h às 18:00h</li>
								<li>Sábados das 09:00h às 12:00h</li>
							</ul>
						</div>
					</div>
					<div class="col-md-6">

					</div>
				</div>
			</div><!-- SECTION -->
		</div>
	</div>

</div> <!-- CONTAINER-FLUID -->

<?php require("__footer.php") ?>