<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $to = "contato@rafaelbriet.com.br";
        $subject = "Contato";

        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        if (empty($name)) {
            $nameError = "Você precisa disser seu nome.";
        }

        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = "Você precisa fornecer um email de válido.";
        } else {
            $validEmail = $email;
        }

        if (empty($message)) {
            $messageError = "Sobre o que você quer conversar?";
        }

        $headers = "From: $name <$email>";

        if ($name && $validEmail && $message) {
            if (mail($to, $subject, $message, $headers)) {
                echo "Mensagem enviada com sucesso.";
            } else {
                echo "A mensagem não foi enviada. Tente novamente mais tarde.";
            }
        }
    }
