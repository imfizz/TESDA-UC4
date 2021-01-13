<?php
 # Variable
$name = 'Francis Ilacad';
$age = 29;
$stringOne = 'Email: ';
$stringTwo = 'filacad22@gmail.com';

$peopleOne = ['Francis', 'France', 'Fra'];
$peopleTwo = array('kiko', 'pogi');
$ages = [20, 30, 40, 50];

$blogs = [
	['Francis Birthday', 'France', 'lorem', 30],
	['Shopping Cart', 'toad', 'lorem', 25],
	['Golden Chest', 'link', 'lorem', 50]
];

$x = 5;
$y = 5;

$stringThree = 10;


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>UC4L01 ASSIGNMENT</title>
</head>
<body>
	<h1>UC4L01 ASSIGNMENT</h1>
	Name: <?php echo $name; ?><br>
	Age: <?php echo $age; ?><br>

	<!-- String & Concatenation -->
<?php
	echo $stringOne.$stringTwo;
	echo "<br>Hey, My Name is $name<br>";
	echo strlen($stringTwo) . ' is the length of my Email<br>';
	echo strtoupper($name);	
?>
<br>
	<!-- Numbers basic Operators -, *, +, / -->
<?php
	echo 'x=5, y=5, x+y is = ' . $x * $y;
	echo '<br>Math Operations 2 * (4+9) / 3 = ' . 2 * (4+9) / 3;	
	?>
<br>
	<!-- Arrays -->
<?php
	echo 'The Array in peopleOne is ' . $peopleOne[1];
	echo '<br> The Array in peopleTwo is ' . $peopleTwo[0] . '<br>';
	print_r($ages) . '<br>';
?>
<br>
	<!-- Multi Dimentional Arrays -->
<?php
	print_r($blogs[0]);
	print_r('<br>'.$blogs[0][0]);
?>
</body>
</html>