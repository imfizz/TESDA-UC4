<?php 

	// continue and break //
	
	$products = [
		['name' => 'shiny star', 'price' => 20],
		['name' => 'green shell', 'price' => 10],
		['name' => 'red shell', 'price' => 15],
		['name' => 'gold coin', 'price' => 5],
		['name' => 'lightning bolt', 'price' => 40],
		['name' => 'banana skin', 'price' => 2]
	];

	foreach($products as $product){

		if($product['name'] === 'lightning bolt'){
			break;
		}

		if($product['price'] > 15){
			continue;
		}

		echo $product['name'] . '<br />';

	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>UC2L02 Assignments</title>
</head>
<body>
    <h1>UC2L02 Continue & Break</h1>
</body>
</html>