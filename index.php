<html>
<head>
	 <title>Lista de alumnos</title>
	 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"
    />
</head>
<body>
<?php
	include("conexion.php");
	$sql="select a.cod_alum, a.nom_alum, a.ape_alum, a.dni_alum, c.nom_cat, p.desc_pais from alumnos a 
		  inner join categorias c
		  on c.cod_cat = a.cod_cat
		  inner join pais p
		  on p.cod_pais = a.cod_pais
		  where a.estado = 1
		  order by a.cod_alum asc";
	$resultado=mysqli_query($conexion,$sql);
?>
	<div class="container" style="width: 100%;
        margin-top:100px;
        background-color: white;
        padding: 50px;
        border-radius: 10px;
        box-shadow: 0 0 10px 0 rgba(0,0,0,.10);">
	<table class="table table-striped table-bordered table-hover" style="width: 100%" id="myTable">
	<div class="panel-heading text-center">
                <h3>Lista de alumnos</h3>
				<a href="agregar.php" class="btn btn-info">Nuevo alumno</a>
                <hr />
            </div>
		<thead>
			<tr>
				<th scope="col">Código</th>
				<th scope="col">Nombre</th>
				<th scope="col">Apellido</th>
				<th scope="col">DNI</th>
				<th scope="col">Categoría</th>
				<th scope="col">Pais</th>
				<th scope="col">Acciones</th>
			</tr>
		</thead>
		<tbody>
			<?php
				while($filas=mysqli_fetch_assoc($resultado)){
					
			?>
			<tr>
				<td scope="row"><?php echo $filas['cod_alum']?></td>
				<td scope="row"><?php echo $filas['nom_alum']?></td>
				<td scope="row"><?php echo $filas['ape_alum']?></td>
				<td scope="row"><?php echo $filas['dni_alum']?></td>
				<td scope="row"><?php echo $filas['nom_cat']?></td>
				<td scope="row"><?php echo $filas['desc_pais']?></td>
				<td>
					<?php echo "<a href='editar.php?cod_alum=".$filas['cod_alum']."' class='btn btn-info'>Editar</a>";?>
					<?php echo "<a href='eliminar.php?cod_alum=".$filas['cod_alum']."' class='btn btn-info'>Eliminar</a>";?>
				</td>
			</tr>
			<?php
				}	
			?>
		</tbody>
	</table>
	<?php
		mysqli_close($conexion);
	?>
</body>
</html>