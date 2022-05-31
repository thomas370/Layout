<?php


//cookie valable uniquement pour la session
setcookie('prenom','jean');


//cookie valable 24 heures
setcookie("nom","bourmaud",time()+60*60*24);

// un cookie avec plusieurs valeurs 
setcookie("client[nom]","DUPON",time()+3600);
// setcookie("client[prenom]","Aicha",time()+3600);
setcookie("client[ville]","Paris",time()+3600);


if(isset($_COOKIE["client"]))
{
    echo "Bonjour ".$_COOKIE["client"]['prenom'];
}
else
{
    echo "le cookie n'existe pas";
}
