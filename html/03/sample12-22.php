<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php

    if(isset($_POST[btnExec])){
        print $_POST[inputdata] . "<br><br>";
        $rcvdata = mb_convert_kana($_POST[inputdata], "a","utf-8");
        print intval($rcvdata) . "<br><br>";
    }

?>
テキストボックスに全画数字を入力して[送信]ボタンをクリックしてください。
<form action = "<?=$_SEREVER[SCRIPT_NAMEMAM]?>" method="POST">
    <input size = "40" type = "text" name = "inputdata">
    <input type = "submit" name = "btnExec" value = "送信">
<form>
</body>
</html>