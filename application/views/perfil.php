<form action="<?php echo base_url();?>index.php/welcome/p2" method="post">
    <div class="row">
        <div class="col">
            Nombre <br>
            <p><?php if (isset($usuario)){echo $usuario->first_name;}?></p>
        </div>
        <div class="col">
            Apellido <br>
            <p><?php if (isset($usuario)){echo $usuario->last_name;}?></p>
        </div>
        <div class="col">
            DNI  <br>
            <p><?php if (isset($usuario)){echo $usuario->documento;}?></p>
        </div>
    </div>
    <br>        
    <div class="row">
        <div class="col">
            Correo <br>
            <p><?php if (isset($usuario)){echo $usuario->email;}?></p>
        </div>
        <div class="col">
            Fecha de Nacimiento <br>
            <p><?php if (isset($usuario)){echo $usuario->nacimiento;}?></p>
        </div>
        <div class="col">
            
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            <center>
                <input type="submit" value="Editar">
            </center>
        </div>
    </div>
</form>