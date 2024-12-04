<?php 
//FIRST PART


//get file content
$abominio = file_get_contents('dati.txt');

//find mul(numero,numero)
function mulFinder($file) {
    //regEx to pinpoint mul(num,num)
    preg_match_all('/mul\(\d+,\d+\)/', $file, $matches);
    
    //returns as array
    return $matches[0];
}

//get all "mul(numero,numero)" from string
$matches = mulFinder($abominio);
// var_dump($matches); //was just checking what I had
// echo '<br>'; //wanted just a bit of space lol

//add up every multiplication result
function calculateTotalMultiplication($matches) {
    $total = 0;

    foreach ($matches as $match) {
        //regEx to pinpoint numbers in each line
        if (preg_match('/mul\((\d+),(\d+)\)/', $match, $nums)) {
            $num1 = (int) $nums[1];
            $num2 = (int) $nums[2];
            $total += $num1 * $num2; //stack up results
        }
    }

    return $total;
}

//calculate final result
$finalResult = calculateTotalMultiplication($matches);

//Final result
echo "somma: $finalResult";

?>
