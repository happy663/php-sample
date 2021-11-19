<?php
error_reporting(E_ALL);
ini_set("display_errors","Off");
$error_message = array();

$mysqli = new mysqli("localhost", "root", "root", "bbs");
$mysqli->set_charset("utf8");

if (isset($_POST["save"])) {
    $error_message = array();

    if (!strlen($_POST["body"])) {
        $error_message[] = "本文を入力してください。";
    }

    if (!count($error_message)) {
        $stmt = $mysqli->prepare("INSERT INTO post (data, title, name, body) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss",date("Y-m-d H:i:s"), $_POST["title"], $_POST["name"], $_POST["body"]);
        $stmt->execute();

    }
}

$result = $mysqli->query("SELECT * FROM post ORDER BY data DESC");

$bbs_list = array();
while ($bbs = $result->fetch_array()) {
    $bbs_list[] = $bbs;
}

require_once("smarty/Smarty.class.php");
$smarty = new Smarty();

$smarty->template_dir = "templates";
$smarty->compile_dir = "templates_c";

$smarty->assign("error_message", $error_message);
$smarty->assign("bbs_list", $bbs_list);
$smarty->display("bbs.html");
?>