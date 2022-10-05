<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<?php

    if (isset($_POST[btnExec])) {
        //送信ボタンがクリックされた時
        $name = $_POST[username];
        $address = $_POST[useraddress];
        print "送信されたデータは<br>";
        print "名前→" . $name . "<br>";
        print "住所→" . $address . "<br>";
        print "<br><br>";
    }

?>

名前と住所を入力して[送信]ボタンをクリックしてください。
<form action="<?=$_SERVER[SCRIPT_NAME]?>" method="POST">
    <p>名前：<input size="40" type="text" name="username"></p>
    <p>住所：<input size="40" type="text" name="useraddress"></p>
    <input type="submit" name="btnExec" value="送信">
</form>
</body>
</html>
