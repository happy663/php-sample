<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    foreach (glob('./*') as $file) {
        if (is_file($file)) {
            // echo htmlspecialchars($file);
            print "<a href=\"$file\">$file</a>";
            print "<br>";
        }
    }
    ?>
</body>

</html>