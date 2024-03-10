<html>
    <head>
        <meta charset="utf-8" />
    </head>
    <body>
<p>    <?php
        mb_language("Japanese");
        mb_internal_encoding("UTF-8");

        $to = 'ondcare@humanrelightcare.com';
        $belong = $_POST['belong'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $subject =  $_POST['subject'];
	    $body = $_POST['body'];


        if(mb_send_mail($to, $belong,$name,$email,$tel,$subject,$body))
        {
            echo "お問い合わせ内容は無事に送信されました";
        }
        else
        {
            echo "お問い合わせ内容の送信が行えませんでした。再度ご確認ください";
        }
    ?>
   </p>
   </body>
</html>