<?php

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Main CSS-->
        <link rel="stylesheet" type="text/css" href="/Bocos_Fruit/css/estilos.css">
        <!-- Font-icon css-->
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>LOGIN</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="login-img">
      <img src="/Bocos_Fruit/img/imagen0.jpg">
      </div>
      <div class="login-box"> 
        <!-- Formulario PREGUNTA SECRETA -->
        <div class="login-form">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa fa-shield"></i>Preguntas Secretas</h3>
          <div class="form-group">
            <label class="control-label">SELECCIONE LA PREGUNTA:</label>
            <select class="form-control">
                      <option>¿Cual es el nombre de su mascota?</option>
                      <option>¿Cual es el segundo nombre de su madre?</option>
                      <option>¿Cual es el nombre de la ciudad en la que naciste?</option>
                      <option>¿Cual era tu apodo de la infancia?</option>
                      <option>¿Cual es el nombre de su abuelo materno?</option>
                    </select>
          </div>
          <div class="form-group">
            <label class="control-label">RESPUESTA:</label>
            <input class="form-control" type="text" placeholder="Usuario">
          </div>
          <div class="form-group">
            <label class="control-label">NUEVA CONTRASEÑA:</label>
            <input class="form-control" type="text" placeholder="Usuario">
          </div>
          <div class="form-group">
            <label class="control-label">CONFIRMAR CONTRASEÑA:</label>
            <input class="form-control" type="text" placeholder="Usuario">
          </div>
          <div>
            <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#contenedor-modal"><i class="fa fa-unlock fa-lg fa-fw"></i>CONFIRMAR</button>
          </div> 
          <div class="form-group mt-3">
            <p class="semibold-text mb-0"><a href="/Bocos_Fruit/views/login/login.php" ><i class="fa fa-angle-left fa-fw"></i> REGRESAR</a></p>
          </div>       
        </div>     
      </div>
          <!-- modal contraseña? -->
      <div class="modal" id="contenedor-modal" class="modal fade" tabindex="-1" >
        <div class="modal-dialog modal-dialog-centered">            
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" style="font-weight: 800; font-size: 25px; text-align: center;"><i class="fa fa-exclamation-triangle" style="color: #fd7e14; font-weight: 800; font-size: 25px;"></i> Contraseña Exitosa</h5>
                <button class="close" data-dismiss="modal" style="color: #fd7e14; font-weight: 700;">
                  <span>&times;</span>
                </button>
            </div>
              <div class="modal-body" style="font-weight: 700; font-size: 25px; text-align: center;">
                <p>Por favor, Vuelva iniciar sesión con su nueva contraseña.</p>
              </div>
              <div class="modal-footer">
                <form action="/Bocos_Fruit/views/login/login.php">
                  <button class="btn btn-primary" style="font-weight: 600;">ACEPTAR</button>
                </form>
                  <button class="btn btn-secondary" data-dismiss="modal" style="font-weight: 600;">CERRAR</button>
              </div>
          </div>         
        </div>
      </div>
    
    </section>

   <!-- Essential javascripts for application to work-->
   <script src="/Bocos_Fruit/bootstrap4/js/jquery-3.3.1.min.js"></script>
    <script src="/Bocos_Fruit/bootstrap4/js/popper.min.js"></script>
    <script src="/Bocos_Fruit/bootstrap4/js/bootstrap.min.js"></script>
    <script src="/Bocos_Fruit/bootstrap4/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="/Bocos_Fruit/bootstrap4/js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
    <!-- The javascript modal-->
    <script src="/Bocos_Fruit/bootstrap4/js/jquery-3.3.1.min.js"></script>	 	
    <script src="/Bocos_Fruit/bootstrap4/js/popper.min.js"></script>	 	 	
    <script src="/Bocos_Fruit/bootstrap4/js/bootstrap.min.js"></script>   	
    <script src="/Bocos_Fruit/bootstrap4/js/jquery-ui.min.js"></script>
  </body>
</html>