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
<script  type="text/javascript">
function mostrar(nombre){
	$('.integrantes').fadeOut();
	$('.integrantes.'+nombre).fadeIn();
	
	$('.nombres').removeClass('seleccionado');
	$('.nombres.'+nombre).addClass('seleccionado');
	
	$('.btn_a_borrar').remove();
	$('.nombres .btn').show(0);
	$('.nombres.'+nombre+' .btn').hide(0).after('<img  border="0" class="btn btn_a_borrar" src="img/btn/btn_int_o.png" width="22" height="24" />');
	
	
	return false;
}
</script>
</head>

<body>
<?php include('top.php'); ?>
<div id="middle">
<?php include('middle.php'); ?>
</div>
<div id="contenido">
	<div id="menu">
    <ul>
    <li><a href="index.php">NOTICIAS</a></li>
    <li><a href="funcion.php">FUNCION</a></li>
    <li><a href="reglamento.php">REGLAMENTO</a></li>
    <li><a href="integrantes.php" class="currentmenu" >INTEGRANTES</a></li>
    <li><a href="biblioteca.php">BIBLIOTECA</a></li>
    <li><a href="actas.php">ACTAS</a></li>
    <li><a href="informes.php">INFORMES</a></li>
    </ul>
</div>
  <div id="desarrollo">
      <h1>Integrantes</h1>
      <div class="caja_integrantes">
        <div class="nombres seleccionado osvaldo"> <a onclick="return mostrar('osvaldo')" href="#"><img src="img/integrantes/Carlos_Diaz.png" alt="" width="64" height="65" border="0" class="foto" /></a> <a onclick="return mostrar('osvaldo')" href="#">
      <p><strong>Carlos D&iacute;az</strong></p>
          </a>
          <p>Presidente del Consejo Consultivo Previsional<br />
            <a href="mailto:cdiaz@consejoprevisional.cl">cdiaz@consejoprevisionalconsultivo.cl</a></p>
          <a href="#" onclick="return mostrar('osvaldo')"><img border="0" class="btn ro none" src="img/btn/btn_int.png" width="22" height="24" /><img  border="0" class="btn btn_a_borrar" src="img/btn/btn_int_o.png" width="22" height="24" /></a> </div>
        <div class="nombres david"> <a onclick="return mostrar('david')" href="#"><img src="img/integrantes/David_Bravo.png" alt="" width="64" height="65" border="0" class="foto" /></a> <a onclick="return mostrar('david')" href="#">
          <p><strong>David Bravo</strong></p>
          </a>
          <p>Consejero<br />
            <a href="mailto:olarra&ntilde;aga@consejoprevisional.cl">dbravo@consejoprevisionalconsultivo.cl</a></p>
          <a onclick="return mostrar('david')" href="#"><img  border="0" class="btn ro" src="img/btn/btn_int.png" width="22" height="24" /></a> </div>
        <div class="nombres monica"> <a onclick="return mostrar('monica')" href="#"><img src="img/integrantes/Monica_Titze.png" alt="" width="64" height="65" border="0" class="foto" /></a> <a onclick="return mostrar('monica')" href="#">
          <p><strong>M&oacute;nica Titze</strong></p>
          </a>
          <p>Consejera y Presidenta Subrogante<br />
            <a href="mailto:olarra&ntilde;aga@consejoprevisional.cl">mtitze@consejoprevisionalconsultivo.cl</a></p>
          <a onclick="return mostrar('monica')" href="#"><img  border="0" class="btn ro" src="img/btn/btn_int.png" width="22" height="24" /></a> </div>
        <div class="nombres andras"> <a onclick="return mostrar('andras')" href="#"><img src="img/integrantes/Andras_Uthoff.png" alt="" width="64" height="65" border="0" class="foto" /></a> <a onclick="return mostrar('andras')" href="#">
          <p><strong>Andras Uthoff</strong></p>
          </a>
          <p>Consejero<br />
            <a href="mailto:olarra&ntilde;aga@consejoprevisional.cl">authoff@consejoprevisionalconsultivo.cl</a></p>
          <a onclick="return mostrar('andras')" href="#"><img  border="0" class="btn ro" src="img/btn/btn_int.png" width="22" height="24" /></a> </div>
      </div>
      <div class="integrantes osvaldo">
        <p><strong>Carlos D&iacute;az</strong></p>
        <p>Ingeniero Comercial con  menci&oacute;n en Econom&iacute;a de la Pontificia Universidad Cat&oacute;lica de Chile; Master of  Arts de la Universidad de California; en la actualidad es Decano de la Facultad  de Ciencias Econ&oacute;micas y Empresariales de la Universidad de los  Andes,&nbsp; donde es Miembro del Consejo  Superior de la Universidad y Profesor de las asignaturas de Organizaci&oacute;n  Industrial, Estrategia de Negocios, Estrategias y Determinaci&oacute;n de Precios,  Introducci&oacute;n a la   Microeconom&iacute;a y Regulaci&oacute;n Econ&oacute;mica.</p>
        <p>Es miembro de la  Comisi&oacute;n Clasificadora de riesgos; Director de  Telef&oacute;nica Chile S.A. y  Miembro del Comit&eacute; de Auditor&iacute;a de esta empresa.</p>
        <p>Ha realizado  investigaciones y publicaciones, en las &aacute;reas de econom&iacute;a previsional, modalidades  de pensi&oacute;n, numerosos casos antimonopolios desde 1997 en adelante, peritajes en  temas de regulaci&oacute;n, fijaciones de  precios y &nbsp;an&aacute;lisis organizaci&oacute;n  industrial </p>
      </div>
      <div class="integrantes david none">
        <p><strong>David Bravo</strong></p>
        <p>Ingeniero Comercial de la Universidad Cat&oacute;lica  de Chile; Master y candidato a Doctor en Econom&iacute;a de la Universidad de  Harvard; profesor asistente del Departamento de Econom&iacute;a de la Universidad de Chile;  director del Centro de Microdatos. </p>
        <p>&nbsp;</p>
        <p>Investigador afiliado al Population Studies  Center, University of Pennsylvania, USA. Director del Comit&eacute; T&eacute;cnico Asesor  (Consejo de Rectores) de la   Prueba de Selecci&oacute;n Universitaria. Director de la Encuesta de Protecci&oacute;n  Social. En 2006 fue miembro del Consejo Asesor Presidencial para la Reforma Previsional. </p>
        <p>&nbsp;</p>
        <p>Ha realizado trabajos en las &aacute;reas de mercado del trabajo, educaci&oacute;n,  desigualdad, evaluaci&oacute;n de impacto y seguridad social. </p>
      </div>
      <div class="integrantes andras none">
        <p><strong>Andras Uthoff</strong></p>
        <p>Ingeniero Comercial de la Universidad de Chile;  Master y Doctor en Econom&iacute;a de la Universidad California,  Berkeley. </p>
        <p>&nbsp;</p>
        <p>Se desempe&ntilde;a como asesor de la Direcci&oacute;n de Presupuestos del Ministerio de  Hacienda del Gobierno de Chile y como consultor del PNUD, de la AISS, del CEPAL, del ILPES,  de la OIT, de la GTZ y del Banco Mundial. Fue  miembro del Consejo Asesor Presidencial para la Reforma Previsional.  Ha ejercido como coordinador del Proyecto de Diagn&oacute;stico y Perspectivas de  Reforma de los Sistemas de Pensiones en Am&eacute;rica Latina de la CEPAL y como oficial a cargo  de la Divisi&oacute;n  de Desarrollo Social de la   CEPAL. </p>
        <p>&nbsp;</p>
        <p>Ha realizado diversas contribuciones a libros  institucionales y art&iacute;culos en revistas especializadas sobre: movimientos de  capitales y pol&iacute;tica macroecon&oacute;mica; reformas a la seguridad social en  pensiones y salud; pobreza, empleo y poblaci&oacute;n; determinantes del ahorro e  inversi&oacute;n; desarrollo financiero, y sobre mercado de trabajo e inflaci&oacute;n.</p>
      </div>
      <div class="integrantes monica none">
        <p><strong>Mónica Titze</strong></p>
        <p>Ingeniera Civil Industrial de la Universidad de Chile.  Actualmente ejerce como consultora independiente en materias de Previsi&oacute;n  Social. </p>
        <p>&nbsp;</p>
        <p>Fue jefa de la   Divisi&oacute;n de Estudios y jefa de la Divisi&oacute;n de Prestaci&oacute;n de  Seguros de la   Superintendencia de AFP. Se ha desempe&ntilde;ado como profesora del  curso Administraci&oacute;n de Ahorro Previsional en la Universidad Adolfo  Ib&aacute;&ntilde;ez. </p>
        <p>&nbsp;</p>
        <p>Ha realizado asesor&iacute;as a congresistas chilenos en diversas materias  previsionales y consultor&iacute;as para los pa&iacute;ses de Bolivia, Paraguay, Uruguay,  Ecuador y Eslovaquia.</p>
      </div>
  </div>
</div>
<?php include('sitios_interes.php'); ?>

<?php include('footer.php'); ?>        


</body>
</html>