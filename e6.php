<?php

/*
Unit 5
PHP Arrays
Ordered Arrays
*/

//Adding and Changing Elements
$change_me = [3, 6, 9];

// Write your code below:
$change_me[] = "4";
$change_me[] = 5;
$change_me[3]  = "tadpole";
$change_me[1]  = "tadpole";

print_r($change_me);


//More Array Methods: Pushing and Popping
$stack = ["wild success", "failure", "struggle"];
// Write your code below:

array_push($stack, "blocker","impediment");

array_pop($stack);
array_pop($stack);
array_pop($stack);
array_pop($stack);


//Shifting and Unshifting
$record_holders = [];
// Write your code below:
array_unshift($record_holders, "Tim Montgomery", "Maurice Greene", "Donovan Bailey", "Leroy Burrell", "Carl Lewis");
array_shift($record_holders);
array_unshift($record_holders, "Justin Gatlin", "Asafa Powell");
array_shift($record_holders,);
array_unshift($record_holders, "Usain Bolt");

//Nested Arrays
$treasure_hunt = ["garbage", "cat", 99, ["soda can", 8, ":)", "sludge", ["stuff", "lint", ["GOLD!"], "cave", "bat", "scorpion"], "rock"], "glitter", "moonlight", 2.11];
// Write your code below:
echo $treasure_hunt[3][4][2][0];


//Review

// Using array() to construct an array:
$prime_numbers = array(2, 3, 5, 7, 11, 13, 17);

// Using short array syntax:
$animals = ["dog", "cat", "turtle", "cow"];

// Printing with print_r():
print_r($prime_numbers);

echo "\n\n";

// Printing with echo and implode()
echo implode(", ", $animals);

// Adding an element with square brackets:
$prime_numbers[] = 19;

// Accessing an array element:
$favorite_animal = $animals[0];
echo "\nMy favorite animal: " . $favorite_animal;

// Reassigning an element:
$animals[1] = "tiger";

// Using array_pop():
echo "\nBefore pop: " . implode(", ", $animals);
array_pop($animals);
echo "\nAfter pop: " . implode(", ", $animals);

// Using array_push():
echo "\nBefore push: " . implode(", ", $prime_numbers);
array_push($prime_numbers, 23, 29, 31, 37, 41);
echo "\nAfter push: " . implode(", ", $prime_numbers);

//Using array_shift():
echo "\nBefore shift: " . implode(", ", $animals);
array_shift($animals);
echo "\nAfter shift: " . implode(", ", $animals);

//Using array_unshift():
echo "\nBefore unshift: " . implode(", ", $animals);
array_unshift($animals, "horse", "zebra", "lizard");
echo "\nAfter unshift: " . implode(", ", $animals);

//Using chained operations with nested arrays:
$treasure_hunt = ["garbage", "cat", 99, ["soda can", 8, ":)", "sludge", ["stuff", "lint", ["GOLD!"], "cave", "bat", "scorpion"], "rock"], "glitter", "moonlight", 2.11];

echo "\nWe found " . $treasure_hunt[3][4][2][0];
