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
						
			<?php echo form_open('localizacao/salvar',array("onsubmit"=>"return validate()","class"=>"form-inline")); ?> 
			<input type="hidden" name="latitude" value="<?php echo $latitude; ?>">
			<input type="hidden" name="longitude" value="<?php echo $longitude; ?>">
			<input type="hidden" name="endereco" value="<?php echo $endereco; ?>">
			<input type="hidden" name="raio" value="<?php echo $raio; ?>">

			<div class="form-group">
			<label for="exampleInputName2">Nome do Local</label>
			<input type="text" name="local" class="form-control span4"  placeholder="Nome de Local">
			</div>
			<div class="form-group">
			<label for="exampleInputEmail2">Responsável</label>
			<input type="text" name="responsavel" class="form-control span4" placeholder="Informe o responsável">
			</div>
			<br/>
			<div class="form-group">
			<label for="exampleInputEmail2">Email</label>
			<input type="text" name="email_responsavel" class="form-control span4" placeholder="Informe o email do responsável">
			</div>
			<br/>
			<button type="submit" class="btn  btn-primary">Cadastrar</button>
		
			<form>

			<hr />

		<h4>Dados Capturados</h4>

		<table class="table table-striped">
		  <tr>
		 	<td>Latitude</td>
		 	<td>Longitude</td>
			<td>Raio</td>
		 	<td>Endereço</td>
		  </tr>

		  <tr>
		 	<td><?php echo $latitude; ?></td>
		 	<td><?php echo $longitude; ?></td>
			<td><?php echo $raio; ?></td>
		 	<td><?php echo $endereco; ?></td>
		  </tr>


</table>
		


		</div>

		



	</body>

</html>

