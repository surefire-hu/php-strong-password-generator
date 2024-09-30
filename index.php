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
    <script src="https://cdn.tailwindcss.com"></script>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>
<body class="bg-black flex items-center justify-center min-h-screen">
    <div class="bg-gray-200 shadow-md rounded-lg p-8 w-96 animate__animated animate__flip faster">
        <h1 class="text-2xl font-bold text-center mb-6">Generatore di Password Sicure</h1>
        <form method="GET" action="">
            <label for="lunghezza" class="block text-sm font-medium text-gray-700">Lunghezza della password:</label>
            <input type="number" id="lunghezza" name="lunghezza" min="1" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-indigo-500 focus:border-indigo-500 p-2">
            <label><input type="checkbox" name="usaMaiuscole" class="form-checkbox h-3 w-3 text-indigo-600"> Maiuscole</label>
            <label><input type="checkbox" name="usaMinuscole" class="form-checkbox h-3 w-3 text-indigo-600"> Minuscole</label>
            <label><input type="checkbox" name="usaNumeri" class="form-checkbox h-3 w-3 text-indigo-600"> Numeri</label>
            <label><input type="checkbox" name="usaSimboli" class="form-checkbox h-3 w-3 text-indigo-600"> Simboli</label>
            <label><input type="checkbox" name="ripetizione" class="form-checkbox h-3 w-3 text-indigo-600"> Ripetizione caratteri</label>
            
            <button type="submit" class="mt-6 w-full bg-indigo-600 text-white font-bold py-2 rounded hover:bg-indigo-700">Genera Password</button>
        </form>
    </div>
</body>
</html>