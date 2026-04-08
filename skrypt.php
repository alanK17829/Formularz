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
        header('Location: index.php?success=1');
        exit;
    } else {
        // Przekieruj z błędami, ale dla uproszczenia, przekieruj do index.php z błędami w sesji lub parametrach
        // Aby uprościć, przekieruj do index.php bez parametrów, ale użytkownik może nie zobaczyć błędów
        // Lepiej użyć sesji dla błędów
        session_start();
        $_SESSION['errors'] = $errors;
        $_SESSION['form_data'] = $_POST;
        header('Location: index.php');
        exit;
    }
} else {
    header('Location: index.php');
    exit;
}
?>