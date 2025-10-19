<?php

// Function
// function containsCharacter($words, $character) { // sin refactorizar
function containsCharacter(array $words, string $character): bool { // Refactorizar
    foreach ($words as $word) { // Iterate through each word in the array
        $found = false; // Variable
        $index = 0; // Initialize
        while (!$found && $index < strlen($word)) { // Loop through each character in the word
            if (strtolower($word[$index]) === strtolower($character)) {
                $found = true; // If character is found
            }
            $index++;
        }

        if (!$found) { // If the character was not found in the word
            return false;
        }
    }

    return true; // If all words contain the character
}

// Variables
$wordList = ["hola", "Php", "Html"];
$character1 = "h";
$character2 = "l";

// Function call
$result1 = containsCharacter($wordList, $character1);
$result2 = containsCharacter($wordList, $character2);

// Output
echo "\nAll words contain the character '$character1'? " . ($result1 ? "Yes" : "No") . "\n";
echo "All words contain the character '$character2'? " . ($result2 ? "Yes" : "No") . "\n";

// Ouput - un altra opció, codi Rubén
// foreach($personalInfo as $key => $value) {
//        echo $key." ".$value.PHP_EOL;
// }

?>

