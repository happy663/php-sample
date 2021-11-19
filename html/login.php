<?php
session_start();
$mail = $_POST['mail'];
$dsn = "mysql:host=mysql5.7-trial2; dbname=test; charset=utf8";
$username = "root";
$password = "root";
try {
    $dbh = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $msg = $e->getMessage();
}

$sql = "SELECT * FROM users WHERE mail = :mail";
$stmt = $dbh->prepare($sql);
$stmt->bindValue(':mail', $mail);
$stmt->execute();
$member = $stmt->fetch();
//指定したハッシュがパスワードにマッチしているかチェック
if (password_verify($_POST['pass'], $member['password'])) {
    //DBのユーザー情報をセッションに保存

    $_SESSION['id'] = $member['id'];
    $_SESSION['name'] = $member['name'];
    session_write_close();
    header("Location: http://localhost:8000/home.php");
    exit;
} else {
    $msg = 'メールアドレスもしくはパスワードが間違っています。';
    $link = '<a href="login.php">戻る</a>';
}
?>


<h1><? echo $_SESSION['id']; ?></h1>
<h1><?php echo $msg; ?></h1>
<?php echo $link; ?>