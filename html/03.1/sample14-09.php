<?php
    if (isset($_POST[btnExec])) {
        if ($_POST[password] == "12345") {
            session_start();
            $_SESSION[sesuserid] = $_POST[userid];
            header("location: sample14-09-2.php");
            exit();
        }
        else {
            print "パスワードが間違っています!<br><br>";
        }
    }
?>
<!DOCTYPE html> 
<html lang = "ja"> 
<head> 
    <meta charset = "UTF-8"> 
    <title> </title>
</head> 
<body>  
<form action="<?=$_SERVER[SCRIPT_NAME]?>" method="POST">
    <p>ユーザーID：<INPUT size="20" type="text" name="userid"></p>
    <p>パスワード：<INPUT size="15" type="password" name="password"></p>
    <input type="submit" name="btnExec" value="送信">
</form>
</body>
</html>