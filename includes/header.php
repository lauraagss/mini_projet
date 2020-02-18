<?php
session_start();
$_SESSION['utilisateur']=[
    'prenom'=>'Laura',
    'nom'=>'Goncalves',
    'id'=>12
];
?>
<!DOCTYPE html>

<?php
	include('./traitement/changement_couleur.php');
?>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $titre; ?></title>
	<style>
		.erreur {
			color: #FF0000;
		}

		.sombre {
			color: #FFF;
			background-color: #000;
		}
	</style>
</head>

<body class="<?php echo $couleur; ?>">
	<header>
		<nav><?php require_once('./includes/nav.php'); ?>
		</nav>
	</header>