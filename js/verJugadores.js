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

function editar(e){
let id;
    if(e.target.parentElement.parentElement.hasAttribute("id")){

        id=e.target.parentElement.parentElement.getAttribute("id");
    }else{

        id=e.target.parentElement.parentElement.parentElement.parentElement.getAttribute("id");
    }
}
$("button[name=editar]").on("click",editar)