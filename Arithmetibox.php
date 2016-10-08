<!--hebert.iut@gmail.com
davidulle@gmail.com-->
<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="Contenu/Arithmetibox.css"/>
<meta charset="utf-8"/>
<title> Arithmetibox </title>
</head>
<body>
<header>
<img id="logo_Arithmetibox" src="Contenu/logo.svg" alt="logo_Arithmetibox"/>
<h1 id="titre">ArithmetiBox</h1>
<a href="http://www.ataraxy.info/Accueil">
<p>Lien vers Ataraxy<img id="img_ataraxy" src="Contenu/ataraxysvg.svg" alt="logo_ataraxy"/></a>
</header>
<main>
<div id="MenuFonction">
<h2 id="titreFonctions">Fonctions</h2>
<nav>
<ul>
<li><a class="listeF" href="Arithmetibox.php?outil=pgcd">Algorithme d'Euclide étendu</a></li>
<li><a class="listeF texte_court" href="Arithmetibox.php?outil=cesa">Euclide</a></li>
<li><a class="listeF texte_court" href="Arithmetibox.php?outil=affi">Inverse modulaire</a></li>
<li><a class="listeF texte_court" href="Arithmetibox.php?outil=cong">Matrice modulaire</a></li>
<li><a class="listeF" href="Arithmetibox.php?outil=pgcd">Algorithme de factorisation</a></li>
<li><a class="listeF" href="Arithmetibox.php?outil=cesa">Exponentiation modulaire rapide</a></li>
<li><a class="listeF" href="Arithmetibox.php?outil=affi">Inverse matrice modulaire</a></li>
<li><a class="listeF texte_court" href="Arithmetibox.php?outil=cong">Test de primalité</a></li>
<li><a class="listeF" href="Arithmetibox.php?outil=cong">Matrice de changement de base</a></li>
<li><a class="listeF texte_court" href="Arithmetibox.php?outil=pgcd">PGCD</a></li>
<li><a class="listeF texte_court" href="Arithmetibox.php?outil=cesa">Cesar</a></li>
<li><a class="listeF texte_court" href="Arithmetibox.php?outil=affi">Méthode Affine</a></li>
<li><a class="listeF texte_court" href="Arithmetibox.php?outil=cong">Congruence</a></li>
</ul>
</nav>
</div>
<div id="affichage">
<section>
<?php
    if(isset($_GET['outil'])){
        switch ($_GET['outil']){
            case 'pgcd':
                echo "<section>
                <section>
                <?-- Input -->
                PGCD
                </section>
                <section>
                Résultat
                <?-- Affichage résultat -->
                </section>
                </section>";
                break;
                
            case 'cesa':
                echo "<section>";
                include("Contenu/AttaqueCesar.php");
                echo "</section>";
                break;
                
            case 'affi':
                echo "<section>
                <section>
                <?-- Input -->
                Affine
                </section>
                <section>
                Résultat
                <?-- Affichage résultat -->
                </section>
                </section>";
                break;
            case 'cong':
                echo "<section>
                <section>
                <?-- Input -->
                Congruence
                </section>
                <section>
                Résultat
                <?-- Affichage résultat -->
                </section>
                </section>";
                break;
            case 'base':
                echo "<section>
                <section>
                <?-- Input -->
                Fonction
                </section>
                <section>
                Résultat
                <?-- Affichage résultat -->
                </section>
                </section>";
                break;
            default :
                echo "<section>
                Bienvenue sur la page dédié au projet tutoré de 2016-2017</br>
                </section>";
                break;
        }
    }
    ?>
</section>
</div>
</main>
<section id="texte_a_propos">
<h2>A propos</h2>
<p> Se site à été dévelloper dans le cadre d'un projet universitaire du semestre 3 du DUT informatique. Il est réalisé par cinq étudiant du groupa A1 de l'année 2016/2017. La page web est développer dans les languages HTML, CSS, PHP et LaTeX, il a pour but de créer une boite à outils d’arithmétique qui est intégrer à Ataraxy, les différent outils developper sont des algorithmes vue en cour de S3 d'arithmétique et de cryptanalyse, cour qui est encadrer par David Hébert, Docteur et professeur agrégé de mathématiques à l'université de Paris XIII d'épinay Villetaneuse.
</p>
</section>
</body>
<footer>
<p id="texte_footer"> Projet réalisées par : Jason Wong, Jeremy Dos Santos, Jack Kaing, Quentin Rat, Fahath Mougammadouaribou || Copyright © 2016/2017</p>
</footer>
</html>
