//github
//git remote add origin https://github.com/JUANJOYSTEFA/Calculadora_mate.git
//git branch -M main
//git push -u origin main
function gmsagrados() {
    let grados = parseFloat(document.getElementById("grados").value);
    let minutos = parseFloat(document.getElementById("minutos").value);
    let segundos = parseFloat(document.getElementById("segundos").value);
    var resultado = grados + minutos / 60 + segundos / 3600;
    document.getElementById("resultado").innerHTML = resultado;
}