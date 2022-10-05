<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<?php

    //例1：１０回の加算ループ
    $data = 0;
    for ($cnt = 1; $cnt <= 10; $cnt++) {
        print ++$data;
        print ",";
    }
    print "<br>";

    //例1：１０回の加算ループ
    $data = 0;
    for ($cnt = 1; $cnt <= 10; $cnt++) {
        print $data++;
        print ",";
    }
    print "<br>";

    //例1：１０回の減算ループ
    $data = 10;
    for ($cnt = 1; $cnt <= 10; $cnt++) {
        print $data--;
        print ",";
    }
    print "<br>";

?>
</body>
</html>
