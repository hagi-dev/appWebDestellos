<?php
require_once 'SesionClass.php';

$objeto3= new SesionClass();
$usuario= $objeto3->getSesion("sLogin");
if ($usuario == false)
{
    echo '<script>location ="login.php"</script>';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="/appWebDestellos/css/adminUser/styleHeader.css"> -->
    <link rel="stylesheet" href="/appWebDestellos/css/adminUser/styleFooter.css">
    <!-- <link rel="stylesheet" href="../css/adminUser/styleMain.css"> -->
    <title>Home</title>
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
            height: 10vh;
            background-color: #392B28;
            box-shadow: 0em 0 0.1em white;
        }
        main{
            background-color: #392B28;
            color: white;

        }
        /* relizamos stylos en la parte de la seccion menu de la cabecera */
        .cabecera__menu{
            font-family: Helvetica;
            display: flex;
            width: 55vw;
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
            margin-left:15px;
            
        }

        /* stylos para la imagen de parte logo de la cabecera */
        .cabecera__Logo a img{
            position: absolute;
            width:auto;
            height: auto;
            max-width: 25vh;
            max-height: 25vh;
            margin-top: 0.5vh;
            margin-left: 8px;
            float:left;
            
        }


        /* stylos parte de login general de la cabecera */
        .cabecera__carritoCompras{
            width:9vw;
            font-family: monserrat;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            padding-top:3px;
            
        }

        /* stylo para login parte inicio de secion */
        .cabecera__carritoCompras-img svg{
            width:7vw;
            height:7vh;
            margin-right:3px;
        }
        #circulo{
            fill:#392B28;
        }
        #carrito{
            fill:#fbf2c0;
        }
        #circulo:hover {
            fill:#8a6b64;
        }

        main{
        background-color:  #b18b82;
        width:100%;
        height:90vh;
        display:flex;
        justify-content:space-evenly;
        align-items: center;
        }
        .navegacion{
        width:14%;
        height:85vh;  
        background-color: #392B28;
        border-radius:10px;
        border-top-right-radius: 50px;
        border-bottom-right-radius: 50px;
        }
        .navegacion__circunferencia{
            width: 62%;
            height: 16%;
            background-color:#b18b82;;
            /* opacity: 40%; */
            margin-left: 0%;
            box-shadow: 2px 2px 10px #b18b82;;
            border-bottom-left-radius: 100%;
            border-bottom-right-radius: 100%;
            border-top-left-radius: 100%;
            border-top-right-radius: 100%;
        }
        .navegacion__categorias{
            width:100%;
            height:70%;
            padding:70% 50% 50% 30%;
        }
        .navegacion__categorias ul{

        }
        .navegacion__categorias ul li{
            list-style: none;
            margin-bottom:30px;
        }

        .navegacion__categorias ul li a {
            text-decoration:none;
            color: #fbf2c0;
            font-size: 20px;
        }

        .navegacion__perfil {
           display:flex;
            font-size: 25px;
            justify-content: start;
            margin-left: 60px;

        }
        .navegacion__perfil-usuario{
            text-align: center;
            font-size:12px;
            margin-right:5px;
        }
        .navegacion__perfil-combo{
            text-align: center;
            display:flex;
            margin-left:5px;
        }
        .navegacion__perfil-combo select{
            text-align: center;
            width:20px;
            display:flex;
            background-color: #392B28;
            border:0px;
            color: #fbf2c0
        }
        .navegacion__perfil-combo option{
            text-align: center;
            width:20px;
            display:flex;
            box-shadow: 2px 2px 10px #fbf2c0;
            border:solid 1px #fbf2c0;
            color: #fbf2c0

        }
        .navegacion__perfil-combo option:hover{
            background-color: #ff0
        }
        .navegacion-sesion {
            
            text-decoration:none;
            margin-top:400px;
            margin-left:62px;
            color: #fbf2c0
        }
        .navegacion-sesion:hover {
            color:green;
            
        }
        .contenedor{
            width:79%;
            height:89vh;
            background-color: rgb(174, 158, 247);
            border-radius:10px;
        }
        .contenedor iframe{
            border: solid 0px red;
            width: 100%;
            height:100%;
        }
    </style>
</head>
<body>
    <header>
        <section class="cabecera">
            <section class="cabecera__Logo">
                <section class="cabecera__logo-img">
                    <a href="https://facebook.com">
                        <img src="/appWebDestellos/assets/img/logo8.png" alt="">
                    </a>
                </section>
            </section>
            <section class="cabecera__menu">
                <ul>
                    <li><a href="/appWebDestellos/php/adminUser.php">Inicio</a></li>
                    <li><a href= "#delivery">Delivery</a></li>
                    <li><a href=""> Blog</a></li>
                    <li><a href="./Interfaces/contacto.html">contacto</a></li>
                </ul>
            </section>
            <section class="cabecera__carritoCompras">
                    <div class="cabecera__carritoCompras-img">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 482.49 482.49"><defs><style>.cls-1{fill:none;}</style></defs><g id="carrito" data-name="Capa 2"><g id="Capa_1-2" data-name="Capa 1"><circle id="circulo" cx="241.24" cy="241.24" r="241.24"/><path d="M164.71,274.26c1.76,13.73,3.35,26.63,5.07,39.51,1.14,8.49,2.21,17,3.78,25.41,1.73,9.31,7.71,15.23,16.65,17.72,6,1.67,11,2,15.12-5.45,9.71-17.31,35.09-17,44.82.33,2.85,5.07,5.88,6.21,11,6.09,13.35-.3,26.71-.14,40.06-.17a13,13,0,0,0,1.8-.33c4.88-11,12.75-18.45,25.83-18.47s24.3,9.31,26.33,21.77a26.71,26.71,0,0,1-18.5,30.1c-12.43,4-26.53-1.68-31.55-13.95-2.43-5.93-5.65-6.89-11.2-6.7-11.43.37-22.89.25-34.33,0-3.79-.07-5.83.8-7.37,4.69-4.36,11-12.76,17-24.77,17s-20.36-6.19-24.71-17.13c-1.46-3.67-3.27-4.36-6.72-4.61-20.43-1.5-32.64-13.74-35.38-34.36-6.89-51.9-14-103.76-21-155.64q-3.23-24.06-6.13-48.16c-2-16.89-10.88-24.84-28-24.87-10,0-20,0-30.05,0-4.34,0-7.72-1.14-7.7-6.2,0-4.81,3.58-5.84,7.39-5.84,12.63,0,25.31-.39,37.89.5,17,1.21,29.84,14.45,31.9,31.39.74,6.11,1.68,12.2,2.61,18.89H403.3c11.9,0,13.39,2.13,9.44,13.56Q397.6,203.21,382.46,247c-6.34,18.3-18.83,27.24-38.2,27.25q-85.12,0-170.27,0Z"/></g></g></svg>
                    </div>
            </section>
        </section>
    </header>
    <main>
       <nav class="navegacion">
           <!-- <div class="navegacion__circunferencia"></div> -->
           <div class="navegacion__categorias">
            <ul>
                <li onclick="frameCatalogo();">
                    <a id="categoria__catalogo"href="">Catalogo</a>
                </li>
                <li onclick="framePedido();"><a id="categoria__pedido" href="" >pedido</a></li>
                <li ><a id="categoria__historial" href="">historial</a></li>
                <li ><a id="categoria__datos" href="">datos</a></li>
            </ul>
           </div>
           <div class="navegacion__perfil">
           <div class="navegacion__perfil-combo">
                   <select>
                   <option value="">perfil</option>
                   <option value="">puntos: 189pts.</option>
                   </select>
               </div>
               <div class="navegacion__perfil-usuario">
                   <h1><?= $objeto3->getSesion("sLogin"); ?></h1>
               </div>
           </div>
           <a class="navegacion-sesion" href="/appWebDestellos/php/login.php?page=logout">Cerrar sesión</a>
       </nav>   
       <section class="contenedor">
           <iframe src="/appWebDestellos/php/homeUser.php"  class="contenedor__Interfaz"
           id="contenedor"></iframe>
       </section>
    </main>

    <!-- <footer>
        <section class="footer">
            <p>drechos reservados* para Hagi-dev licencia local </p>
        </section>

    </footer> -->
    <script >
        let contenedor = document.getElementById("contenedor");
        const categoriaCatalogo = document.getElementById("categoria__catalogo");
        const categoriaPedido = document.getElementById("categoria__pedido");
        const categoriaHistorial = document.getElementById("categoria__historial");
        const categoriaDatos = document.getElementById("categoria__datos");

        //categoriaCatalogo.addEventListener("click",frameCatalogo);
        //categoriaPedido.addEventListener("click",framePedido)
        function frameCatalogo(){
        document.getElementById("contenedor").src="/appWebDestellos/php/catalogos.php";
        }

        function framePedido(){
        document.getElementById("contenedor").src="/appWebDestellos/php/homeUser.php";
        }
    </script>
</body>
</html>