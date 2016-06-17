<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $to = "contato@rafaelbriet.com.br";
        $subject = "Contato";

        if (empty($_POST['name'])) {
            echo "Você precisa disser qual é o seu nome. <br>";
        } else {
            $name = htmlspecialchars($_POST['name']);
        }

        if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            echo "Você precisa fornecer um email de válido. <br> ";
        } else {
            $email = htmlspecialchars($_POST['email']);
        }

        if (empty($_POST['message'])) {
            echo "Qual a sua mensagem? <br>";
        } else {
            $message = htmlspecialchars($_POST['message']);
        }

        $headers = "From: $name <$email>";

        // Send the Mail
        if (mail($to, $subject, $message, $headers)) {
            echo "Mensagem enviada com sucesso.";
        } else {
            echo "A mensagem não foi enviada. Tente novamente mais tarde.";
        }
    }
