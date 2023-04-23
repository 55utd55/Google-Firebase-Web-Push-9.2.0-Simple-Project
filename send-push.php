<?php


$filetoken = file_get_contents("tokens.txt");
$tokensarray = explode("#",$filetoken);


$fcmUrl = 'https://fcm.googleapis.com/fcm/send';
$notification = [
    'title'        => "Test",
    'body'         => "Test push notification",
    'icon'         => 'default',
    'sound'        => 'default'
];
$extraNotificationData = ["message" => $notification, "moredata" => ""];
$fcmNotification = [
    'registration_ids' => $tokensarray,
    'notification'     => $notification,
    'data'             => $extraNotificationData,
];
$headers = [
    'Authorization: key=##LEGACY_SERVER_KEY##',
    'Content-Type: application/json'
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $fcmUrl);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fcmNotification));
$result = curl_exec($ch);
curl_close($ch);