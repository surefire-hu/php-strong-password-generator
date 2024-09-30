<?php
function generaPassword($lunghezza, $usaNumeri, $usaLettere, $usaSimboli, $ripetizione) {
    $caratteri = '';
    if ($usaMinuscole) {
        $caratteri .= 'abcdefghijklmnopqrstuvwxyz';
    }
    if ($usaMaiuscole) {
        $caratteri .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    }
    if ($usaNumeri) {
        $caratteri .= '0123456789';
    }
    if ($usaSimboli) {
        $caratteri .= '!@#$%^&*()';
    }

    $password = '';
    for ($i = 0; $i < $lunghezza; $i++) {
        if ($ripetizione) {
            $password .= $caratteri[rand(0, strlen($caratteri) - 1)];
        } else {
            $password .= $caratteri[rand(0, strlen($caratteri) - 1)];
            $caratteri = str_replace($password[$i], '', $caratteri); 
        }
    }
    return $password;
}
?>