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
				const checkEmails = () => {
					// let formData = new formData()
					let formData = new FormData()
					formData.append("username", "ken");
					formData.append("password", "AAAaaa111");
					// faire un envlope de maniere post avec le contenu = body
					fetch("ajax.php",{
						method:"POST",
						body: formData,
					})
					// 
					.then(response => response.json()) //important the le faire car on recoie un stream de byte raw 
					.then(result => {
						console.log(result);
						let node = document.querySelector("#contenantCourriels");
						node.innerText = result;

						setTimeout(checkEmails, 2000); // plus quil ce trouve dans le checkEmail il arrete a la fin du code check mail apres 
						
					})
					// appret le dernier then on peux sortire...
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
