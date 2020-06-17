<!DOCTYPE html>
<html lang="es">

  <head>
    <title>Pagina Inicial</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-au-compatible" content="ie-edge">
    <meta name="author" content="Brayan Durán Velásquez">
    <meta name="revised" content="07/06/2020">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>

    <header class="container-fluid mb-5">

      <nav class="navbar bg-dark navbar-dark navbar-expand-sm fixed-top d-flex">
        <a class="navbar-brand pl-2" href="#">Registros.com</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end pr-4 text-20" id="collapsibleNavbar">

          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active disabled">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./pages/maestro/maestro.php">Maestro</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./pages/doctor/doctor.php">Doctor</a>
            </li>
          </ul>
        </div>
      </nav>

    </header>

    <main class="container pb-5">
      <div class="row">

        <div class="col-12 mt-4">

          <ul class="breadcrumb">
            <li class="breadcrumb-item">Te encuentras en:</li>
            <li class="breadcrumb-item">Inicio</li>
          </ul>

          <h2>¿A quien desea registrar?</h2>

        </div> <!-- Migas de Pan - Titulo -->

        <div class="col-6 pt-3">
          <div class="d-flex justify-content-center">

            <div class="card zoom" style="width: 300px;">

              <div class="card-body">
                <img src="img/maestro.jpg" class="img-fluid">
              </div>

              <div class="card-footer">
                <p>Registrar a un maestro</p>
                <a class="btn btn-info float-right text-white" href="pages/maestro/maestro.php">Registrar</a>
              </div>

            </div>

          </div>
        </div> <!--  Card -> Registrar Maestro -->

        <div class="col-6 pt-3">
          <div class="d-flex justify-content-center">

            <div class="card zoom" style="width: 300px;">

              <div class="card-body">
                <img src="img/doctor.jpg" class="img-fluid">
              </div>

              <div class="card-footer">
                <p>Registrar a un doctor</p>
                <a class="btn btn-info float-right text-white" href="pages/doctor/doctor.php"> Registrar </a>
              </div>

            </div>

          </div>
        </div> <!--  Card -> Registrar Doctor -->

        <div class="col-12 pt-5">

          <h3 class="pb-2"> Registrados </h3>
          
          <ul class="nav nav-tabs">
            <li class="nav-item" style="cursor: pointer;">
              <a class="nav-link active" id="btnMaestros">Maestros</a>
            </li>
            <li class="nav-item" style="cursor: pointer;">
              <a class="nav-link" id="btnDoctores">Doctores</a>
              </li>
          </ul>

           <table class="table table-hover table-bordered" id="tabla"></table>
        </div>

      </div>
    </main>

    <?php include_once('./pages/others/components/footer.php') ?>

  </body>

    <script src="js/jquery-3.3.1.slim.min.js"></script> 
    <script src="js/popper.min.js"></script> 
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</html>