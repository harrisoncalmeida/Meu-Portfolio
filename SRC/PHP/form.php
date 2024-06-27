<?

// alterar a variavel abaixo colocando o seu email

$destinatario = "harrisonalmeidatr@gmail.com";

$nome = $_REQUEST['form-nome'];
$email = $_REQUEST['form-email'];
$mensagem = $_REQUEST['form-message'];

// monta o e-mail na variavel $body

$body = "<h2>Mensagem do Formulário de Contato</h2>";
$body .= "<p><strong>Nome:</strong> $name</p>";
$body .= "<p><strong>Email:</strong> $email</p>";
$body .= "<p><strong>Mensagem:</strong> $message</p>";

// envia o email
mail($destinatario, $assunto, $body, "From: $email\r\n");

// redireciona para a página de obrigado
header("location:obrigado.htm");


?>
