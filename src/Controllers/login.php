
<?php

header('Content-Type: application/json');
require __DIR__ . "/../../config.php";

// Connexion avec la DBB
$dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;
$conn = new PDO($dsn, DB_USER, DB_PWD);

// Récupérez le Json envoyé par le script et stockez la valeur dans une variable
$data = json_decode(file_get_contents('php://input'), true);
$email = $data['email_user'];
$password = $data['password_user'];

// Préparez et exécutez la requête SQL pour récupérer le mot de passe haché pour l'e-mail donné
$sql = "SELECT PASSWORD FROM `tdl_user` WHERE EMAIL = :EMAIL";
// 
$statement = $conn->prepare($sql);
$statement->execute([':EMAIL' => $email]);
$result = $statement->fetch(PDO::FETCH_ASSOC);

if ($result) {
    $hashedPassword = $result["PASSWORD"];
    $userId = $result["ID_USER"];

    if (password_verify($password, $hashedPassword)) {
        session_start();
        $_SESSION["userId"] = $userId;
        echo json_encode(['status' => 'success', 'message' => 'it works c incroyable', 'userId' => $userId]);
    } else {

        echo json_encode(['status' => 'error', 'message' => 'incorrect password']);
    }
} else {

    echo json_encode(['status' => 'error', 'message' => 'No user found with that email']);
}
