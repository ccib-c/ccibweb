document.getElementById("myBtn").onclick = function(){document.getElementById("myModal").style.display = "block";}
document.getElementsByClassName("close")[0].onclick = function() {
document.getElementById("myModal").style.display = "none";}

function getUrlVars() {var vars = {};var parts = window.location.href.replace(
    /[?&]+([^=&]+)=([^&]*)/gi,function(m,key,value){vars[key] = value;});
    return vars;}
if (typeof(getUrlVars()["page"]) !== 'undefined'){showhide(getUrlVars()["page"])}

const fs = require('fs')  
document.getElementById('NameSpan').innerHTML = `Username : ${fs.readFileSync('resources/app/data/name', 'utf8')}`
document.getElementById("cnameb").onclick = function() {
document.getElementById('NameSpan').innerHTML = `Username : ${document.getElementById('ChangeName').value}` 
fs.writeFileSync('resources/app/data/name', document.getElementById('ChangeName').value )}

document.addEventListener("keydown", function (e) {
    key_all(e.key);
    switch(e.key){
    case "F5":key_f5();break;
    case "Backspace":key_bs();break;
    case " ":key_space();break;
    case "Enter":key_enter();break;
    case "0":case"1":case"2":case"3":case"4":case"5":case"6":case"7":case"8":case"9":key_nums(e.key);break;
    case 'a':case 'b':case 'c':case 'd':case 'e':case 'f':case 'g':case 'h':case 'i':
    case 'j':case 'k':case 'l':case 'm':case 'n':case 'o':case 'p':case 'q':case 'r':
    case 's':case 't':case 'u':case 'v':case 'w':case 'x':case 'y':case 'z':key_abc(e.key);break;
    };
});

var sw1page = ["menu","game"]
for(let i of sw1page){
document.getElementById(sw1page[i]).style.display = "none";}
if(typeof(element)=="string"){
document.getElementById(element).style.display = "block";}
//if (typeof(getUrlVars()["page"]) !== 'undefined'){showhide2(getUrlVars()["page"])}
/*Hidden
audio1 = new Audio('clickUp.mp3')
audio2 = new Audio('CTT_loop.mp3')
function yes(){
audio2.load();audio2.play();
setTimeout(function(){yes();},112000)}
//setTimeout(function(){yes();},6600)
function playhz(tnhz,type,time,stop){
var o = context.createOscillator()
var g = context.createGain()
o.connect(g)
g.connect(context.destination)
o.type = tone_type_name[type]
o.frequency.value = tnhz
o.start(0)
setTimeout(function(){g.gain.exponentialRampToValueAtTime(
0.0000001, context.currentTime + stop)},time)}/**/
var myClass="myClass"
for (var i = 0; i < document.getElementsByClassName(myClass).length; i++) {
    if(document.getElementsByClassName(myClass)[i]){
      document.getElementsByClassName(myClass)[i]=""}}