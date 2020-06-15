<?php
	$titre = 'Mes Recettes';	
	
	

?>

	<form action="#" method="POST">
		 <div>
            <label for="name">nom :</label>
            <input type="text" id="nom" name="nom">
        </div>

        <div>
            <label for="name">lien de l'image :</label>
            <input type="text" id="nom" name="nom">
        </div>

        <div>
            <label for="name">nombre de personne :</label>
            <input type="text" id="nom" name="nom">
        </div>


		<select>
			<option value="Temps">--Temps de préparation--</option>
			<option value="15">15 min</option>
			<option value="45">45 min</option>
			<option value="1h45">1h45 min</option>
		</select>

		<select>
			<option value="Niveaux">--Niveau de difficulte--</option>
			<option value="faible">niveau faible</option>
			<option value="moyen">niveau moyen</option>
			<option value="eleve">niveau eleve</option>
		</select>

		<select>
			<option value="cout">--Couts des ingredients--</option>
			<option value="faiblecout">cout faible</option>
			<option value="moyen">cout moyen</option>
			<option value="eleve">cout eleve</option>
		</select>
		<button type="submit" name="Appliquer">
            Appliquer 
        </button>
	</form>
		



