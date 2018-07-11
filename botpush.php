<?php



require "vendor/autoload.php";

$access_token = 'fe/bI8lGY/X8JIfaW7DdwDeTc9oVwu858/m1PxZEBjk4/qdWlbMmiSaOYkKzpVYoiSanceBq+TqQ8OEB54kUZRcxAJlhetguCTQEK3+3HSgNayZAuBiWCOl/zzPXwInOTmExgubm6eGRU11L6Yx7JAdB04t89/1O/w1cDnyilFU=
';

$channelSecret = 'd2baecda1872f394e2780bdb7e85599f
';

$pushID = 'Uce4bcee1688decbbfc116fea8982bb15';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







