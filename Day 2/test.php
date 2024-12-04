<?php

// $matrice = [
//     [7, 6, 4, 2, 1],
//     [1, 2, 7, 8, 9],
//     [9, 7, 6, 2, 1],
//     [1, 3, 2, 4, 5],
//     [8, 6, 4, 4, 1],
//     [1, 3, 6, 7, 9]
// ];

// $safe = 0;
// $unsafe = 0;

// foreach ($matrice as $arr) {
//     $isSafe = true; // Supponiamo che l'array sia safe

//     for ($i = 0; $i < count($arr) - 1; $i++) {
//         if ($arr[$i] > $arr[$i + 1]) {
//             // decrescente
//             if (!($arr[$i] - $arr[$i + 1] == 1 || $arr[$i] - $arr[$i + 1] == 2 || $arr[$i] - $arr[$i + 1] == 3)) {
//                 $isSafe = false; // Non è safe
//                 break; // Interrompi il ciclo
//             }
//         } else {
//             // crescente
//             if (!($arr[$i + 1] - $arr[$i] == 1 || $arr[$i + 1] - $arr[$i] == 2 || $arr[$i + 1] - $arr[$i] == 3)) {
//                 $isSafe = false; // Non è safe
//                 break; // Interrompi il ciclo
//             }
//         }
//     }

//     if ($isSafe) {
//         $safe++;
//     } else {
//         $unsafe++;
//     }
// }

// foreach ($matrice as $array) {
//     $isSafe = true; // Supponiamo che l'array sia inizialmente safe

//     for ($i = 0; $i < count($array) - 1; $i++) {
//         $diff = abs($array[$i] - $array[$i + 1]);

//         if ($diff != 1 && $diff != 2 && $diff != 3) {
//             $isSafe = false; // Se un confronto non soddisfa la condizione, l'array è unsafe
//             break; // Esci subito dal ciclo interno
//         }
//     }

//     if ($isSafe) {
//         $safe++;
//     } else {
//         $unsafe++;
//     }
// }

// echo "Safe: $safe <br>";
// echo "Unsafe: $unsafe\n";


// echo count($arr);


// for( $i = 0; $i < count($arr) - 1; $i++) {

//     if($arr[$i] +- $arr[$i + 1]  )

// };






// safe = 0;
// unsafe = 0;



// prendo array

// ciclo array
// if arr[i] > arr[i + 1]
//  è crescente, faccio:
//   if(arr[i + 1] - arr[i] == 1 || arr[i + 1] - arr[i] == 2 || arr[i + 1] - arr[i] == 3)
//     safe++;
// altrimenti
//  è decrescente, faccio:
//   if(arr[i] - arr[i + 1] == 1 || arr[i] - arr[i + 1] == 2 || arr[i] - arr[i + 1] == 3)
//    unsafe++;

//    quello che mi manca è:
//    estrarre la matrice da un file di date, ma quello lo devo cercare per forza come prima col day1,
//    ciclare la matrice array per array,
//    far fare quel procedimento di cui sopra all'array 




