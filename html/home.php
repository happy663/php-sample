<?php

session_start();

?>



<?php

if (!empty($_POST['contents'])) {

  $contents = $_POST['contents'];
  $id = $_SESSION['id'];
  $start_dt = $_POST['start_dt'];
  $end_dt = $_POST['end_dt'];
  $place = $_POST['place'];


  $sql = "insert into events (contents,start_datetime,end_datetime,place,user_id)
    VALUES('" . $contents . "', '" . $start_dt . "','" . $end_dt . "','" . $place . "','" . $id . "')";

  try {
    $dbhInsert = new PDO('mysql:host=mysql5.7-trial2;dbname=test', 'root', 'root');
    $dbhInsert->exec($sql);
    $dbhInsert = null;
    // echo $_POST['contents'];
  } catch (PDOException $e) {
    echo $e;
    die();
  }
  $dbhInsert = null;

  $_POST['add'] = 'sousousou';
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
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <title>Document</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="index.js"></script>
  <script src="https://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript" language="javascript"></script>

</head>

<body>
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand">カレンダー</a>
    <form class="form-inline">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
        <?php
        echo $_SESSION['name'];
        echo "さん";
        ?>
      </button>
    </form>
  </nav>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">イベント番号</th>
        <th scope="col">内容</th>
        <th scope="col">開始日時</th>
        <th scope="col">終了日時</th>
        <th scope="col">場所</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody id="test">
      <tr>
        <th scope="row">1</th>
        <td>Mark
          <button class="btn delete" style="background-color: #ff3366; margin-left: 12px;" id="1">削除</button>
        </td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob
          <button class="btn delete" style="background-color: #ff3366; margin-left: 12px;" id="1">削除</button>
        </td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Thornton</td>
        <td>Larry the Bird</td>
        <td>@twitter</td>
        <td>@mdo</td>
      </tr>
    </tbody>
  </table>
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <form action="home.php" method="post" id="the-form">
          <dl>
            <dt>内容</dt>
            <dd>
              <input type="text" name="contents" class="col-form-label" />
            </dd>
            <dt>開始日時</dt>
            <dd>
              <input type="datetime-local" name="start_dt" value="2021-11-16T20:40" class="col-form-label"><!-- <input type="text" name="start_dt" /> -->
            </dd>
            <dt>終了日時</dt>
            <dd>
              <input type="datetime-local" name="end_dt" value="2021-11-16T20:40" class="col-form-label">
            </dd>
            <dt>場所</dt>
            <dd>
              <input type="text" name="place" class="col-form-label" />
            </dd>
          </dl>
          <button class="btn btn-primary">登録</button>
        </form>
      </div>
      <div class="col-sm">
        <form action="update.php" method="post" id="the-update">
          <dl>
            <dt>イベント番号</dt>
            <input type="text" name="eventNumber" class="col-form-label" id="eventNumber" />
            <dt>内容</dt>
            <dd>
              <input type="text" name="contents" class="col-form-label" />
            </dd>
            <dt>開始日時</dt>
            <dd>
              <input type="datetime-local" name="start_dt" value="2021-11-16T20:40" class="col-form-label"><!-- <input type="text" name="start_dt" /> -->
            </dd>
            <dt>終了日時</dt>
            <dd>
              <input type="datetime-local" name="end_dt" value="2021-11-16T20:40" class="col-form-label">
            </dd>
            <dt>場所</dt>
            <dd>
              <input type="text" name="place" class="col-form-label" />
            </dd>
          </dl>
          <button class="btn btn-primary">編集</button>
        </form>
      </div>
    </div>
  </div>





</body>

<!-- <h1><? echo $_SESSION['id']; ?></h1> -->

</html>