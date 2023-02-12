<!DOCTYPE html>
<html lang="en">
<head>
<title> Registro de usuario </title>
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
</head>
<body>
    <section class="f_login">
            
    <form actions2="controlador_registro.php" method="post">
            <h2>Registro</h2>
            <div class="logo_l">
            <img src="img/asociacion.jpg"> 
            </div>
            <?php
    include ("conexion_BD.php");
    include ("controlador_registro.php");
    ?>
            <?php if(isset($_GET['error'])) { ?>
             <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
        <h3>Nombre de usuario</h3>
        <input class="controls" type="text" name="R_usuario" placeholder="Ingrese su Usuario"><br>
        <h3>contraseña</h3>
        <input class="controls" type="password" name="R_contra" placeholder="Ingrese su Contraseña"><br>
        <h3>Correo Electronico</h3>
        <input class="controls" type="text" name="R_correo" placeholder="Ingrese su Correo Electronico"><br>

        <input class="buttons" type="submit" Class="btn" name="btn_enviar_R" value="Enviar"> 
       
    </form>
    <section>
    <li><a href="Login.php">volver atras</a></li>
</body>

</html>


