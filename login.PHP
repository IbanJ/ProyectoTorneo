<?php
session_start();
//Se explica lo que ocurre si se pulsa el boton de submit.
if(isset($_POST['btSubir']))
{
    $usuario = $_POST['txtUsuario'];
    $contrasena = $_POST['txtContra'];

//Comprobar si los valores de inicio son correctos mediante javascript y 
//mediante una llamada a la base de datos.
$conexion=mysqli_connect('localhost','root','','torneo');
#$PR_validUser="call PR_validUser('$usuario','$contrasena')";
$consulta=mysqli_query("SELECT codUser,name,password FROM usuarios WHERE name='$usuario' and password='$password'");
$res=mysqli_query($conexion,$consulta) or die(mysql_error());
$numrows=mysqli_num_rows($res);
if (mysqli_num_rows($res) > 0) 
{
    $fila = mysqli_fetch_assoc($res);
    $_SESSION['codUser'] = $fila['codUser'];
    $_SESSION['name'] = $fila['name'];
    $_SESSION['conectado'] = 1;
    #$_SESSION['nivelAdmin'] = $fila['nivelAdmin'];
    header ('Location: PaginaPrinc.php');
    #echo '<p>Vd ser&aacute; redirigido a la p&aacute;gina que originalmente ha solicitado.</p>';
    #echo '<p>Si su navegador no le redirige correctamente, ' .
    #    '<a href="' . $redirect . '">haga click aqu&iacute;</a>.</p>';
    #mysqli_free_result($res);        
} 
else 
{
    // Establecemos las variables de sesión explícitamente para asegurarnos
    $_SESSION['name'] = '';
    $_SESSION['conectado'] = 0;
    $_SESSION['nivelAdmin'] = 0;

    $error = 'Ha suministrado un nombre de usuario incorrecto';
}

}
else 
{
 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DBFZ 23RD TOURNAMENT</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/tooplate.css">
    <script>
    function validar(usu,contra) {
        if (usu.length==0 || contra.length==0){
           document.getElementById('salida').innerHTML= '<p style="color:red"> Debes introducir información en los dos campos</p>';
            //SE ROMPE EL PROGRAMA
        }
    }
    </script>
    
</head>

<body id="login">
    <div class="container">
        <div class="row tm-register-row tm-mb-35">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 tm-login-l">
                <form action="" method="post" class="tm-bg-black p-5 h-100">
                    <div class="input-field">
                        <input placeholder="Username" id="username" name="txtUsuario" type="text" class="validate">
                    </div>
                    <div class="input-field mb-5">
                        <input placeholder="Password" id="password" name="txtContra" type="password" class="validate">
                    </div>
                    <div class="tm-flex-lr">
                        <a href="#" class="white-text small">Forgot Password?</a>
                        <button onclick="validar(username.value,password.value);return false" id="btSubir" type="submit" name="btSubir" class="waves-effect btn-large btn-large-white px-4 black-text rounded-0">Login</button>
                    </div>
                </form>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 tm-login-r">
                <header class="font-weight-light tm-bg-black p-5 h-100">
                    <h3 class="mt-0 text-white font-weight-light">DBFZ 23RD TOURNAMENT</h3>
                    <!-- estos dos parrafos se utilizaran para dar informacion de la pagina o lo que sea.-->
                    <p>
                    <?php
                    if(isset($error))
                    {echo $error;}
                    ?>
                    </p>
                    <p class="mb-0" id="salida"></p>
                </header>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 ml-auto mr-0 text-center">
                <a href="register.html" class="waves-effect btn-large btn-large-white px-4 black-text rounded-0">Create New Account</a>
            </div>
        </div>
        <footer class="row tm-mt-big mb-3">
            <div class="col-xl-12 text-center">
                <p class="d-inline-block tm-bg-black white-text py-2 tm-px-5">
                    Copyright &copy; 2018 Iban & Merchan
                </p>
            </div>
        </footer>
    </div>
</body>

</html>
