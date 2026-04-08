<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $surname = trim($_POST['surname']);
    $email = trim($_POST['email']);
    $topic = trim($_POST['topic']);
    $message = trim($_POST['message']);

    // Walidacja
    $errors = [];
    if (empty($name)) $errors[] = "Imię jest wymagane.";
    if (empty($surname)) $errors[] = "Nazwisko jest wymagane.";
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Nieprawidłowy adres email.";
    if (empty($topic)) $errors[] = "Temat jest wymagany.";
    if (empty($message)) $errors[] = "Wiadomość jest wymagana.";

    if (empty($errors)) {
        // Zapisz do pliku
        $line = "$name|$surname|$email|$topic|$message|" . date('Y-m-d H:i:s') . "\n";
        file_put_contents('dane.txt', $line, FILE_APPEND);
        header('Location: index.html?success=1');
        exit;
    } else {
        // Przekieruj z błędami w URL
        $error_string = implode('|', $errors);
        header('Location: index.html?errors=' . urlencode($error_string));
        exit;
    }
} else {
    header('Location: index.html');
    exit;
}
?>