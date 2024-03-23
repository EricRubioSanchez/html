import {canviarColor } from "./jugadores.js"; 

let jugadorJSON = JSON.parse(document.getElementById("estiloJSON").firstChild.wholeText);
document.getElementById("estiloJSON").remove();
console.log(jugadorJSON);

document.getElementById("pelo").value=jugadorJSON["pelo"];
document.getElementById("ojos").value=jugadorJSON["ojos"];
document.getElementById("barba").value=jugadorJSON["barba"];
document.getElementById("accesorios").value=jugadorJSON["accesorios"];
document.getElementById("boca").value=jugadorJSON["boca"];

document.getElementById("peloColor").value=jugadorJSON["colorPelo"]
document.getElementById("ojosColor").value=jugadorJSON["colorOjos"]
document.getElementById("barbaColor").value=jugadorJSON["colorBarba"]
document.getElementById("piel").value=jugadorJSON["piel"]

document.getElementsByClassName("boca")[0].src="../imagenes/creacion/boca/"+jugadorJSON["boca"]+".png";
if(jugadorJSON["barba"]!="Ninguna"){document.getElementsByClassName("barba")[0].removeAttribute("hidden");}
document.getElementsByClassName("barba")[0].src="../imagenes/creacion/barba/"+jugadorJSON["barba"]+".png";
document.getElementsByClassName("ojos")[0].src="../imagenes/creacion/ojos/"+jugadorJSON["ojos"]+"_2.png";
document.getElementsByClassName("ojos")[1].src="../imagenes/creacion/ojos/"+jugadorJSON["ojos"]+".png";
if(jugadorJSON["accesorios"]!="Ninguno"){document.getElementsByClassName("accesorios")[0].removeAttribute("hidden")}
document.getElementsByClassName("accesorios")[0].src="../imagenes/creacion/accesorios/"+jugadorJSON["accesorios"]+".png";
if(jugadorJSON["pelo"]!="Calvo"){document.getElementsByClassName("pelo")[0].removeAttribute("hidden")}
document.getElementsByClassName("pelo")[0].src="../imagenes/creacion/pelo/"+jugadorJSON["pelo"]+".png";

canviarColor(document.getElementsByClassName("piel")[0],jugadorJSON["piel"])