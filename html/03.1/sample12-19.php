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

        if (strlen($_POST[inputdata]) > 30) {
            print "入力されたホームページアドレスが長すぎます!<br><br>";
        }

        if (! preg_match("/^http:\/\//" , $_POST[inputdata])) {
            print "ホームページアドレスはhttp://から入力してください!<br>";
        }

        print $_POST[inputdata] . "<br><br>";

    }

?>
テキストボックスに値を入力して[送信]ボタンをクリックしてください。
<form action="<?=$SERVER[SCRIPT_NAME]?>" method="POST">
    <input size="50" type="text" name="inputdata" value="http://">
    <input type="submit" name="btnExec" value="送信">
</form>
</body>
</html>