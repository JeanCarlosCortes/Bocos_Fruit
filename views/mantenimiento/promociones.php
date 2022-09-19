<?php

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>PROMOCIONES</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Estilos CSS-->
    <link rel="stylesheet" type="text/css" href="/Bocos_Fruit/css/estilos.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
<body class="app sidebar-mini pace-done sidenav-toggled">
    <!-- Navbar-->
    <header class="app-header">
      <ul class="app-nav">
        <h1 class="app-header__logo"> SYSTEMS BOCO'S FRUIT </h1>
      </ul>
       <!-- menu Lateral-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
       <!-- Botón de alternancia de la barra lateral--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" ></a>
       <p STYLE="text-align: center;">PROMOCIONES</p>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="/Bocos_Fruit/views/login/inicio.php"><i class="app-menu__icon fa fa-home fa-lg"></i><span class="app-menu__label">Inicio</span></a></li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-bar-chart"></i><span class="app-menu__label">Ventas</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="/Bocos_Fruit/views/ventas/mesas.php"> Mesas </a></li>
            <li><a class="treeview-item" href="/Bocos_Fruit/views/ventas/facturas.php" > Facturas</a></li>
            <li><a class="treeview-item" href="/Bocos_Fruit/views/ventas/clientes.php"> Clientes</a></li>
            <li><a class="treeview-item" href="/Bocos_Fruit/views/ventas/talonario_cai.php"> Talonario CAI</a></li>
            <li><a class="treeview-item" href="/Bocos_Fruit/views/ventas/reportes_ventas.php"> Reportes Ventas</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Inventario</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="/Bocos_Fruit/views/inventario/compras.php"> Compras</a></li>
            <li><a class="treeview-item" href="/Bocos_Fruit/views/inventario/gestion_inventario.php"> Cestion Inventario</a></li>
            <li><a class="treeview-item" href="/Bocos_Fruit/views/inventario/materia_prima.php"> Materia Prima</a></li>
            <li><a class="treeview-item" href="/Bocos_Fruit/views/inventario/mobiliario_equipo.php"> Equipo y Mobiliario</a></li>
            <li><a class="treeview-item" href="/Bocos_Fruit/views/inventario/proveedores.php"> Proveedores</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-lock"></i><span class="app-menu__label">Seguridad</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="/Bocos_Fruit/views/seguridad/gestion_usuario.php"> Gestion Usuarios</a></li>
            <li><a class="treeview-item" href="/Bocos_Fruit/views/seguridad/gestion_roles.php"> Gestion Roles</a></li>
            <li><a class="treeview-item" href="/Bocos_Fruit/views/seguridad/gestion_objetos.php"> Gestion Objetos</a></li>
            <li><a class="treeview-item" href="/Bocos_Fruit/views/seguridad/gestion_permisos.php"> Gestion Permisos</a></li>
            <li><a class="treeview-item" href="/Bocos_Fruit/views/seguridad/bitacora.php"> Bitacora</a></li>
            <li><a class="treeview-item" href="/Bocos_Fruit/views/seguridad/preguntas.php"> Preguntas Seguridad</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Empleados</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="/Bocos_Fruit/views/empleados/gestion_empleados.php"> Gestion Empleados</a></li>
            <li><a class="treeview-item" href="/Bocos_Fruit/views/empleados/gestion_sucursal.php"> Gestion Sucursal</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-cogs"></i><span class="app-menu__label">Administracion</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="/Bocos_Fruit/views/administracion/gestion_backups.php"> Gestion Backups</a></li>
            <li><a class="treeview-item" href="/Bocos_Fruit/views/administracion/parametros_sistema.php"> Parametros Sistema</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-cutlery"></i><span class="app-menu__label">Catalogo</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="/Bocos_Fruit/views/catalogo/gestion_menu.php"> Gestion Menu</a></li>
            <li><a class="treeview-item" href="/Bocos_Fruit/views/catalogo/gestion_recetario.php"> Gestion Recetario</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-cog fa-lg"></i><span class="app-menu__label">Mantenimiento</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="/Bocos_Fruit/views/mantenimiento/forma_pago.php"> Forma de Pago</a></li>
            <li><a class="treeview-item" href="/Bocos_Fruit/views/mantenimiento/descuentos.php"> Descuentos</a></li>
            <li><a class="treeview-item" href="/Bocos_Fruit/views/mantenimiento/promociones.php"> Promociones</a></li>
            <li><a class="treeview-item" href="/Bocos_Fruit/views/mantenimiento/estado_pedido.php"> Estado Pedido</a></li>
            <li><a class="treeview-item" href="/Bocos_Fruit/views/mantenimiento/estado_usuario.php"> Estado Usuario</a></li>
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-user fa-lg"></i><span class="app-menu__label">Perfil</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="/Bocos_Fruit/views/perfil/gestion_perfil.php"> Gestión Perfil</a></li>
            <li><a class="treeview-item" href="/Bocos_Fruit/views/perfil/preguntas_usuario.php"> Preguntas Usuario</a></li>
            <li><a class="treeview-item" href="/Bocos_Fruit/views/perfil/acerca_de.php"> Acerca De</a></li>
            <li><a class="treeview-item" href="/Bocos_Fruit/views/login/login.php"> Cerrar Sesión</a></li>
          </ul>
        </li>
      </ul>
    </aside>
    </header>
   
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