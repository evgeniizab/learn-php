<?php
/*
Unit 7
Booleans and Comparison Operators
Booleans and Comparison Operators
Ternary Operator

*/



function chooseCheckoutLane($items){
  if ($items <= 12){
    return "express lane";
  } else {
    return "regular lane";
  }
}

function canIVote($num) {
  if ($num >= 18) {
    return "yes";
  } else {return "no";}
}

function ternaryCheckout($items){
  return $items <= 12 ? "express lane" : "regular lane";
}

function ternaryVote($num) {
  return $num >= 18 ? "yes" : "no";
}

echo ternaryCheckout(1);
echo "\n\n";
echo ternaryCheckout(13);
echo "\n\n";
echo ternaryVote(19);
echo "\n\n";
echo ternaryVote(13);

function truthyOrFalsy($test) {
  return $test == TRUE ? "True" : "False";
}

echo truthyOrFalsy(TRUE);
echo "\n\n";
echo truthyOrFalsy(FALSE);
echo "\n\n";
echo truthyOrFalsy("cat");
echo "\n\n";
echo truthyOrFalsy("");
echo "\n\n";
echo truthyOrFalsy("-10290192.871");
echo "\n\n";
echo truthyOrFalsy("0");
echo "\n\n";
