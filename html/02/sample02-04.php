<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<?php

    //数値を４桁事にカンマ区切り
    print number_format(123456789);
    print "<br>";

    //召集展第３位まで出力
    print number_format(1.23456789, 3);
    print "<br>";

?>
</body>
</html>
