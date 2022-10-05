<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<?php
    ini_set('display_errors', On);
    //受け取ったデータをrcv_で始める変数名に展開
extract($_REQUEST, EXTR_SKIP|EXTR_PREFIX_ALL|EXTR_REFS, "rcv");

    print "GETで送信されたデータは<br>";

    //スーパーグローバル変数で[名前]を受け取る
    print "名前→" . $rcv_username . "<br>";

    //グローバル変数で「住所」を受け取る
    print "住所→" . $rcv_useraddress . "<br>";

?>
</body>
</html>
