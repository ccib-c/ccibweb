let a;let b;
fetch('appmsg.txt')
.then(response => response.text())  
.then(text => a= text)
const getmsg = setInterval(function(){fetch('appmsg.txt')
.then(response => response.text())
.then(text => b= text)
.then(
function(){if(a!==b){location.replace("embed.php?y="+window.scrollY+"");}}
) },1)
setTimeout(function(){
window.scroll(0,document.body.offsetHeight)
let x
if(new URL(window.location.href).searchParams.get("y")>=0){
    x =new URL(window.location.href).searchParams.get("y")
    window.scroll(0,x)
  }
},10
)
//setTimeout(function(){location.reload()},1000)
