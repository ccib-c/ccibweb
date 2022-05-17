<!DOCTYPE html>
<head>
<title>CCAPP</title>
<style>  body{margin:0 0 0 0 ;font-family: monospace;}
input[type=text], input[type=password], #l1 {
  width: 60%;
  padding: 12px 20px;
  margin: 8px 0;
  display:inline-block;
  border: 1px solid #111;
  background-color: #ffffff;
  border-radius:2vh;
}
button {
  background-color: #870000;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 80%;
  border-radius:2vh;

}

button:hover {
  background-color: #f77;
}
label{
  font-size: 150%;
}
</style>
</head>
<body style ="background-color:#1e1e1e;color:#ffffff">  
<?php
$user = $seee = $nne = $pwe= $dpnm=$clor= "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['unun'])) {
    $user='value="'.strtolower($_POST['unun']).'"';
    $seee=strtolower($_POST['unun']);
    }
    
}
require("account.php");
$clor = $accounts[$seee]["clr"];
$dpnm = $accounts[$seee]["dpn"];
?>
  <div style="background-color:#878787;text-align: center ;width:30%;margin: auto;top:25%;left:35%;position:absolute;" >

<form method="post" action="/sety.php">
  <label>Username:</label><input type="text" name="unun" <?php echo $user?>><?php echo $nne?></br>
  <label>Tag Text:</label><input type="text" name="dpdp" value="<?php echo $dpnm?>"></br>
  <label>Tag Color:</label><label id="l1" for="clcl"><input id="clcl" type="color" name="clcl" value="<?php echo $clor?>"></label></br>
  <label>Password:</label><input type="password" name="pwpw"><?php echo $pwe?></br>
  <button type="submit">Change</button>
</form>
<form method="post" action="/app.php">
<input type="hidden" name="unun" <?php echo $user?>><?php echo $nne?>
<input type="hidden" name="pwpw"><?php echo $pwe?>
  <button onclick="window.location.href='/app.php'">Return</button>
</form></br>

</div>
</body> 