<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <?php

    $data = 1234.56789;

    //data round
    print round($data);
    print "<br>";

    //data round2
    print round($data * 100) / 100;
    print "<br>";

    //data round2
    print round($data * 10000) / 10000;
    print "<br>";

    //data round2
    print round($data / 100) * 100;
    print "<br>";

    ?>
</body>

</html>