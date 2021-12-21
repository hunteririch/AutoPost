<?php
  

function send_LINE($msg){
 $access_token = '4SJq6zxz+rD20ox0LNQZ9MPsI8Jb8p50Cqs/6k7LofnwuPkkTHWgoz0IPOQybk6PVXcyBxCBoCoUAbIX/LqNO+cUJtpUd0UcLzCj7GyIlYzJCOLCe+XObcjDJX1Gi1zTdAw5kvnSvhQMNUhRgJdbJwdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => '1993681',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
