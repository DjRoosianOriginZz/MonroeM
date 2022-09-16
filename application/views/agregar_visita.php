<form action="<?php echo base_url();?>index.php/welcome/nueva_visita" method="post">
        <div class="row">
        <div class="col">
                Fecha <br>
                <input type="date" name="fecha">
            </div>

            <div class="col">
                Descripcion <br>
                <input type="text" name="descripcion">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                Guia <br>
                    <select name="guia" id="guia">
                        <?php
                            if (isset($guia))
                                {
                                    foreach ($guia as $g)
                                        {
                                            echo "<option value=".$g->id.">"."$g->nombre $g->apellido $g->idioma"."</option>";
                                        }
                                }
                        ?> 
                </select>
            </div>
        </br>
        </br>
        <div class="row">
            <div class="col">
                    <input type="submit" value="Agregar Visita">
            </div>
</form>