export function canviarColor(mug, color) {
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
        var newColor = HexToRGB(color);



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

export function crearImagenJugador(objJugador, width, height) {
    function crearImagen() {
        // <img alt="Cuerpo del Personaje" style="border: 5px solid #ED3B3B;width:10rem;height:10rem;position:absolute;" src="../imagenes/creacion/cuerpo.png">
        // <img alt="Cabeza del Personaje" class="piel" style="border: 5px solid #ED3B3B;width:10rem;height:10rem;position:absolute;" src="../imagenes/creacion/cabeza.png">
        // <img alt="Boca del Personaje" class="boca" style="border: 5px solid #ED3B3B;width:10rem;height:10rem;position:absolute;" src="../imagenes/creacion/boca/Predeterminada.png">
        // <img alt="Barba del Personaje" class="barba" style="border: 5px solid #ED3B3B;width:10rem;height:10rem;position:absolute;" hidden src="../imagenes/creacion/barba/Perilla.png">
        // <img alt="Nariz del Personaje" style="border: 5px solid #ED3B3B;width:10rem;height:10rem;position:absolute;" src="../imagenes/creacion/nariz.png">
        // <img alt="Pupilas del Personaje" class="ojos" style="border: 5px solid #ED3B3B;width:10rem;height:10rem;position:absolute;" src="../imagenes/creacion/ojos/Predeterminados_2.png">
        // <img alt="Ojos del Personaje" class="ojos" style="border: 5px solid #ED3B3B;width:10rem;height:10rem;position:absolute;" src="../imagenes/creacion/ojos/Predeterminados.png">
        // <img alt="Accesorios del Personaje" class="accesorios" style="border: 5px solid #ED3B3B;width:10rem;height:10rem;position:absolute;" hidden src="../imagenes/creacion/accesorios/GafasAviador.png">
        // <img alt="Pelo del Personaje" class="pelo" style="border: 5px solid #ED3B3B;width:10rem;height:10rem;position:absolute;" hidden src="../imagenes/creacion/pelo/Largo.png">
        let img = document.createElement("img")
        img.width = width;
        img.height = height;
        img.style.position = "absolute";
        return img;
    }
    let div = document.createElement("div");
    div.style.position = "absolute";

    let imgCuerpo = crearImagen();
    imgCuerpo.alt = "Cuerpo del Personaje";
    imgCuerpo.src = "../imagenes/creacion/cuerpo.png";
    div.appendChild(imgCuerpo);

    let imgCabeza = crearImagen();
    imgCabeza.alt = "Cabeza del Personaje";
    imgCabeza.src = "../imagenes/creacion/cabeza.png";
    imgCabeza.addEventListener("load", function () {
        canviarColor(imgCabeza, objJugador["piel"])
    })
    div.appendChild(imgCabeza);

    let imgBoca = crearImagen();
    imgBoca.alt = "Boca del Personaje";
    imgBoca.src = "../imagenes/creacion/boca/" + objJugador["boca"] + ".png";
    div.appendChild(imgBoca);

    if (objJugador["barba"] != "Ninguna") {
        let imgBarba = crearImagen();
        imgBarba.alt = "Cabeza del Personaje";
        imgBarba.src = "../imagenes/creacion/barba/" + objJugador["barba"] + ".png";
        imgBarba.addEventListener("load", function () {
            canviarColor(imgBarba, objJugador["colorBarba"])
        })
        div.appendChild(imgBarba);
    }

    let imgNariz = crearImagen();
    imgNariz.alt = "Nariz del Personaje";
    imgNariz.src = "../imagenes/creacion/nariz.png";
    div.appendChild(imgNariz);

    let imgPupilas = crearImagen();
    imgPupilas.alt = "Pupilas del Personaje";
    imgPupilas.src = "../imagenes/creacion/ojos/" + objJugador["ojos"] + "_2.png";
    imgPupilas.addEventListener("load", function () {
        canviarColor(imgPupilas, objJugador["colorOjos"])
    })
    div.appendChild(imgPupilas);

    let imgOjos = crearImagen();
    imgOjos.alt = "Ojos del Personaje";
    imgOjos.src = "../imagenes/creacion/ojos/" + objJugador["ojos"] + ".png";
    div.appendChild(imgOjos);

    if (objJugador["accesorios"] != "Ninguno") {
        let imgAcc = crearImagen();
        imgAcc.alt = "Accesorios del Personaje";
        imgAcc.src = "../imagenes/creacion/accesorios/" + objJugador["accesorios"] + ".png";
        div.appendChild(imgAcc);
    }

    if (objJugador["pelo"] != "Calvo") {
        let imgPelo = crearImagen();
        imgPelo.alt = "Pelo del Personaje";
        imgPelo.src = "../imagenes/creacion/pelo/" + objJugador["pelo"] + ".png";
        imgPelo.addEventListener("load", function () {
            canviarColor(imgPelo, objJugador["colorPelo"])
        })
        div.appendChild(imgPelo);
    }

    return div;

}