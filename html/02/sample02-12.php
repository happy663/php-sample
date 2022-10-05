<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<?php

    //バナーの画像ファイル名とリンク先を配列に設定
    $banner[1][0] = "http://gihyo.co.jp/index.html";
    $banner[1][1] = "gihyo.gif";
    $banner[2][0] = "http://www.apache.org/";
    $banner[2][1] = "asf_logo_wide.gif";
    $banner[3][0] = "http://www.php.net/";
    $banner[3][1] = "php.gif";
    $banner[4][0] = "http://www.mysql.com/";
    $banner[4][1] = "mysql_100x52-64.gif";

    //乱数初期化
    srand(microtime() * 1000000);

    //1-4 rand
    $data = rand(1,4);
    //make html
    $html = "<A href='" . $banner[$data][0] . "'>" .
                "<IMG src='images/" . $banner[$data][1] . "'></A>";

    //HTML
    print $html;

?>
</body>
</html>
