<!-- <?php

// Funzione che verifica se una sequenza è sicura
function isSafeReport($report) {
    $levels = explode(" ", $report);
    $n = count($levels);

    // Controlla se i numeri sono in ordine crescente o decrescente
    $increasing = true;
    $decreasing = true;

    // Controlla le differenze tra i numeri consecutivi
    for ($i = 1; $i < $n; $i++) {
        $diff = abs($levels[$i] - $levels[$i - 1]);

        // Se la differenza non è tra 1 e 3, il report è unsafe
        if ($diff < 1 || $diff > 3) {
            return false;
        }

        // Controlla se la sequenza è crescente o decrescente
        if ($levels[$i] < $levels[$i - 1]) {
            $increasing = false;
        } elseif ($levels[$i] > $levels[$i - 1]) {
            $decreasing = false;
        }
    }

    // Se la sequenza è né crescente né decrescente, è unsafe
    return $increasing || $decreasing;
}

// Leggi il file reports.txt riga per riga
$file_path = 'dati.txt';  // Modifica con il percorso corretto del file
$reports = file($file_path, FILE_IGNORE_NEW_LINES);  // FILE_IGNORE_NEW_LINES per evitare linee vuote

if ($reports === false) {
    die("errore apertura file\n");
}

// Conta i report sicuri
$safe_count = 0;
foreach ($reports as $report) {
    if (isSafeReport($report)) {
        $safe_count++;
    }
}

// Stampa il numero di report sicuri
echo "Il numero di report sicuri è: " . $safe_count . "\n";

?> -->