<html>
	
	<head>
		
		 

		  <link href="<?= base_url(); ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
          <script type="text/javascript" src="<?= base_url(); ?>js/jquery.min.js"></script>
		  <script src="<?= base_url(); ?>bootstrap/js/bootstrap.min.js"></script>

			<style type="text/css">
				#tudo {
				width: 760px;
				margin:0 auto;
				margin-top:20px; 			
				}
			</style>
	</head>
		
	<body>
	
		<div id="tudo">

		<h4>Informar Dados</h4>
			<?php echo form_open('login/salvar',array("onsubmit"=>"return validate()","class"=>"form-inline")); ?>
			<div class="form-group">
			<label for="exampleInputName2">Nome Completo</label>
			<input type="text" name="nome" class="form-control span4"  placeholder="Nome do Usuario">
			</div>
			<div class="form-group">
			<label for="exampleInputEmail2">Email</label>
			<input type="text" name="email" class="form-control span4" placeholder="Email Usuario">
			</div>
			<br/>
			<div class="form-group">
			<label for="exampleInputEmail2">Senha</label>
			<input type="password" name="senha" class="form-control span4" placeholder="Informe a Senha">
			</div>
			<div class="form-group">
			<label for="exampleInputEmail2">Confirme a Senha</label>
			<input type="password" name="confirma_senha" class="form-control span4" placeholder="Confirme a Senha">
			</div>
			<br/>
			<button type="submit" class="btn  btn-primary">Cadastrar</button>