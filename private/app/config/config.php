<?php
/**
 * Fichier de configuration général de l'application
 * 
 * 1. Définition des constantes
 * 2. Définition des variables d'environnement d'éxécution
 * 3.
 */

 /**
  * 1. Définitions des constantes
  */

// WEBSITE_TITLE Définition du titre du site
define("WEBSITE_TITLE","Web Pizzas !");


/**
 * 2. Définition des variables d'environnement d'éxécution
 */

// Environnement de développement ou de production ?
// Les valeurs peuvent être "prod" ou "dev"
// Par défaut, on considère que l'application s'exécute en environnement PROD
$env = "prod";

// Liste des domaines que l'on considère comme étant des environnements de développement
$dev_domains = [
    "127.0.0.1", "localhost", "webpizzas.local"
];
