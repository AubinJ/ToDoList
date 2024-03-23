<?php


// Importe le fichier config pour utiliser des constantes définit dans config
require __DIR__ . "/../../config.php";
$data = json_decode(file_get_contents('php://input'), true);

// Premier niveau de sécurité des données et nettoie le code (trim: enlève les espaces indésirables, strip: enlève les élements html pour parer les attaques XSS, htmlspecialchars: enlève les éléments spécials pouvant être lu comme du html)

$firstName = htmlspecialchars(strip_tags(trim($data["firstName_user"])));
$lastName = htmlspecialchars(strip_tags(trim($data["lastName_user"])));
$email = htmlspecialchars(strip_tags(trim($data["email_user"])));
$password = htmlspecialchars(strip_tags(trim($data["password_user"])));

// Second niveau de sécurité pour le mdp
$hash = password_hash($password, PASSWORD_DEFAULT);

// Connexion de la BDD avec le php en utilisant PDO (interface assurant le lien php->BDD)
$dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;
$connexion = new PDO($dsn, DB_USER, DB_PWD);

// Ecriture des données utilisateurs dans la BDD (":" permet d'appeller une variable en sql, "prepare" est une méthode PDO qui pare les injections SQL)
$statement = $connexion->prepare("INSERT INTO tdl_user (ID_USER,FIRSTNAME, LASTNAME, PASSWORD, EMAIL) VALUES (:idUser, :firstName, :lastName, :password, :email)");

// Excecute la requete en remplaçant les ":" par les valeurs fournis
$statement->execute(array(
    ':firstName' => $firstName,
    ':lastName' => $lastName,
    ':email' => $email,
    ':password' => $password,
    ":idUser" => null
));

header("Content-Type: application/json");
// Renvoie au navigateur le paramètre qu'on lui donne
echo "{\"nom\": \"josi\"}";

