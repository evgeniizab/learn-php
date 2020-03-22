<?php
/*
Codecdemy PHP
Unit 4

*/

<?php
namespace Codecademy;

$first = "Welcome to the magical world of built-in functions.";

$second = 82137012983;

//Write your code below:
echo gettype($first);
echo gettype($second);
echo var_dump($second);
echo var_dump($first);


$string = ".pu ti peeK .taerg gniod er'uoY";
echo strrev($string);
echo strtolower("SOON, tHiS WILL Look NoRmAL.");
echo str_repeat("\nThere's no place like home.\n",3);


$essay_one = "I really enjoyed the book. I thought the characters were really interesting. The plot of the novel was really engaging. I really felt the characters' emotions. They were really well-written. I really wish the ending had been different though.";

$essay_two = "Obviously this is a really good book. You obviously would not have made us read it if it wasn't. I felt like the ending was too obvious though. It was so obvious who did it right away. I think the thing with the light was obviously a metaphor for life. It would have been better if the characters were less obvious about their secrets.";

// Write your code below:
echo substr_count($essay_one,'really');
echo substr_count($essay_two,'obvious');

/*Number Functions
The function should return the same result for two arguments no matter what order they’re passed into the function.
*/

function calculateDistance($a, $b){
  return abs($b - $a);
}
echo calculateDistance(-1,4);
echo calculateDistance(4, -1);
echo calculateDistance(3, 7);

/*
Your function should calculate a new total with an 18% tip added and return that value rounded to the nearest integer.
*/

function calculateTip($cost) {
  return round($cost+($cost/100*18));
}

echo calculateTip(12.45);

//Generating Random Numbers
echo $max = getrandmax();
echo "\n".rand()."\n";
echo rand(1,52);


$a = 29;
$b = "You did it!";
$c = STR_PAD_BOTH;
$d = "*~*";

// Write your code below:
 echo str_pad ($b,$a,$d,$c);

 function convertToShout($str)
{
  return strtoupper($str) . "!";
}

echo convertToShout("woah there, buddy");
echo convertToShout("i just don't know");
echo convertToShout("oh, ok, that's fine");
echo convertToShout("it's nice to meet you");
function tipGenerously($cost){
  return ceil($cost+($cost*0.2));
}

echo tipGenerously(100.00);

function calculateCircleArea($diameter){
  return pi() * ($diameter/2)**2;
}
echo calculateCircleArea(25);

$string_var = "Check it out";
echo strtoupper($string_var) . "!\n";

echo ceil(8.873);
echo "\n";

echo pi();
echo "\n";

echo str_pad("PHP", 30, "*^*-", STR_PAD_BOTH);
echo "\n";

echo getrandmax();
echo "\n";

echo rand();
echo "\n";

echo rand(1, 52);
echo "\n";

echo abs(-1287);
echo "\n";

echo round(8723.999);
echo "\n";

echo substr_count($string_var, " ");
echo "\n";

echo strrev("\n.pu ti peeK .taerg gniod er'uoY");

echo strtolower("SOON, tHiS WILL Look NoRmAL.\n");

echo str_repeat("There's no place like home.\n", 3);

echo gettype($string_var);
echo "\n";
echo var_dump($string_var);
