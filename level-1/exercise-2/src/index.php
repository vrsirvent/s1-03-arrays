<?php
// Variable an indexed array
$fruits = array("Apple", "Banana", "Orange", "Pear", "Kiwi", "Strawberry");

echo "\nOriginal array size: " . count($fruits) . "\n"; // Original size
foreach ($fruits as $index => $fruit) {
    echo "Index $index --> Fruit name: $fruit\n";
}
echo "\n";

unset($fruits[3]); // Remove the element (Ex.: index 3)
echo "Updated fruit list after removing index 3.\n\n";

$fruits = array_values($fruits); // Reorganize the indexes to avoid gaps

echo "New array size: " . count($fruits) . "\n"; // The new size
foreach ($fruits as $index => $fruit) {
    echo "Index $index --> Fruit name: $fruit\n";
}

?>

