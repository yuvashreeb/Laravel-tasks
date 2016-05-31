<html>
    <head>
        <title>Mail</title>
    </head>
    <body>
        <?php
        $emailTo = "";
        $subject = "email testing";
        $body = "Hello, i am testing the email";
        $headers = "From: yuvashree.b@karmanya.co.in";
        if (mail($emailTo, $subject, $body, $headers)) {
            echo "mail sent successfully";
        } else {
            echo "mail not sent";
        }
        ?>
    </body>
</html>

