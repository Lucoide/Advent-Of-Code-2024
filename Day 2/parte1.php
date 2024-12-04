<!-- <?php


function isSafeReport($report) {
    $levels = explode(" ", $report);
    $n = count($levels);

    $increasing = true;
    $decreasing = true;

    for ($i = 1; $i < $n; $i++) {
        $diff = abs($levels[$i] - $levels[$i - 1]);

        if ($diff < 1 || $diff > 3) {
            return false;
        }

        if ($levels[$i] < $levels[$i - 1]) {
            $increasing = false;
        } elseif ($levels[$i] > $levels[$i - 1]) {
            $decreasing = false;
        }
    }

    return $increasing || $decreasing;
}

$file_path = 'dati.txt';  
$reports = file($file_path, FILE_IGNORE_NEW_LINES); 

if ($reports === false) {
    die("errore apertura file\n");
}

$safe_count = 0;
foreach ($reports as $report) {
    if (isSafeReport($report)) {
        $safe_count++;
    }
}

echo "Il numero di report sicuri è: " . $safe_count . "\n";

?> -->