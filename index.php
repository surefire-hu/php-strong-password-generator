<?php
session_start();

include 'functions.php';

if (isset($_GET['lunghezza'])) {
    $lunghezza = intval($_GET['lunghezza']);
    $usaNumeri = isset($_GET['usaNumeri']);
    $usaMaiuscole = isset($_GET['usaMaiuscole']);
    $usaMinuscole = isset($_GET['usaMinuscole']);
    $usaSimboli = isset($_GET['usaSimboli']);
    $ripetizione = isset($_GET['ripetizione']);

    $passwordGenerata = generaPassword($lunghezza, $usaNumeri, $usaMaiuscole, $usaMinuscole, $usaSimboli, $ripetizione);
    
    $_SESSION['passwordGenerata'] = $passwordGenerata; 
    header('Location: password.php'); 
    exit(); 
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Generatore di Password</title>
</head>
<body>
    <h1>Generatore di Password Sicure</h1>
    <form method="GET" action="">
        <label for="lunghezza">Lunghezza della password:</label>
        <input type="number" id="lunghezza" name="lunghezza" min="1" required>
        
        <label><input type="checkbox" name="usaMaiuscole"> Maiuscole</label>
        <label><input type="checkbox" name="usaMinuscole"> Minuscole</label>
        <label><input type="checkbox" name="usaNumeri"> Numeri</label>
        <label><input type="checkbox" name="usaSimboli"> Simboli</label>
        <label><input type="checkbox" name="ripetizione"> Ripetizione caratteri</label>
        
        <button type="submit">Genera Password</button>
    </form>
</body>
</html>