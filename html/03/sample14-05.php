<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  <?php

    if (isset($_SESSION[setdata3])) {
      print $_SESSION[setdata3] . "<br>";
    }
    else{
      print "セッション変数は使われていません！<br>";
    }

    unset($_SESSION[setdata3]);

    if (isset($_SESSION[setdata3])) {
      print $_SESSION[setdata3] . "<br>";
    }
    else{
      print "セッション変数は使われていません！<br>";
    }
  ?>
</body>
</html>