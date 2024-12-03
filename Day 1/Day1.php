<?php

// Leggi il contenuto del file
$dati = file_get_contents('dati.txt');

// Suddividi il contenuto in righe
$righe = explode("\n", $dati);

// Crea due array per le due colonne
$colonna1 = [];
$colonna2 = [];

// Estrai i dati per ogni riga
foreach ($righe as $riga) {
    // Salta le righe vuote
    if (trim($riga) == '') continue;

    // Suddividi la riga in base al tabulatore (o spazio)
    $valori = preg_split('/\s+/', $riga);  // \s+ cattura qualsiasi tipo di spazio/tabulazione

    // Se la riga contiene almeno due numeri
    if (count($valori) >= 2) {
        // Aggiungi i numeri alle colonne, convertendoli in interi
        $colonna1[] = (int) $valori[0];
        $colonna2[] = (int) $valori[1];
    }
}

// Ordina le colonne separatamente
sort($colonna1);
sort($colonna2);

// Visualizza i risultati ordinati
// Ecco i due array ordinati
// echo "Colonna 1 ordinata:\n";
// echo "Quantità numeri Colonna 1: ";
// echo count($colonna1);
// print_r($colonna1);

// echo "\nColonna 2 ordinata:\n";
// echo "<br>Quantità numeri Colonna 2: ";
// echo count($colonna2);
// print_r($colonna2);

$somma = 0;

for ($i = 0; $i < count($colonna1); $i++) {

    if($colonna1[$i] < $colonna2[$i]) {
        $somma += $colonna2[$i] - $colonna1[$i];
    } else {
        $somma += $colonna1[$i] - $colonna2[$i];
    }
}

echo $somma;

    // $differenza = $colonna1[$i] - $colonna2[$i];  // Sottrazione riga per riga
    // $somma_delle_sottrazioni += $differenza;  // Aggiungi il risultato alla variabile








?>
