var byte = document.getElementById("converter byte");
var kb = document.getElementById("kb");
var mb = document.getElementById("mb");

function byteConverter(){
document.converter.kb.value = document.converter.byte.value / 1024
document.converter.mb.value = document.converter.byte.value / (1024*1024)

}

function kbConverter(){
document.converter.byte.value = document.converter.kb.value * 1024
document.converter.mb.value = document.converter.kb.value / 1024

}

function mbConverter(){
document.converter.byte.value = document.converter.mb.value * 1024 * 1024
document.converter.kb.value = document.converter.mb.value * 1024

}