<!DOCTYPE html>
<html lang="en">
<head>
<title> Primer Ingreso </title>
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
        <section class="primer_i">

        <form class="content" action="preguntas.php" method="post" enctype="multipart/form-data">
        <?php 
            if(isset($_GET['error'])) { ?>
             <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <?php
             include ("conexion_BD.php");
             //require ("preguntas.php");

             session_start();
             $user=$_SESSION['usuario'];
        $sql=$conexion->query("SELECT * FROM tbl_preguntas");
        ?>

        <h3>Seleccione una pregunta</h3>
        <select class="controls" type="text" name="Pregunta" required ><br>
            <?php
        while($row=mysqli_fetch_array($sql)){
        ?>
                 <option value="<?php echo $row['ID_Pregunta'];?>"><?php echo $row['Pregunta'];?></option>
          <?php
          }
        ?>

        <input class="controls" type="text" name="respuesta" placeholder="Ingrese la Respuesta "><br>

         <h3>Debe de Realizar cambio de contraseña</h3>
        <input class="controls" type="password" name="contranueva" placeholder="Ingrese la Contraseña Nueva "><br>

       <input class="buttons" type="submit" Class="btn" name="btn_enviar_R" value="Enviar"> 
        </form>
        </section>
</body>

</html>
