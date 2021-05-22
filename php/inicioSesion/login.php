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
            echo "<script>location='home.php'</script>";
        }else{
            echo "<script>location='loginS.php?estado=error'</script>";
        }
        break;
    case "logout":
        $objeto1->finSesion();
        break;
        default :
    }

?>

<html>
    <head>
        <title>Inicio de Sesión</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <style>
            *{
                margin: 0;
                padding: 0;
            }
            .form-inicio{
                 width:100%;
                 max-width: 330px;
                 padding : 15px;
            }
            form img{
                height: 150px;
            }
            body{
                display: flex;
                background-color: darkgrey;
                align-items: center;
                justify-content: center;
            }
            .form-inicio.form-floating{
                z-index: 2;
            }
            .form-inicio input[type="text"]{
                margin-bottom: 1px;
                border-radius: 20px;
                
            }
            form{
                width: 200px;
            }
        </style>
    </head>
    <body>
        <header class="cabecera">
            <div class="regresar"></div>
        </header>
        <main class="form-inicio">
            <section class="formulario__Inicio">
                <form action="home.php?page=login" method="post">
                    
                    <img src="https://logos-marcas.com/wp-content/uploads/2020/04/Huawei-Logo.png">
                    <h1 class="h3">Iniciar Sesión</h1>
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
                    
                    <div class="form-floating">
                    
                    <label>Usuario</label>
                    <input type="text" name="txtUsuario" class="innput" placeholder="usuario">
                    
                    <label>Contraseña</label>
                    <input type="password" class="form-control" id="txtClave" name="txtClave" placeholder="password">
                    
                    </div>
                    <button class="Boton" type=submit>Ingresar</button>    
                    
                </form>
            </section> 
            <section>
                <form action="home.php?page=login" method="post">
                    
                    <img src="https://logos-marcas.com/wp-content/uploads/2020/04/Huawei-Logo.png">
                    <h1 class="h3">Iniciar Sesión</h1>
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
                    
                    <div class="form-floating">
                    
                    <label>Usuario</label>
                    <input type="text" name="txtUsuario" class="innput" placeholder="usuario">
                    
                    <label>Contraseña</label>
                    <input type="password" class="form-control" id="txtClave" name="txtClave" placeholder="password">
                    
                    </div>
                    <button class="Boton" type=submit>Ingresar</button>    
                    
                </form>
            </section> 
        </main>

    </body>
    
</html>