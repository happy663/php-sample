<?php
    if (isset($_GET[id])) {
        if ($_POST[id] == "0") {
            unset($_SESSION[sescart]);
        }
        else {
            if (!empty($_SESSION[sescart])) {
                $cart = $_SESSION[sescart];
            }
            $cart .= (strlen($cart) == 0 ? "" : ",") . $_GET[id];
            $_SESSION[sescart] = $cart;
            print "今回カートに入れた商品IDは　" .$_GET[id] . "<br><br>";
        }
    }
?>
<!DOCTYPE html> 
<html lang = "ja"> 
<head> 
    <meta charset = "UTF-8"> 
    <title> </title>
</head> 
<body>  
<table border="1">
    <tr>
        <th>商品ID</th>
        <th>商品名</th>
        <th><br></th>
    </tr>
    <tr>
        <td>1<td>
        <td>冷蔵庫 AB-12345（H）</td>
        <td>
            <a href="<?=$_SERVER[SCRIPT_NAME]. "?id=1"?>">カートに入れる</a>


</body>
</html>




