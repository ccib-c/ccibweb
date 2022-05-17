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
$user = $pswd = $nne = $pwe= $dpnm=$clor= "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['unun'])) {
    $user='value="'.strtolower($_POST['unun']).'"';
    }
    if (!empty($_POST['dpdp'])) {
      $dpnm='value="'.strtolower($_POST['dpdp']).'"';
    }
    if (!empty($_POST['clcl'])) {
      $clor='value="'.strtolower($_POST['clcl']).'"';
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

<form method="post" action="/logsty.php">
  <label>Username:</label><input type="text" name="unun" <?php echo $user?>><?php echo $nne?></br>
  <label>Tag Text:</label><input type="text" name="dpdp" <?php echo $dpnm?>></br>
  <label>Tag Color:</label><label id="l1" for="clcl"><input id="clcl" type="color" name="clcl" <?php echo $clor?>></label></br>
  <label>Password:</label><input type="password" name="pwpw"><?php echo $pwe?></br>
  <button type="submit">Sign up</button>
</form></br>
<button onclick="window.location.href='/'">Return</button>

</div>
</body>