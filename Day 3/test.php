<?php 


$data = "!mul(417,528)why();what()?how()from()who()where() ~mul(215,18){} ])/from()*do(),)* ##select()mul(89,59):*select(805,600)*mul(709,138)";

//



// Funzione per trovare le occorrenze di mul(numero,numero)
function mulFinder($file) {
    // RegEx corretta per catturare mul(numero,numero)
    preg_match_all('/mul\(\d+,\d+\)/', $file, $matches);
    
    // Restituisce le occorrenze in formato di stringa separata da nuove righe
    return implode("\n", $matches[0]);
}

// Echo del risultato e uso di nl2br per visualizzare correttamente le nuove righe su una pagina web
// echo mulFinder($abominio);
$newAbominio = mulFinder($data);


// Usa explode per trasformare la stringa in un array separato da \n
$lines = explode("\n", $newAbominio);

    // preg_match('/mul\((\d+),(\d+)\)/', $string, $matches);

    $resultPre = 0;
    $resultFinal = 0;


    foreach ($lines as $line) {
        // echo $line . "<br>";  // Ogni occorrenza va a capo usando <br> in HTML
        if(isset($matches[1]) && isset($matches[2])) {
            $num1 = (int) $matches[1];
            $num2 = (int) $matches[2];
        
            $resultPre = $num1 * $num2;
            //non facendo += non aggiungo risultati e calcolo solo il primo

        }
        //questo di conseguenza non serve a niente
        $resultFinal += $resultPre;
    }


?>