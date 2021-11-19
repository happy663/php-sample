<?php
session_start();
// Origin null is not allowed by Access-Control-Allow-Origin.とかのエラー回避の為、ヘッダー付与
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');

$id = $_SESSION['id'];

try {
    $dbh = new PDO('mysql:host=mysql5.7-trial2;dbname=test', 'root', 'root');

    $eventList = array();
    foreach ($dbh->query('select * from events where user_id ="' . $id . '"') as $row) {

        $event = [
            'eventID' => [
                $row['event_id']
            ],
            'contents' => [
                $row['contents'],
            ],
            'startDateTime' => [
                $row['start_datetime'],
            ],
            'endDateTime' => [
                $row['end_datetime'],
            ],
            'place' => [
                $row['place'],
            ]
        ];

        array_push($eventList, $event);
    }
    $dbh = null;

    $array = [
        'event' => [
            '品川',
            '五反田',
            '三軒茶屋',
            '四谷'
        ],
        'kanagawa' => [
            '相模原',
            '湘南',
            '鎌倉'
        ],
        'saitama' => [
            '浦和',
            '小手指',
            '飯能'
        ]
    ];

    // $event = json_encode($event, JSON_UNESCAPED_UNICODE);
    // echo $event;
    $eventList = json_encode($eventList, JSON_UNESCAPED_UNICODE);
    echo $eventList;
    // $array = json_encode($array, JSON_UNESCAPED_UNICODE);
    // echo $array;
} catch (PDOException $e) {
    echo $e;
    die();
}
