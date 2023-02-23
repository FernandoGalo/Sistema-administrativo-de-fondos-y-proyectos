<!DOCTYPE html>
<html lang="en">
<head>
<title> Login </title>
    <link rel="stylesheet" href="css/normalize.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&family=Staatliches&display=swap" rel="stylesheet">
    <!-- Preload -->
    <link rel="preload" href="css/normalize.css">
    <link rel="stylesheet" href="css/normalize.css">

    <link rel="preload" href="css/style.css">
    <link rel="stylesheet" href="css/style.css">
    
    <link rel="stylesheet" media="screen and (min-device-width: 1025px) and (max-width: 1440px)" href="css/desktop-style.css" />
    <!-- Para Celular -->
    <link rel='stylesheet' media='screen and (min-width: 100px) and (max-width: 767px)' href='css/mobile-style.css' />
    <!-- Para Tablet -->
    <link rel='stylesheet' media='screen and (min-width: 768px) and (max-width: 1024px)' href='css/medium-style.css' />
</head>
<body>
    <section class="f_login">
            
    <form actions2="controlador_login.php" method="post">
            <h2>Inicio</h2>
            <div class="logo_l">
            <img src="img/asociacion.jpg"> 
            </div>
            <?php
    include ("conexion_BD.php");
    include ("controlador_login.php");
    ?>
            <?php 
            if(isset($_GET['error'])) { ?>
             <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
        <h3>Usuario</h3>
        <input class="controls" maxlength="15" type="text" style="text-transform:uppercase" name="usuario" placeholder="Ingrese su Usuario"><br>
        <h3>contraseña</h3>
        <input class="controls" maxlength="8" type="password" name="contra" placeholder="Ingrese su Contraseña"><br>
        <input class="buttons" type="submit" Class="btn" name="btn_Login" value="Iniciar Secion" ></br>
        <p><a href="renovar-Contra.php">¿Olvidaste la Contraseña?</a><p>
        <input class="buttons" type="submit" Class="btn" name="btn_R_Ingreso" value="Crear un nuevo usuario" ></br>
    </form>
    <section>
    <li><a href="index.html">Pagina Web</a></li>
</body>

</html>


