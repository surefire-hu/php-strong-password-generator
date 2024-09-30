<?php
session_start(); 

$passwordGenerata = $_SESSION['passwordGenerata'];
unset($_SESSION['passwordGenerata']); 
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Password Generata</title>
</head>
<body>
    <h1>Password Generata:</h1>
    <p><?php echo htmlspecialchars($passwordGenerata); ?></p>
    <a href="index.php">Torna al generatore</a>
</body>
</html>