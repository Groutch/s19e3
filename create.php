<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajouter une randonnée</title>
	<link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
	<a href="read.php">Liste des données</a>
    <a href="index.php">Retour accueil</a>
	<h1>Ajouter</h1>
	<form action="create.php" method="post">
		<div>
			<label for="name">Name</label>
			<input type="text" name="name" value="">
		</div>

		<div>
			<label for="difficulty">Difficulté</label>
			<select name="difficulty">
				<option value="très facile">Très facile</option>
				<option value="facile">Facile</option>
				<option value="moyen">Moyen</option>
				<option value="difficile">Difficile</option>
				<option value="très difficile">Très difficile</option>
			</select>
		</div>
		
		<div>
			<label for="distance">Distance (en m)</label>
			<input type="number" name="distance" value="">
		</div>
		<div>
			<label for="duration">Durée</label>
			<input type="time" name="duration" value="">
		</div>
		<div>
			<label for="height_difference">Dénivelé (en m)</label>
			<input type="number" name="height_difference" value="">
		</div>
        
        <div>
			<label for="available">Disponibilité</label>
			<select name="available">
				<option value="1">Disponible</option>
				<option value="0">Pas disponible</option>
			</select>
		</div>
        
		<button type="submit" name="button">Envoyer</button>
	</form>
    <?php
    session_start ();
    /*if(!isset($_SESSION['username'])){
        header('Location: index.php');
        exit();
    }*/
    include 'connect.php';
    if(isset($_POST['name']) && isset($_POST['difficulty']) && isset($_POST['distance'])  && is_numeric($_POST['distance']) && isset($_POST['duration']) && isset($_POST['height_difference']) && is_numeric($_POST['height_difference']) && isset($_POST['available'])){
        $name = filter_var($_POST['name'],FILTER_SANITIZE_STRING);
        $difficulty = $_POST['difficulty'];
        $distance = $_POST['distance'];
        $duration = $_POST['duration'];
        $height = $_POST['height_difference'];
        $available = $_POST['available'];
            $req = ORM::for_table('hiking')->create();
            $req->name = $name;
            $req->difficulty = $difficulty;
            $req->distance = $distance;
            $req->duration = $duration;
            $req->height_difference = $height;
            $req->available = $available;
            if($req->save()){ ?>
                <script>alert("Bien enregristré");</script>
            <?php }else{ ?>
                <script>alert("Il y a eu un soucis");</script>
            <?php }
    }
    ?>
</body>
</html>
