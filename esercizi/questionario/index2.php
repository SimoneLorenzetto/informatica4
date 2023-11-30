<?php
session_start();

if (!isset($_SESSION['login_attempts'])) {
    $_SESSION['login_attempts'] = 0;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    if ($password === 'info2023') {
        $_SESSION['authenticated'] = true;
    } else {
        $_SESSION['login_attempts']++;
    }
}

if (isset($_SESSION['authenticated']) && $_SESSION['authenticated']) {
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Pagina Riservata</title>
    </head>
    <body style="background-color: <?php echo isset($_POST['background_color']) ? $_POST['background_color'] : '#ffffff'; ?>;">
        <h1>Benvenuto <?php echo isset($_POST['nome']) ? htmlspecialchars($_POST['nome']) : ''; ?></h1>
        <p>Utente autenticato</p>

        <h2>Informazioni inserite:</h2>
        <ul>
            <li><strong>Nome:</strong> <?php echo isset($_POST['nome']) ? htmlspecialchars($_POST['nome']) : ''; ?></li>
            <li><strong>Cognome:</strong> <?php echo isset($_POST['cognome']) ? htmlspecialchars($_POST['cognome']) : ''; ?></li>
            <li><strong>Età:</strong> <?php echo isset($_POST['eta']) ? htmlspecialchars($_POST['eta']) : ''; ?></li>
            <li><strong>Sport preferito:</strong> <?php echo isset($_POST['sport']) ? htmlspecialchars($_POST['sport']) : ''; ?></li>
        </ul>
    </body>
    </html>
    <?php
} else {
    if ($_SESSION['login_attempts'] >= 3) {
        echo "<p>Hai superato il limite di tentativi di accesso!</p>";
    } else {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Accesso</title>
        </head>
        <body>
            <h1>Accesso</h1>
            <form method="post" action="">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required><br><br>
                
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required><br><br>
                
                <label for="cognome">Cognome:</label>
                <input type="text" id="cognome" name="cognome" required><br><br>
                
                <label for="eta">Età:</label>
                <input type="number" id="eta" name="eta" required><br><br>
                
                <label for="sport">Sport preferito:</label>
                <input type="text" id="sport" name="sport" required><br><br>

                <label for="background_color">Colore sfondo:</label>
                <input type="color" id="background_color" name="background_color"><br><br>

                <input type="submit" value="Invia">
            </form>
        </body>
        </html>
        <?php
    }
}
?>