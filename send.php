<?php


    $recepient = "franch@lozhki.biz";
    $sitename = "lozhki.biz";

    $name = $_GET["name"];
    $phone = $_GET["phone"];
    $email = $_GET["email"];
    $town = $_GET["town"];
    $name_select = $_GET["select"];
    $message = "Имя: $name \nТелефон: $phone \n email: $email \n Город: $town \n франшиза: $name_select";

    $pagetitle = "Новая заявка с сайта \"$sitename\"";
    mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\" \n От: $recepient");

 ?>
