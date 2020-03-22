<?php

/*
Unit 5
PHP Arrays
Associative Arrays
*/


$php_array = array("language" => "PHP",
                   "creator" => "Rasmus Lerdorf",
                    "year_created" => 1995,
                   "filename_extensions" => [".php", ".phtml", ".php3", ".php4", ".php5", ".php7", ".phps", ".php-s", ".pht", ".phar"]);

$php_short =["language" => "PHP",
                   "creator" => "Rasmus Lerdorf",
                    "year_created" => 1995,
                   "filename_extensions" => [".php", ".phtml", ".php3", ".php4", ".php5", ".php7", ".phps", ".php-s", ".pht", ".phar"]]

                   $september_hits = [
                     "The Sixth Sense"=>22896967,
                     "Stigmata" => 18309666,
                     "Blue Streak" => 19208806,
                     "Double Jeopardy" =>  23162542,


                   ];

                   echo implode(" ", $september_hits);
                   print_r($september_hits);


                   $assignment_one = ["Alex"=> 87, "Kenny"=> 91, "Natalia"=> 91, "Lily"=> 67, "Dan"=> 81, "Kat"=> 77, "Sara" => 65];

                   $assignment_two = ["Alex"=> 91, "Kenny"=> 99, "Natalia"=> 100, "Lily"=> 61, "Dan"=> 88, "Kat"=> 90];

                   $assignment_three = ["Alex"=> 78, "Kenny"=> 92, "Natalia"=> 94, "Lily"=> 79, "Dan"=> 73, "Sara" => 61];

                   $student_name = "Alex";
                   // Write your code below:
                   $assignment_two["Sara"] = 65;
                   $assignment_three["Kat"] = 97;

                   $dans_grades = [$assignment_one["Dan"],$assignment_two["Dan"],$assignment_three["Dan"]];

                   echo $assignment_two[$student_name];

                   $my_car = [
                     "oil" => "black and clumpy",
                     "brakes" => "new",
                     "tires" => "old with worn treads",
                     "filth" => "bird droppings",
                     "wiper fluid" => "full",
                     "headlights" => "bright"
                   ];
                   print_r($my_car);

                   // Write your code below:
                   $my_car["oil"] = "new and premium";
                   $my_car["tires"] = "new with deep treads";
                   unset($my_car["filth"]);
                   print_r($my_car);



                   $hybrid_array = [1,2,3,4];
                   $hybrid_array[8]="five more";
                   print_r($hybrid_array);
                   array_push($hybrid_array,rand());
                   print_r($hybrid_array);
                   echo $hybrid_array[9];

/////Joining Arrays

                   $giraffe_foods = ["dip"=>"guacamole", "chips"=>"corn", "entree"=>"grilled chicken"];

$impala_foods = ["dessert"=>"cookies", "vegetable"=>"asparagus", "side"=>"mashed potatoes"];

$rat_foods = ["dip"=>"mashed earth worms", "entree"=>"trash pizza", "dessert"=>"sugar cubes", "drink"=>"lemon water"];

// Write your code below:

$potluck = $giraffe_foods + $impala_foods;
print_r($potluck);
$potluck += $rat_foods;
print_r($potluck);
$rat_foods += $potluck;
print_r($rat_foods);


////Assign by Value or by Reference
$doge_meme = ["top_text" => "Such Python", "bottom_text" => "Very language. Wow.", "img" => "very-cute-dog.jpg", "description" => "An adorable doge looks confused."];
$bad_meme = ["top_text" => "i don't know", "bottom_text" => "i can't think of anything", "img" => "very-fat-cat.jpg", "description" => "A very fat cat looks happy."];
// Write your code below:
function createMeme($meme) {
  $meme["top_text"] = "Much PHP";
   $meme["bottom_text"] = "Very programming. Wow.";
  return $meme;
}
$php_doge = createMeme($doge_meme);
print_r($php_doge);
function fixMeme(&$meme) {
    $meme["top_text"] = "1111";
   $meme["bottom_text"] = "222.";
}

fixMeme($bad_meme);
print_r($bad_meme);


$doge_meme = ["top_text" => "Such Python", "bottom_text" => "Very language. Wow.", "img" => "very-cute-dog.jpg", "description" => "An adorable doge looks confused."];

$doge_meme["new value"] = "Woah I'm new";

echo "\n" . $doge_meme["new value"];

array_push($doge_meme, "just an example");

echo "\n" . $doge_meme[0] . "\n";

unset($doge_meme[0]);
unset($doge_meme["new value"]);

$doge_meme["description"] = "A wonderful dog picture with a brand new description.";

function createMeme ($meme)
{
  $meme["top_text"] = "Much PHP";
  $meme["bottom_text"] = "Very programming. Wow.";
  return $meme;
}

$php_doge = createMeme($doge_meme);

print_r($doge_meme);

print_r($php_doge);

function fixMeme (&$meme)
{
  $meme["top_text"] = "I can haz";
  $meme["bottom_text"] = "PHP, plz?";
}

$lame_meme = ["top_text" => "i don't know", "bottom_text" => "i can't think of anything", "img" => "very-fat-cat.jpg", "description" => "An very fat cat looks happy."];

print_r($lame_meme);

fixMeme ($lame_meme);

print_r($lame_meme);
