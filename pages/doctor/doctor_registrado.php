<?php include_once('./class_doctor.php') ?>

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
                    <li class="breadcrumb-item"><a href="doctor.php">Registrar a un Doctor</a></li>
                    <li class="breadcrumb-item">Registro Completado</li>
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
                                <td> <?php echo $objetoDoctor -> mostrarNombre(); ?> </td>
                            </tr>

                            <tr>
                                <th>Apellido:</th>
                                <td> <?php echo $objetoDoctor -> mostrarApellido(); ?> </td>
                            </tr>

                            <tr>
                                <th>Fecha de Nacimiento</th>
                                <td> <?php echo $objetoDoctor -> mostrarFecha(); ?> </td>
                            </tr>

                            <tr>
                                <th>Edad actual</th>
                                <td> <?php echo $objetoDoctor -> mostrarEdad() .' años de edad' ?> </td>
                            </tr>

                            <tr>
                                <th>Genero</th>
                                <td> <?php echo $objetoDoctor -> mostrarGenero(); ?> </td>
                            </tr>

                        </table>

                    </div> <!-- table -> Datos Personales -->

                    <div>
                        <br>
                        <h2>Datos laborales</h2>

                        <table class="table table-striped table-bordered table-hover">

                            <tr>
                                <th>Lugar donde atiende</th>
                                <td> <?php echo $objetoDoctor -> mostrarLugarDondeAtiende(); ?> </td>
                            </tr>

                            <tr>
                                <th>Turno más constante</th>
                                <td> <?php echo $objetoDoctor -> mostrarTurno(); ?> </td>
                            </tr>

                            <tr>
                                <th>Promedio horas que atiende al dia</th>
                                <td> <?php echo $objetoDoctor -> mostrarPromedioHorasDia(); ?> hrs </td>
                            </tr>

                        </table>
                    </div> <!-- table -> Datos Laborales -->

                </div>

            </div>

            <div class="col-12 mt-4 d-flex justify-content-start">
                <a class="btn btn-primary btn-lg mr-2" href="doctor.php">Volver a registrar</a>
            </div> <!-- a -> volver al inicio -->

        </div> <!-- .row -->
    </main>

    <?php include_once('../others/components/footer.php') ?>

    <script src="../../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
</body>

</html>