// PARTE DUE <br>
<?php

//Function to check if reports are safe or not
function isSafeReport($report) {
    $levels = explode(" ", $report);
    $n = count($levels);

    //Booleans needed to check if the order is increasing or decreasing
    $increasing = true;
    $decreasing = true;

    //Checking differences between numbers
    for ($i = 1; $i < $n; $i++) {
        $diff = abs($levels[$i] - $levels[$i - 1]);

        //Check to see if difference is between 1 and 3
        if ($diff < 1 || $diff > 3) {
            return false;
        }

        //Check of inc or dec sequence
        if ($levels[$i] < $levels[$i - 1]) {
            $increasing = false;
        } elseif ($levels[$i] > $levels[$i - 1]) {
            $decreasing = false;
        }
    }

    //If not inc or dec
    return $increasing || $decreasing;
}

//Function for one level removal to make a report become safe
function isSafeReportWithDamper($report) {
    $levels = explode(" ", $report);
    $n = count($levels);

    //If already safe, skip
    if (isSafeReport($report)) {
        return true;
    }

    //Testing every single report by removing a single level trying with every single level report by report
    for ($i = 0; $i < $n; $i++) {
        $modifiedReport = array_merge(array_slice($levels, 0, $i), array_slice($levels, $i + 1));  //Removes $i element
        $modifiedReportStr = implode(" ", $modifiedReport);

        //If modified report is safe, then true
        if (isSafeReport($modifiedReportStr)) {
            return true;
        }
    }

    //If no change makes it safe, then false
    return false;
}

//Read dati row by row
$filePath = 'dati.txt';  //file path, self explanatory
$reports = file($filePath, FILE_IGNORE_NEW_LINES);  //flag to ignore blank lines

//step in case something goes wrong with file reading
if ($reports === false) {
    die("errore apertura file\n");
}

//counting safe reports
$safeCount = 0;
foreach ($reports as $report) {
    if (isSafeReportWithDamper($report)) {
        $safeCount++;
    }
}

//print safe records number
echo "report safe: " . $safeCount . "\n";




//Everything else in the other files is either a test or a wrong attempt

?>

