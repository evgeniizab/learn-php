<?php
/*
Unit 7
Booleans and Comparison Operators
If Statements
*/
$learner_one = ["is_correct"=>FALSE, "box"=>["shape"=>"none", "color"=>"none"]];

$learner_two = ["is_correct"=>TRUE, "box"=>["shape"=>"none", "color"=>"none"]];


function markAnswer($is_answer_correct, &$box){
  if ($is_answer_correct) {
    $box["shape"] = "checkmark";
    $box["color"] = "green";
  } else {
    $box["shape"] = "x";
    $box["color"] = "red";
  }
}

markAnswer($learner_one["is_correct"], $learner_one["box"]);
markAnswer($learner_two["is_correct"], $learner_two["box"]);

print_r($learner_one["box"]);
print_r($learner_two["box"]);


function chooseCheckoutLane($num){
  if ($num <= 12) {
    return "express lane";
  } else {return "regular lane";}
}

function canIVote($num) {
  if ($num >= 18) {
    return "yes";
  } else {return "no";}
}

echo chooseCheckoutLane(1);
echo "\n\n";
echo chooseCheckoutLane(13);
echo "\n\n";
echo canIVote(19);
echo "\n\n";
echo canIVote(13);
