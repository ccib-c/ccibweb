<!DOCTYPE html>
<head>
<title>CCAPP</title>
<style>
  body{margin:0 0 0 0 ;font-family: monospace;}
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
::-webkit-scrollbar {
  width: 10px;
  height: 10px;
}
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 5px;
}
::-webkit-scrollbar-thumb {
  box-shadow: inset 0 0 5px black; 
  background: #878787; 
  border-radius: 5px;
}
::-webkit-scrollbar-thumb:hover {
  background: #b3b3b3; 
}

</style>
</head>
<body style ="background-color:#1e1e1e;color:#ffffff">  
<?php
$user = $pswd = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$user=$_POST['unun'];
$pswd=$_POST['pwpw'];
}
?>
<embed type="text/html" id=scorll src="embed.php" style="width:100%;height:99vh;display:inline;margin-top:0;">
<form style="position: fixed;bottom:0;right:0;font-size:150%;background-color:#87878712;padding-left:2% "id="next" method="post" action="appsend.php">
  <input type="hidden" name="unun" value="<?php echo $user?>"><input type="hidden" name="pwpw" value="<?php echo $pswd?>">
  <label>Message:</label>
  <input type="text" name="msg" size="50">
  <input type="submit" value="Send">
</form>
<form style="position: fixed;top:0;right:0;font-size:150%;background-color:#87878712;padding-left:2% " method="post" action="set.php">
  <input type="hidden" name="unun" value="<?php echo $user?>"><input type="hidden" name="pwpw" value="<?php echo $pswd?>">
  <label><?php require("account.php"); echo $accounts[$user]["dpn"]?></label>
  <button onclick="window.location.href='/set'">Setting</button>
</form>
</div>
<script>
</script>
