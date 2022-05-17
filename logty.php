
<?php
echo "Hi";
/*$myfile = fopen("s-data/index.php", "a") or die("Unable to open file!");
    fwrite($myfile, "<?php?>");
    fclose($myfile);*/
#$datas = array("CCIB"=>"!@wasd",);
require('account.php');
$name = $pswd = $nne = $pwe= "";
$anye = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['unun'])) {
    $anye = 1;
    $nne = "Please Enter Username";
    } else {
    $name = strtolower($_POST['unun']);
    }
    if (empty($_POST['pwpw'])) {
    $anye = 1;
    $pwe = "Please Enter Password";
    } else {
    $pswd = $_POST['pwpw'];
    }
}
;
?>


<form method="post" id="myForm" action="<?php
if($anye==0){
if($accounts[$name]["pwd"]==$pswd){echo "app.php";}
else{$pwe ="Wrong Password";echo "login.php";};
}else{echo "login.php";};
?>">
<input type="hidden" name="unun" value="<?php echo $name?>">
<input type="hidden" name="pwpw" value="<?php echo $pswd?>">
<input type="hidden" name="unaa" value="<?php echo $nne?>">
<input type="hidden" name="pwaa" value="<?php echo $pwe?>">
<input type="submit">
</form>
<script type="text/javascript">
  document.getElementById('myForm').submit();
</script>