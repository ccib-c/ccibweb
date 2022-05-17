
<?php
echo "Hi";
/*$myfile = fopen("s-data/index.php", "a") or die("Unable to open file!");
    fwrite($myfile, "<?php?>");
    fclose($myfile);*/
#$datas = array("CCIB"=>"!@wasd",);
$name = $pswd = $nne = $pwe= $clrr =$dpnn="";
$anye = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['unun'])) {
    $anye = 1;
    $nne = "<br>Please Enter Username";
    } else {
    $name = strtolower($_POST['unun']);
    }
    if (empty($_POST['pwpw'])) {
    $anye = 1;
    $pwe = "<br>Please Enter Password";
    } else {
    $pswd = $_POST['pwpw'];
    }
    if (empty($_POST['dpdp'])) {
    $dpnn = $name;
    } else {
    $dpnn = $_POST['dpdp'];
    }
    if (empty($_POST['clcl'])) {
    $clrr = "#ffffff";
    } else {
    $clrr = strtolower($_POST['clcl']);
    }
}
;
?>

<form method="post" id="myForm" action="
<?php 
    require("account.php");
if($anye==0){
if($accounts[$name]["pwd"]==$pswd){echo "app.php";

    $time = gmdate("Y-m-d,D;H:i:s");
    $myfile = fopen("account.php", "a") or die("Unable to open file!"); 
    fwrite($myfile,"\n<?php \$accounts[\"$name\"]=array(\"pwd\"=>\"$pswd\",\"clr\"=>\"$clrr\",\"dpn\"=>\"$dpnn\");#Change #$time?>");
    fclose($myfile);
}
else{echo "set.php";};
}else{echo "login.php";};
?>">
<input type="hidden" name="unun" value="<?php echo $name?>">
<input type="hidden" name="dpdp" value="<?php echo $dpnn?>">
<input type="hidden" name="clcl" value="<?php echo $clrr?>">
<input type="hidden" name="pwpw" value="<?php echo $pswd?>">
<input type="hidden" name="unaa" value="<?php echo $nne?>">
<input type="hidden" name="pwaa" value="<?php echo $pwe?>">
<input type="submit">
</form>
<script type="text/javascript">
 document.getElementById('myForm').submit();
</script>