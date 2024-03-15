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
        }else if (parseInt(element.value) + puntosDisponibles >= 100 && puntosDisponibles != 0) {
            element.setAttribute("max", 100);
            element.parentElement.children[0].setAttribute("max", 100);
        }
    }
}

let numero = 0;
let puntosTotales = 300;
document.getElementById("puntos").innerHTML = puntosTotales;


$("input[type='range']").on("input", canviarRange);
$("input[type='number']").on("input", canviarNumber);

$("input[type='range']").on("change", calcularMaximos);
$("input[type='number']").on("change", calcularMaximos);