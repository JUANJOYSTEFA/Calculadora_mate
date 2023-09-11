//github
//git remote add origin https://github.com/JUANJOYSTEFA/Calculadora_mate.git
//git branch -M main
//git push -u origin main
function gmsToGrados() {
    const grados = parseFloat(document.getElementById('gradosInput').value) || 0;
    const minutos = parseFloat(document.getElementById('minutosInput').value) || 0;
    const segundos = parseFloat(document.getElementById('segundosInput').value) || 0;
    const resultado = grados + minutos / 60 + segundos / 3600;
    document.getElementById('resultadoGMS').textContent = resultado.toFixed(6);
}

// Función para agregar texto al input de la calculadora
function addToInput(value) {
    const input = document.getElementById('calcInput');
    if (input) {
        input.value += value;
    }
}

// Obtener todos los botones de la calculadora
const calcButtons = document.querySelectorAll('.calc-button');

// Agregar un evento click a cada botón
calcButtons.forEach(button => {
    button.addEventListener('click', function() {
        const value = this.textContent;
        addToInput(value);
    });
});

// También puedes escuchar eventos de teclado para la calculadora
document.addEventListener('keydown', function(event) {
    const input = document.getElementById('calcInput');
    if (input && input === document.activeElement) {
        const key = event.key;
        if (key.match(/[0-9]/)) {
            addToInput(key);
        }
    }
});