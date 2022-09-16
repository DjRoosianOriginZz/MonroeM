<form action="<?php echo base_url();?>index.php/welcome/cargar_obra" method="post">
        <div class="row">
        <div class="col">
                Nombre <br>
                <input type="text" name="nombre">
            </div>

            <div class="col">
                Fecha <br>
                <input type="date" name="fecha">
            </div>

            <div class="col">
                Descripcion <br>
                <input type="text" name="desc">
            </div>
        </div>
        <br>
            <div class="col">
                <input type="file"  name="imagen" value="Imagen">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-6">
                <center>
                    <input type="submit" value="Añadir">
                </center>
</form>