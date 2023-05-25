<!DOCTYPE html>
<html>
<head>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Manga News</title>
    <link rel="icon" type="image/png" href="image/logo.png">
    <link rel="stylesheet" type="text/css" href="connexion.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <!-- Header et navigation -->
<header>
    <nav class="nav fixed-top sticky content justify-content-center">
        <ul>
            <li><a class="navbar-brand mr-sm-2" href="accueil.php">Accueil</a></li>
            <li><a class="navbar-brand mr-sm-2" href="connexion.php">Connexion</a></li>
            <li><a class="navbar-brand mr-sm-2" href="contact.php">Contact</a></li>
            

        </ul>
    </nav>

</br></br></br></br>
</header>
    


   <?php
    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les valeurs du formulaire
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Vérifier les informations de connexion
        if ($username === "admin" && $password === "password") {
            // Rediriger vers la page de succès si les informations sont correctes
            header("Location: manga.php");
            exit();
        } else {
            // Afficher un message d'erreur si les informations sont incorrectes
            echo "<p>Nom d'utilisateur ou mot de passe incorrect.</p>";
        }
    }
    ?>
    <!-- Formulaire -->
    <form class="centered-element" method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <h1 >Connexion</h1> </br></br>
        <label for="username">Nom d'utilisateur:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="Se connecter">
    </form>
</body>
</html>
