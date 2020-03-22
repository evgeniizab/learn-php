
<html>
<body>
<?php print_r($_GET)?>
<?="The hypotenuse of ${_GET['num']} and ${_GET['den']} is:"?>
<h4><?=sqrt(pow($_GET['num'],2)+pow($_GET['den'],2))?></h4>
<a href="index.php">Reset</a>
</body>

</html>
