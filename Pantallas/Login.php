<?php 

require_once "../EVENT_BITACORA.php";
if(isset($_POST['btn_Login'])){

  $model = new EVENT_BITACORA;
  $model->usuario = $_POST['usuario'];
  $model->contra = $_POST['contra'];
  $model->login();

};


?>
<?php 
$sql2=$conexion->query("SELECT * FROM `tbl_ms_parametros` WHERE `ID_Parametro` in (9,10)");
// Verificar si la consulta devolvió resultados
if (mysqli_num_rows($sql2) >= 1) {
    // Recorrer los resultados y mostrarlos en pantalla
    while($row = mysqli_fetch_array($sql2)) {
      if ($row['ID_Parametro'] == 9) {
        $Min_Pass=$row['Valor'];
    } 

        if ($row['ID_Parametro'] == 10) {
            $Max_Pass=$row['Valor'];
        }     
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title> Login </title>
    <link rel="stylesheet" href="../css/normalize.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&family=Staatliches&display=swap" rel="stylesheet">
    <!-- Preload -->
    <link rel="preload" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/normalize.css">

    <link rel="preload" href="../css/style.css">
    <link rel="stylesheet" href="../css/style.css">
    
    <link rel="stylesheet" media="screen and (min-device-width: 1025px) and (max-width: 1440px)" href="../css/desktop-style.css" />
    <!-- Para Celular -->
    <link rel='stylesheet' media='screen and (min-width: 100px) and (max-width: 767px)' href='../css/mobile-style.css' />
    <!-- Para Tablet -->
    <link rel='stylesheet' media='screen and (min-width: 768px) and (max-width: 1024px)' href='../css/medium-style.css' />
    <script>
function validarMayusculas(e) {
			var tecla = e.keyCode || e.which;
			var teclaFinal = String.fromCharCode(tecla).toUpperCase();
			var letras = /^[A-Z]+$/;

			if(!letras.test(teclaFinal)){
				e.preventDefault();
			}
		}
function impedirPegar(event) {
  event.preventDefault(); // Impide la acción predeterminada de pegar el texto
}
	</script>
            <script>
function bloquearEspacio(event) {
  var tecla = event.keyCode || event.which;
  if (tecla == 32) {
    return false;
  }
}
</script>
<script>
function mostrarPassword() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</head>
<body style="background: rgb(1,5,36);
            background: radial-gradient(circle, rgba(1,5,36,1) 0%, rgba(50,142,190,1) 100%);">
<section style="height: auto; margin-bottom:35px; margin-top:35px;" class="f_login">
    <form actions2="../Controladores/controlador_login.php" method="post">
            <h2>Inicio</h2>
            <div class="logo_l">
            <img src="../img/asociacion.jpg"> 
            </div>
            <?php
    include ("../conexion_BD.php");
    include ("../Controladores/controlador_login.php");
    ?>
            <?php 
            if(isset($_GET['error'])) { ?>
             <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
    
        <h3>Usuario</h3>
        <input class="controls" maxlength="15" type="text" name="usuario" onkeypress="return validarMayusculas(event)" onpaste="impedirPegar(event)" style="text-transform:uppercase" placeholder="Ingrese su Usuario"><br> 
        <h3>Contraseña</h3>
        <button type="button" class="fa fa-eye" onclick="mostrarPassword()"></button>
        <input class="controls" maxlength="<?php echo $Max_Pass ?>" type="password" id="password" name="contra" onkeypress="return bloquearEspacio(event)" onpaste="impedirPegar(event)" placeholder="Ingrese su Contraseña">

        <input class="buttons" type="submit" Class="btn" name="btn_Login" value="Iniciar Sesion" >
        <input class="buttons" type="submit" Class="btn" name="btn_R_Ingreso" value="Crear un nuevo usuario" >
        <p><a href="../Pantallas/renovar-Contra.php">¿Olvidaste la Contraseña?</a>
        
    </form>
    <li style="margin-top:10px;"><a href="../Pagina/index.html">Pagina Web</a></li><!--texto que te manda ala pagina web -->
</body>

</html>


