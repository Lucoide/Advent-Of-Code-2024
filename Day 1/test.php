<?php


$colonna1 = [3, 4, 2, 1, 3, 3];
$colonna2 = [4, 3, 5, 3, 9, 3];

$somma1 = 0;
$somma2 = 0;

sort($colonna1);
sort($colonna2);

//loop on a single array but which counts for both of 'em since they have the same amount of indexes, so I'll just use the index of one loop for both arrays
for ($i = 0; $i < count($colonna1); $i++) {
//then in this if I'll check which is the higher number and then just do a subtraction and add the result to the variable "somma" (sum) and that's gonna be my final answer, Gerry, I wanna light it up.
    if($colonna1[$i] < $colonna2[$i]) {
        $somma1 += $colonna2[$i] - $colonna1[$i];
    } else {
        $somma1 += $colonna1[$i] - $colonna2[$i];
        // $somma1 += $colonna1[$i] - $colonna2[$i];
    }
}


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

echo "Similarity score: " . $similarity_score;

// echo $somma1;
// echo '<br>';
// echo $somma2;




for( $i = 0; $i < count($colonna1); $i++) {
    
}