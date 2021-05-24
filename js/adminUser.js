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