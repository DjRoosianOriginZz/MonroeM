<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MuseoINC</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>images/icono.png">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/config/app.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/header/header.css" />
    <link rel="manifest" href="<?php echo base_url(); ?>/manifest.json">
</head>

<body>
<a href="<?php echo base_url();?>"><header class="fondo1"></header></a>
<nav class="nav1">
<?php
        if(!$this->ion_auth->logged_in())
            {
?>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <a href="<?php echo base_url();?>index.php/welcome/login">
                                Iniciar Sesion
                            </a>
                        </div>                        
                        <div class="col">
                            <a href="<?php echo base_url();?>index.php/welcome/registro">
                                Registrarse
                            </a>
                        </div>
            <?php
                    }
                    else
                    {
            ?>
            <div class="container">
                    <div class="row">
                        <div class="col">
                            <a href="<?php echo base_url();?>index.php/welcome/perfil">
                                Mi Perfil
                            </a>
                        </div>
            <?php
                if($this->ion_auth->is_admin())
                    {
            ?>
                    <div class="col">
                            <a href="<?php echo base_url();?>index.php/welcome/ag_galeria">
                                Agregar Obras
                            </a>
                        </div>
                        <div class="col">
                            <a href="<?php echo base_url();?>index.php/welcome/ag_visitas">
                                Agregar Visitas
                            </a>
                        </div>
                        <div class="col">
                            <a href="<?php echo base_url();?>index.php/welcome/ag_guia">
                                Agregar guia
                            </a>
                        </div>   
                        <div class="col">
                            <a href="<?php echo base_url();?>index.php/welcome/users">
                                Lista De Usuarios
                            </a>
                        </div>
            <?php
                    }
            ?>
            <?php
                }
            ?>
</nav> 


    <header class="header">
        <nav class="header__navbar">
            <div class="navbar__hamburger-wrapper">
                <button id="hamburger">
                    <li></li>
                    <li></li>
                    <li></li>
                </button>
            </div>
            <div class="navbar__link hidden" id="navbar__link">
                <ul>
                <?php
                    if ($this->ion_auth->logged_in())
                        {
                ?>
                        <li><a href="<?php echo base_url();?>index.php/welcome/ver_visitas">
                                Visita
                            </a></li>
                        <li><a href="<?php echo base_url();?>index.php/welcome/ver_galeria">
                                Galeria
                            </a></li>
                        <li><a href="<?php echo base_url();?>index.php/welcome/ver_nuevo">
                                Nuevo Para Ti
                            </a></li>
                        <li><a href="<?php echo base_url();?>index.php/welcome/museo">
                                Museo
                            </a></li>

                    <li class="navbar_down"><a href="<?php echo base_url();?>index.php/welcome/logout">
                            Cerrar sesion
                        </a></li>
                        <?php
                        }
                        else
                        {
                        ?>
                        <li><a href="<?php echo base_url();?>index.php/welcome/ver_visitas">
                                Visita
                            </a></li>
                        <li><a href="<?php echo base_url();?>index.php/welcome/ver_galeria">
                                Galeria
                            </a></li>
                        <li><a href="<?php echo base_url();?>index.php/welcome/ver_nuevo">
                                Nuevo Para Ti
                            </a></li>
                        <li><a href="<?php echo base_url();?>index.php/welcome/museo">
                                Museo
                            </a></li>
                <?php
                        }
                ?>
            </div>
            </ul>
            </div>
        </nav>
    </header>

    <script>
        const navbar__link = document.getElementById("navbar__link");
        const hamburgerButton = document.getElementById("hamburger");

        hamburgerButton.addEventListener("click", () => {
            console.log(navbar__link);
            navbar__link.classList.toggle("hidden");
        });
    </script>
</body>

</html>