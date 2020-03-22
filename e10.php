<?php
/*
Unit 6 HTML php
//Request Superglobals
*/
?>
<html>
<body>
$_REQUEST:
<?php print_r($_REQUEST);  ?>
<br>
$_GET:
<?php print_r($_GET); ?>
<br>
$_POST:
<?php print_r($_POST); ?>
<form method="get">
GET Form: <input type="text" name="get_name">
<input type="submit" value="Submit GET">
</form>
<form method="post">
POST Form: <input type="text" name="post_name">
<input type="submit" value="Submit POST">
</form>
<a href="index.php">Reset</a>
</body>
</html>


<html>
<body>
<form method="get">
Country:
<input type="text" name="country">
<br>
Language:
<input type="text" name="language">
<br>
<input type="submit" value="Submit">
</form>
<br>
<p>Your language is: <?=$_GET['language']?></p>
<p>Your country is:  <?=$_GET['country']?></p>
<a href="index.php">Reset</a>
</body>
</html>

<html>
<body>
<form method="POST">
Favorite Color:
<input type="text" name="color">
<br>
Favorite Food:
<input type="text" name="food">
<br>
<input type="submit" value="Submit">
</form>
<br>
<p>Best food is: <?=$_POST['food']?></p>
<p>Best color is: <?=$_POST['color']?></p>
<a href="index.php">Reset</a>
</body>
</html>
