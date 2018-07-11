<?php


$access_token = 'fe/bI8lGY/X8JIfaW7DdwDeTc9oVwu858/m1PxZEBjk4/qdWlbMmiSaOYkKzpVYoiSanceBq+TqQ8OEB54kUZRcxAJlhetguCTQEK3+3HSgNayZAuBiWCOl/zzPXwInOTmExgubm6eGRU11L6Yx7JAdB04t89/1O/w1cDnyilFU==';

$userId = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

