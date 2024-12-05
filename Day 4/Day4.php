<?php

//PART ONE







// Function to read the data from the file and turn it into a matrix
function leggiDati($filename) {
    $dati = file($filename, FILE_IGNORE_NEW_LINES); // Get lines from the file
    return array_map('str_split', $dati); // Split each line into an array of chars
}

// Function to find all the XMAS occurrences in all directions
function contaXMAS($matrice) {
    $parola = "XMAS";
    $lunghezzaParola = strlen($parola);
    $conteggio = 0; // Start counting
    $righe = count($matrice); // Get the number of rows
    $colonne = count($matrice[0]); // Get the number of columns

    // Check horizontally (left to right and right to left)
    for ($i = 0; $i < $righe; $i++) {
        for ($j = 0; $j < $colonne - $lunghezzaParola + 1; $j++) {
            // Left to right
            if (substr(implode('', $matrice[$i]), $j, $lunghezzaParola) === $parola) {
                $conteggio++; // Found it
            }
            // Right to left
            if (substr(implode('', $matrice[$i]), $j, $lunghezzaParola) === strrev($parola)) {
                $conteggio++; // Found it reversed
            }
        }
    }

    // Check vertically (top to bottom and bottom to top)
    for ($j = 0; $j < $colonne; $j++) {
        for ($i = 0; $i < $righe - $lunghezzaParola + 1; $i++) {
            $verticale = '';
            for ($k = 0; $k < $lunghezzaParola; $k++) {
                $verticale .= $matrice[$i + $k][$j]; // Build the vertical word
            }
            // Top to bottom
            if ($verticale === $parola) {
                $conteggio++; // Found it
            }
            // Bottom to top
            if ($verticale === strrev($parola)) {
                $conteggio++; // Found it reversed
            }
        }
    }

    // Check diagonally (both ways)
    for ($i = 0; $i < $righe - $lunghezzaParola + 1; $i++) {
        for ($j = 0; $j < $colonne - $lunghezzaParola + 1; $j++) {
            $diagonale1 = '';
            $diagonale2 = '';
            for ($k = 0; $k < $lunghezzaParola; $k++) {
                $diagonale1 .= $matrice[$i + $k][$j + $k]; // Main diagonal
                $diagonale2 .= $matrice[$i + $k][$j + $lunghezzaParola - $k - 1]; // Reverse diagonal
            }
            // Main diagonal
            if ($diagonale1 === $parola) {
                $conteggio++; // Found it
            }
            // Reverse diagonal
            if ($diagonale2 === $parola) {
                $conteggio++; // Found it
            }
            // Main diagonal reversed
            if ($diagonale1 === strrev($parola)) {
                $conteggio++; // Found it reversed
            }
            // Reverse diagonal reversed
            if ($diagonale2 === strrev($parola)) {
                $conteggio++; // Found it reversed
            }
        }
    }

    return $conteggio; // Return total count
}

// Run the program
$filename = 'dati.txt'; // File to read
$matrice = leggiDati($filename); // Read the data into a matrix
$risultato = contaXMAS($matrice); // Find how many times XMAS appears

echo "Yo, XMAS shows up $risultato times in the puzzle.\n"; // Print the result

?>
