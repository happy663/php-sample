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
        extract($_REQUEST, EXTR_SKIP|EXTR_PREFIX_ALL|EXTR_REFS, "rcv");
        $num = 1;
        foreach ($rcv_inputdata as $data) {
            print "$num 個目のテキストボックス→";
            print $data . "<br>";
            $num++;
        }
        print "<br><br>";
    }

?>
テキストボックスに値を入力して[送信]ボタンをクリックしてください。(複数選択可)
<form action="<?=$_SERVER[SCRIPT_NAME]?>" method="POST">
    <p><input size="40" type="text" name="inputdata[]"></p>
    <p><input size="40" type="text" name="inputdata[]"></p>
    <p><input size="40" type="text" name="inputdata[]"></p>
    <p><input size="40" type="text" name="inputdata[]"></p>
    <input type="submit" name="btnExec" value="送信">
</form>
</body>
</html>
