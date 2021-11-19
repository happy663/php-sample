<?php
session_start();
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
    <script src="../common/js/bootstrap.js"></script>
    <link rel="stylesheet" href="../common/css/bootstrap.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="bootstrap-datepicker/css/bootstrap-datepicker.min.css">
    <script type="text/javascript" src="bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="bootstrap-datepicker/locales/bootstrap-datepicker.ja.min.js"></script>
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">内容</th>
                <th scope="col">開始日時</th>
                <th scope="col">終了日時</th>
                <th scope="col">場所</th>
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
    <form action="home.php" method="post">
        <dl>
            <dt>内容</dt>
            <dd>
                <input type="text" name="contents" />
            </dd>
            <dt>開始日時</dt>
            <dd>
                <input type="text" name="start_dt" />
            </dd>
            <dt>終了日時</dt>
            <dd>
                <input type="text" name="end_dt" />
            </dd>
            <dt>場所</dt>
            <dd>
                <input type="text" name="place" />
            </dd>
        </dl>
        <input type="submit" class=" btn btn-primary" value="登録" />
    </form>

    <form action="home.php" method="post" id="formRemove">
        <input type="submit" class="btn" name="remove" value="削除" style="background-color: #ff3366" />
    </form>

    <button class="btn btn-primary" id="event">event</button>





</body>

<h1><? echo $_SESSION['id']; ?></h1>

</html>

<?php

if (!empty($_POST['contents'])) {

    $contents = $_POST['contents'];
    $id = $_SESSION['id'];


    $sql = "insert into events (contents,start_datetime,end_datetime,place,user_id)
    VALUES('" . $contents . "', '2019-05-02 12:48:35','97-12-24 08:12:13','nagoya','" . $id . "')";

    try {
        $dbhInsert = new PDO('mysql:host=mysql5.7-trial2;dbname=test', 'root', 'root');
        $dbhInsert->exec($sql);
        $dbhInsert = null;
        echo $_POST['contents'];
    } catch (PDOException $e) {
        echo $e;
        die();
    }
    $dbhInsert = null;
    echo $_POST['add'];
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