<?php

    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];


    $email_from = "trafego@eaglesx.com";

    $email_subject = "Novo Pedido de Orçamento";

    $email_body = "Nome: $name. \n".
                   "Email: $mailFrom.\n".
                    "Mensagem: $message. \n";

                    $to = "crafael.wesley@gmail.com";

                    $headers = "From: $email_from \r\n";

                    $headers .= "Reply-To: $mailFrom \r\n";

                    mail($to,$email_subject,$email_body,$headers);

                    header("Location: index.html");

?>