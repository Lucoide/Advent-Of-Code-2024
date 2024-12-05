<?php 
//NOW WITH PART 2 INTEGRATED


//get file content
$abominio = file_get_contents('dati.txt');

//find mul(numero,numero)
function mulFinder($file) {
    //regEx to pinpoint mul(num,num) -> with part 2, to find instructions too
    preg_match_all('/(mul\(\d{1,3},\d{1,3}\))|(do\(\))|(don\'t\(\))/', $file, $matches);
    
    //returns as array
    return $matches[0];
}

//get all "mul(numero,numero)" from string
$matches = mulFinder($abominio);
// var_dump($matches); //was just checking what I had
// echo '<br>'; //wanted just a bit of space lol

//add up every multiplication result -> with part 2, this becomes a search for the instructions too
function calculateTotalMultiplication($instructions) {
    $do = true; //instruction variable
    $total = 0;

    foreach ($instructions as $instruction) {
        if($instruction === 'do()') {
            $do = true; //if last instruction before mul is do, execute multiplication
        } else if ($instruction === "don't()") {
            $do = false; //if not, don't do it
        } else if (preg_match('/mul\((\d{1,3}),(\d{1,3})\)/', $instruction, $nums)) { //find the mul

            if($do) {
            $num1 = (int) $nums[1];
            $num2 = (int) $nums[2];
            $total += $num1 * $num2; //stack up results
            }
        }
        
        //regEx to pinpoint numbers in each line
        
    }

    return $total;
}

//calculate final result
$finalResult = calculateTotalMultiplication($matches);

//Final result
echo "somma: $finalResult";

?>
