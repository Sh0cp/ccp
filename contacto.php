<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Consejo Consultivo</title>
<link href="css/estilos.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="js/rollover.js" type="text/javascript"></script>
<!--[if lt IE 7.]>
<script defer type="text/javascript" src="js/pngfix.js"></script>
<![endif]-->
</head>

<body>
<?php include('top.php'); ?>
<div id="middle">
<?php include('middle.php'); ?>
</div>
<div id="contenido">
	<div id="menu">
    <ul>
    <li style="margin-left:18px"><a href="index.php"><img src="img/menu/noticias.jpg" width="104" height="32" border="0" class="ro" /></a></li>
    <li><a href="funcion.php"><img src="img/menu/funcion.jpg" width="104" height="32" border="0" class="ro" /></a></li>
    <li><a href="reglamento.php"><img src="img/menu/reglamento.jpg" width="104" height="32" border="0" class="ro" /></a></li>
    <li><a href="integrantes.php"><img src="img/menu/integrantes.jpg" width="104" height="32" border="0" class="ro" /></a></li>
    <li><a href="biblioteca.php"><img src="img/menu/biblioteca.jpg" width="104" height="32" border="0" class="ro" /></a></li>
    <li><a href="actas.php"><img src="img/menu/actas.jpg" width="104" height="32" border="0" class="ro" /></a></li>
    <li><a href="informes.php"><img src="img/menu/informes.jpg" width="104" height="32" border="0" class="ro" /></a></li>
    </ul>
</div>
  <div id="desarrollo">
    <h1 class="naranjo">Contacto</h1><br />
<form>
    <div class="formulario margen_right">
      <label><span>(*)</span> Nombre:</label>
        <input type="text" name="textfield" id="textfield" />
        <label><span>(*)</span> Apellido:</label>
        <input type="text" name="textfield" id="textfield" />
        <label><span>(*)</span> Email:</label>
        <input type="text" name="textfield" id="textfield" />
        <label><span>(*)</span> Tel&eacute;fono de contacto:</label>
        <input type="text" name="textfield" id="textfield" />
      
    </div>
    <div class="formulario margen_right">

	  <label><span>(*)</span> Comentario:</label>
      <textarea class="comentario" name="textfield" id="textfield"></textarea>
      <a class="enviar" href="#">Enviar</a><br/><br/>

	  <p><span>(*)</span> Obligatorio</p>
    </div>
    </form>
  </div>
</div>
<?php include('sitios_interes.php'); ?>
<?php include('footer.php'); ?>  
          


</body>
</html>