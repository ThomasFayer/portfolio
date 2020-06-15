<?php 
	$titre = 'Contactez-moi';
	require_once('includes/header.php');
	require_once('./traitement/traitement_contact.php');

	// Si formulaire envoyé: le traiter
	if (!empty($_POST)) {
		$traitement = traitementFormulaire($_POST);

		var_dump($traitement);
	}
?>
<head>
  <link rel="stylesheet" type="text/css" href="page.css">  

    <?php
        $choix = $_POST['theme'];
        var_dump($choix);
        $time=86400;
        setcookie("theme", $choix,time()+ $time);

        if (isset($choix)) {
            if ($choix=="Dark") {
                echo '<style type="text/css">*{background-color:#323333; color: #FFF; }  </style>';
            }
            elseif ($choix=="Lightness") {
                echo '<style type="text/css">*{background-color:#CCDFDF; color:black; }  </style>';
            }
        }
    ?>


</head>
    <form action="contact.php" method="post">
        <div>
            <label for="name">prenom :</label>
            <input type="text" id="prenom" name="prenom">

            <span class="erreur">
            	<?php 
            	if (isset($traitement) && !$traitement['succes'] && isset($traitement['erreurs'] ['telephone'])) {
            		echo $traitement ['erreurs'] ['tel'];
            	}
            	?>
            	
            </span>
        </div>
        <div class="spaceForm">
            <label for="name">nom :</label>
            <input type="text" id="nom" name="nom">
        </div>
        <div class="spaceForm">
            <label for="mail">e-mail :</label>
            <input type="email" id="email" name="email">
        </div>
        <div class="spaceForm">
            <label for="msg">telephone :</label>
            <input type="text" id="tel" name="tel">
        </div>
        <div class="spaceForm">
            <label for="name">societe :</label>
            <input type="text" id="societe" name="societe">
        </div>
        <button class="spaceForm" type="submit">
        	envoyer
        </button>
    </form>

    <form action="#" method="POST">
        <div class="spaceForm">
            <select name="theme">
                <option value="Dark">Dark</option>
                <option value="Lightness">Lightness</option>
            </select>
        </div>
        <button type="submit" name="Appliquer">
            Appliquer 
        </button>
        <style type="text/css"></style>
    <?php
        $choix = $_POST['theme'];
        var_dump($choix);
        $time=86400;
        setcookie("theme", $choix,time()+ $time);

        if (isset($choix)) {
            if ($choix=="Dark") {
                echo '<style type="text/css">*{background-color:#323333; color: #FFF; }  </style>';
            }
            elseif ($choix=="Lightness") {
                echo '<style type="text/css">*{background-color:#CCDFDF; color:black; }  </style>';
            }
        }
    ?>


    </form>
        
    



    </body>
</html>