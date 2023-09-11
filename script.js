let runningTotal = 0;
let buffer = "0";
let previousOperator;

const screen = document.querySelector('.screen');

function addToInput(value) {
    const section = document.getElementById('calcInput');
    if (section) {
        if (value === 'C') {
            section.textContent = '0';
        } else {
            if (section.textContent === '0') {
                section.textContent = value;
            } else {
                section.textContent += value;
            }
        }
    }
}
