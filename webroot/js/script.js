
function confirmaBorrar(id,nombre,tipo){
    var textoConfirm="";
    var urlElimina = "";
    switch (tipo){
        case "1": //usuario
            textoConfirm = "¿Esta seguro de eliminar al usuario ";
            urlElimina = 'acciones/borrar_usuario.php?id='+id;
            break;
        case "2": //CATEGORIA
            textoConfirm = "¿Esta seguro de eliminar la categoria ";
            urlElimina = 'acciones/borrar_categoria.php?id='+id;
            break;
        case "3": //PRODUCTO
            textoConfirm = "¿Esta seguro de eliminar el producto ";
            urlElimina = 'acciones/borrar_producto.php?id='+id;
             break;
         
    }
    if(confirm(textoConfirm+nombre+"?")){
        window.location.href=urlElimina;
    }
}
