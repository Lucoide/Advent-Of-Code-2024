//sbagliato


<!-- <?php
$safe = 0;
$unsafe = 0;

$file = 'dati.txt';

if (!file_exists($file)) {
    die("Il file $file non esiste.");
}

$lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

foreach ($lines as $line) {
    $numbers = array_map('intval', explode(' ', $line));
    
    $isSafe = true;


    for ($i = 0; $i < count($numbers) - 1; $i++) {

        $diff = abs($numbers[$i] - $numbers[$i + 1]);

        if ($diff < 1 || $diff > 3) {
            $isSafe = false;
            break; 
        }
    }

    if ($isSafe) {
        $safe++;
    } else {
        $unsafe++;
    }
}

echo "Sequenze safe: $safe\n";
echo "Sequenze unsafe: $unsafe\n";
?> -->
