<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<div style="height: 100vh;width: 100%;background-image: url('bloc1/mclaren.jpg');background-size: cover;	"><?php
		if (!empty($_POST["sub"])) {
			if(empty($_POST["prenom"]) && empty($_GET["mdp"])) {
				echo "<h3>Veuillez remplir le formulaire.</h3>";
			}
			else{
				echo"<h3>Bienvenue ".$_POST["prenom"].".</h3>";
			}
		};
	?>
	<form action="#" method="POST">
		<label for="prenom">Identifiant :</label>
		<input type="text" name="prenom" id="prenom"><br>
		<?php 
		if (!empty($_POST["sub"])) {
			if (empty($_POST["prenom"])) {
				echo "<h3>Veuillez mettre Identifiant.</h3>";
			}
		}?>
		<label for="mdp">Mot de passe :</label>
		<input type="password" name="mdp" id="mdp"><br>
		<?php 
		if (!empty($_POST["sub"])) {
			if (empty($_POST["mdp"])) {
				echo "<h3>Veuillez mettre un mot de passe.</h3>";
			}
		}?>
		<input type="submit" name="sub" id="sub">
	</form>




	<form action="/action_page.php" method="POST">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" placeholder="Enter email" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" placeholder="Enter password" id="pwd">
  </div>
  <div class="form-group form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
	

	<h3>Identifiant=<?php if (!empty($_POST["prenom"]))
						{
							echo $_POST["prenom"];
						}else{
							echo "";
						} ?>
							
	</h3>
	<h3>Mot de passe=<?php if (!empty($_POST["mdp"]))
						{
							echo $_POST["mdp"];
						}else{
							echo "";
						}  ?></h3>
</div>
