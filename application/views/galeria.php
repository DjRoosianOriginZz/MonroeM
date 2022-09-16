<?php
defined('BASEPATH') or exit('No direct script access allowed');
if(isset($recorrido))
{
?>
    <table border="1" cellpadding="0" cellspacing="0" width="1360" height="100">
        <?php
            foreach ($recorrido as $r)
                {
                    echo "<tr><td><a href='".base_url()."index.php/welcome/ver_obra/".$r->id_obra."'>"."$r->nombre"."$r->fecha"."</a>"."<br>"."$r->descripcion"."<br>"."<img src='http://localhost/CofFit/uploads/".$r->img."' height='160' width='160' alt=''>"."</td>"."</tr>";
                }
        ?>
    </table>
<?php
}
else
{

}