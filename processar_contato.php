<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    // Validação simples
    if (empty($nome) || empty($email) || empty($mensagem)) {
        echo "Por favor, preencha todos os campos!";
    } else {
        // Enviar a mensagem por e-mail (exemplo simples)
        $to = "livianpsousa@dominio.com";  // Substitua pelo seu e-mail
        $subject = "Mensagem de Contato";
        $message = "Nome: $nome\nE-mail: $email\nMensagem:\n$mensagem";
        $headers = "From: $email";

        if (mail($to, $subject, $message, $headers)) {
            echo "Obrigado pelo seu contato! Responderemos em breve.";
        } else {
            echo "Ocorreu um erro ao enviar sua mensagem. Tente novamente mais tarde.";
        }
    }
}
?>
