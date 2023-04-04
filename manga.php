<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Manga News</title>
    <link rel="icon" type="image/png" href="image/logo.png">
    <link rel="stylesheet" type="text/css" href="accueil.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
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

<!--Bannière principale avec image et titre
<section class="main-banner">
    <img src="image/test.jpg" alt="Titre de la bannière">
    <h1>Titre de la bannière</h1>
</section>
 -->

<!-- Connexion à la BDD -->

<?php
  $host = 'localhost';
  $dbname = 'manganews';
  $username = 'root';
  $password = '';
    
  $dsn = "mysql:host=$host;dbname=$dbname"; 
  // récupérer la liste des éléments
  $sql = "SELECT * FROM Manga";
   
  try{
   $pdo = new PDO($dsn, $username, $password);
   $stmt = $pdo->query($sql);
   
   if($stmt === false){
    die("Erreur");
   }
   
  }catch (PDOException $e){
    echo $e->getMessage();
  }
?>

<section class="accueil d-flex w-100 h-100 flex-column justify-content-center align-items-center">
<br>
<div class="bienvenue">
<p class="typing-demo text-center"> Notre catalogue MangaNews !</p>
</div>

<div class="centre">
<div class = "container" > 
    <div class = "row" > 
        <div class = "col-lg-4" >
            <!--Affichage BDD-->
            <h1>Tous nos mangas</h1>
            <table>
            <thead>
                <tr>
                <th>ID</th>
                <th>Name</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
                <tr>
                <td><?php echo htmlspecialchars($row['id']); ?></td>
                <td><?php echo htmlspecialchars($row['name']); ?></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
            </table>
            </body>

        
                
        </div> 
    </div> 
    </br></br>
</div> 
</div> 

</section>

<footer class="footer">
        <div class="container2">
        <div class="col">
        <h3>Exemple footer</h3> 
            Depuis 2001, Manga Sanctuary vous propose une énorme base de données sur les mangas, manhwa, manhua et les séries TV animées (japanimation).
            Depuis 2006, Manga Sanctuary vous permet également de gérer</br>  votre collection de mangas grâce à un outil 100% gratuit et très pointu avec 
            un grand nombre de fonctionnalités. Manga Sanctuary est un site d'information et d'actualité qui a pour </br> vocation de promouvoir la culture 
            manga sous toutes ses formes de manière légale. Vous ne trouverez donc pas de scantrad (scan d'ouvrages par chapitre), du fansub </br> 
            ou des adresses de sites de streaming illégaux. Nous mettons des liens vers les plateformes de streaming d'animes légales telles que ADN, Crunchyroll et Wakanim.</br> </br> 
            <div class="row">
            <div class="col">
                <a href="contact.php" class="btn-contact">Contactez nous</a>
            </div>
            <div class="col">
                <a href="mention.php" class="btn-contact">Mentions légales</a>
            </div>
            </div>
            </div>
                
            </div>
            <div class="col-12 text-center">
            <div class="copyright">
                <p>&copy; 2022-2023 All Rights Reserved.</p>
            </div> 
        </div>
        </div>
    </footer>
</body>

</html>
