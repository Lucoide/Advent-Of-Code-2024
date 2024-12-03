<?php

//Opens file in read-only mode.
$file = fopen('dati.txt', 'r');


$colonna1 = [];
$colonna2 = [];

//Read file row by row
while ($riga = fgets($file)) {
    //Remove empty spaces
    $riga = trim($riga);
    
    //Skip empty rows
    if (empty($riga)) continue;
    
    //Again dividing by spaces or tabs.
    $valori = preg_split('/\s+/', $riga);  //Same as Day 1 file, go check there for full explanation.
    
    //Same as above
    if (count($valori) >= 2) {
        //Same as above
        $colonna1[] = (int) $valori[0];
        $colonna2[] = (int) $valori[1];
    }
    //Go check in Day 1 file to understand why this file even exists
}

//Close file
fclose($file);


sort($colonna1);
sort($colonna2);

// Visualizza i risultati ordinati (opzionale)
// echo "Colonna 1 ordinata:\n";
// print_r($colonna1);

// echo "\nColonna 2 ordinata:\n";
// print_r($colonna2);


$somma = 0;

for ($i = 0; $i < count($colonna1); $i++) {

    if ($colonna1[$i] < $colonna2[$i]) {

        $somma += $colonna2[$i] - $colonna1[$i];

    } else {

        $somma += $colonna1[$i] - $colonna2[$i];

    }

}

echo $somma;

?>
