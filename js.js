var sliderX = document.getElementById('shadowsliderX');
var sliderY = document.getElementById('shadowsliderY');
var sliderBlur = document.getElementById('shadowsliderBlur');
var inputhex = document.getElementById('shadowsliderHex');

var valueX = document.getElementById('valueX');
var valueY = document.getElementById('valueY');
var valueBlur = document.getElementById('blur');

var shadowdemo = document.getElementById('shadowdemo');

function update() {
  valueX.innerHTML = sliderX.value;
  valueY.innerHTML = sliderY.value;
  valueBlur.innerHTML = sliderBlur.value;
  shadowdemo.innerHTML = "box-shadow: " + sliderX.value + "px " + sliderY.value + "px " + sliderBlur.value + "px " + inputhex.value +";";
  $('#shadowdemo').css({
    "box-shadow": sliderX.value + "px " + sliderY.value + "px " + sliderBlur.value + "px " + inputhex.value
  });
}

sliderX.oninput = function() {update();}
sliderY.oninput = function() {update();}
sliderBlur.oninput = function() {update();}
inputhex.oninput = function() {update();}

window.onload= function() {update();}
