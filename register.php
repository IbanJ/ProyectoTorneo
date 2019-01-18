<?php
if(isset($_POST['btSubir']))
{
header ('Location: login.PHP');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
	<!--
    Template 2105 Input
	http://www.tooplate.com/view/2105-input
	-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/tooplate.css">
    <script>
    function validar(usu,nick,contra,confpass) {
        if (usu.length==0 || nick.length==0 || contra.length==0 || confpass.length==0){
           document.getElementById('salida').innerHTML= '<p style="color:red"> Debes introducir información en los cuatro campos</p>';}
        
            //SE ROMPE EL PROGRAMA
        if (contra != confpass) {
            document.getElementById('salida').innerHTML= '<p style="color:red"> Las contraseñas no coinciden</p>';
        }
        if (contra.length<4) {
            document.getElementById('salida').innerHTML= '<p style="color:red"> La contraseña debe tener al menos 4 carácteres</p>';
        }
        else {
            echo "go"
        }
    }
    </script>
</head>

<body id="register">
    <div class="container">
        <div class="row tm-register-row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 tm-register-col-l">
                <form action="" method="post">
                    <div class="input-field">
                        <input placeholder="Usuario" id="usuario" name="txtUser" type="text" class="validate">
                    </div>
                    <div class="input-field">
                        <input placeholder="Nickname" id="nickname" name="txtNick" type="text" class="validate">
                    </div>
                    <div class="input-field">
                        <input placeholder="Contraseña" id="password" name="txtPass" type="password" class="validate">
                    </div>
                    <div class="input-field">
                        <input placeholder="Confirmar Contraseña" id="confpass" name="txtConfpass" type="password" class="validate">
                    </div>
                    <div class="text-right mt-4">
                        <button onclick="validar(usuario.value,nickname.value,password.value,confpass.value);return false" name="btSubir" type="submit" id="btSubir" class="waves-effect btn-large btn-large-white px-4 black-text">SUBMIT</button>
                    </div>
                </form>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 tm-register-col-r">
                <header class="mb-5">
                    <h3 class="mt-0 text-white">REGISTRATE</h3>
                    <p class="grey-text">56trgfv</p>
                    <p class="mb-0" id="salida"></p>
                </header>

            </div>
        </div>
        <footer class="row tm-mt-big mb-3">
            <div class="col-xl-12">
                <p class="text-center grey-text text-lighten-2 tm-footer-text-small">
                    Copyright &copy; 2018 Iban & Merchan
                </p>
            </div>
        </footer>
    </div>

    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script>
        $(document).ready(function () {
            $('select').formSelect();
        });
    </script>
</body>

</html>