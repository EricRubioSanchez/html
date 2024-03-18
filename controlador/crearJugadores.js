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

function canviarTipo(e) {
    let carpeta = e.target.getAttribute("id");

    if (carpeta == "posicion") { return }
    let img = document.getElementsByClassName(carpeta)[0];
    if (e.target.value == "Ninguna" || e.target.value == "Calvo" || e.target.value == "Ninguno") {
        img.setAttribute("hidden", "");
    } else {
        if (img.hasAttribute("hidden")) { img.removeAttribute("hidden") };
        if (carpeta == "ojos") {
            let ruta = "../imagenes/" + carpeta + "/" + e.target.value + "_2.png";
            img.setAttribute("src", ruta);
            document.getElementById(carpeta + "Color").value = "#000000"
            
            img = document.getElementsByClassName(carpeta)[1];
            ruta = "../imagenes/" + carpeta + "/" + e.target.value + ".png";
            img.setAttribute("src", ruta);
        }
        else {
            let ruta = "../imagenes/" + carpeta + "/" + e.target.value + ".png";
            img.setAttribute("src", ruta);
            if (carpeta == "boca" || carpeta == "nariz") {
                return "";
            }
            document.getElementById(carpeta + "Color").value = "#000000"
            //canviarColor(document.getElementById(carpeta+"Color"));
        }
    }
}

let numero = 0;
let puntosTotales = 400;
document.getElementById("puntos").innerHTML = puntosTotales;


$("input[type='range']").on("input", canviarRange);
$("input[type='number']").on("input", canviarNumber);

$("input[type='range']").on("change", calcularMaximos);
$("input[type='number']").on("change", calcularMaximos);

$("input[type='color']").on("input", agafarColor);
$('select').on("change", canviarTipo);