<!DOCTYPE html>
<html lang="en">
<head>
    <title> ¿Olvidaste tu contraseña?</title>
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

    <!--__________________________________________Responsive____________________________________________-->
    <!-- Para Escritorio -->
    <link rel="stylesheet" media="screen and (min-device-width: 1025px) and (max-width: 1440px)" href="css/desktop-style.css" />
    <!-- Para Celular -->
    <link rel='stylesheet' media='screen and (min-width: 100px) and (max-width: 767px)' href='css/mobile-style.css' />
    <!-- Para Tablet -->
    <link rel='stylesheet' media='screen and (min-width: 768px) and (max-width: 1024px)' href='css/medium-style.css' />
</head>

<body style="background: rgb(1,5,36);
            background: radial-gradient(circle, rgba(1,5,36,1) 0%, rgba(50,142,190,1) 100%);">

<form action="controlador_recupera_contra_p.php" method="post">
    <section class="recuperar_contra">
    <?php
   
   
    ?>
            <?php if(isset($_GET['error'])) { ?>
             <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
        <div class="logo_l">
            <img src="img/asociacion.jpg"> 
        </div>

 

        <h1>¿Olvidaste tu contraseña?</h1>
        <h4>Por favor, Eliga una opcion</h4>
          
            <input class="buttons_recupera_contra" type="button" Class="btn" name="btn_enviar_C" value="Enviar contraseña por correo" onclick="window.location.href='controlador_recupera_contra_c.php'">
            <input class="buttons_recupera_contra" type="submit" Class="btn" name="btn_pregun_secret" value="Recuperar vìa preguntas secretas">
             <li><a href="Login.php">volver atras</a></li>
    </section>
   
    </form>

</body>



</html>