<?php
include ("../base_biblio.php");
include ("../conexion_biblio.php");
$usuario='invitado';
$nick_usuario='invitado';
$permiso='PROFESORADO';
$upload_centro=$_SESSION['03004570'];
$upload_anyo_academico='2013';
$archivo="../../profesorado/recursos/error_log";
if (file_exists($archivo))
{
unlink($archivo) ;
}
?>
<!DOCTYPE html>
<html>
<head>
  <!-- Mobirise Free Bootstrap Template, https://mobirise.com -->
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
  <meta http-equiv="Content-Language" content="es">
      <meta name="description" content="Actividades educativas para
        infantil y primaria">
      <meta name="keywords" content="actividades, infantil, primaria,
        educación, educativas, juegos, activitats, jocs, matemáticas, valencià, conocimiento del medio, educación musical, lenguaje, lecto-escritua">
      <meta name="sasogu" content="edutictac">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/socicon/css/socicon.min.css">
  <link rel="stylesheet" href="assets/mobirise/css/style.css">
  <link rel="stylesheet" href="assets/mobirise-slider/style.css">
  <link rel="stylesheet" href="assets/mobirise-gallery/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

      <!-- Google fonts -->
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

      <!-- font awesome -->
      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

      <!-- bootstrap -->
      <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />

      <!-- animate.css -->
      <link rel="stylesheet" href="assets/animate/animate.css" />
      <link rel="stylesheet" href="assets/animate/set.css" />

      <!-- gallery -->
      <link rel="stylesheet" href="assets/gallery/blueimp-gallery.min.css">

      <!-- favicon -->
      <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
      <link rel="icon" href="images/favicon.ico" type="image/x-icon">


      <link rel="stylesheet" href="assets/style.css">

    <title>Bibliojocs</title>
</head>
<body>
  <script>

  function valida_codigo(){

         var a="GUARDAR";
         document.Form2.nombre_boton.value=a;
         document.Form2.submit();
   }

  </script>
<div id='text1'>
<section class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--transparent mbr-navbar--sticky mbr-navbar--auto-collapse" id="menu-74">
    <div class="mbr-navbar__section mbr-section">
        <div class="mbr-section__container container">
            <div class="mbr-navbar__container">
                <div class="mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand">
                    <span class="mbr-navbar__brand-link mbr-brand mbr-brand--inline">
                        <span class="mbr-brand__logo"><a href="index.php"><img class="mbr-navbar__brand-img mbr-brand__img" src="assets/images/logoweb.png" alt="Bibliojocs"></a></span>
                        <span class="mbr-brand__name"><a class="mbr-brand__name text-white" href="index.php">BIBLIOJOCS</a></span>
                    </span>
                </div>
                <div class="mbr-navbar__hamburger mbr-hamburger text-white"><span class="mbr-hamburger__line"></span></div>
                <div class="mbr-navbar__column mbr-navbar__menu">
                    <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
                        <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active">
                          <!--formulario-->
                  <form name="Form2" id="test_upload" name="test_upload" target="_self" action="busqueda.php"  enctype="multipart/form-data" method="post">
                  <div id="texto_formulario" style="z-index:1;" align="left">
                  <input type="text"  maxlength="200" style="width:200px;text-align:left"  id="cp" name="busqueda"  value='' >

                  <!--variable para seleccionar el tipo de boton apretado-->
                  <input type="hidden" maxlength="20" id="Editbox2" style="position:absolute;left:0px;top:0px;width:58px;font-family:Arial;font-size:11px;z-index:0" name="nombre_boton" tabindex=1 value="">

                  <input name="boton" type="button"  onclick='valida_codigo()'  value="<?php echo "&nbsp;&nbsp;Buscar&nbsp;&nbsp;";?>" style="font-family:Arial;font-weight:bold;font-size:14px;z-index:14" tabindex=1 />
                  <input name="boton" type="hidden"  value="<?php echo "$boton_quitar";?>" style="font-family:Arial;font-weight:bold;font-size:13px;z-index:14" tabindex=8 />
                  <input name="boton" type="hidden"  onclick='alerta();imprimir()' value="<?php echo "$boton_imprimir";?>" style="font-family:Arial;font-weight:bold;font-size:14px;z-index:13" tabindex=8 />
                        <!--fin formulario-->


                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background mbr-after-navbar" id="header1-73" style="background-image: url(assets/images/background2.png);">
    <div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-left">
        <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(76, 105, 114);"></div>
        <div class="mbr-box__container mbr-section__container container">
            <div class="mbr-box mbr-box--stretched"><div class="mbr-box__magnet mbr-box__magnet--center-left">
                <div class="row"><div class=" col-sm-96">
                    <div class="mbr-hero animated fadeInUp">
<script>

function valida_codigo(){

       var a="GUARDAR";
       document.Form2.nombre_boton.value=a;
       document.Form2.submit();
 }

</script>


    </head>
    <title>Bibliojocs</title>
  </head>
  <body>
    <div id='text1'>
    <br>
    <br>
    <br>
    <br>
</div>


<div class="topbar animated fadeInLeftBig"></div>

<script>

function valida_codigo(){
       if (document.Form2.descripcion_recurso.value.length==0)
       {
       alert("<?php echo "$faltan_datos";?>")
       document.Form2.descripcion_recurso.focus()
       return 0;
       }
       if (document.Form2.RECURSO_LINK.value.length==0)
       {
       alert("<?php echo "$faltan_datos";?>")
       document.Form2.descripcion_recurso.focus()
       return 0;
       }
         if (document.Form2.RECURSO_NOMBRE.value.length==0)
       {
       alert("<?php echo "$faltan_datos";?>")
       document.Form2.descripcion_recurso.focus()
       return 0;
       }

       var a="GUARDAR";
       document.Form2.nombre_boton.value=a;
       document.Form2.submit();
 }

function imprimir(){
var a="IMPRIMIR";
document.Form2.nombre_boton.value=a;
document.Form2.submit();}
</script>

<script>
function confirmar ( mensaje ) {
return confirm( mensaje );
}

function alerta(){
alert('<?php echo "$aviso_impresion_pop";?>');
}
</script>

<script>

function valida_codigo(formulario, archivo){


 extensiones_permitidas = new Array(".jpg", ".jpeg", ".gif", ".png");
   mierror = "";
   if (!archivo) {
      //Si no tengo archivo, es que no se ha seleccionado un archivo en el formulario
       mierror = "<?php echo "$alerta_falta_archivo";?>";
       alert (mierror);
   }else{

      extension = (archivo.substring(archivo.lastIndexOf("."))).toLowerCase();

      permitida = false;
      for (var i = 0; i < extensiones_permitidas.length; i++) {
         if (extensiones_permitidas[i] == extension) {
         permitida = true;
         break;
         }
      }
      if (!permitida) {
         mierror = "<?php echo "$DOCUMENTO_texto8";?>" + extensiones_permitidas.join();
         alert (mierror);
       }else{

var marcado = "no";
with (document.Form2)
{
    var marcado = "si";
    var a="GUARDAR";
   document.Form2.nombre_boton.value=a;
   document.Form2.submit();
}
}
if ( marcado == "no" )
{
window.alert("<?php echo "$DOCUMENTO_alerta1";?>" ) ;
}
}


   }
   //si estoy aqui es que no se ha podido submitir

   return 0;

 }
function cerrar(){
var a="CERRAR";
document.Form2.nombre_boton.value=a;
document.Form2.submit();}
</script>

<script>
function confirmar ( mensaje ) {
return confirm( mensaje );
}

</script>

<script type='text/JavaScript' src='<?php echo "$ruta_absoluta/";?>scw.js'></script>

</HEAD>

<?php
function f_datef($date) //recoger fecha
{
$year=substr($date,0,4);
$month=substr($date,5,2);
$day=substr($date,8,2);
$date=$day."/".$month."/".$year;
return ($date);
}


$hora = time();
$fecha_hoy = date("d/m/Y");


?>

<div id="container">
<div id="titulo_menu">
  <br><br><br><br><br>
<b>FORMULARI PER AFEGIR RECURSOS A BIBLIOJOCS</b>
<br><br><br>
</div>

<div id="titulo_menu2" align="justify">
<b><?php echo "$nom_profesor";?></b>
</div>



<!--COMIENZA FORMULARIO-->

<div id="tabla" >
<div class="blur">
<div class="shadow">
<div class="content">
<?php
$codigo_fecha = date("dmyHis");
$codigo_recurso=$upload_centro.md5($usuario).$codigo_fecha;

?>
<table cellpadding="0" cellspacing="1">
<tr>
<td>
	<!--formulario-->
<form name="Form2" id="test_upload" name="test_upload" action="upload_recurso.php"  enctype="multipart/form-data" method="post">
<input type="hidden"   id="codigo_recurso" name="codigo_recurso"   value='<?php echo  "$codigo_recurso" ; ?>' >

<!--nom i link-->
<div id="texto_formulario" style="z-index:1;" align="left">

<br><br>
NOM RECURS
<?php echo "<b>$RECURSOS_TEXTO1&nbsp;</b> ";?>
<input type="text"  maxlength="200" style="width:400px;text-align:left"  id="cp" name="RECURSO_NOMBRE"  value='' >




    </div>


<div id="texto_formulario" style="z-index:1;" align="left">
<br><br>LINK
<?php echo "<b>$RECURSOS_TEXTO2&nbsp;</b> ";?>
<input type="url"  maxlength="200" style="width:400px;text-align:left"  id="cp" name="RECURSO_LINK"  value='' >
</div>

<!--nombre ciclo para grabar-->
<input type="hidden"   name="nombre_profesor"  value='<?php echo "$nom_profesor";?>' >

<div id="texto_formulario3"  align="left">
<!-- <?php echo "<b>$justificante_fecha_falta</b>  ";?>-->
<input type="hidden" onBlur="esFechaValida(this);" onclick='scwShow(this,event);' maxlength="10" style="width:80px;text-align: right; "  name="fecha_recurso" value='<?php echo "$fecha_hoy";?>' >



<div id="texto_formulario2"  align="left">
<br><br>  DESCRIU EL RECURS
<?php echo "<b>$RECURSOS_TEXTO3</b>  "; ?>
</div>
<div id="texto_formulario3"  align="left">
<textarea name="descripcion_recurso" id="TextArea1" style="width:600px;height:100px;" rows="5" tabindex=1 cols="39"></textarea>
</div>
<br>
<br>
<b>SELECCIONA EL NIVELL EDUCATIU PER AL RECURS</b>
<br>
<br>
<!--nombre ciclo para grabar-->
<div id="texto_formulario2"  align="left">
<?php echo "<b>$RECURSOS_TEXTO4</b>  "; ?>
</div>

<div id="texto_formulario3"  align="left">
<input type="checkbox" name="i3-Medio" >
<?php echo "$recurso_texto6";?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="i3-Matematicas" >
<?php echo "$recurso_texto7";?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="i3-Lenguaje" >
<?php echo "$recurso_texto8";?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="i3-Otras" >
<?php echo "$recurso_texto9";?>


<div id="texto_formulario3"  align="left">
<input type="checkbox" name="i4-Medio" >
<?php echo "$recurso_texto10";?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="i4-Matematicas" >
<?php echo "$recurso_texto11";?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="i4-Lenguaje" >
<?php echo "$recurso_texto12";?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="i4-Otras" >
<?php echo "$recurso_texto13";?>


<div id="texto_formulario3"  align="left">
<input type="checkbox" name="i5-Medio" >
<?php echo "$recurso_texto14";?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="i5-Matematicas" >
<?php echo "$recurso_texto15";?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="i5-Lenguaje" >
<?php echo "$recurso_texto16";?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="i5-Otras" >
<?php echo "$recurso_texto17";?>





<!--infantil valencià-->

<div id="texto_formulario2"  align="left">
	<br>
<?php echo "<b>$RECURSOS_TEXTO4V</b>  "; ?>
</div>

<div id="texto_formulario3"  align="left">
<input type="checkbox" name="i3-Medi" >
<?php echo "$recurso_texto6V";?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="i3-Matematiques" >
<?php echo "$recurso_texto7V";?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="i3-Llenguatge" >
<?php echo "$recurso_texto8V";?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="i3-Altres" >
<?php echo "$recurso_texto9V";?>


<div id="texto_formulario3"  align="left">
<input type="checkbox" name="i4-Medi" >
<?php echo "$recurso_texto10V";?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="i4-Matematiques" >
<?php echo "$recurso_texto11V";?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="i4-Llenguatge" >
<?php echo "$recurso_texto12V";?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="i4-Altres" >
<?php echo "$recurso_texto13V";?>


<div id="texto_formulario3"  align="left">
<input type="checkbox" name="i5-Medi" >
<?php echo "$recurso_texto14V";?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="i5-Matematiques" >
<?php echo "$recurso_texto15V";?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="i5-Llenguatge" >
<?php echo "$recurso_texto16V";?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="i5-Altres" >
<?php echo "$recurso_texto17V";?>




<!--PRIMARIA CAS-->
<div id="texto_formulario2"  align="left">
	<br>

<a></a>
</div>
<div id="texto_formulario2"  align="left">
<?php echo "<b>$RECURSO_TEXTO6T</b>  "; ?>
</div>


<div id="texto_formulario3"  align="left">
<input type="checkbox" name="pc1-Medio" >
<?php echo "$recurso_texto18";?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="pc1-Matematicas" >
<?php echo "$recurso_texto19";?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="pc1-Lenguaje" >
<?php echo "$recurso_texto20";?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="pc1-Otras" >
<?php echo "$recurso_texto21";?>




<div id="texto_formulario3"  align="left">
<input type="checkbox" name="pc2-Medio" >
<?php echo "$recurso_texto22";?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="pc2-Matematicas" >
<?php echo "$recurso_texto23";?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="pc2-Lenguaje" >
<?php echo "$recurso_texto24";?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="pc2-Otras" >
<?php echo "$recurso_texto25";?>



<div id="texto_formulario3"  align="left">
<input type="checkbox" name="pc3-Medio" >
<?php echo "$recurso_texto26";?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="pc3-Matematicas" >
<?php echo "$recurso_texto27";?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="pc3-Lenguaje" >
<?php echo "$recurso_texto28";?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="pc3-Otras" >
<?php echo "$recurso_texto29";?>




<!--Primaria valencià-->
<div id="texto_formulario2V"  align="left">
	<br>
<a></a>
</div>
<div id="texto_formulario2"  align="left">
<?php echo "<b>$RECURSO_TEXTO6TV</b>  "; ?>
</div>


<div id="texto_formulario3"  align="left">
<input type="checkbox" name="pc1-Medi" >
<?php echo "$recurso_texto18V";?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="pc1-Matematiques" >
<?php echo "$recurso_texto19V";?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="pc1-Llenguatge" >
<?php echo "$recurso_texto20V";?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="pc1-Altres" >
<?php echo "$recurso_texto21V";?>




<div id="texto_formulario3"  align="left">
<input type="checkbox" name="pc2-Medi" >
<?php echo "$recurso_texto22V";?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="pc2-Matematiques" >
<?php echo "$recurso_texto23V";?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="pc2-Llenguatge" >
<?php echo "$recurso_texto24V";?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="pc2-Altres" >
<?php echo "$recurso_texto25V";?>



<div id="texto_formulario3"  align="left">
<input type="checkbox" name="pc3-Medi" >
<?php echo "$recurso_texto26V";?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="pc3-Matematiques" >
<?php echo "$recurso_texto27V";?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="pc3-Llenguatge" >
<?php echo "$recurso_texto28V";?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="pc3-Altres" >
<?php echo "$recurso_texto29V";?>






<!--FÍSICA Y MÚSICA-->
<div id="texto_formulario2"  align="left">
	<br>
<a></a>
</div>
<div id="texto_formulario2"  align="left">
<?php echo "<b>$RECURSO_TEXT7T</b>  "; ?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<?php echo "<b>$RECURSO_TEXT7TV</b>  "; ?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<?php echo "<b>$RECURSO_TEXT7TI</b>  "; ?>
</div>



<div id="texto_formulario3"  align="left">
<input type="checkbox" name="1EDFISICA" >
<?php echo "$recurso_texto30";?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="MUSICA1" >
<?php echo "$recurso_texto36";?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="1VEDFISICA" >
<?php echo "$recurso_texto30";?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="1VMUSICA" >
<?php echo "$recurso_texto36";?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="INGLES1" >
<?php echo "$recurso_texto33";?>


<div id="texto_formulario3"  align="left">
<input type="checkbox" name="2EDFISICA" >
<?php echo "$recurso_texto31";?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="MUSICA2" >
<?php echo "$recurso_texto37";?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="2VEDFISICA" >
<?php echo "$recurso_texto31";?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="2VMUSICA" >
<?php echo "$recurso_texto37";?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="INGLES2" >
<?php echo "$recurso_texto34";?>


<div id="texto_formulario3"  align="left">
<input type="checkbox" name="3EDFISICA" >
<?php echo "$recurso_texto32";?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="MUSICA3" >
<?php echo "$recurso_texto38";?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="3VEDFISICA" >
<?php echo "$recurso_texto32";?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="3VMUSICA" >
<?php echo "$recurso_texto38";?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="checkbox" name="INGLES3" >
<?php echo "$recurso_texto35";?>






</DIV>


<div id="texto_formulario2"  align="left">
<?php echo "<b>$RECURSOS_TEXTO5</b>  "; ?>
</div>
 <div id="texto_formulario"  align="left">
<input name="archivo" type="file" id="archivo" style="width:300px;z-index:1;">
</div>


<!--variable para seleccionar el tipo de boton apretado-->
<input type="hidden" maxlength="20" id="Editbox2" style="position:absolute;left:0px;top:0px;width:108px;font-family:Arial;font-size:11px;z-index:0" name="nombre_boton" tabindex=1 value="">

<input name="boton" type="button"  onclick='valida_codigo(this.form, this.form.archivo.value)'  value="<?php echo "$boton_guardar";?>" style="font-family:Arial;font-weight:bold;font-size:13px;z-index:13" tabindex=1 />
<input name="boton" type="hidden"  value="<?php echo "$boton_quitar";?>" style="font-family:Arial;font-weight:bold;font-size:13px;z-index:13" tabindex=8 />
<input name="boton" type="hidden"  onclick='alerta();imprimir()' value="<?php echo "$boton_imprimir";?>" style="font-family:Arial;font-weight:bold;font-size:13px;z-index:13" tabindex=8 />




<?php

include "../cerrar_conexion_biblio.php";
?>


</table>
</td></tr>
</table>

<!-- FOOTER -->
<footer class="mbr-section mbr-section--relative mbr-section--fixed-size" id="footer1-91" style="background-color: rgb(68, 68, 68);">

    <div class="mbr-section__container container">
        <div class="mbr-footer mbr-footer--wysiwyg row">
            <div class="col-sm-12">
                <p class="mbr-footer__copyright"></p><p>2016 Comunitat EduTicTac <a href="http://edutictac.es" class="text-gray">www.edutictac.es</a>
                  <a
                    href="http://creativecommons.org/licenses/by-nc-sa/3.0/deed.es_ES">Creative Commons Licence</a></p>
                </p><p></p>
            </div>
        </div>
    </div>
</footer>


  <script src="assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js"></script>
  <script src="assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="assets/jarallax/jarallax.js"></script>
  <script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/masonry/masonry.pkgd.min.js"></script>
  <script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/social-likes/social-likes.js"></script>
  <script src="assets/mobirise/js/script.js"></script>
  <script src="assets/mobirise-gallery/script.js"></script>
  <!-- # Footer Ends -->


</body>
</html>
