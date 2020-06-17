<!DOCTYPE html>
<html lang="es">

<head>
  <title>Registrar a un maestro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-au-compatible" content="ie-edge">
  <meta name="author" content="Brayan Durán Velásquez">
  <meta name="revised" content="07/06/2020">
  <link rel="stylesheet" href="../../css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="../../css/style.css">
</head>

<body>

  <?php include_once('./components/header.php'); ?>

  <main class="container pb-5">

    <div class="row">
      <div class="col-12 mt-4">

        <ul class="breadcrumb">
          <li class="breadcrumb-item">Te encuentras en:</li>
          <li class="breadcrumb-item"><a href="../../index.php">Inicio</a></li>
          <li class="breadcrumb-item">Registrar a un Maestro</li>
        </ul>

        <h2>Registrar a un Maestro</h2>

      </div> <!-- Migas de Pan - Titulo -->

      <div class="col-6 col-sm-5 mx-auto pt-3 pb-3">
        <img src="../../img/maestro.jpg" class="zoom img-thumbnail img-fluid">
      </div> <!-- img -> doctor.jpg -->
    </div>

    <form action="maestro_registrado.php" method="post" class="container-fluid">
      <div class="row">

        <div class="col-12 pt-2">
          <h3> Datos Personales </h3>
        </div>

        <div class="col-xl-12 col-sm-6 pb-3">
          <label class="font-weight-bold" for="nombre">Nombre</label>
          <input type="text" id="nombre" name="nombre" class="form-control" required placeholder="Ingrese el nombre">
        </div>

        <div class="col-xl-12 col-sm-6">
          <label class="font-weight-bold" for="apellido">Apellido</label>
          <input type="text" id="apellido" name="apellido" class="form-control" required
            placeholder="Ingrese el apellido">
        </div>

        <div class="col-12 pb-3">
          <label class="font-weight-bold" for="cedula">Cedula</label>
          <input type="number" id="cedula" name="cedula" class="form-control" required placeholder="Ingrese la cedula">
        </div>

        <div class="col-12 pb-3">
          <label class="font-weight-bold" for="fecha">Fecha de Nacimiento</label>
          <input type="date" id="fecha" name="fecha" class="form-control" required>
        </div>

        <div class="col-12 pb-3">
          <label class="mr-3 font-weight-bold">Genero:</label><br>

          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="masculino" name="genero" value="Masculino" class="custom-control-input" required>
            <label for="masculino" class="custom-control-label">Masculino</label>
          </div>

          <div class="custom-control custom-control-inline custom-radio">
            <input type="radio" id="femenino" name="genero" value="Femenino" class="custom-control-input" required>
            <label for="femenino" class="custom-control-label">Femenino</label>
          </div>

        </div>

        <div class="col-12 pt-4">
          <h3> Datos Laborales </h3>
        </div>

        <div class="col-12 pb-2">
          <label class="font-weight-bold" for="institucion">Institución</label>
          <input type="text" id="institucion" name="institucion" class="form-control" required
            placeholder="Escriba el nombre de la institución donde está asignado">
        </div>

        <div class="col-4 pb-2">
          <label class="font-weight-bold" for="grado">Grado</label>
          <input type="text" id="grado" name="grado" class="form-control" required placeholder="Grado">
        </div>

        <div class="col-4 pb-2">
          <label class="font-weight-bold" for="seccion">Sección</label>
          <input type="text" id="seccion" name="seccion" class="form-control" required placeholder="Sección">
        </div>

        <div class="col-4 pb-2">
          <label class="font-weight-bold" for="turno">Turno</label>
          <select class="form-control" name="turno" id="turno" required>
            <option disabled selected value="">Seleccione el turno</option>
            <option value="Mañana">Mañana</option>
            <option value="Tarde">Tarde</option>
          </select>
        </div>

        <div class="col-xl-12 col-sm-6">
          <label class="font-weight-bold" for="estudiantes">Número de estudiantes asignados</label>
          <input type="text" id="estudiantes" name="numeroEstudiantes" class="form-control" required
            placeholder="Numero de estudiantes asignados">
        </div>

        <div class="col-12 mt-4 d-flex justify-content-end">
          <button type="reset" class="btn btn-danger btn-lg mr-2">Resetear</button>
          <button type="submit" class="btn btn-success btn-lg">Registrar</button>
        </div>

      </div>
    </form>

    <div class="col-12 mt-4">
      <a href="../../index.php">Regresar al inicio</a>
    </div> <!-- regresar al inicio -->

  </main>

  <?php include_once('../others/components/footer.php') ?>

</body>

<script src="../../js/jquery-3.3.1.slim.min.js"></script>
<script src="../../js/popper.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>

</html>