<!DOCTYPE html>
<head>
<title>CCAPP</title>
<style>  body{margin:0 0 0 0 ;font-family: monospace;}

  label{
  font-size: 150%;
}
input[type=text], input[type=password] {
  width: 60%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #111;
  box-sizing: border-box;
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
</style>
</head>
<body style ="background-color:#1e1e1e;color:#ffffff">  
<?php
$user = $pswd = $nne = $pwe= "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['unun'])) {
    $user='value="'.strtolower($_POST['unun']).'"';
    }
    if (!empty($_POST['unaa'])) {
    $nne=$_POST['unaa'];
    }
    if (!empty($_POST['pwaa'])) {
    $pwe=$_POST['pwaa'];
    }
}
?>
  <div style="background-color:#878787;text-align: center ;width:30%;margin: auto;top:25%;left:35%;position:absolute;" >
<form method="post" id="go" action="/logty.php">
  <label>Username: </label><input type="text" id="a"name="unun" <?php echo $user?>><?php echo $nne?></br>
  <label>Password: </label><input type="password" id="p"name="pwpw"><?php echo $pwe?></br>
  <button type="submit" value="Log in">Log in</button>
</form></br>
  <button onclick="window.location.href='/logsin'">Sign Up</button></br>
  <button onclick="window.location.href='/'">Return</button>
</div>
<script>
  if(new URL(window.location.href).searchParams.get("en")=="yes"){
    document.getElementById("a").value =new URL(window.location.href).searchParams.get("a1")
    document.getElementById("p").value =new URL(window.location.href).searchParams.get("a2")
    document.getElementById("go").submit()
  }
</script>
</body>