<<!DOCTYPE html>
<html>
<head>
    <title>Form di Registrazione</title>
</head>
<body>
    <h2>Registrazione Utente</h2>
    <form action="action-register.php" method="get">
        
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="cognome">Cognome:</label>
        <input type="text" id="cognome" name="cognome" required><br><br>

        <label for="eta">Età:</label>
        <input type="number" id="eta" name="eta" required><br><br>

        <label for="sport">Sport Preferito:</label>
        <input type="text" id="sport" name="sport" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <label for="coloreSfondo">Colore di sfondo:</label>
        <input type="color" id="coloreSfondo" name="coloreSfondo"><br><br>


        <input type="submit" value="Registrati">
    </form>
</body>
</html>
