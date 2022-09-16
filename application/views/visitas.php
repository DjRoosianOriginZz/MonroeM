<?php defined('BASEPATH') OR exit('No direct script access allowed');
    if (isset($recorrido))
        {
?>
            <table border="1" cellpadding="0" cellspacing="0" width="1511" height="100">
              <?php
                foreach ($recorrido as $r)
                  {
                    echo "<tr><td>"."$r->fecha"."</br>"."$r->descripcion"."</br>"."<p>Guia:</p>"."$r->nombre $r->apellido $r->idioma $r->email"."</td>"."</tr>";
                  }
              ?>
            </table>
<?php
        }
    else
        {
?>
            <p>No hay visitas programadas actualmente</p>
<?php
        }
?>