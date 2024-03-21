function permitirEnviar(){
    if(nombre.value==nombreValor&&contra.value==contraValor&&file.files[0]==fileValor){
        botonEnviar.setAttribute("disabled","")
        botonEnviar.style.backgroundColor="grey";
    }
    else{
        botonEnviar.removeAttribute("disabled","")
        botonEnviar.style.backgroundColor="";
    }
}

function canviarImagen() {
    let fileReader = new FileReader();
    fileReader.onloadend = function (event) {
        img.src = fileReader.result;
    }
    fileReader.readAsDataURL(file.files[0]);
}

let img = document.getElementById("imagen");
let nombre = document.getElementById("nombre");
let imagenPerfil = document.getElementById("imagen").getAttribute("src");
let contra = document.getElementById("contra");
let file = document.getElementById("selectedFile");
let nombreValor = document.getElementById("nombre").value;
let contraValor = document.getElementById("contra").value;
let fileValor = document.getElementById("selectedFile").files[0];
let botonEnviar=document.getElementById("enviar");
let botonCancelar=document.getElementById("cancelar");


nombre.addEventListener("input",permitirEnviar);
contra.addEventListener("input",permitirEnviar);
file.addEventListener("change",function(){
    canviarImagen();
    permitirEnviar();
});

botonCancelar.addEventListener("click",function(){
    img.src=imagenPerfil;
    botonEnviar.setAttribute("disabled","")
    botonEnviar.style.backgroundColor="grey";
})