<?php
include 'conexion.php';
$cod_alum = $_GET['cod_alum'];
$sql = "update alumnos set estado=0 where cod_alum='".$cod_alum."'"; 
$resultado=mysqli_query($conexion,$sql);
if($resultado){
				echo "<script language='JavaScript'>alert('eliminado correctamente');
					  location.assign('index.php');
					  </script>";
			}else{
				echo "<script language='JavaScript'>alert('Error al eliminar los datos');
					  location.assign('index.php');
					  </script>";
			}
			mysqli_close($conexion);
mysqli_query($conexion,$sql);
?>