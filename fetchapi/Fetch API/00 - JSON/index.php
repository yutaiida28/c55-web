<?php
	$tab = array("John", "Foo", "Bar", "Smith");	
	$tabStr = json_encode($tab); // transforme en {}, [], ""
	$tabArray = json_decode($tabStr); // ["John","Foo","Bar","Smith"] redevient un tableau
?>
<!DOCTYPE html>
<html>
	<head>
			<title>JSON</title>
			<meta charset="utf-8">
	</head>
	<body>
		<div>
			<script>
				let tab = ["a", 2, true, "a"];
				console.log(tab);
				let tabStr = JSON.stringify(tab);
				console.log(tabStr);
				let tabArray = JSON.parse(tabStr);
				console.log(tabArray);
			</script>
		</div>
	</body>
</html>
