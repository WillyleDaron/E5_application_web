<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "manganews";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connexion échouée: " . $conn->connect_error);
}

// Récupération des données du formulaire
$pseudo = $_POST['pseudo'];
$commentaire = $_POST['commentaire'];

// Insertion du commentaire dans la base de données
$sql = "INSERT INTO commentaires (pseudo, commentaire) VALUES ('$pseudo', '$commentaire')";
if ($conn->query($sql) === TRUE) {
    echo "Le commentaire a été ajouté avec succès.";
} else {
    echo "Erreur lors de l'ajout du commentaire: " . $conn->error;
}

$conn->close();
?>
