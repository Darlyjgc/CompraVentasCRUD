<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<?php
		if(isset($_POST['enviar'])){
			$nombre=$_POST['nombre'];
			$apellido=$_POST['apellido'];
			$dni=$_POST['dni'];
			$categoria=$_POST['cboCategoria'];
			$pais=$_POST['cboPais'];
			
			include("conexion.php");
			
			$sql="INSERT INTO alumnos(nom_alum,ape_alum,dni_alum,cod_cat,cod_pais) VALUES('".$nombre."','".$apellido."','".$dni."','".$categoria."','".$pais."')";

			$resultado = mysqli_query($conexion,$sql);
			
			if($resultado){
				echo "<script language='JavaScript'>alert('Guardado correctamente');
					  location.assign('index.php');
					  </script>";
			}else{
				echo "<script language='JavaScript'>alert('Error al guardar los datos');
					  location.assign('index.php');
					  </script>";
			}
			mysqli_close($conexion);
		}
	?>
	<div class="container" style="width: 40%;
        margin-top:100px;
        background-color: white;
        padding: 50px;
        border-radius: 10px;
        box-shadow: 0 0 10px 0 rgba(0,0,0,.10);">
	<form class="row g-3 needs-validation" action="<?=$_SERVER['PHP_SELF']?>" method="post" novalidate>
	<div class="panel-heading text-center">
                <h3>Registrar Alumno</h3>
                <hr />
            </div>
	<div class="form-horizontal">
	<div class="col-md-5">
    <label for="nombre" class="form-label">Nombre:</label>
    <input type="text" class="form-control" id="nombre" placeholder="Ingrese nombre" name="nombre" required>
    <div class="invalid-feedback">
      Ingrese un nombre!
    </div>
  </div>
  <div class="col-md-5">
    <label for="apellido" class="form-label">Apellido:</label>
    <input type="text" class="form-control" id="apellido" placeholder="Ingrese apellido" name="apellido" required>
    <div class="invalid-feedback">
      Ingrese un apellido!
    </div>
  </div>
  <div class="col-md-3">
    <label for="dni" class="form-label">DNI:</label>
    <input type="text" class="form-control" id="dni" placeholder="Ingrese DNI" name="dni" required>
    <div class="invalid-feedback">
      Ingrese DNI!
    </div>
  </div>
  <div class="col-md-5">
    <label for="categoria" class="form-label">Categoría:</label>
    <select class="form-select" id="categoria" aria-describedby="validationServer04Feedback" name="cboCategoria" required>
      <option selected disabled value="">Seleccione...</option>
      <option value="1">DECIMO SUPERIOR</option>
	  <option value="2">TERCIO SUPERIOR</option>
	  <option value="3">QUINTO SUPERIOR</option>
    </select>
    <div id="validationServer04Feedback" class="invalid-feedback">
      Seleccione una categoría, por favor!
    </div>
  </div>
  <div class="col-md-5">
    <label for="pais" class="form-label">País:</label>
    <select class="form-select" id="pais" aria-describedby="validationServer04Feedback" name="cboPais" required>
      <option selected disabled value="">Seleccione...</option>
      <option value="1">Peru</option>
	  <option value="2">Argetina</option>
	  <option value="3">Chile</option>
	  <option value="4">Colombia</option>
	  <option value="5">España</option>
    </select>
    <div id="validationServer04Feedback" class="invalid-feedback">
      Seleccione un país, por favor!
    </div>
  </div>
  </br>
  <div class="col-12">
    <input class="btn btn-info" type="submit" value="Agregar" name="enviar"></input>
	<a href="index.php" class="btn btn-info">Regresar</a>
  </div>
  </div>
	</form>
</body>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>