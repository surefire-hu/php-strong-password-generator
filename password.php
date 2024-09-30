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
    <script src="https://cdn.tailwindcss.com"></script>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>
<body class="bg-black flex items-center justify-center min-h-screen">
    <div class="bg-gray-200 shadow-md rounded-lg p-8 w-96 text-center animate__animated animate__rollIn">
        <h1 class="text-2xl font-bold mb-4">Password Generata:</h1>
        <p class="text-lg text-gray-800 mb-6"><?php echo htmlspecialchars($passwordGenerata); ?></p>
        <a href="index.php" class="mt-4 inline-block bg-indigo-600 text-white font-bold py-2 px-4 rounded hover:bg-indigo-700">Torna al generatore</a>
    </div>
</body>
</html>