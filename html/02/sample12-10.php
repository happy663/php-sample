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
        //チェックボックス１−４のループ
        for ($num=1; $num <=4; $num++) {
             if(isset($_POST["inputdata$num"])) {
                print "$num 個目のチェックボックスはON<br>";
            } 
            else {
                print "$num 個目のチェックボックスはOFF<br>";
            }
        }
        print "<br><br>";
    }

?>
開発経験のある言語にチェックを付けて[送信]ボタンをクリックしてください。(複数選択可)
<form action="<?=$_SERVER[SCRIPT_NAME]?>" method="POST">
    <p><input type="checkbox" name="inputdata1">PHP</p>
    <p><input type="checkbox" name="inputdata2">java</p>
    <p><input type="checkbox" name="inputdata3">GGI</p>
    <p><input type="checkbox" name="inputdata4">C++</p>
    <input type="submit" name="btnExec" value="送信">
</form>
</body>
</html>
