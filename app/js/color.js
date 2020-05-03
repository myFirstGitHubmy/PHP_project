// function show_RGB(idInput,idText,form) {
//     console.log(idInput + " " + idText);
//     // let textRed = document.getElementById(idText);
//     //     // let inputRed = document.getElementById(idInput);
//     let textRed = form.idText.value;
//     let inputRed = form.idInput.value;
//     textRed.innerHTML = inputRed.value;
// }

function show() {

    let textRed = document.getElementById('red_numb');
    let inputRed = document.getElementById('red_color');
    console.log(textRed + " " + inputRed);
    textRed.innerHTML = inputRed.value;
}

function show_RGB(idInput,idSpan) {
    console.log(idInput + " " + idSpan);
    // let textRed = document.getElementById(idText);
    //     // let inputRed = document.getElementById(idInput);
    let span = document.getElementById(idSpan);
    let input = document.getElementById(idInput);
    // console.log(inputRed + " " + idText);
    span.innerHTML = input.value;
}



function colorSelected() {
    let select = document.getElementById('sel');

    let spanRed = document.getElementById('customSpanRed');
    let spanGreen = document.getElementById('customSpanGreen');
    let spanBlue = document.getElementById('customSpanBlue');

    let inputRed = document.getElementById('customRangeRed');
    let inputGreen = document.getElementById('customRangeGreen');
    let inputBlue = document.getElementById('customRangeBlue');

    function enterValue(red, green, blue) {
        spanRed.innerHTML = red;spanGreen.innerHTML = green; spanBlue.innerHTML = blue;
        inputRed.value = red;inputGreen.value = green;inputBlue.value = blue;
    }

    switch (select.value) {
        case 'Yellow':
            enterValue(255,255,0);
            break;
        case 'Tomato':
            enterValue(255,99,71);
            break;
        case 'YellowGreen':
            enterValue(154,205,50);
            break;
        case 'DeepPink':
            enterValue(255,20,147);
            break;
        case 'Aquamarine':
            enterValue(127,255,212);
            break;
        case 'Chocolate':
            enterValue(210,105,30);
            break;
        case 'Purple':
            enterValue(128,0,128);
            break;
        case 'SlateBlue':
            enterValue(106,90,205);
            break;
        case 'OrangeRed':
            enterValue(255,69,0);
            break;
        case 'Violet':
            enterValue(238,130,238);
            break;
        case 'Moccasin':
            enterValue(255,228,181);
            break;

        default :
            enterValue(255,255,255);
    }

}
