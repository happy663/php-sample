<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<?php

    //乱数初期化
    srand(microtime() * 1000000);

    //10 word
    for ($i = 1; $i <= 10; $i++) {
        $password ="";
        //1-9 5time
        for ($j = 1; $j <= 5; $j++) {
            $password = $password . rand(0, 9);
        }
        //A-Z 5time
        for ($j = 1; $j <= 5; $j++) {
            $password = $password . chr(rand(65, 90));
        }
        print $password;
        print "<br>";
    }

?>
</body>
</html>
