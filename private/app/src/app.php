<?php
/**
* Fichier d'exécution de l'application
*/

/**
 * 1- Intégration de la configuration
 */
require_once "../private/app/config/config.php";

/**
 * 2- Définition de l'environnement
 */
require_once "../private/app/src/environnement.php";

/**
 * 3- Comportement des erreurs
 */
require_once "../private/app/src/err_reporting.php";

/**
 * 4- Connection aux bases de données
 */
require_once "../private/app/src/db_connect.php";

/**
 * 5- Routage de l'application
 */
require_once "../private/app/src/routing.php";

/**
 * 6- Compilation de la page
 */
require_once "../private/app/src/compile.php";