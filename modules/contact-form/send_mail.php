<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $secretKey = "6LcguVsrAAAAAEJ_h175Wces3TMxcn78t1mUoAjQ";
    $recaptchaResponse = $_POST['g-recaptcha-response'];

    // Verifica reCAPTCHA
    $verifyResponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $secretKey . "&response=" . $recaptchaResponse);
    $responseData = json_decode($verifyResponse);

    if (!$responseData->success) {
        echo "Errore: verifica reCAPTCHA fallita. Per favore riprova.";
        exit;
    }
    
    $nome_cognome = htmlspecialchars($_POST['nome_cognome']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $telefono = htmlspecialchars($_POST['telefono']);
    $messaggio = htmlspecialchars($_POST['messaggio']);
    $privacy = isset($_POST['privacy']);

    if ($privacy && !empty($nome_cognome) && !empty($email) && !empty($telefono) && !empty($messaggio)) {
        $to = 'info@ostetricasilviabuzzoni.it';
        $subject = 'Richiesta Informazioni da sito '.$_SERVER['HTTP_HOST'];
        $message = "Nome e Cognome: $nome_cognome\n";
        $message .= "E-mail: $email\n";
        $message .= "Telefono: $telefono\n";
        $message .= "Messaggio: $messaggio\n";
        $headers = 'From: ' . $email . "\r\n" .
                   'Reply-To: ' . $email . "\r\n" .
                   'X-Mailer: PHP/' . phpversion();

        if (mail($to, $subject, $message, $headers)) {
            echo "Email inviata con successo.";
        } else {
            echo "Errore nell'invio dell'email.";
        }
    } else {
        echo "Errore: tutti i campi sono obbligatori e la privacy deve essere accettata.";
    }
} else {
    echo "Metodo di richiesta non valido.";
}
?>
