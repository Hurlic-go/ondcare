<html>
    <head>
        <meta charset="utf-8" />
    </head>
    <body>
    <?php
        mb_language("Japanese");
        mb_internal_encoding("UTF-8");

        $to = $_POST['to'];
        $title = $_POST['title'];
        $message = $_POST['message'];
        $headers = "From: ondcare@humanrelightcare.com";

        if(mb_send_mail($to, $title, $message, headers))
        {
            echo "メールは無事に送信されました";
        }
        else
        {
            echo "メール送信が行えませんでした。再度ご確認ください";
        }
    ?>
    </body>
</html>