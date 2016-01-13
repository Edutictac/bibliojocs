<?php
include ("../base_biblio.php");
include("../ruta_absoluta.php");
include ("../conexion_biblio.php");
//include ("../class/cache.php");
////Con cache por sesenta segundos.
//$cache1 = new cache();
//$cache1->iniciar('../cache/',1000,false);

?>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

</head>
<title>Bibliojocs</title></head>
<body>

<div id='text'>

<tbody align='center'>
<tr>
<td colspan='20'> <br>
</td>
</tr>
</tbody>
      

<?php
$materia=$_REQUEST['busqueda'];
if (!isset($buscar))
echo "<table align='center' border='0' width='80%' cellspacing='0' cellpadding='0'>";

$query=mysql_query("select NOMBRE, LINK, IMAGEN, ID_RECURSO  from recursos where CATEGORIA like '$materia' order by NOMBRE") or die("Error Occured try again");

echo "<tr>";
$cell_ctr = 0;
while($row=mysql_fetch_array($query))
{
  if(($cell_ctr % 5) == 0) // 2 is the number of columns
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

 echo "<img src='$ruta_absoluta/profesorado/recursos/imagenes/$nombre_imagen'  border='0'  width=100;' height=100;' />";
echo "<br>";
echo "<br>";
$nombre_recurso = substr($nombre_recurso, 0, 18);
echo "$nombre_recurso";
echo "</a>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "</td>";
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

<?php

include "../cerrar_conexion_biblio.php";
?>

</table>
</td></tr>
</table>
</div></div></div>

</div><!--termina div tabla-->
<div id="separador"></div>

</div>
<!-- FOOTER -->
<footer class="mbr-section mbr-section--relative mbr-section--fixed-size" id="footer1-91" style="background-color: rgb(168, 168, 168);">

    <div class="mbr-section__container container">
        <div class="mbr-footer mbr-footer--wysiwyg row">
            <div class="col-sm-12">
                <p class="mbr-footer__copyright"></p><p> <a href="http://edutictac.es" class="text-gray">2016 Comunitat EduTicTac </a>
            
            </div>
        </div>
    </div>
</footer>

  <!-- # Footer Ends -->
</body>
</HTML>
