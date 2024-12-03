<?php


$colonna1 = [1, 2, 3, 4, 5];  
$colonna2 = [6, 7, 8, 9, 10]; 

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


echo $somma1;
echo '<br>';
echo $somma2;