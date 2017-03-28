<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:600" type="text/css" rel="stylesheet" />
        <link href="<?= base_url(); ?>css/estilo.css" type="text/css" rel="stylesheet" />

        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCNqZ1Tl_40gW5hJGrTTcJrN72_3d2GcLQ&"></script>
        <script type="text/javascript" src="<?= base_url(); ?>js/jquery.min.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>js/mapa.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>js/jquery-ui.custom.min.js"></script>

    </head>
    
    <body>

        <div id="apresentacao">

            <?php echo validation_errors(); ?>
    
          
    <?php echo form_open('localizacao/index',array("onsubmit"=>"return validate()")); ?>    
                
                <fieldset>
   
                    <div class="campos">
                        <label for="txtEndereco">Endereço:</label>
                        <input type="text" id="txtEndereco" name="endereco" />
                        <input type="button" id="btnEndereco" name="btnEndereco" value="Mostrar no mapa" />
                    </div>

                    <div id="mapa"></div>
                    <input type="hidden" id="txtLatitude" name="latitude" />
                    <input type="hidden" id="txtLongitude" name="longitude" />
					<input type="hidden" id="txtRaio" name="raio" />
                	<input type="submit" value="Cadastrar" name="btnEnviar" />
					
                    
                </fieldset>
            </form>
        </div>
    
    </body>
</html>
