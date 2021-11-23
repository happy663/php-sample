<?php


// header('Access-Control-Allow-Origin: *');
// header('Content-Type: application/json; charset=utf-8');

if (!empty($_POST)) {
  $id = $_POST['id'];
  try {
    $dbhInsert = new PDO('mysql:host=mysql5.7-trial2;dbname=test', 'root', 'root');
    $dbhInsert->exec('delete from events where event_id ="' . $id . '"');
    $dbhInsert = null;
  } catch (PDOException $e) {
    echo $e;
    die();
  }
}

// $json = file_get_contents("php://input");
// $contents = json_decode($json, true);
echo "hello";
