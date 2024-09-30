<?php
include 'functions.php';

if (isset($_GET['lunghezza'])) {
    $lunghezza = intval($_GET['lunghezza']);
    $passwordGenerata = generaPassword($lunghezza);
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>PHP Strong Password Generator</title>
</head>
<body>
    <h1>Generatore di Password Molto Sicure v.1.0.0</h1>
    <form method="GET" action="">
        <label for="lunghezza">Inserisci la lunghezza desiderata di caratteri per la password:</label>
        <input type="number" id="lunghezza" name="lunghezza" min="8" required>
        <button type="submit">Genera Password</button>
    </form>

    <?php if (isset($passwordGenerata)): ?>
        <h2>Password Generata:</h2>
        <p><?php echo htmlspecialchars($passwordGenerata); ?>
    </p>
    <?php endif; ?>
</body>
</html>