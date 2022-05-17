
    <?php
    echo "Hi";
    require('account.php');
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST['unun'])){header("Location:/login.php");};
    if($accounts[$_POST['unun']]["pwd"]==$_POST['pwpw']){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $unn = $_POST['unun'];   
        $msg = $_POST['msg'];
    $msg=strip_tags($msg,[/*"<code>","<small>"*/]);   
        if (empty($msg)) {}
        else{if (empty($unn)){header("Location:/login.php");} else{
    $myfile = fopen("appmsg.php", "a") or die("Unable to open file!"); 
    fwrite($myfile,"\n<?php array_push(\$msgmsg,[\"send\"=>\"$unn\",\"msms\"=>\"$msg\"]);?>");
    fclose($myfile);
    $myfile = fopen("appmsg.txt", "a") or die("Unable to open file!"); 
    fwrite($myfile,"\n<?php array_push(\$msgmsg,[\"send\"=>\"$unn\",\"msms\"=>\"$msg\"]);?>");
    fclose($myfile);
        }}}
        
    }else{header("Location:/login.php");};
    }else{header("Location:/login.php");}

    ?>
<form method="post" id="myForm" action="app.php">
<input type="hidden" name="unun" value="<?php echo $_POST['unun']?>">
<input type="hidden" name="pwpw" value="<?php echo $_POST['pwpw']?>">
<input type="submit">
</form>
<script type="text/javascript">
    if(new URL(window.location.href).searchParams.get("y")>=0){
        document.getElementById('myForm').action="app.php?y="+new URL(window.location.href).searchParams.get("y")
    }
    document.getElementById('myForm').submit();
</script> 