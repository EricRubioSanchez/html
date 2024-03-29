function canviarRange(e) {
    let valor = e.target.value;
    let numb = e.target.parentElement.children[1];
    numb.value = valor;
    puntosActuales();

}
function canviarNumber(e) {
    let valor = e.target.value;
    let range = e.target.parentElement.children[0];
    range.value = valor;
    puntosActuales();

}
function puntosActuales() {
    numero = 0;
    for (let index = 0; index < $("input[type='number']").length; index++) {
        const element = $("input[type='number']")[index];
        numero += parseInt(element.value);

    }

    let puntosDisponibles = puntosTotales - numero;
    if (puntosDisponibles == 0) {
        for (let index = 0; index < $("input[type='number']").length; index++) {
            const element = $("input[type='number']")[index];
            element.setAttribute("max", parseInt(element.value));
            element.parentElement.children[0].setAttribute("max", parseInt(element.value));
        }
    }

    document.getElementById("puntos").innerHTML = puntosTotales - numero;

}

function calcularMaximos() {
    let puntosDisponibles = puntosTotales - numero;


    for (let index = 0; index < $("input[type='number']").length; index++) {
        const element = $("input[type='number']")[index];
        if (parseInt(element.value) + puntosDisponibles < 100 && puntosDisponibles != 0) {
            element.setAttribute("max", parseInt(element.value) + puntosDisponibles);
            element.parentElement.children[0].setAttribute("max", parseInt(element.value) + puntosDisponibles);
        } else if (parseInt(element.value) + puntosDisponibles >= 100 && puntosDisponibles != 0) {
            element.setAttribute("max", 100);
            element.parentElement.children[0].setAttribute("max", 100);
        }
    }
}

function canviarColor(elemento) {
    var mug = document.getElementsByClassName(elemento.getAttribute("name"))[0];
    mug.onload=null;
    var canvas = document.createElement("canvas");
    var ctx = canvas.getContext("2d", { willReadFrequently: true });
    var originalPixels = null;
    var currentPixels = null;
    getPixels(mug)

    function HexToRGB(Hex) {
        var Long = parseInt(Hex.replace(/^#/, ""), 16);
        return {
            R: (Long >>> 16) & 0xff,
            G: (Long >>> 8) & 0xff,
            B: Long & 0xff
        };
    }

    function changeMugsColor() {


        changeColor(mug);

    }

    function changeColor(amug) {

        if (!originalPixels) return; // Check if image has loaded
        var newColor = HexToRGB(elemento.value);



        for (var I = 0, L = originalPixels.data.length; I < L; I += 4) {
            if (currentPixels.data[I + 3] > 0) {
                currentPixels.data[I] = newColor.R;
                currentPixels.data[I + 1] = newColor.G;
                currentPixels.data[I + 2] = newColor.B;
            }
        }

        ctx.putImageData(currentPixels, 0, 0);
        amug.src = canvas.toDataURL("image/png");
    }

    function getPixels(img) {
        canvas.width = img.width;
        canvas.height = img.height;

        ctx.drawImage(img, 0, 0, img.naturalWidth, img.naturalHeight, 0, 0, img.width, img.height);
        originalPixels = ctx.getImageData(0, 0, img.width, img.height);
        currentPixels = ctx.getImageData(0, 0, img.width, img.height);

        img.onload = null;
    }

    changeMugsColor()
}

function agafarColor(e) {
    canviarColor(e.target);
}

function agafarTipo(e) {
    
    canviarTipo(e.target);
}

function canviarTipo(e) {
    let carpeta = e.getAttribute("id");
    if (carpeta == "posicion1"||carpeta == "posicion2") { return }
    let img = document.getElementsByClassName(carpeta)[0];
    if (e.value == "Ninguna" || e.value == "Calvo" || e.value == "Ninguno") {
        img.setAttribute("hidden", "");
    } else {
        if (img.hasAttribute("hidden")) { img.removeAttribute("hidden") };
        if (carpeta == "ojos") {
            let ruta = "../imagenes/creacion/" + carpeta + "/" + e.value + "_2.png";
            img.setAttribute("src", ruta);
            //document.getElementById(carpeta + "Color").value = "#000000"

            img = document.getElementsByClassName(carpeta)[1];
            ruta = "../imagenes/creacion/" + carpeta + "/" + e.value + ".png";
            img.setAttribute("src", ruta);
        }
        else {
            let ruta = "../imagenes/creacion/" + carpeta + "/" + e.value + ".png";
            img.setAttribute("src", ruta);
            if (carpeta == "boca" || carpeta == "accesorios") {
                return "";
            }
            //document.getElementById(carpeta + "Color").value = "#000000"
            //canviarColor(document.getElementById(carpeta+"Color"));
        }
    }
}

function randomizarStats() {
    puntosDisponibles = puntosTotales;
    for (let index = 0; index < $("input[type='number']").length; index++) {
        const element = $("input[type='number']")[index];
        let range = element.parentElement.children[0];
        range.setAttribute("max",100)

        if (puntosDisponibles > 100) {valor = Math.floor(Math.random() * 101)}
        else{valor = Math.floor(Math.random() * puntosDisponibles)}
        puntosDisponibles -= valor;
        element.value =valor;
        range.value =valor;
    }
    puntosActuales();
    calcularMaximos();
    

}

let pieles=["#FFDCB1","#E5C298","#E4B98E","#E2B98F","#E3A173","#D99164","#CC8443","#C77458","#A53900","#880400","#710200","#440000","#FFE0C4","#EECFB4","#DEAB7F","#E0B184","#DFA675","#BE723C","#A01900","#5B0000","#352018","#EDE4C8","#EFD6BD","#EABD9D","#E3C2AE","#DFB997","#D0926E","#BD9778","#BB6D4A","#940A00","#E1ADA4","#A58869","#7B0000","#720000","#380000"]

function randomizarStyle(){
    for (let index = 0; index < $("select").length; index++) {
        const element = $("select")[index];
        valor = Math.floor(Math.random() * element.children.length)
        element.value=element.children[valor].value;
        canviarTipo(element);
        if(document.getElementById(element.getAttribute("id")+"Color")){
            document.getElementById(element.getAttribute("id")+"Color").value="#"+Math.floor(Math.random()*16777215).toString(16);
        }
    }
    canviarPosicion()
    console.log(pieles[Math.random()*pieles.length]);
    document.getElementById("piel").value=pieles[Math.floor(Math.random()*pieles.length)];
    canviarColor(document.getElementById("piel"))


}



function canviarPosicion(){
    let sel = document.getElementById("posicion1");

    if(sel.value==document.getElementById("posicion2").value){
        document.getElementById("posicion2").value="Ninguna"
    }
    for (let index = 0; index < sel.children.length; index++) {
        const element = sel.children[index];
        if(element.selected){

            document.getElementById("posicion2").children[index+1].setAttribute("hidden","")
            document.getElementById("posicion2").children[index+1].setAttribute("disabled","")
        }else{
            document.getElementById("posicion2").children[index+1].removeAttribute("disabled")
            document.getElementById("posicion2").children[index+1].removeAttribute("hidden")
        }
        
    }
}
function imgLoaded(e){
    if(document.getElementById(e.target.getAttribute("class")+"Color")){
        canviarColor(document.getElementById(e.target.getAttribute("class")+"Color"))
    }
}

let numero = 0;
const puntosTotales = 400;

canviarPosicion()
puntosActuales();
calcularMaximos();



document.getElementById("posicion1").addEventListener("change",canviarPosicion)

document.getElementById("randomStats").addEventListener("click", randomizarStats);
document.getElementById("randomStyle").addEventListener("click", randomizarStyle);

$("input[type='range']").on("input", canviarRange);
$("input[type='number']").on("input", canviarNumber);

$("input[type='range']").on("change", calcularMaximos);
$("input[type='number']").on("change", calcularMaximos);

$("input[type='color']").on("input", agafarColor);
$('select').on("change", agafarTipo);
$("img").on('load', imgLoaded)