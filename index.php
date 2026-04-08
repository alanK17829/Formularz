<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
    

    </header>
    <div class="fundament">
        <h1>formularz konaktowy</h1>
    </div>
    <main>
        <section>
            <h1>Formularz kontaktowy</h1>
            <br>
            <form action="skrypt.php" method="post">
                <label for="name">Imię:</label>
                <input class="guzior" type="text" id="name" name="name" required>
                <br><br>
                <label for="surname">Nazwisko:</label>
                <input class="guzior" type="text" id="surname" name="surname" required>
                <br><br>
                <label for="email">Email:</label>
                <input class="guzior" type="email" id="email" name="email" required>
                <br><br>
                <label for="topic">Temat:</label>
                <input class="guzior" type="text" id="topic" name="topic" required>
                <br><br>
                <label for="message">Wiadomość:</label>
                <textarea class="guzior" id="message" name="message" required></textarea>
                <br><br>          
                <button class="guzior2" type="submit">Wyślij</button>
            </form>
            <br>
            
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