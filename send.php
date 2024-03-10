<html>
    <head>
        <meta charset="utf-8" />
    </head>
    <body>
<p>
   <?php

mb_language("Japanese");

mb_internal_encoding("UTF-8");

if($_POST) {
  $to = 'ondcare@humanrelightcare.com';

  $subject = 'お問い合わせがありました';

  // \nは、改行の意味。
  $message = "お問い合わせがありました。\n";
  $message .= "\n";
  $message .= "入力された内容は以下の通りです。\n";
  $message .= "---\n";
  $message .= "\n";
  $message .= "お名前：\n";
  $message .= $_POST["name"]; // name属性がnameの内容が入ります
  $message .= "\n";
  $message .= "メールアドレス:\n";
  $message .= $_POST["email"]; // name属性がemailの内容が入ります
  $message .= "\n";
  $message .= "お問い合わせ本文:\n";
  $message .= $_POST["message"]; // name属性がmessageの内容が入ります

  //↓最後に、設定した内容でメールを送る命令です
  if(mb_send_mail($to,$subject,$message)) {
    echo "メールが送信されました";
  } else {
    echo "メールの送信に失敗しました";
  }
} else {
  echo "HTMLからのPOST送信受信に失敗しました";
}
   </p>
   </body>
</html>