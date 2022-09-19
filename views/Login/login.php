<?php

?>

<!DOCTYPE html>
<html lang="es">
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
        <form class="login-form" action="inicio.php">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user" style="color: #fd7e14; font-weight: 800; font-size: 100px;"></i></h3>
          <div class="form-group">
            <label class="control-label">USUARIO</label>
            <input class="form-control" type="text" placeholder="Usuario" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">CONTRASEÑA</label>
            <input class="form-control" type="password" placeholder="Contraseña">
          </div>
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <label>
                  <input type="checkbox"><span class="label-text">Mantener Sesión</span>
                </label>
              </div>
              <p class="semibold-text mb-2"><a href="/Bocos_Fruit/views/login/login_contraseña.php">¿Olvidaste tu Contraseña?</a></p>
            </div>
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>INICIA SESIÓN</button>
          </div>
        </form>    
   
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
  </body>
</html>