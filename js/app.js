var contenido = document.getElementById("contenido");
var texto = document.getElementById("cont");

contenido.addEventListener("keyup",contarCaracteres);

function contarCaracteres(){
    var tam = contenido.length;
    var tamMax = 250;

    if(tam > tamMax){
        texto.innerHTML = "<h4>Ingresa menos de 250 caracteres</h4>";
        console.log("minimo si sirvo");
    }
}


