<?php

// A- lancer la connexion vers la BDD 

// création des constantes 
define("SERVEUR","nom_serveur");
define("USER","nom_utilisateur");
define("MDP","mot_de_passe");
define('BDD',"nom_de_la_bdd");

try
{
    $connexion = new PDO("mysql:host=".SERVEUR.";dbname=".BDD,USER,MDP);
    // gestion des accents 
    $connexion -> exec("SET CHARACTER SET utf8");// -> appel une méthode d'une classe 
    
    // var_dump($connexion);
}
catch(Exception $message)
{
    echo ' une erruer au moment de la connexion BDD : '.$message->getMessage();
}
