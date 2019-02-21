<?php




/**
 * Récupération des éléments de la route qui définissent le contrôleur
 */

 // Si ce paramètre est vide, on arrête le programme
 if (!isset($route[2]) || empty($route[2]))
 {
     throw new Exception("Le contrôleur n'est pas défini.");
 }

 // Initialisation des variables qui définiront le fichier et la fonction à exécuter
 $controller_file = null; // homepage
 $controller_path = null; // "../private/src/controllers/".$controller_file.".php";
 $controller_method = null; // homepage_index

 // Récupération des éléments du contrôleur
 $controller = explode (":", $route[2]);

 print_r ($route[2]);
 echo "<br>";
 var_dump($controller);

 // homepage:index
 // homepage.php