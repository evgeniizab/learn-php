<?php
/*
Booleans and Comparison Operators
Identical and Not Identical Operators
*/

function agreeOrDisagree($st1,$st2){
  if ($st1 === $st2) {
    return "You agree!";
  } else { return "You disagree!";}
}

echo agreeOrDisagree("left", "right");
echo "\n\n";
echo agreeOrDisagree("ok", "ok");
echo "\n\n";


function checkRenewalMonth($month) {
  $current_month = date("F");
  if ($month !== $current_month) {
    $month = $current_month;
   return "Welcome!";
  } else { return "Time to renew"; }
}

$current_month = date("F");
echo checkRenewalMonth($current_month);

echo "\n\n";
echo checkRenewalMonth("July");
