<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <?php

    $data = 1234.56789;

    //data ceil
    print ceil($data);
    print "<br>";

    //data ceil2
    print ceil($data * 100) / 100;
    print "<br>";

    //data ceil 100
    print ceil($data / 100) * 100;
    print "<br>";

    ?>
</body>

</html>