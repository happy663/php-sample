<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<?php

    $data = 1234.56789;

    //data floor
    print round($data);
    print "<br>";
    
    //data floor2
    print round($data * 100) / 100;
    print "<br>";

    //data floor 100
    print floor($data / 100) * 100;
    print "<br>";

?>
</body>
</html>
