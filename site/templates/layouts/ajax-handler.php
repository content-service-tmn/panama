<?php
namespace Processwire;
if ($config->ajax) {
    $m = $mail->new();
    $m->to($page->email_for_callback);
    $m->from('bot@contentservice.agency')
        ->fromName("Content-service")
        ->subject('Сообщение с сайта');
    $messageBody = "Новое сообщение с сайта: \r\n";
    if (isset($_REQUEST["data"])) {
        $data = $_REQUEST["data"];
        if (isset($data["name"]) && isset($data["phone"])) {
            $name = $sanitizer->text($data["name"]);
            $phone = $sanitizer->text($data["phone"]);
            $msg = $sanitizer->text($data["message"]);
            $message = "Имя: {$name} , телефон: {$phone}\r\nСообщение:\r\n{$msg}";
            $m->body($messageBody . $message);
        }
    }
    if ($m->body != ""){
        if ($m->send() != 0) {
            echo "success";
        } else {
            echo "warning";
        }
    }
} else {
    $session->redirect("/");
}
