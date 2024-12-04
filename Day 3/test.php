<?php 

$data = "!mul(417,528)why();what()?how()from()who()where() ~mul(215,18){} ])/from()*do(),)* ##select()mul(89,59):*select(805,600)*mul(709,138)";

//Find occurrences "mul(num,num)"
function mulFinder($file) {
    //regEx to pinpoint mul(num,num)
    preg_match_all('/mul\(\d+,\d+\)/', $file, $matches);
    
    //returns as array
    return $matches[0];
}

//get all "mul(numero,numero)" from string
$matches = mulFinder($data);
var_dump($matches); //was just checking what I had
echo '<br>'; //wanted just a bit of space lol

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
