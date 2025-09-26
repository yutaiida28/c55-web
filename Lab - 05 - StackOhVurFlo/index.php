<?php
	require_once("action/IndexAction.php");

	$action = new IndexAction();
	$data = $action->execute();

	require_once("partial/header.php");
?>

	<div class="cols">
		<div class="left">
			<h2>Réponses</h2>
			<?php
				// var_dump($data["answers"]);
				foreach($data["answers"] as $answer){
					?>
					<div class="answer">
						<div class="text">
							<?= $answer["answer"] ?>
						</div>
						<div class="author">
							Par : <?= $answer["author"] ?>
						</div>
					</div>
					<?php
				}
			?>

			<!-- <div class="answer">
				<div class="text">
					JavaScript est de la bouette, passe donc à C#. Il a été prouvé que l'utilisation de JavaScript augmente la dépendance à la programmation Web!
				</div>
				<div class="author">
					Par : John W
				</div>
			</div>

			<div class="answer">
				<div class="text">
					Est-ce que JavaScript est installé sur ton ordinateur? Moi, j'ai la JVM 1.8.
				</div>
				<div class="author">
					Par : Mario B.
				</div>
			</div> -->

			<div class="answer">
				<form action="index.php" method="post">
					<strong>Vous avez la réponse? Aidez-le !</strong>
					<div class="text">
						<textarea required name="answer" placeholder="Votre réponse"></textarea>
					</div>
					<div class="author">
						<input type="text" name="author" required placeholder="Votre nom">
					</div>
					<div class="send-btn">
						<button>Envoyer</button>
					</div>
				</form>
			</div>

		</div>
<?php
	require_once("partial/footer.php");