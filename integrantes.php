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

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-88868414-10"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-88868414-10');
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
    <li><a href="archivo.php">ARCHIVO</a></li>
    </ul>
</div>
  <div id="desarrollo" style="height: 420px;">
      <h1>Integrantes</h1>
      
	  <div class="caja_integrantes">

	  	<div class="nombres carlos"> <a onclick="return mostrar('carlos')" href="#"><img src="img/integrantes/Carlos_Diaz.png" alt="" width="64" height="65" border="0" class="foto" /></a> <a onclick="return mostrar('carlos')" href="#">
	  	  <p><strong>Carlos D??az Vergara</strong></p>
	  	  </a>
	  	  <p>Presidente del Consejo Consultivo Previsional<br /></p>
	  	  <a onclick="return mostrar('carlos')" href="#"><img  border="0" class="btn ro" src="img/btn/btn_int.png" width="22" height="24" /></a> </div>
        
<!--		<div class="nombres seleccionado claudia"> <a onclick="return mostrar('claudia')" href="#"><img src="img/integrantes/Claudia-Sanhueza.png" alt="" width="64" height="65" border="0" class="foto" /></a> <a onclick="return mostrar('claudia')" href="#">
		  <p><strong>Claudia Sanhueza Riveros</strong></p>
          </a>
          <p>Presidenta del Consejo Consultivo Previsional</p>
          <a href="#" onclick="return mostrar('claudia')"><img  border="0" class="btn btn_a_borrar" src="img/btn/btn_int_o.png" width="22" height="24" /></a> </div>-->
        
	<!--	-->
          
  <!--      <div class="nombres ricardo"> <a onclick="return mostrar('ricardo')" href="#"><img src="img/integrantes/Ricardo-Paredes.png" alt="" width="64" height="65" border="0" class="foto" /></a> <a onclick="return mostrar('ricardo')" href="#">
          <p><strong>Ricardo Paredes</strong></p>
          </a>
          <p>Consejero<br /></p>
          <a onclick="return mostrar('ricardo')" href="#"><img  border="0" class="btn ro" src="img/btn/btn_int.png" width="22" height="24" /></a> </div>-->

		<div class="nombres macarena"> <a onclick="return mostrar('macarena')" href="#"><img src="img/integrantes/macarena-lobos.png" alt="" width="64" height="65" border="0" class="foto" /></a> <a onclick="return mostrar('macarena')" href="#">
		  <p><strong>Macarena Lobos Palacios</strong></p>
		  </a>
		  <p>Consejero<br /></p>
		  <a onclick="return mostrar('macarena')" href="#"><img  border="0" class="btn ro" src="img/btn/btn_int.png" width="22" height="24" /></a> </div>

		<div class="nombres gonzalo"> <a onclick="return mostrar('gonzalo')" href="#"><img src="img/integrantes/gonzalo-edwards.png" alt="" width="64" height="65" border="0" class="foto" /></a> <a onclick="return mostrar('gonzalo')" href="#">
		  <p><strong>Gonzalo Edwards Guzm??n</strong></p>
		  </a>
		  <p>Consejero<br /></p>
		  <a onclick="return mostrar('gonzalo')" href="#"><img  border="0" class="btn ro" src="img/btn/btn_int.png" width="22" height="24" /></a> </div>

      <div class="nombres maria"> <a onclick="return mostrar('maria')" href="#"><img src="img/integrantes/Maria_Cifuentes.png" alt="" width="64" height="65" border="0" class="foto" /></a> <a onclick="return mostrar('maria')" href="#">
        <p><strong>Maria Cecilia Cifuentes Hurtado</strong></p>
        </a>
        <p>Consejero<br /></p>
        <a onclick="return mostrar('maria')" href="#"><img  border="0" class="btn ro" src="img/btn/btn_int.png" width="22" height="24" /></a> </div>

      <div class="nombres seleccionado andras"> <a onclick="return mostrar('andras')" href="#"><img src="img/integrantes/Andras_Uthoff.png" alt="" width="64" height="65" border="0" class="foto" /></a> <a onclick="return mostrar('andras')" href="#">
          <p><strong>Andras Uthoff</strong></p>
          </a>
          <p>Consejero<br /></p>
          <a onclick="return mostrar('andras')" href="#"><img  border="0" class="btn ro" src="img/btn/btn_int.png" width="22" height="24" /></a> </div>
 


      <!--  <div class="nombres christian"> <a onclick="return mostrar('christian')" href="#"><img src="img/integrantes/Christian-Larrain.png" alt="" width="64" height="65" border="0" class="foto" /></a> <a onclick="return mostrar('christian')" href="#">
          <p><strong>Christian Larra??n</strong></p>
          </a>
          <p>Consejero<br /></p>
          <a onclick="return mostrar('christian')" href="#"><img  border="0" class="btn ro" src="img/btn/btn_int.png" width="22" height="24" /></a> </div>    -->
          
      <!-- </div>
     <div class="integrantes claudia none">
        <p><strong>Claudia Sanhueza Riveros</strong></p>
        <p>Profesora Asociada del Instituto de Pol??ticas P??blicas de la Universidad Diego Portales. Es economista de la Universidad de Chile y Doctora en Econom??a por la Universidad de Cambridge, Inglaterra. Es investigadora del Center for Social Conflict and Cohesion Studies.</p>
        <p>Es autora de diversas investigaciones en el campo de la econom??a laboral, educaci??n y pol??ticas sociales. Ha colaborado asesorando al Gobierno de Chile en temas de medici??n y superaci??n de pobreza, educaci??n y pensiones.</p>
      </div>-->

        <div class="integrantes carlos none">
	          <p><strong>Carlos D??az Vergara</strong></p>
	          <p>Ingeniero Comercial, con menci??n en Econom??a de la P. Universidad Cat??lica de Chile; Master of Arts de la Universidad de California, Los ??ngeles, EE.UU
	      </p><p>
	      En la actualidad es Profesor de la Escuela de Administraci??n de la Facultad de Ciencias Econ??micas y Administrativas de la P. Universidad Cat??lica de Chile y Presidente del Consejo Consultivo Previsional. Fue decano de la Facultad de Ciencias Econ??micas y Empresariales de la Universidad de los Andes y Director de la Escuela de Administraci??n  de la Facultad de Ciencias Econ??micas y Administrativas de la P. Universidad Cat??lica de Chile. Fue miembro de la Comisi??n Asesora Presidencial sobre Pensiones y es y ha sido Director y consultor de empresas.
	      </p><p>
	      Ha realizado investigaciones y publicaciones en las ??reas de econom??a previsional, modalidades de pensi??n, organizaci??n industrial y estrategia de negocios. Ha sido consultor de diversas empresas y organismos internacionales. Es miembro del Consejo Consultivo Previsional desde el 10 de junio de 2010.</p>
        </div>

        
     <div class="integrantes andras none">
        <p><strong>Andras Uthoff Botka</strong></p>
    <p>Ingeniero Comercial de la Universidad de Chile; M??ster y Doctor en Econom??a de la Universidad de California, Berkeley.</p>

     <p>Ha sido asesor regional de la OIT (PREALC) y de la CEPAL, oficial a cargo de la Divisi??n de Desarrollo Social de la CEPAL y profesor de la Facultad de Econom??a y Negocios de la Universidad de Chile. Se ha desempe??ado como asesor de la Direcci??n de Presupuestos del Ministerio de Hacienda y del Gabinete del Ministerio de Salud del Gobierno de Chile y como consultor del PNUD, de la AISS, de la GTZ, de la OIT y de Euro Social. Fue miembro de las Comisiones  asesoras presidenciales para la Reforma Previsional en 2006 y 2014-15.</p>
      </div>      
    <!--   <div class="integrantes ricardo none">
        <p><strong>Ricardo Paredes Molina</strong></p>
        <p>Ingeniero Comercial de la Universidad de Chile; Ph.D. en Econom??a de la Universidad de California, Los ??ngeles.
		</p><p>
		Fue decano de la Facultad de Econom??a de la Universidad de Chile, y a partir del a??o 2003 es Profesor Titular Asociado de la Escuela de Ingenier??a de la Universidad Cat??lica de Chile. Entre 1990 y 1994 integr?? la Comisi??n Preventiva Central Antimonopolios. En 2011 fue Presidente de la Comisi??n de Financiamiento para la Educaci??n Superior. Ha sido consultor del BID, el Banco Mundial, adem??s de diversos gobiernos y empresas privadas.
		</p><p>
		Ha publicado m??s de 40 art??culos en revistas indexadas, y 3 libros.</p>
      </div>-->

      <div class="integrantes macarena none">
        <p><strong>Macarena Lobos Palacios</strong></p>
        <p>Doctora en derecho de la Universidad Complutense de Madrid y abogada de la Universidad de Chile.
		</p><p>
		Fue subsecretaria del Ministerio de Hacienda, lugar en el que previamente se desempe???? como Coordinadora Legislativa. Ejerci?? como secretaria ejecutiva del programa legislativo de CIEPLAN. Tambi??n fue asesora jur??dica de la Direcci??n de Presupuestos del Ministerio de Hacienda y del Ministerio del Trabajo y Previsi??n Social.
		</p><p>
		Actualmente, se desempe??a como asesora del Consejo Resolutivo de Asignaciones Parlamentarias, docente del Magister de Pol??ticas P??blicas de la Escuela de Gobierno de la Universidad Cat??lica y brinda, a trav??s de su consultora ???Lobos y Asociados Ltda.??? asesor??a estrat??gica en materia de pol??ticas p??blicas, tanto al sector p??blico como privado.</p>
      </div>

      <div class="integrantes gonzalo none">
        <p><strong>Gonzalo Edwards Guzm??n</strong></p>
        <p>Ingeniero Comercial y Mag??ster en Econom??a de la Pontificia Universidad Cat??lica de Chile, Master of Arts del Food Research Institute y Ph. D. en Sistemas de Ingenier??a y Econom??a de la Universidad de Stanford.
		</p><p>
		Ha sido director del Instituto de Econom??a (1997-2009), de donde es profesor titular; del Centro de Desarrollo Docente (2009-2011) y del Club Deportivo (2000-2004) de la Universidad Cat??lica de Chile.  Asimismo, fue vicepresidente (2004-2006) y presidente (2006-2008) de la Sociedad de Econom??a de Chile. Ha sido director de empresas y consultor del Banco Mundial, del BID, de los Ministerios de Vivienda y de Desarrollo Social, de las Municipalidades de Santiago, Vitacura y Las Condes, y de distintas compa????as de seguros e instituciones gremiales, tales como la Asociaci??n de AFP y la Asociaci??n de Aseguradores.
		</p><p>
		Tiene varias publicaciones en revistas especializadas y cap??tulos de libro en las ??reas de econom??a previsional y modalidades de pensi??n, econom??a urbana y microeconom??a aplicada en general.</p>
      </div>

      

     <div class="integrantes maria none">
        <p><strong>Mar??a Cecilia Cifuentes Hurtado</strong></p>
        <p>Ingeniero Comercial y Mag??ster en Econom??a de la Pontificia Universidad Cat??lica de Chile.</p>
        <p>Actualmente es Directora del Centro de Estudios Financieros del ESE Business School de la Universidad de Los Andes, donde adem??s se desempe??a como profesora e investigadora. Fue Economista Senior del Instituto Libertad y Desarrollo, a cargo de los temas fiscales, laborales, previsionales y de mercado de capitales. Adem??s, ha sido profesora de pregrado en la Pontificia Universidad Cat??lica, Universidad de Los Andes y Universidad Diego Portales.</p>
        <p>Ha publicado diversos art??culos en ??reas de macroeconom??a, mercado laboral y pensiones, junto con la edici??n y participaci??n en el libro ???Pensiones: Propuestas para el Futuro???, Ediciones LyD, 2015.</p>
      </div>
      
  </div>
</div>
<?php include('sitios_interes.php'); ?>

<?php include('footer.php'); ?>        


</body>
</html>