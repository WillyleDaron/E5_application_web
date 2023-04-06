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
<section class="accueil d-flex w-100 h-100 flex-column justify-content-center align-items-center">

                <br>
                <div class="bienvenue">
                <p class="typing-demo text-center"> Bienvenue sur MangaNews !</p>
                </div>


<div class="centre">
<div class = "container" > 
    <div class = "row" > 
        <div class = "col-lg-4" >
            <!--Section pour les dernières actualités-->
        <section class="latest-news">
            </br>
            <h2>Dernières actualités</h2>
            </br>
            <article>
                <img src="path/to/manga-image.jpg" href="#" alt=" Titre de l'article" >
                <p>Description de l'article</p>
            </article>
            <article>
                <img src="path/to/manga-image.jpg" href="#" alt=" Titre de l'article">
                <p>Description de l'article</p>
            </article>
            <article>
                <img src="path/to/manga-image.jpg" href="#" alt=" Titre de l'article">
                <p>Description de l'article</p>
            </article>
            <article>
                <img src="path/to/manga-image.jpg" href="#" alt=" Titre de l'article">
                <p>Description de l'article</p>
            </article>
            <article>
                <img src="path/to/manga-image.jpg" href="#" alt=" Titre de l'article">
                <p>Description de l'article</p>
            </article>
            <article>
                <img src="path/to/manga-image.jpg" href="#" alt=" Titre de l'article">
                <p>Description de l'article</p>
            </article>
            <a href="manga.php" type="button" class="btn-manga">Autres sorties mangas>></a>
        </section>

        

        </div> 

        <div class = "col-lg-8" >
            <!--Section pour les mangas populaires-->
            <section class="popular-mangas">
            </br>
                    <h2>Mangas populaires</h2>
                    </br>
                    <ul>
                        <li>
                            <a href="manga.php">
                            <img src="https://img.sanctuary.fr/fiche/150/54837.jpg" alt="Image manga" width=90% height=80%/>

                                <p>Jujutsu Kaisen</p>
                            </a>
                        </li>
                        <li>
                            <a href="manga.php">
                                <img src="https://img.sanctuary.fr/fiche/150/13832.jpg" alt="Titre du manga" width=90% height=80%>
                                <p>One Punch Man</p>
                            </a>
                        </li>  
                        <li>
                            <a href="manga.php">
                                <img src="https://img.sanctuary.fr/fiche/150/63117.jpg" alt="Titre du manga" width=90% height=80%>
                                <p>Sakamoto Days</p>
                            </a>
                        </li>
                    </ul>
                    </br>
                    <ul>
                    <li>
                            <a href="manga.php">
                                <img src="https://img.sanctuary.fr/fiche/150/63987.jpg" alt="Titre du manga" width=90% height=80%>
                                <p>Solo Leveling</p>
                            </a>
                        </li>
                        <li>
                            <a href="manga.php">
                                <img src="https://img.sanctuary.fr/fiche/150/56022.jpg" alt="Titre du manga" width=90% height=80%>
                                <p>Tokyo Revengers</p>
                            </a>
                        </li>
                        
                        <li>
                            <a href="manga.php">
                                <img src="https://img.sanctuary.fr/fiche/150/63392.jpg" alt="Titre du manga" width=90% height=80%>
                                <p>Mashle</p>
                            </a>
                        </li>
                        
                    </ul>

                </section>
                
        </div> 
    </div> 
    </br></br>
</div> 
</div> 

</section>

<footer class="footer">
        <div class="container2">
        <div class="col">
        <h3>MangaNews</h3> 
            MangaNews vous propose une base de données sur les mangas, c'est un site d'information et d'actualité qui a pour
            </br>vocation de promouvoir la culture manga sous toutes ses formes de manière légale.
            Vous ne trouverez donc pas de scantrad (scan d'ouvrages par chapitre), du fansub </br> 
            ou des adresses de sites de streaming illégaux mais uniquement</br> des liens vers des plateformes de streaming d'animes légales telles que ADN, Crunchyroll et Wakanim.</br>
             </br> 
            <div class="row">
            <div class="col">
                <a href="contact.php" class="btn-contact">Contactez nous</a>
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
