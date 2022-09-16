<form action="<?php echo base_url();?>index.php/welcome/nuevo_guia" method="post">
        <div class="row">
        <div class="col">
                Nombre <br>
                <input type="text" name="nombre">
            </div>

            <div class="col">
                Apellido <br>
                <input type="text" name="apellido">
            </div>

            <div class="col">
                Mail <br>
                <input type="text" name="mail">
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col">
                DNI <br>
                <input type="text" name="dni">
            </div>

            <div class="col">
                Idioma <br>
                <input type="text" name="idioma">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-6">
                <center>
                    <input type="submit" value="Añadir">
                </center>
</form>