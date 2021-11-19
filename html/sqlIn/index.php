<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if ($_SESSION['login_id']) : ?>
        <p>ログイン中: <?= $_SESSION['login_id'] ?></p>
    <?php endif; ?>

    <form method="post" action="login.php">
        <input type="text" name="login_id">
        <input type="password" name="password">
        <input type="submit" value="送信">
    </form>

</body>

</html>