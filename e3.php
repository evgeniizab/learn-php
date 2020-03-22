<?php
/*
Codecdemy PHP
Unit 3

Introduction to functions in php
Mad Lib Functions
*/
function generateStory($singular_noun,$verb,$color,$distance_unit){

$story = "
The ${singular_noun} are lovely, ${color}, and deep.\n
But I have promises to keep,\n
And ${distance_unit} to go before I ${verb},\n
";
  return $story;
}

function generateStory2($singular_noun,$verb,$color,$distance_unit) {
$story = "
The woods are lovely, dark, and deep.
But I have promises to keep,
And miles to go before I sleep,
";

$story = str_replace(array('woods','dark','miles','sleep'),array($singular_noun, $color,$distance_unit,$verb),$story);
return $story;
}

echo generateStory("dog", "eat", "purple","200");
echo generateStory2("car", "cook", "vermilion","200");
