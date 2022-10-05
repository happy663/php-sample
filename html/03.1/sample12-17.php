<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<?php

    if (isset($_POST[btnExec])) {
        //isset

        //post data print
        print "[そのまま表示]<br>";
        print $_POST[inputdata] . "<br><br>";

        //return
        print "[改行して表示]<br>";
        print nl2br($_POST[inputdata]) . "<br><br>";

    }

?>
テキストボックスに値を入力して[送信]ボタンをクリックしてください。
<form action="<?=$SERVER[SCRIPT_NAME]?>" method="POST">
    <textarea rows="6" cols="40" name="inputdata"></textarea>
    <input type="submit" name="btnExec" value="送信">
</form>
</body>
</html>