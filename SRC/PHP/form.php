<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $form-name = $_POST['form-name'];
    $form-email = $_POST['form-email'];
    $form-message = $_POST['form-message'];

    $to = "harrisonalmeidatr@gmail.com";  // Substitua com seu endereço de e-mail
    $subject = "Nova mensagem do formulário de contato";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/html\r\n";

    $body = "<h2>Mensagem do Formulário de Contato</h2>";
    $body .= "<p><strong>Nome:</strong> $name</p>";
    $body .= "<p><strong>Email:</strong> $email</p>";
    $body .= "<p><strong>Mensagem:</strong> $message</p>";

    if (mail($to, $subject, $body, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Falha ao enviar a mensagem.";
    }
}
?>
