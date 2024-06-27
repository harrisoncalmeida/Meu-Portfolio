<?php
// Verifica se o método de requisição é POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados do formulário
    $name = $_POST['form-name'];
    $email = $_POST['form-email'];
    $message = $_POST['form-message'];

    // Define o endereço de e-mail de destino
    $to = "harrisonalmeidatr@gmail.com";  // Substitua com seu endereço de e-mail

    // Define o assunto do e-mail
    $subject = "Nova mensagem do formulário de contato";

    // Define os cabeçalhos do e-mail
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/html\r\n";

    // Cria o corpo do e-mail em formato HTML
    $body = "<h2>Mensagem do Formulário de Contato</h2>";
    $body .= "<p><strong>Nome:</strong> $name</p>";
    $body .= "<p><strong>Email:</strong> $email</p>";
    $body .= "<p><strong>Mensagem:</strong> $message</p>";

    // Envia o e-mail usando a função mail()
    if (mail($to, $subject, $body, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Falha ao enviar a mensagem.";
    }
}
?>
