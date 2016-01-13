<?php

session_start();
include ("../idioma.php");
include ("../ruta_absoluta.php");
$usuario='invitado';
$nick_usuario='invitado';
$permiso='PROFESORADO';
$upload_centro=$_SESSION['03004570'];
$upload_anyo_academico='2013';
include ("../conexion_biblio.php");



function f_datefI($date) //para importacion csv
{
# ==========================================================
# ==== Recibe una fecha con formato dd-mm-aaaa ====
# ==== Devuelve una fecha con formato aaaa-mm-dd hh:mm:ss ====
# ==========================================================
$year=substr($date,6,4);
$month=substr($date,3,2);
$day=substr($date,0,2);
$date=$year."-".$month."-".$day;
return ($date);
}



include ("../administrador/caracteres_reemplazo.php");
include ("../administrador/caracteres_reemplazo_extranyo.php");
include ("../administrador/limpiar_variables.php");



	$codigo_fecha = date("dmyHis");
//comprobamos si ha ocurrido un error al subir la imagen.
if ($_FILES["archivo"]["error"] > 0){
   // echo "ha ocurrido un error";
   $nombre = "logo.png";
} else {

    //ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
    //y que el tamano del archivo no exceda los 100kb
    $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
    $limite_kb = 10000;
     
    if (in_array($_FILES['archivo']['type'], $permitidos) && $_FILES['archivo']['size'] <= $limite_kb * 1024){
        //esta es la ruta donde copiaremos la imagen
        //recuerden que deben crear un directorio con este mismo nombre
        //en el mismo lugar donde se encuentra el archivo subir.php
        
        $ruta = $_FILES['archivo']['name'];
         
             $ruta=sanear_string($ruta);
                  $ruta=$codigo_fecha.$ruta;     

        //comprobamos si este archivo existe para no volverlo a copiar.
        //pero si quieren pueden obviar esto si no es necesario.
        //o pueden darle otro nombre para que no sobreescriba el actual.
         
        if (!file_exists($ruta)){
            //aqui movemos el archivo desde la ruta temporal a nuestra ruta
            //usamos la variable $resultado para almacenar el resultado del proceso de mover el archivo
            //almacenara true o false
          
            $resultado = @move_uploaded_file($_FILES["archivo"]["tmp_name"], "../profesorado/recursos/imagenes/" .$ruta);
            if ($resultado){
                $nombre = $_FILES['archivo']['name'];
                  $nombre=sanear_string($nombre);
                  $nombre=$codigo_fecha.$nombre;
                //@mysql_query("INSERT INTO recursos (IMAGENES) VALUES ('$nombre')") ;
                //echo "<script>alert('el archivo ha sido movido exitosamente');</script>";
            } else {
                echo "ocurrio un error al mover el archivo.";
            }
        } else {
            echo $_FILES['archivo']['name'] . ", este nombre de archivo ya existe, cambialo por favor.";
        }
    } else {
        echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
    }
}
 
//termina subir imagen

$recurso_profesor=$_REQUEST['nombre_profesor'];
$recurso_nombre=str_replace($search,$replace,$_REQUEST['RECURSO_NOMBRE']);
$recurso_link=$_REQUEST['RECURSO_LINK'];

$recurso_profesor=str_replace($search,$replace,$recurso_profesor);
$recurso_profesor=limpiar_tags($recurso_profesor);

$recurso_fecha=f_datefI($_REQUEST["fecha_recurso"]);
$recurso_fecha=str_replace($search,$replace,$recurso_fecha);
$recurso_fecha=limpiar_tags($recurso_fecha);

$recurso_motivo=str_replace($search,$replace,$_REQUEST['descripcion_recurso']);
$recurso_motivo=limpiar_tags($recurso_motivo);

$tipo_inicidencia=$_REQUEST['tipo_incidencia'];

$nombre_tema=$_REQUEST['eleccion_alumnos'];

$codigo_recurso= $_REQUEST["codigo_recurso"]; //codigo asignado a cada miembro
$id_recurso= $_REQUEST["id_recurso"]; 
$url_recurso=$nick_usuario.md5($recurso_link);

if (isset($_POST['MUSICA1']))
$recurso_musica1="Musica1";

if (isset($_POST['MUSICA2']))
$recurso_musica2="Musica2";

if (isset($_POST['MUSICA3']))
$recurso_musica3="Musica3";

if (isset($_POST['1VMUSICA']))
$recurso_vmusica1="1VMusica";

if (isset($_POST['2VMUSICA']))
$recurso_vmusica2="2VMusica";

if (isset($_POST['3VMUSICA']))
$recurso_vmusica3="3VMusica";



if (isset($_POST['i3-Medio']))
$recurso_i3medio="i3-Medio";

if (isset($_POST['i3-Matematicas']))
$recurso_i3mates="i3-Matematicas";

if (isset($_POST['i3-Lenguaje']))
$recurso_i3lengua="i3-Lenguaje";

if (isset($_POST['i3-Otras']))
$recurso_i3otras="i3-Otras";

if (isset($_POST['i4-Medio']))
$recurso_i4medio="i4-Medio";

if (isset($_POST['i4-Matematicas']))
$recurso_i4mates="i4-Matematicas";


if (isset($_POST['i4-Lenguaje']))
$recurso_i4lengua="i4-Lenguaje";


if (isset($_POST['i4-Otras']))
$recurso_i4otras="i4-Otras";


if (isset($_POST['i5-Medio']))
$recurso_i5medio="i5-Medio";


if (isset($_POST['i5-Matematicas']))
$recurso_i5mates="i5-Matematicas";


if (isset($_POST['i5-Lenguaje']))
$recurso_i5lengua="i5-Lenguaje";


if (isset($_POST['i5-Otras']))
$recurso_i5otras="i5-Otras";


if (isset($_POST['i3-Medi']))
$recurso_i3medi="i3-Mediv";


if (isset($_POST['i3-Matematiques']))
$recurso_i3matesv="i3-Matematiques";


if (isset($_POST['i3-Llenguatge']))
$recurso_i3llengua="i3-Llenguatge";

if (isset($_POST['i3-Altres']))
$recurso_i3altres="i3-Altres";


if (isset($_POST['i4-Medi']))
$recurso_i4medi="i4-Mediv";


if (isset($_POST['i4-Matematiques']))
$recurso_i4matesv="i4-Matematiques";


if (isset($_POST['i4-Llenguatge']))
$recurso_i4llengua="i4-Llenguatge";

if (isset($_POST['i4-Altres']))
$recurso_i4altres="i4-Altres";


if (isset($_POST['i5-Medi']))
$recurso_i5medi="i5-Mediv";


if (isset($_POST['i5-Matematiques']))
$recurso_i5matesv="i5-Matematiques";


if (isset($_POST['i5-Llenguatge']))
$recurso_i5llengua="i5-Llenguatge";

if (isset($_POST['i5-Altres']))
$recurso_i5altres="i5-Altres";


if (isset($_POST['pc1-Medio']))
$recurso_pc1cono="pc1-Medio";


if (isset($_POST['pc1-Matematicas']))
$recurso_pc1mates="pc1-Matematicas";


if (isset($_POST['pc1-Lenguaje']))
$recurso_pc1lengua="pc1-Lenguaje";

if (isset($_POST['pc1-Otras']))
$recurso_pc1otras="pc1-Otras";

if (isset($_POST['pc2-Medio']))
$recurso_pc2cono="pc2-Medio";


if (isset($_POST['pc2-Matematicas']))
$recurso_pc2mates="pc2-Matematicas";


if (isset($_POST['pc2-Lenguaje']))
$recurso_pc2lengua="pc2-Lenguaje";

if (isset($_POST['pc2-Otras']))
$recurso_pc2otras="pc2-Otras";

if (isset($_POST['pc3-Medio']))
$recurso_pc3cono="pc3-Medio";


if (isset($_POST['pc3-Matematicas']))
$recurso_pc3mates="pc3-Matematicas";


if (isset($_POST['pc3-Lenguaje']))
$recurso_pc3lengua="pc3-Lenguaje";

if (isset($_POST['pc3-Otras']))
$recurso_pc3otras="pc3-Otras";

if (isset($_POST['pc1-Medi']))
$recurso_pc1cone="pc1-Mediv";


if (isset($_POST['pc1-Matematiques']))
$recurso_pc1matesv="pc1-Matematiques";


if (isset($_POST['pc1-Llenguatge']))
$recurso_pc1llengua="pc1-Llenguatge";

if (isset($_POST['pc1-Altres']))
$recurso_pc1altres="pc1-Altres";

if (isset($_POST['pc2-Medi']))
$recurso_pc2cone="pc2-Mediv";


if (isset($_POST['pc2-Matematiques']))
$recurso_pc2matesv="pc2-Matematiques";


if (isset($_POST['pc2-Llenguatge']))
$recurso_pc2llengua="pc2-Llenguatge";

if (isset($_POST['pc2-Altres']))
$recurso_pc2altres="pc2-Altres";


if (isset($_POST['pc3-Medi']))
$recurso_pc3cone="pc3-Mediv";


if (isset($_POST['pc3-Matematiques']))
$recurso_pc3matesv="pc3-Matematiques";


if (isset($_POST['pc3-Llenguatge']))
$recurso_pc3llengua="pc3-Llenguatge";

if (isset($_POST['pc3-Altres']))
$recurso_pc3altres="pc3-Altres";


if (isset($_POST['1EDFISICA']))
$recurso_edfisica1="Edfisica1";

if (isset($_POST['2EDFISICA']))
$recurso_edfisica2="Edfisica2";


if (isset($_POST['3EDFISICA']))
$recurso_edfisica3="Edfisica3";


if (isset($_POST['INGLES1']))
$recurso_ingles1="Ingles1";

if (isset($_POST['INGLES2']))
$recurso_ingles2="Ingles2";


if (isset($_POST['INGLES3']))
$recurso_ingles3="Ingles3";

if (isset($_POST['1VEDFISICA']))
$recurso_1vfisica="1Vfisica";

if (isset($_POST['2VEDFISICA']))
$recurso_2vfisica="2Vfisica";


if (isset($_POST['3VEDFISICA']))
$recurso_3vfisica="3Vfisica";


$boton = $_REQUEST["nombre_boton"];

	
switch ($boton) {

case 'GUARDAR':


// se hace un count de los registros ke tienen
// en el campo llave el dato $dato
$sql="SELECT LINK FROM recursos WHERE LINK LIKE '$recurso_link'";
//$sql="SELECT COUNT(LINK) FROM recursos WHERE LINK LIKE '$recurso_link'";
//
$result = mysql_query($sql);
//
//$fila=mysql_fetch_array(pg_query($sql,$conexion));
// se cuenta el numero de filas que dio como
// resultado la consulta y se bifurca
if(mysql_num_rows($result) > 0){
// insertas
// ya existe un registro con ese id
	
echo "<script>alert('El link ja existeix a la base de dades.');</script>";

echo "<script>location.href='index.php'</script>";
//header("Location: introducir_incidencias.php?eleccion_alumnos=$codigo_incidencia1");
mysql_query($sql);

mysql_close();
//CERRAMOS LA CONEXION
exit();
break;
}
else{
 //echo $nombre_tema;
			
 $sql2 ="insert into recursos (ID_RECURSO,COD_CENTRO,TEMA,PROFESOR,COD_PROFESOR,FECHA_RECURSO,NOMBRE,DESCRIPCION,IMAGEN,LINK,CATEGORIA,INC)
                     values ('$codigo_recurso','$upload_centro','$nombre_tema','$recurso_profesor','$nick_usuario','$recurso_fecha','$recurso_nombre','$recurso_motivo','$nombre','$recurso_link',
                     '$recurso_musica1 $recurso_musica2 $recurso_musica3 $recurso_vmusica1 $recurso_vmusica2 $recurso_vmusica3
                      $recurso_i3medio $recurso_i3mates $recurso_i3lengua $recurso_i3otras $recurso_i4medio $recurso_i4mates $recurso_i4lengua $recurso_i4otras
                      $recurso_i5medio $recurso_i5mates $recurso_i5lengua $recurso_i5otras $recurso_i3medi $recurso_i3matesv $recurso_i3llengua $recurso_i3altres
                      $recurso_i4medi $recurso_i4matesv $recurso_i4llengua $recurso_i4altres $recurso_i5medi $recurso_i5matesv $recurso_i5llengua $recurso_i5altres
                      $recurso_pc1cono $recurso_pc1mates $recurso_pc1lengua $recurso_pc1otras $recurso_pc2cono $recurso_pc2mates $recurso_pc2lengua $recurso_pc2otras $recurso_pc3cono $recurso_pc3mates $recurso_pc3lengua $recurso_pc3otras
                      $recurso_pc1cone $recurso_pc1matesv $recurso_pc1llengua $recurso_pc1altres $recurso_pc2cone $recurso_pc2matesv $recurso_pc2llengua $recurso_pc2altres $recurso_pc3cone $recurso_pc3matesv $recurso_pc3llengua $recurso_pc3altres
                      $recurso_edfisica1 $recurso_edfisica2 $recurso_edfisica3 $recurso_ingles1 $recurso_ingles2 $recurso_ingles3 $recurso_1vfisica $recurso_2vfisica $recurso_3vfisica','$url_recurso')";
mysql_query($sql2);

 $sql3 ="insert into favoritos (ID_RECURSO,COD_CENTRO,TEMA,PROFESOR,COD_PROFESOR,FECHA_RECURSO,NOMBRE,DESCRIPCION,IMAGEN,LINK,CATEGORIA,INC)
                    values ('$codigo_recurso','$upload_centro','$nombre_tema','$recurso_profesor','$nick_usuario','$recurso_fecha','$recurso_nombre','$recurso_motivo','$nombre','$recurso_link',
                     '$recurso_musica1 $recurso_musica2 $recurso_musica3 $recurso_vmusica1 $recurso_vmusica2 $recurso_vmusica3
                      $recurso_i3medio $recurso_i3mates $recurso_i3lengua $recurso_i3otras $recurso_i4medio $recurso_i4mates $recurso_i4lengua $recurso_i4otras
                      $recurso_i5medio $recurso_i5mates $recurso_i5lengua $recurso_i5otras $recurso_i3medi $recurso_i3matesv $recurso_i3llengua $recurso_i3altres
                      $recurso_i4medi $recurso_i4matesv $recurso_i4llengua $recurso_i4altres $recurso_i5medi $recurso_i5matesv $recurso_i5llengua $recurso_i5altres
                      $recurso_pc1cono $recurso_pc1mates $recurso_pc1lengua $recurso_pc1otras $recurso_pc2cono $recurso_pc2mates $recurso_pc2lengua $recurso_pc2otras $recurso_pc3cono $recurso_pc3mates $recurso_pc3lengua $recurso_pc3otras
                      $recurso_pc1cone $recurso_pc1matesv $recurso_pc1llengua $recurso_pc1altres $recurso_pc2cone $recurso_pc2matesv $recurso_pc2llengua $recurso_pc2altres $recurso_pc3cone $recurso_pc3matesv $recurso_pc3llengua $recurso_pc3altres
                      $recurso_edfisica1 $recurso_edfisica2 $recurso_edfisica3 $recurso_ingles1 $recurso_ingles2 $recurso_ingles3 $recurso_1vfisica $recurso_2vfisica $recurso_3vfisica','$url_recurso')";
mysql_query($sql3);
echo "<script>alert('Aè´–adido/Afegit');</script>";
echo "<script>location.href='index.php'</script>";
mysql_close();
//CERRAMOS LA CONEXION
//header("Location: introducir_incidencias.php?eleccion_alumnos=$codigo_incidencia1");
exit();
break;
}

}

?>
