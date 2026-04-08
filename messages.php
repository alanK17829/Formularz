<?php
// Odczytaj wiadomości
$messages = [];
if (file_exists('dane.txt')) {
    $lines = file('dane.txt', FILE_IGNORE_NEW_LINES);
    foreach ($lines as $line) {
        $parts = explode('|', $line);
        if (count($parts) == 6) {
            $messages[] = [
                'name' => $parts[0],
                'surname' => $parts[1],
                'email' => $parts[2],
                'topic' => $parts[3],
                'message' => $parts[4],
                'timestamp' => $parts[5]
            ];
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zapisane wiadomości</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
    

    </header>
    <div class="fundament">
        <h1>Zapisane wiadomości</h1>
    </div>
    <main>
        <section>
            <table>
                <tr>
                    <th>Imię</th>
                    <th>Nazwisko</th>
                    <th>Email</th>
                    <th>Temat</th>
                    <th>Wiadomość</th>
                    <th>Data</th>
                </tr>
                <?php foreach ($messages as $msg): ?>
                <tr>
                    <td><?php echo htmlspecialchars($msg['name']); ?></td>
                    <td><?php echo htmlspecialchars($msg['surname']); ?></td>
                    <td><?php echo htmlspecialchars($msg['email']); ?></td>
                    <td><?php echo htmlspecialchars($msg['topic']); ?></td>
                    <td><?php echo htmlspecialchars($msg['message']); ?></td>
                    <td><?php echo htmlspecialchars($msg['timestamp']); ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
            <br>
            <a href="index.html">Powrót do formularza</a>
        </section>
    </main>
    <footer>
        <div class="footer-content">
            <div class="contact-info">
                <h3>Kontakt</h3>
                <p>ul. Sigmowska 67/69<br>Warszawa 67-420</p>
                <p>Tel: +48 123 456 789</p>
                <p>Email: kontakt@example.com</p>
            </div>
            <div class="social-links">
                <h3>Śledź nas</h3>
                <ul>
                    <li><a href="#"><img src="https://z-m-static.xx.fbcdn.net/rsrc.php/yt/r/DUiOg0mJTjz.webp" alt="Facebook">Facebook</a></li>
                    <li><a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/9/95/Instagram_logo_2022.svg" alt="Instagram">Instagram</a></li>
                </ul>
            </div>
        </div>
    </footer>
    
</body>
</html>