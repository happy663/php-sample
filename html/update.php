<?php



if (!empty($_POST)) {


  $eventID = $_POST['eventID'];
  $contents = $_POST['contents'];
  $id = $_SESSION['id'];
  $start_dt = $_POST['start_dt'];
  $end_dt = $_POST['end_dt'];
  $place = $_POST['place'];



  // $sql = "insert into events (contents,start_datetime,end_datetime,place,user_id)
  //   VALUES('" . $contents . "', '" . $start_dt . "','" . $end_dt . "','" . $place . "','" . $id . "')";

  $sql = "UPDATE events SET contents='" . $contents . "',start_datetime='" . $start_dt . "',end_datetime='" . $end_dt . "',place='" . $place . "' WHERE event_id='" . $eventID . "'";

  try {
    $dbhInsert = new PDO('mysql:host=mysql5.7-trial2;dbname=test', 'root', 'root');
    $dbhInsert->exec($sql);
    $dbhInsert = null;
    echo "$sql";
    echo "ok";
    // echo $_POST['contents'];
  } catch (PDOException $e) {
    echo $e;
    die();
  }
  $dbhInsert = null;
} else if (!empty($_POST['remove'])) {


  try {
    $dbhInsert = new PDO('mysql:host=mysql5.7-trial2;dbname=test', 'root', 'root');
    $dbhInsert->exec('delete from test where text="third"');
    $dbhInsert = null;
  } catch (PDOException $e) {
    echo $e;
    die();
  }
}
