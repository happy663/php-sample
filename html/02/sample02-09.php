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

    //1-6 5time
    for ($i = 0; $i <= 5; $i++) {
        print rand(1, 6);
        print "<br>";
    }

?>
</body>
</html>
