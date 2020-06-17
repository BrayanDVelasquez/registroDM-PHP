<?php include_once('./class_maestro.php') ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Registro completado</title>
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
                    <li class="breadcrumb-item"><a href="maestro.php">Registrar a un Maestro</a></li>
                    <li class="breadcrumb-item">Registro completado</li>
                </ul>

            </div> <!-- Migas de Pan -->

            <div class="col-10 mx-auto pt-3">

                <div class="col-12 pt-2">
                    <div class="alert alert-success">
                        <?php echo  "<h4>¡$genero se registró exitosamente!</h4>" ?>
                    </div>
                </div> <!-- alert success -->

                <div class="col-12 pt-2">

                    <div>
                        <br>
                        <h2>Datos Personales</h2>
                        <table class="table table-striped table-bordered table-hover">

                            <tr>
                                <th>Nombre:</th>
                                <td> <?php echo $objetoMaestro -> mostrarNombre(); ?> </td>
                            </tr>

                            <tr>
                                <th>Apellido:</th>
                                <td> <?php echo $objetoMaestro -> mostrarApellido(); ?> </td>
                            </tr>

                            <tr>
                                <th>Fecha de Nacimiento:</th>
                                <td> <?php echo $objetoMaestro -> mostrarFecha(); ?> </td>
                            </tr>

                            <tr>
                                <th>Edad actual:</th>
                                <td> <?php echo $objetoMaestro -> mostrarEdad() .' años de edad' ?> </td>
                            </tr>

                            <tr>
                                <th>Genero:</th>
                                <td> <?php echo $objetoMaestro -> mostrarGenero(); ?> </td>
                            </tr>

                        </table>
                    </div> <!-- table -> Datos Personales -->

                    <div>
                        <br>
                        <h2>Datos Laborales</h2>

                        <table class="table table-striped table-bordered table-hover">

                            <tr>
                                <th>Institución asignada:</th>
                                <td> <?php echo $objetoMaestro -> mostrarInstitucion(); ?> </td>
                            </tr>

                            <tr>
                                <th>Grado que atiende:</th>
                                <td> <?php echo $objetoMaestro -> mostrarGrado(); ?> </td>
                            </tr>

                            <tr>
                                <th>Seccion:</th>
                                <td> <?php echo $objetoMaestro -> mostrarSeccion(); ?> </td>
                            </tr>

                            <tr>
                                <th>Turno:</th>
                                <td> <?php echo $objetoMaestro -> mostrarTurno(); ?> </td>
                            </tr>

                            <tr>
                                <th>Numero de estudiantes asignados:</th>
                                <td> <?php echo $objetoMaestro -> mostrarEstudiantesAsignados(); ?> </td>
                            </tr>

                        </table>
                    </div> <!-- table -> Datos Laborales -->

                </div> <!-- tablas -->

            </div>

            <div class="col-12 mt-4 d-flex justify-content-start">
                <a class="btn btn-primary btn-lg mr-2" href="maestro.php">Volver a registrar</a>
            </div> <!-- a -> volver a registrar -->

        </div> <!-- .row -->
    </main>

    <?php include_once('../others/components/footer.php') ?>

    <script src="../../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
</body>

</html>