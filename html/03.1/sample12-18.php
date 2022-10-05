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
        //そのまま
        print $_POST[inputdata] . "<br><br>";
        
        print stripcslashes($POST[inputdata]) . "<br><br>";

    }

?>
テキストボックスに値を入力して[送信]ボタンをクリックしてください。
<form action="<?=$SERVER[SCRIPT_NAME]?>" method="POST">
    <input size="40" type="text" name="inputdata">
    <input type="submit" name="btnExec" value="送信">
</form>
</body>
</html>