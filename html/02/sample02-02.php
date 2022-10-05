<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <?php

    $results = 0; //初期化

    //足し算
    $results += 5;   //0+5
    print $results;
    print "<br>";

    //引き算 
    $results -= 3;   //5-3
    print $results;
    print "<br>";

    //掛け算
    $results *= 10;  //2*10
    print $results;
    print "<br>";

    //割り算
    $results /= 2;  //20/2
    print $results;
    print "<br>";

    //余り
    $results %= 4;   //10mod4
    print $results;
    print "<br>";

    ?>
</body>

</html>