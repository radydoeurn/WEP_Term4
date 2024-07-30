let input1 = document.querySelector('input');

let button = document.querySelector('button');
button.addEventListener('click', getText(input1.value));

function getText(){
    let text = document.querySelector('goal').value;
    text.textContent = text.value;
    console.log(text.value);
}