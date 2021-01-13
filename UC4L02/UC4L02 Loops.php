<?php 
    // Loops //
	$names = ['Francis', 'Albert', 'Ilacad'];

	for($i = 0; $i < count($names); $i++){
		echo $names[$i] . '<br />' ;
	}
	// foreach($names as $name){
	// 	echo $name . ' <br/>';
	// }

	$products = [
		['name' => 'shiny star', 'price' => 20],
		['name' => 'green shell', 'price' => 10],
		['name' => 'red shell', 'price' => 15],
		['name' => 'gold coin', 'price' => 5],
		['name' => 'lightning bolt', 'price' => 40],
		['name' => 'banana skin', 'price' => 2]
	];

	foreach($products as $product){
		echo $product['name'] .' - '. $product['price'];
		echo '<br />';
	}

	// $i = 0;

	// while($i < count($products)){
	// 	echo $products[$i]['name'];
	// 	echo '<br />';
	// 	$i++;
	// }


?>

<!DOCTYPE html>
<html>
<head>
	<title>UC4LO2(LOOPS)</title>
</head>
<body>

	<h1>UC2L02(Loops)</h1>
	<ul>
		<?php foreach($products as $product){ ?>
			<h3><?php echo $product['name']; ?></h3>
			<p>Php.<?php echo $product['price']; ?></p>
		<?php } ?>
	</ul>

</body>
</html>