<?php
spl_autoload_register(function ($class) {
    // ICI, quand on nous utilisons un  USE 
    // cette fonction va chercher un dossier contenant le nom de la classe passée / nom du dossier.php
    $class = ucfirst(strtr($class, "\\", DIRECTORY_SEPARATOR));
    // Cela se passe ici , il requiert le fichier portant le nom de la classe et lui ajouter un .php
    require_once($class . ".php");
});
