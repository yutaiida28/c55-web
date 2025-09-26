<?php
	require_once("action/IndexAction.php");

	$action = new IndexAction();
	$data = $action->execute();
?>
<!DOCTYPE html>
<html>
	<head>
			<title>Mon engin de courriels</title>
			<meta charset="utf-8">
			<link rel="stylesheet" href="css/global.css">
			<script>
				// Voir onglet network dans Chrome, c'est la vie!
				const checkEmails = () => {
					let formData = new FormData(); // <form method="post">
					formData.append("username", "ken"); //<input type="text" name="username" value="asdf" >
					formData.append("password", "AAAaaa111");
					
					fetch("ajax.php", {
						method: "POST",
						body: formData,
					})
					.then(response => response.json())
					.then(result => {
						console.log(result);
						let node = document.querySelector("#contenantCourriels");
						node.innerText = result;

						setTimeout(checkEmails, 2000);
					})

				}		
				checkEmails();
			</script>
	</head>
	<body>
		<div class="container">
			<h1>Mes courriels</h1>
	
			<p>Vous avez actuellement</p>
			<div id="contenantCourriels">--</div> 
			<p>nouveaux courriels.</p>

			<div class="refresh-section">
				<button onclick="checkEmails()">
					<img src="images/refresh.png" alt="Rafraîchir">
				</button>
			</div>
		</div>
	</body>
</html>
