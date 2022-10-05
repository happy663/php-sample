<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php

//１〜１０までのループ
for ($cnt = 1; $cnt <= 10; $cnt++) {
    print$cnt;
    print ','; 
}
    print "<br>";

//１０から１まで2ずつ減らすループ
for ($cnt = 10; $cnt >= 1; $cnt = $cnt - 2) {
    print $cnt;
    print ","; 
}

?>
</body>
</thml>
