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
	  	  <p><strong>Carlos Díaz Vergara</strong></p>
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
		  <p><strong>Gonzalo Edwards Guzmán</strong></p>
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
          <p><strong>Christian Larraín</strong></p>
          </a>
          <p>Consejero<br /></p>
          <a onclick="return mostrar('christian')" href="#"><img  border="0" class="btn ro" src="img/btn/btn_int.png" width="22" height="24" /></a> </div>    -->
          
      <!-- </div>
     <div class="integrantes claudia none">
        <p><strong>Claudia Sanhueza Riveros</strong></p>
        <p>Profesora Asociada del Instituto de Políticas Públicas de la Universidad Diego Portales. Es economista de la Universidad de Chile y Doctora en Economía por la Universidad de Cambridge, Inglaterra. Es investigadora del Center for Social Conflict and Cohesion Studies.</p>
        <p>Es autora de diversas investigaciones en el campo de la economía laboral, educación y políticas sociales. Ha colaborado asesorando al Gobierno de Chile en temas de medición y superación de pobreza, educación y pensiones.</p>
      </div>-->

        <div class="integrantes carlos none">
	          <p><strong>Carlos Díaz Vergara</strong></p>
	          <p>Ingeniero Comercial, con mención en Economía de la P. Universidad Católica de Chile; Master of Arts de la Universidad de California, Los Ángeles, EE.UU
	      </p><p>
	      En la actualidad es Profesor de la Escuela de Administración de la Facultad de Ciencias Económicas y Administrativas de la P. Universidad Católica de Chile y Presidente del Consejo Consultivo Previsional. Fue decano de la Facultad de Ciencias Económicas y Empresariales de la Universidad de los Andes y Director de la Escuela de Administración  de la Facultad de Ciencias Económicas y Administrativas de la P. Universidad Católica de Chile. Fue miembro de la Comisión Asesora Presidencial sobre Pensiones y es y ha sido Director y consultor de empresas.
	      </p><p>
	      Ha realizado investigaciones y publicaciones en las áreas de economía previsional, modalidades de pensión, organización industrial y estrategia de negocios. Ha sido consultor de diversas empresas y organismos internacionales. Es miembro del Consejo Consultivo Previsional desde el 10 de junio de 2010.</p>
        </div>

        
     <div class="integrantes andras none">
        <p><strong>Andras Uthoff Botka</strong></p>
    <p>Ingeniero Comercial de la Universidad de Chile; Máster y Doctor en Economía de la Universidad de California, Berkeley.</p>

     <p>Ha sido asesor regional de la OIT (PREALC) y de la CEPAL, oficial a cargo de la División de Desarrollo Social de la CEPAL y profesor de la Facultad de Economía y Negocios de la Universidad de Chile. Se ha desempeñado como asesor de la Dirección de Presupuestos del Ministerio de Hacienda y del Gabinete del Ministerio de Salud del Gobierno de Chile y como consultor del PNUD, de la AISS, de la GTZ, de la OIT y de Euro Social. Fue miembro de las Comisiones  asesoras presidenciales para la Reforma Previsional en 2006 y 2014-15.</p>
      </div>      
    <!--   <div class="integrantes ricardo none">
        <p><strong>Ricardo Paredes Molina</strong></p>
        <p>Ingeniero Comercial de la Universidad de Chile; Ph.D. en Economía de la Universidad de California, Los Ángeles.
		</p><p>
		Fue decano de la Facultad de Economía de la Universidad de Chile, y a partir del año 2003 es Profesor Titular Asociado de la Escuela de Ingeniería de la Universidad Católica de Chile. Entre 1990 y 1994 integró la Comisión Preventiva Central Antimonopolios. En 2011 fue Presidente de la Comisión de Financiamiento para la Educación Superior. Ha sido consultor del BID, el Banco Mundial, además de diversos gobiernos y empresas privadas.
		</p><p>
		Ha publicado más de 40 artículos en revistas indexadas, y 3 libros.</p>
      </div>-->

      <div class="integrantes macarena none">
        <p><strong>Macarena Lobos Palacios</strong></p>
        <p>Doctora en derecho de la Universidad Complutense de Madrid y abogada de la Universidad de Chile.
		</p><p>
		Fue subsecretaria del Ministerio de Hacienda, lugar en el que previamente se desempeñó como Coordinadora Legislativa. Ejerció como secretaria ejecutiva del programa legislativo de CIEPLAN. También fue asesora jurídica de la Dirección de Presupuestos del Ministerio de Hacienda y del Ministerio del Trabajo y Previsión Social.
		</p><p>
		Actualmente, se desempeña como asesora del Consejo Resolutivo de Asignaciones Parlamentarias, docente del Magister de Políticas Públicas de la Escuela de Gobierno de la Universidad Católica y brinda, a través de su consultora “Lobos y Asociados Ltda.” asesoría estratégica en materia de políticas públicas, tanto al sector público como privado.</p>
      </div>

      <div class="integrantes gonzalo none">
        <p><strong>Gonzalo Edwards Guzmán</strong></p>
        <p>Ingeniero Comercial y Magíster en Economía de la Pontificia Universidad Católica de Chile, Master of Arts del Food Research Institute y Ph. D. en Sistemas de Ingeniería y Economía de la Universidad de Stanford.
		</p><p>
		Ha sido director del Instituto de Economía (1997-2009), de donde es profesor titular; del Centro de Desarrollo Docente (2009-2011) y del Club Deportivo (2000-2004) de la Universidad Católica de Chile.  Asimismo, fue vicepresidente (2004-2006) y presidente (2006-2008) de la Sociedad de Economía de Chile. Ha sido director de empresas y consultor del Banco Mundial, del BID, de los Ministerios de Vivienda y de Desarrollo Social, de las Municipalidades de Santiago, Vitacura y Las Condes, y de distintas compañías de seguros e instituciones gremiales, tales como la Asociación de AFP y la Asociación de Aseguradores.
		</p><p>
		Tiene varias publicaciones en revistas especializadas y capítulos de libro en las áreas de economía previsional y modalidades de pensión, economía urbana y microeconomía aplicada en general.</p>
      </div>

      

     <div class="integrantes maria none">
        <p><strong>María Cecilia Cifuentes Hurtado</strong></p>
        <p>Ingeniero Comercial y Magíster en Economía de la Pontificia Universidad Católica de Chile.</p>
        <p>Actualmente es Directora del Centro de Estudios Financieros del ESE Business School de la Universidad de Los Andes, donde además se desempeña como profesora e investigadora. Fue Economista Senior del Instituto Libertad y Desarrollo, a cargo de los temas fiscales, laborales, previsionales y de mercado de capitales. Además, ha sido profesora de pregrado en la Pontificia Universidad Católica, Universidad de Los Andes y Universidad Diego Portales.</p>
        <p>Ha publicado diversos artículos en áreas de macroeconomía, mercado laboral y pensiones, junto con la edición y participación en el libro “Pensiones: Propuestas para el Futuro”, Ediciones LyD, 2015.</p>
      </div>
      
  </div>
</div>
<?php include('sitios_interes.php'); ?>

<?php include('footer.php'); ?>        


</body>
</html>