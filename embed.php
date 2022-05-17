<!DOCTYPE html>
<head>
<title>CCAPP</title>
<style>
      body{margin:0 0 0 0 ;}

code{color:#00ff00;font-family:monospace;}
small{font-size:10px}}

</style>
</head>
<body style ="background-color:#1e1e1e;color:#ffffff;font-family:sans-serif;">  
<?php
$user = $pswd = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$user=$_POST['unun'];
$pswd=$_POST['pwpw'];
}
?>
<p id="msgb" style="color :#ffffff;font-size: 150% ;text-align: left;padding-left: 2%;">
<?php
require("appmsg.php");require("account.php");$a="";
foreach ($msgmsg as ["send" => $se, "msms" => $tx]) {
    if(isset($accounts[$se])){
    $a= "[<a style=\"color:".$accounts[$se]["clr"]."\">".$accounts[$se]["dpn"]."</a>] : ".strip_tags($tx,[/*"<code>","<small>"*/])."\n</br>".$a;}
    else{
    $a="[null] : $tx\n</br>".$a;
    }

}echo $a;
echo '</p><script>
let x;console.log(document.body.offsetHeight);
window.scroll(0,document.body.offsetHeight);
if(new URL(window.location.href).searchParams.get("y")>=0){
    x =new URL(window.location.href).searchParams.get("y");
    window.scroll(0,x);
  }
</script>'
?> 
<p style="display:none"id="msge"></p>
<p style="display:none"id="msgf"></p>
</form>
<script type="text/javascript" src='index.js'>
</script>
