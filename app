<!DOCTYPE html>
<head>
<title>CCAPP</title>
<style>
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
<p id="msgb" style="color :#ffffff;font-size: 20px;text-align: left;padding-left: 10%;">
<?php
require("appmsg.php");
foreach ($msgmsg as ["send" => $se, "msms" => $tx]) {
    echo "[$se] : $tx\n</br>";
}
?> </p>
<p style="display:none"id="msge"></p>
<p style="display:none"id="msgf"></p>
<form style="position: fixed;bottom:0;right:0" method="post" action="appsend.php">
  <input type="hidden" name="unun" value="<?php echo $user?>"><input type="hidden" name="pwpw" value="<?php echo $pswd?>">
  <label>Message:</label>
  <input type="text" name="msg">
  <input type="submit" value="Send">
</form>
<script type="text/javascript" src='index.js'>
</script>
