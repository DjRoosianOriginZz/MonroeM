<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?php echo base_url(); ?>images/icono.png">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/config/reset.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/login.css" />
  <link rel="manifest" href="<?php echo base_url(); ?>/manifest.json">
  <title>Login</title>
</head>

<body class="body-login">

  <div class="box-login">
    <div class="box-login__logo">

      <div class="logo__img">
        <img src="<?php echo base_url(); ?>images/icono.png">
      </div>
      <form action="<?php echo base_url(); ?>index.php/welcome/is" method="post">
        <div class="logo__text">
          Museo Monroe
        </div>
    </div>

    <div class="box-login__inputs">
      <input type="email" placeholder="Correo" name="email" required>
      <input type="password" placeholder="Contraseña" name="pass" class="form-control" required>
    </div>

    <div class="box-login__button">
      <button type="submit" value="Iniciar Sesion">Iniciar Sesion</button>
    </div>

    <div class="box-login__a">
      <a href="<?php echo base_url(); ?>index.php/welcome/registro">¿No tenes cuenta? Creá una</a>
    </div>


  </div>
  </div>

  </form>
</body>

</html>