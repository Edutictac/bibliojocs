<?php
include ("../base_biblio.php");
include ("../conexion_biblio.php");


?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; UTF-8">
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

    <div id='text1'>
    <br>
    <br>
    
</div>


<div class="topbar animated fadeInLeftBig"></div>


<div id="text">
<br>
<br>  <br>
<br>
<h2 id="logo">&nbsp;&nbsp;&nbsp;&nbsp;Top setmanal</a></h2>

</div>

</ul>
<?php

//top semana

echo "<table align='center' border='0' width='70%' cellspacing='9' cellpadding='0'>";


$query=mysql_query("select * from recursos order by csemanal desc limit 0, 6") or die("Error Occured try again");

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


<br>
<br>
<br>
<h2 id="logo">&nbsp;&nbsp;&nbsp;&nbsp;Populars</a></h2>



<?php
//top 5

echo "<table align='center' border='0' width='70%' cellspacing='9' cellpadding='0'>";

$query=mysql_query("select * from recursos order by clicks desc limit 0, 6") or die("Error Occured try again");

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



<br>
<br>
<br>
<h2 id="logo">&nbsp;&nbsp;&nbsp;&nbsp;Novetats</a></h2>



<?php


//Novetats

echo "<table align='center' border='0' width='70%' cellspacing='9' cellpadding='0'>";

$query=mysql_query("select * from recursos order by FECHA_RECURSO desc limit 0, 6") or die("Error Occured try again");

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


<br>
<br>

<h2 id="logo">&nbsp;&nbsp;&nbsp;&nbsp;Top Jclic</a></h2>



<?php

//top jclic

echo "<table align='center' border='0' width='70%' cellspacing='9' cellpadding='0'>";

$query=mysql_query("select * from recursos where CATEGORIA like '%jclic%' order by clicks desc limit 0, 6") or die("Error Occured try again");

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
echo "<br>";
echo "<br>";
echo "</a>";
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

<!-- FOOTER -->
<footer class="mbr-section mbr-section--relative mbr-section--fixed-size" id="footer1-91" style="background-color: rgb(68, 68, 68);">

    <div class="mbr-section__container container">
        <div class="mbr-footer mbr-footer--wysiwyg row">
            <div class="col-sm-12">
                <p class="mbr-footer__copyright"></p><p> <a href="http://edutictac.es" class="text-gray">2016 Comunitat EduTicTac   </a>
                
            </div>
        </div>
    </div>
</footer>


  <!-- # Footer Ends -->


</body>
</html>
