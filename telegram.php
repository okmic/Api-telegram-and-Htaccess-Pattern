<?php

$data = json_decode(file_get_contents('php://input'), true);

$token = "TOKEN";
$chat_id = "CHAT-ID";

foreach($data as $key => $value) {
  $txt .= "<b>".$key.": "."</b> ".$value."%0A";
  };
  
  $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
  
  if ($sendToTelegram) {
    echo "200";
  } else {
    echo "400";
  }
  ?>