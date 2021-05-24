<?php
    require_once 'SesionClass.php';
    require_once 'ClassLogin.php';
    
    $page = isset($_GET["page"])?$_GET["page"]:null;
    $estado= isset($_GET["estado"])? $_GET["estado"]:null;
    
    $objeto1= new SesionClass();
    $objeto2= new ClassLogin();
    
    switch ($page){
    case "login":
        $res = $objeto2-> login($_POST['txtClave'],$_POST['txtUsuario']);
        if($res == "1"){
            $objeto1-> setSesion("sLogin",$_POST['txtUsuario']);
            echo "<script>location='/appWebDestellos/php/adminUser.php'</script>";
        }else{
            echo "<script>location='login.php?estado=error'</script>";
        }
        break;
    case "logout":
        $objeto1->finSesion();
        break;
        default :
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>
        *{
    
            box-sizing: border-box;
            margin: 0px;
            padding: 0px;
        }

        /* cabecera general para hacer modificaciones en la cabecera */
        .cabecera {
            position: relative;
            display: flex;
            width:100%;
            height: 8vh;
            background-color: #392B28;
            box-shadow: 0em 0 0.1em white;
        }
        main{
            background-color: #392B28;
            color:#fbf2c0;

        }
        /* relizamos stylos en la parte de la seccion menu de la cabecera */
        .cabecera__menu{
            font-family: Helvetica;
            display: flex;
            width: 50vw;
            margin: 3vh auto;
            margin-right: 5px;
            align-items: center;
            justify-content: flex-end;

        }

        /* realizamos stylos conjunto de lista desordenada de la cabecera parate menu */
        .cabecera__menu ul{
            list-style: none;
            text-align: center;
            float:right
        }

        /* realizamos stylos en cada una que compone la lista */
        .cabecera__menu ul li{
            display: inline-block;
            font-size: 18px;
            margin: 10px 5px;
            padding-left: 10px;
            padding-right: 10px;
            border-radius: 50px;
        }

        /* stylo hover a cada una de los componentes de la lista */
        .cabecera__menu ul li:hover{

            border-top: 1.5px solid #fbf2c0;
            border-bottom: 1.5px solid #fbf2c0;
            
        }

        /* realizamos stylos en cada etiqueta de hipervinculo de cada uno de los componentes de
        de la lista deordenada de la parte nebu de la cabecera */
        .cabecera__menu ul li a{
            font-family: Rockwell, Courier Bold, Courier, Georgia, Times, Times New Roman, serif;
            text-decoration: none;
            display:inline-block;
            color: #fbf2c0;
            
        }

        /* stylos parte de logo general de la cabecera */
        .cabecera__Logo{
            width: 30vw;
            height: 30vh;
        
            
        }

        /* .cabecera__logo-img{
            border:solid 1px #fbf2c0;
        } */
        /* stylos para la imagen de parte logo de la cabecera */
        .cabecera__Logo a img{
            border-radius: 100%;
            position: absolute;
            width:auto;
            height: auto;
            max-width: 25vh;
            max-height: 25vh;
            margin-top: 0.5vh;
            margin-left: 8px;
            float:left;
            
        }
        .cabecera__Logo a img:hover{
            border:solid 2px #fbf2c0;
            box-shadow: 2px 2px 10px #fbf2c0;

            
        }


        /* stylos parte de login general de la cabecera */
        .cabecera__login{
            width:20vw;
            font-family: monserrat;
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin-right: 10px;
            
        }

        /* stylo para login parte inicio de secion */
        /* stylo para login parte registrarse */

        .cabecera__login a {
            font-family: Helvetica;
            color: #fbf2c0;
            background-color: #392B28;
            border: solid 1.5px #fbf2c0;
            border-radius: 50px;
            font-size: 15px;
            display: flex;
            width: 45%;
            height: 60%;
            text-decoration: none;
            justify-content:center;
            align-items:center;
        } 

        .cabecera__login a:hover {
            text-align: center;
            text-decoration: none;
            background-color: #fbf2c0;
            color: #392B28;
            border-top: 3px solid #392B28;
            border-bottom: 3px solid #392B28;
            border-right: 3px solid #392B28;
        } 

        /* -------------------------- */

        main{
            
            display: flex;
            justify-content: center;
            height: 100vh;
        }
        .login{
            margin-top: 50px;
            padding-top: 2%;
            width: 25%;
            height:70%;
            /*justify-content: center;
            flex-wrap: no-wrap; */
            border: solid 2px #fbf2c0;
            box-shadow: 2px 2px 10px #fbf2c0;

        }
        .error{
            width: 100%;
            height: 3vh;
            margin-top:8px;
            margin-bottom:8px;
            text-align:center;
            color: red;
            font-size:12px;
        }
        .login__imagen{
        width: 100%;
        display: flex;
        justify-content: center;
        margin-bottom: 10px;
        }

        .login__imagen img{
        width: 40%;
        }
        .login__formulario-titulo{
            width: 100%;
            text-align: center;
        }
        .login__formulario-usuario{
            width: 100%;
            text-align: center;
            margin-bottom: 15px;
        }
        .login__formulario-usuario input{
            margin-left: 20px;
        }
        .login__formulario-contraseña{
            width: 100%;
            text-align: center;
            margin-bottom: 15px;
        }
        .login__formulario-contraseña input{
        
        }
        .login__formulario-ingresar{
            width: 100%;
            text-align: center;
            background-color: #392B28;
        }
    </style>
    <title>Document</title>
</head>
<body >
    <header>
        <section class="cabecera">
            <section class="cabecera__Logo">
                <section class="cabecera__logo-img">
                    <a href="https://facebook.com">
                        <img src="../assets/img/logo.png" alt="">
                    </a>
                </section>
            </section>
            <section class="cabecera__menu">
                <ul>
                    <li><a href="/appWebDestellos/Index.html">Inicio</a></li>
                    <li><a href= "#delivery">Delivery</a></li>
                    <li><a href="/Interfaces/adminUser.html"> Blog</a></li>
                    <li><a href="./Interfaces/contacto.html">contacto</a></li>
                </ul>
            </section>
            <!-- <section class="cabecera__login">
                <a href="./php/inicioSesion/login.php"  class="cabecera__login-inicio">inicio sesion</a>
                <a href="" class="cabecera__login-registrarse">registrar</a>      
            </section> -->
        </section>
    </header>
    <main>
        <div class="login">
            <div class="login__imagen">
                <img src="../assets/img/logo8.png" alt="">
            </div>
            <div class="login__formulario">
                <form action="/appWebDestellos/php/login.php?page=login" method="post">
                
                    <div class="login__formulario-titulo">
                        <h1>inicio sesion</h1>
                    </div>
                    <div class="error">
                    <p>
                    <?php
                    if ($estado == "error")
                    {            
                    ?>
                        <div>
                            <strong> Error!!</strong> usuario o contradeña incorrectos.
                        </div>
                    <?php
                    }
                    ?>
                </p>
                    </div>
                    <div class="login__formulario-usuario">
                        <label>Usuario: </label>
                        <input type="text" name="txtUsuario" class="innput" placeholder="usuario">
                    
                    </div>
                    <div class="login__formulario-contraseña">
                        <label>Contraseña: </label>
                        <input type="password" class="form-control" id="txtClave" name="txtClave" placeholder="password">
                    </div>
                    <div class="login__formulario-ingresar">
                    <button class="Boton" type=submit>Ingresar</button> 
                    
                    </div>
                </form>
            </div>
        </div>
        
    </main>
</body>
</html>
