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
        print "送信ボタンがクリックされました！<br><br>";
    }
    else if (isset($_POST[btnCancel])) {
        //キャンセル
        print "キャンセルボタンがクリックされました！<br><br>";
    }

?>
いずれかのボタンをクリックしてください。
<form action="<?=$_SERVER[SCRIPT_NAME]?>" method="POST">
    <input type="submit" name="btnExec" value="送信">
    <input type="submit" name="btnCancel" value="キャンセル">
</form>
</body>
</html>
