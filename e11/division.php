<html>
<body>
<?php print_r($_GET)?>
<?="${_GET['num']} divided by ${_GET['den']} is:"?>
<h4><?=$_GET['num']/$_GET['den']?></h4>
<a href="index.php">Reset</a>
</body>
</html>
