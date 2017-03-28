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

		<h4>Login</h4>
			<?php echo validation_errors(); ?>
						
			<?php echo form_open('login/autenticar',array("onsubmit"=>"return validate()")); ?> 

			<div class="form-group">
			<label for="exampleInputName2">Usuario</label>
			<input type="text" name="email" class="form-control span4"  placeholder="Email">
			</div>
			<div class="form-group">
			<label for="exampleInputEmail2">Senha</label>
			<input type="password" name="senha" class="form-control span4" placeholder="Senha">
			</div>			
			<a href="<?php echo site_url('login/cadastra/')?>">Cadastre-se</a>
			<br/>
			<button type="submit" class="btn  btn-primary">login</button>
			<hr />



</table>
		


		</div>

		



	</body>

</html>

