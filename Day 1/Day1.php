<?php

//Read file with the 2
$dati = file_get_contents('dati.txt');

//Divide in rows
$righe = explode("\n", $dati);

//Arrays representing each column
$colonna1 = [];
$colonna2 = [];

//numbers row by row
foreach ($righe as $riga) {
    //Skip empty rows
    if (trim($riga) == '') continue;

    //Divide the row based off tab or space (spaces in this case)
    $valori = preg_split('/\s+/', $riga);  // this function uses regExes, it's just things I found to put into works what I had in mind for this excercise. \s+ catches every type of space or tabs, apparently.

    //Then if the row contains equals or more than 2 rows
    if (count($valori) >= 2) {
        //It adds the respective numbers at position 0 and 1 to the respective columns, and converts them into integers.
        $colonna1[] = (int) $valori[0];
        $colonna2[] = (int) $valori[1];
    }
    /*this all forEach goes on and on again 'till "$valori" is emptied out and there's no more numbers to add to the 2 arrays $colonna1[] and $colonna2[], which is why I'm gonna add another method I had to think about in case I wanted to make the whole thing more perfoming in case I was working on an actual up and had to deal with more data. I THINK it's gonna be better, but I'm not entirely sure of it.
    
    That code is gonna be in the "test2.php" file. The "test.php" was a file I created just to check if wanted I wanted to do with the check was right or not with a way smaller amount of numbers and way smaller numbers, too.

    */
    
    
}

//Sorting out the arrays 'cause I need specifically to confront the arrays from smallest to biggest, so in ascendent order.
sort($colonna1);
sort($colonna2);

// Visualizza i risultati ordinati
// Ecco i due array ordinati
// echo "Colonna 1 ordinata:\n";
// echo "Quantità numeri Colonna 1: ";
// echo count($colonna1);
// print_r($colonna1);



/*

Just stuff I was doing to check if things was alright or not. 

*/



// echo "\nColonna 2 ordinata:\n";
// echo "<br>Quantità numeri Colonna 2: ";
// echo count($colonna2);
// print_r($colonna2);


//the code below is pretty self explanatory, I basically just create a variable for my final number (somma, which means "sum" in italian) and checks which is the higher number between the 2 and then does the subtraction, and then video prints the final number.
$somma = 0;

for ($i = 0; $i < count($colonna1); $i++) {

    if($colonna1[$i] < $colonna2[$i]) {
        $somma += $colonna2[$i] - $colonna1[$i];
    } else {
        $somma += $colonna1[$i] - $colonna2[$i];
    }
}

echo $somma;
echo '<br>';
// echo '1938424'; <------- thing I just needed for a comparison to check if the numbers were the same with a test or not



/* random things */
    // $differenza = $colonna1[$i] - $colonna2[$i];  // Sottrazione riga per riga
    // $somma_delle_sottrazioni += $differenza;  // Aggiungi il risultato alla variabile




//I'm still a baby dev, some things I had to search up 'cause I'm new to all this, especially PHP in itself lmfao, so please good Lord up above in the heavens have mercy on poor small me.



$similarityScore = 0;

for ($i = 0; $i < count($colonna1); $i++) {
    //Get the current number in colonna1
    $num1 = $colonna1[$i];

    //Count how many times $num1 appears in colonna2
    $count = 0; //Initialize the counter for the occurrences

    for ($j = 0; $j < count($colonna2); $j++) {

        if ($colonna2[$j] == $num1) {
            
            $count++; //Increment the counter by each time the number has found a similarity
        }
    }
    
    //Multiply the current number by the count of its occurrences in colonna2
    $similarityScore += $num1 * $count;
}

echo '<br>';
echo "Similarity score: " . $similarityScore;



?>
