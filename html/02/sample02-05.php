<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<?php

    $data1 = 128;
    $data2 = -256;

    //data1 abs
    print abs($data1);
    print "<br>";
    
    //data2 abs
    print abs($data2);
    print "<br>";
    
    //always -
    print abs($data1) * -1;
    print "<br>";
    print abs($data2) * -1;
    print "<br>";

?>
</body>
</html>
