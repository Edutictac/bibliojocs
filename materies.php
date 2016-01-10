<?php
include ("ruta_absoluta.php");
$dbhost="localhost";  // host del MySQL (generalmente localhost)
$dbusuario="bibliojocs"; // aqui debes ingresar el nombre de usuario
                      // para acceder a la base
$dbpassword="bibliojocs"; // password de acceso para el usuario de la
                      // linea anterior
$db="bibliojocs";        // Seleccionamos la base con la cual trabajar
$conexion_biblio = mysql_connect($dbhost, $dbusuario, $dbpassword) or die ("Error de conexion.");
mysql_select_db($db) or die ("Error de conexion.");

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


<div id="text">
<h2 id="logo">&nbsp;&nbsp;&nbsp;&nbsp;</a></h2>
</div>
</ul>
<?php
$materia=$_REQUEST['busqueda'];
if (!isset($buscar))


echo "<table align='center' border='0' width='70%' cellspacing='9' cellpadding='0'>";


$query=mysql_query("select NOMBRE, LINK, IMAGEN, ID_RECURSO  from recursos where CATEGORIA like '$materia' order by NOMBRE") or die("Error Occured try again");

echo "<tr>";

$cell_ctr = 0;
while($row=mysql_fetch_array($query))
{
if(($cell_ctr % 7) == 0) // 2 is the number of columns
{
echo"</tr>";
echo "<tr>";
echo"</tr>";
echo "<tr>";
$cell_ctr = 0;
}

echo "<td align='center' width='2%' cellspacing='2' cellpadding='2' >";

$nombre_imagen= ($row ["IMAGEN"]);
$nombre_recurso= ($row ["NOMBRE"]);
$link_recurso2=($row ["LINK"]);
$id_recurso2=($row ["ID_RECURSO"]);
echo "</td>";
$cell_ctr++;

echo "<td align='center' width='2%' cellspacing='2' cellpadding='2' >";
// echo "<a href= $link_recurso2 >";
echo "<a href= http://edutictac.es/bibliojocs2/php/go.php?id=$id_recurso2 >";

echo "<img src='$ruta_absoluta/profesorado/recursos/imagenes/$nombre_imagen' border='0'  width=100;' height=100;' />";
echo "<br>";
echo "<br>";
$nombre_recurso = substr($nombre_recurso, 0, 11);
echo "$nombre_recurso";
echo "</a>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "</td>";
$cell_ctr++;
}
if($cell_ctr == 1)
{
echo '<td></td>';
echo "</tr>";
}
else if($cell_ctr == 2)
{
echo "</tr>";
}

echo"</table>";

?>

</div>
</div>

<!-- FOOTER -->
<footer class="mbr-section mbr-section--relative mbr-section--fixed-size" id="footer1-91" style="background-color: rgb(68, 68, 68);">

    <div class="mbr-section__container container">
        <div class="mbr-footer mbr-footer--wysiwyg row">
            <div class="col-sm-12">
                <p class="mbr-footer__copyright"></p><p> <a href="http://edutictac.es" class="text-gray">2016 Comunitat EduTicTac   </a>
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
