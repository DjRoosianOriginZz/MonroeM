<?php
if($this->ion_auth->is_admin())
{
    if (isset($gente))
        {
            ?>
            <br>
            <center>
            <input type="search" id="barra" onkeyup="buscador(this)"> <br>
            </center> <br>
            <script>
                function buscador() 
                {
                    let input = document.getElementById('barra').value
                    input=input.toLowerCase();
                    let x = document.getElementsByClassName('personas');
                    for (i = 0; i < x.length; i++)
                        {
                            if (!x[i].innerHTML.toLowerCase().includes(input))
                                {
                                    x[i].style.display="none";
                                }
                            else
                                {
                                    x[i].style.display="list-item";
                                }
                        }
                }
            </script>
            <table  cellpadding="1" cellspacing="0" width="100%" height="100">
                <?php
                foreach ($gente as $g)
                    {
                        echo
                        "<tr>
                            <td class=personas>
                                <center>
                                    <b>$g->first_name $g->last_name </br>$g->email</b>
                                    <br>
                                    $g->dni
                                    <br>
                                    <form action=ascender method=post>
                                        <input type=hidden name=id value=$g->id>
                                        <input type=submit value='Ascender a Gerente' style=color:green>
                                    </form>
                                    </br>
                                    <form action=deletear method=post>
                                        <input type=hidden name=id value=$g->id>
                                        <input type=submit value='Eliminar Usuario' style=color:red>
                                        </br>
                                    </form>
                                </center>
                            </td>
                        </tr>";
                    }
                ?>
            </table>
            <?php
        }
}
else
{
}
?>