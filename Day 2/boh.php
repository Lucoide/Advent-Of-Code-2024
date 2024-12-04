//sbagliato


<!-- <?php
// Variabili di conteggio
$safe = 0;
$unsafe = 0;

// Percorso del file
$file = 'dati.txt';

// Verifica se il file esiste
if (!file_exists($file)) {
    die("Il file $file non esiste.");
}

// Leggi il file come array di righe
$lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// Analizza ogni riga separatamente
foreach ($lines as $line) {
    // Dividi la riga in numeri separati da spazio
    $numbers = array_map('intval', explode(' ', $line));
    
    $isSafe = true; // Supponiamo che la sequenza sia "safe"

    // Verifica la sequenza dei numeri per questa riga
    for ($i = 0; $i < count($numbers) - 1; $i++) {
        // Calcolare la differenza tra i numeri consecutivi
        $diff = abs($numbers[$i] - $numbers[$i + 1]);

        // Verifica che la differenza sia tra 1 e 3 (escluso)
        if ($diff < 1 || $diff > 3) {
            $isSafe = false; // Non è safe
            break; // Interrompi il ciclo
        }
    }

    // Incrementa il contatore in base al risultato per questa riga
    if ($isSafe) {
        $safe++;
    } else {
        $unsafe++;
    }
}

// Risultato finale
echo "Sequenze safe: $safe\n";
echo "Sequenze unsafe: $unsafe\n";
?> -->
