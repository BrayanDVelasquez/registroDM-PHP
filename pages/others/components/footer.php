<?php 

echo '<footer class="container-fluid bg-dark">
    <div class="row">

        <section class="col-12 p-2 d-flex justify-content-center">
            <div class="p-5 text-white" style="width: 90%; max-width: 786px">
                <h3>¡Siempre mantente en contacto!</h3>
                <p>Puedes escribirnos un mensaje explicando alguna sugerencia, duda o inconveniente por nuestros servicios.</p><br>

                <label>Nombre y Apellido</label>
                <input type="text" class="form-control" placeholder="Nombre y Apellido"><br>

                <label>Correo Electronico</label>
                <input type="text" class="form-control" placeholder="Correo Electronico (OPCIONAL)"><br>

                <label>Mensaje</label>
                <textarea class="form-control" placeholder="Escriba algun mensaje para nosotros..."></textarea><br>

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="aceptar" required>
                    <label class="custom-control-label" for="aceptar">He leído y acepto las politicas de privacidad.</label>
                </div>

                <button class="btn btn-info float-right btn-lg">Suscribirme</button>
            </div>
        </section>

        <section class="col-12 p-2 d-flex justify-content-between align-items-center" style="background: black">
            <div>
                <h6 class="text-white">Registros.com - '. date('d/m/Y') .'</h6>
            </div>

            <div>
                <a class="text-info pr-3" href="#">Ayuda</a>
                <a class="text-info pr-3" href="#">Politica de Publicidad</a>
                <a class="text-info pr-3" href="#">Contactanos</a>
            </div>
        </section>

    </div>
</footer>';

?>