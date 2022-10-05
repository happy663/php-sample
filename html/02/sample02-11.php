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

    //5img
    for ($cnt = 1; $cnt <= 5; $cnt++) {
        //1-9 
        $imagefile = rand(1, 9);
        //make name form rand
        $imagefile = "image" . $imagefile . ".gif";
        //html s img tag
        print "<IMG src='images/$imagefile' hspace ='2'>";
    }

?>
</body>
</html>
