<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Manga News</title>
    <link rel="icon" type="image/png" href="image/logo.png">
    <link rel="stylesheet" type="text/css" href="manga.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<!-- Header et navigation -->
<header>
    <nav class="nav fixed-top sticky content justify-content-center">
        <ul>
            <li><a class="navbar-brand mr-sm-2" href="accueil.php">Accueil</a></li>
            <li><a class="navbar-brand mr-sm-2" href="manga.php">Mangas</a></li>
            <li><a class="navbar-brand mr-sm-2" href="contact.php">Contact</a></li>
        </ul>
    </nav>
</header>
<body>

<!-- Connexion à la BDD -->
<?php
  $host = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'manganews';
    //On établit la connexion à la BDD
    $conn = new mysqli($host,$username,$password,$dbname); 
    //On vérifie la connexion
    if($conn->connect_error){
        die('Erreur : ' .$conn->connect_error);
    }
    echo 'Connexion réussie';
    
    // Définir l'encodage de la connexion en utf8mb4
    mysqli_set_charset($conn, "utf8mb4");
?>

<section class="accueil d-flex w-100 h-100 flex-column justify-content-center align-items-center">
<br>

<div class="centre">
    
<div class = "container" > 
<p class="bienvenue">Notre catalogue MangaNews !</p>
    <div class = "row" > 
        <div class = "col-lg-4" >

            <!--Affichage BDD-->
            
            <section class="popular-mangas">
                
            </br>

                    <!-- élément manga pour la base de donnée-->
                    <?php
                        // Requête SQL pour récupérer toutes les lignes d'une table
                        $sql = "SELECT code FROM manga WHERE id = 1";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            echo utf8_encode ($row['code']);
                        }
                        } else {
                        echo "Aucun élément trouvé.";
                        }

                        $sql = "SELECT code FROM manga WHERE id = 2";
                        $result = mysqli_query($conn, $sql);


                        if (mysqli_num_rows($result) > 0) {
                        
                        while($row = mysqli_fetch_assoc($result)) {
                            echo utf8_encode ($row['code']);
                        }
                        } else {
                        echo "Aucun élément trouvé.";
                        }

                        $sql = "SELECT code FROM manga WHERE id = 3";
                        $result = mysqli_query($conn, $sql);


                        if (mysqli_num_rows($result) > 0) {
                        
                        while($row = mysqli_fetch_assoc($result)) {
                            echo utf8_encode ($row['code']);
                        }
                        } else {
                        echo "Aucun élément trouvé.";
                        }

                        $sql = "SELECT code FROM manga WHERE id = 1";
                        $result = mysqli_query($conn, $sql);


                        if (mysqli_num_rows($result) > 0) {
                        
                        while($row = mysqli_fetch_assoc($result)) {
                            echo utf8_encode ($row['code']);
                        }
                        } else {
                        echo "Aucun élément trouvé.";
                        }
                        ?>




<!--Espace Commentaire -->
<div class="container">
  <div class="row">
    <div class="col-6">
    <h1>Espace Commentaire</h1>
    
    <!-- Formulaire de commentaire -->
    <form action="ajouter_commentaire.php" method="post">
        <label for="pseudo">Pseudo:</label>
        <input type="text1" name="pseudo" id="pseudo" required><br><br>
        
        <label for="commentaire">Commentaire:</label><br>
        <textarea name="commentaire" id="commentaire" required></textarea><br><br>
        
        <input type="submit" value="Poster le commentaire">
    </form>
    
    <!-- Affichage des commentaires -->
    <h2>Commentaires:</h2>
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

        // Récupération des commentaires depuis la base de données
        $sql = "SELECT pseudo, commentaire FROM commentaire";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<p><strong>" . $row["pseudo"] . "</strong>: " . $row["commentaire"] . "</p>";
            }
        } else {
            echo "Aucun commentaire pour le moment.";
        }

        $conn->close();
        ?>
   </div>
  </div>
</div>



                </section>
               
        </div> 
    </div> 

</div> 
</div> 
</section>



</body>
</html>

<!-- élément manga pour la base de donnée
<li>                             
    <div class="image-container">
        <img src="lien de la couverture du tome" alt="description de l'image">
        <div class="description-bulle">Type de manga</br>Description du manga</div>
    </div>
    <p>Titre du manga</p>
</a>
</li> 

                      <ul>
                        <li>                             
                        <div class="image-container">
                        <img src="https://img.sanctuary.fr/fiche/150/63987.jpg" alt="description de l'image">
                        <div class="description-bulle">Type: Webtoon</br>Lorsque d'étranges portails sont apparus aux quatre coins du monde, 
                        l'humanité a dû trouver une parade pour ne pas finir massacrée entre les griffes des monstres qu'ils ont apportés avec eux. 
                        Dans le même temps, certaines personnes ont développé des capacités permettant de chasser. Ces combattants intrépides n'hésitent pas
                        à foncer au coeur des donjons pour combattre les créatures qu'ils abritent.</div>
                        </div>
                        <p>Solo Leveling</p>
                        </a>
                        </li> 
                        
                        <li>                             
                        <div class="image-container">
                        <img src="https://img.sanctuary.fr/fiche/150/41975.jpg" alt="description de l'image">
                        <div class="description-bulle">Type: Shonen</br>Les mois ont passé depuis le terrible affrontement entre Goku et Majin Boo... Mais après une période de paix, 
                        une nouvelle menace s'abat encore sur la Terre !! Et cette fois, les ennemis viennent de "l'univers 6"... Qu'est-ce que ça signifie ?!
Voici enfin la suite tant attendue et totalement inédite de Dragon Ball, sur une idée originale d'Akira Toriyama lui-même !!</div>
                        </div>
                        <p>Dr.Stone</p>
                        </a>
                        </li>     
                        <li>                             
                        <div class="image-container">
                        <img src="https://img.sanctuary.fr/fiche/150/56022.jpg" alt="description de l'image">
                        <div class="description-bulle">Type: Shonen</br>À 26 ans, Takemichi a le sentiment d'avoir déjà raté sa vie. Vivotant de petits boulots ingrats tout juste 
bons à payer le loyer d'un studio miteux, il se lamente sur le désert de sa vie amoureuse lorsqu'il apprend la 
mort de Hinata, la seule petite amie qu'il ait eue... La jeune fille et son frère ont été les victimes collatérales 
d'un règlement de comptes entre les membres d'un gigantesque gang, le Tokyo Manji-kai. Encore sous le choc, Takemichi est à 
son tour victime d'un accident qui le ramène inexplicablement 12 ans en arrière, lorsqu'il était au collège et se donnait des 
airs de mauvais garçon. Et si c'était pour lui l'occasion de sauver Hinata ? Mais en tentant de modifier le futur,
 Takemichi se retrouvera inexorablement mêlé aux complots se tramant autour du Tokyo Manji-kai et de son charismatique et mystérieux leader…</div>
                        </div>
                        <p>Tokyo Revengers</p>
                        </a>
                        </li> 
                    </ul>
                    </br> -->