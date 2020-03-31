<?php
/*
Unit 7
Booleans and Comparison Operators
Elseif Statements
Switch Statement
Switch Statements: Fall through

*/

function returnSeason($month){
  switch ($month) {
    case "December":
    case "January":
    case "February":
      return "winter";
    case "March":
    case "April":
    case "May":
      return "spring";
    case "June":
    case "July":
    case "August":
      return "summer";
    case "September":
    case "October":
    case "November":
      return "fall";
    }
}


function whatRelation($percentSharedDNA) {
  if ($percentSharedDNA === 100){
   echo "identical twins";
 } elseif ($percentSharedDNA > 34){
   echo "parent and child or full siblings";
 } elseif ($percentSharedDNA > 13){
   echo "grandparent and grandchild, aunt/uncle and niece/nephew, or half siblings";
 }  elseif ($percentSharedDNA > 5) {
   echo "first cousins";
 } elseif ($percentSharedDNA > 2){
   echo "second cousins";
 } elseif ($percentSharedDNA > 0){
   echo "third cousins";
 } else {
   echo "not genetically related";
 }

}


whatRelation(100);
echo "\n\n";
whatRelation(56);
echo "\n\n";
whatRelation(18);
echo "\n\n";
whatRelation(10);
echo "\n\n";
whatRelation(3);
echo "\n\n";
whatRelation(1);

// Switch Statement
function airQuality($color) {
 switch ($color) {
   case "green": echo "good"; break;
   case "yellow": echo "moderate"; break;
   case "orange": echo "unhealthy for sensitive groups"; break;
   case "red": echo "unhealthy"; break;
   case "purple": echo "very unhealthy"; break;
   case "maroon": echo "hazardous"; break;
   default:  echo "invalid color";
 }
}

airQuality("green");
echo "\n\n";
airQuality("yellow");
echo "\n\n";
airQuality("maroon");
echo "\n\n";
airQuality("hasjgdlajshgd");
