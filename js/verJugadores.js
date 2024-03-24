import {crearImagenJugador } from "./jugadores.js";

let tabla=document.getElementById("tabla").children;
for (let index = 0; index < tabla.length; index++) {
    const element = tabla[index].children[0];
    let objJugador=JSON.parse(element.firstChild.wholeText);
    let divImagenes= crearImagenJugador(objJugador,64,64);
    element.innerHTML="";
    divImagenes.setAttribute("class","mb-4 ms-4")
    element.appendChild(divImagenes);
    
}

function conseguirId(e){
    let id;
    if(e.target.parentElement.parentElement.hasAttribute("id")){

        id=e.target.parentElement.parentElement.getAttribute("id");
    }else if(e.target.parentElement.parentElement.parentElement.hasAttribute("id")){

        id=e.target.parentElement.parentElement.parentElement.getAttribute("id");
    }
    else{
        id=e.target.parentElement.parentElement.parentElement.parentElement.getAttribute("id");
    }
    return id;
}

function conseguirTr(e){
    let tr;
    if(e.target.parentElement.parentElement.hasAttribute("id")){

        tr=e.target.parentElement.parentElement;
    }else if(e.target.parentElement.parentElement.parentElement.hasAttribute("id")){

        tr=e.target.parentElement.parentElement.parentElement;
    }
    else{
        tr=e.target.parentElement.parentElement.parentElement.parentElement;
    }
    return tr;
}

function editar(e){
let id= conseguirId(e);
    window.location.href = "../controlador/editarJugador.php?id="+id;
}
$("button[name=editar]").on("click",editar)

function eliminar(e){
    if(confirm("¿Estás seguro? \n Se eliminará al jugador.")){
    let id= conseguirId(e);
    let tr= conseguirTr(e);
    console.log(id);
    $.ajax({
        type: 'POST',
        url: '../controlador/eliminarJugador.php',
        data: { 
            'id': id, 
        },
        success: function(msg){
            tr.remove();
            
        }
    });
        //window.location.href = "../controlador/editarJugador.php?id="+id;
}
    }
    $("button[name=eliminar]").on("click",eliminar)