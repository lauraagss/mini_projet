<ul>
	<li><a href="./index.php">Accueil</a></li>
	<li><a href="./contact.php">Contact</a></li>
	<li><a href="./contacts.php">Liste des contacts</a></li>
    <li>
       <?php
        echo 'bienvenue '.$_SESSION['utilisateur']['prenom'].' '.$_SESSION['utilisateur']['nom'];
        ?>
</li>
</ul>