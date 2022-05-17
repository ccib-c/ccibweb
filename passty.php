<body>
<?php
require('account.php');
$name = $pswd = $nne = $pwe=$newp= "";
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
    if (empty($_POST['npsw'])) {
    $anye = 1;
    $pwe = "Please Enter Password";
    } else {
    $newp = $_POST['npsw'];
    }
}
;
?>


<form method="post" id="myForm" action="<?php
if($anye==0){
if($accounts[$name]["pwd"]==$pswd){echo "app.php";

  $time = gmdate("Y-m-d,D;H:i:s");
  $myfile = fopen("account.php", "a") or die("Unable to open file!"); 
  fwrite($myfile,"\n<?php \$accounts[\"$name\"]=array(\"pwd\"=>\"$newp\",\"clr\"=>\"".$accounts[$name][clr]."\",\"dpn\"=>\"+".$accounts[$name]["dpn"]."\");#Pass #$time?>");
  fclose($myfile);
}

else{$pwe ="Wrong Password";echo "pass.php";};
}else{echo "login.php";};
?>">
<input type="hidden" name="unun" value="<?php echo $name?>">
<input type="hidden" name="pwpw" value="<?php echo $pswd?>">
<input type="hidden" name="unaa" value="<?php echo $nne?>">
<input type="hidden" name="pwaa" value="<?php echo $pwe?>">
<input type="submit">
</form>
</body>
<script type="text/javascript">
  document.getElementById('myForm').submit();
</script>