<?php
/**
 * Détermine les langues de l'utilisateur
 * 
 */
if (!function_exists('getUserLanguage')) 
{
    function getUserLanguages(){
        echo $_SERVER['HTTP_ACCEPT_LANGUAGE'];
    }
}
getUserLanguages();



