<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
    
$data = 3;

//１〜１０までのループ
for ($cnt = 1; $cnt <= 10; $cnt++) {
    print $cnt;
    if ($cnt <= 5 and $cnt <= $sata) {
        //変数値が５以下でかつ$data以下なら●マークを追加
        print "●";
    }
    if ($cnt <= 8 and $cnt <= $sata) {
        //変数値が８以上でかつ$data以下なら◯マークを追加
        print "◯";
    }
    if ($cnt >= 8 and $cnt <= 10) {
        //変数値が８〜１０の間なら▼マークを追加
        print "▼";
    }
    if (!($cnt >= 8 and $cnt <= 10)) {
        //変数値が８〜１０の間でなければ▽マークを追加
        print "▽";
    }
    print "<br>";
}

?>
</body>
</thml>