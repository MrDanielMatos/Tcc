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

		<a class="btn btn-primary" href="<?php echo site_url('localizacao/index/'); ?>" role="button">Página Aplicação</a>

		<h4>Lista de Dados</h4>
			
			 <table class="table table-striped">
	
		<tr>
			<th>ENDEREÇO</th>
			<th>LATITUDE</th>
			<th>LONGITEUDE</th>
			<th>RAIO</th>
			<th>LOCAL</th>
			<th>RESPONSAVEL</th>
			<th>EMAIL RESPONSAVEL</th>
			<th>EXCLUIR</th>
		</tr>
	
		
			<?php foreach ($listCadastro as $objCadastro): ?>
			 <tr>
				<td><?php echo $objCadastro->endereco; ?></td>
				<td><?php echo $objCadastro->latitude; ?></td>
				<td><?php echo $objCadastro->longitude; ?></td>
				<td><?php echo $objCadastro->raio; ?></td>
				<td><?php echo $objCadastro->local; ?></td>
				<td><?php echo $objCadastro->responsavel; ?></td>
				<td><?php echo $objCadastro->email_responsavel; ?></td>
				<td><a href="<?php echo site_url('localizacao/excluir/'.$objCadastro->id); ?>" class="btn btn-danger">Apagar</a>
				</td>
			</tr>
			<?php endforeach;?>
			
</table>			
			

		</div>

		



	</body>

</html>

