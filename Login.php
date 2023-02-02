<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&family=Staatliches&display=swap" rel="stylesheet">

    <!-- Preload -->
    <link rel="preload" href="css/normalize.css">
    <link rel="stylesheet" href="css/normalize.css">

    <link rel="preload" href="css/style.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <header>
    </header> <!-- Fin Header -->

    <main class="Login">
        <div class="logo">
            <img src="img/asociacion.jpg" alt=""> 
        </div>
        <?php
        include("conexion_BD.php");
        include("Controlador_login");
        ?>
        <h1>Login</h1>
            <div class="inputs">
            <h2>Usuario</h2>
            <input type="usuario" class="box" placeholder="ingrese su usuario">
            <h2>contraseña</h2>
            <input type="contraseña" class="box" placeholder="ingrese su contraseña">
            <h3> </h3>
            <input type="submit" value="Ingresar" placeholder="submit">
            <h3> </h3>
            <a href="renovar-Contra.html">¿olvidaste la contraseña?</a>
            </div>
    </main>
</body>

</html>


