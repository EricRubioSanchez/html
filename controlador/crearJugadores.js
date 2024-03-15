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

        if (element.getAttribute("name") == "perdidas") {
            numero += 100 - parseInt(element.value)
        } else {
            numero += parseInt(element.value);
        }
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
    console.log(puntosDisponibles)

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

function canviarColor(e) {
    console.log(e.target.getAttribute("name"))
    console.log(document.getElementsByClassName(e.target.getAttribute("name"))[0])
    var mug = document.getElementsByClassName(e.target.getAttribute("name"))[0];
    var canvas = document.createElement("canvas");
    var ctx = canvas.getContext("2d");
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
        var newColor = HexToRGB(e.target.value);
        console.log(e.target.value)
        

        for (var I = 0, L = originalPixels.data.length; I < L; I += 4) {
            if (currentPixels.data[I + 3] > 0) {
                currentPixels.data[I] = newColor.R;
                currentPixels.data[I + 1] =  newColor.G;
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


let numero = 0;
let puntosTotales = 300;
document.getElementById("puntos").innerHTML = puntosTotales;


$("input[type='range']").on("input", canviarRange);
$("input[type='number']").on("input", canviarNumber);

$("input[type='range']").on("change", calcularMaximos);
$("input[type='number']").on("change", calcularMaximos);

$("input[type='color']").on("input", canviarColor);