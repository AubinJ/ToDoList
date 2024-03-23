
// Cache la modal d'inscription et montre celle du login lorsque l'utilisateur clique sur "déjà inscrit"
document.getElementById('switchToLogin').addEventListener('click', function (event) {
    event.preventDefault();
    document.getElementById('modalSubscription').classList.add('hidden');
    document.getElementById('modalLogin').classList.remove('hidden');
});



// Fonction Register

// La fonction jouée onclick sur le bouton submit
async function handleRegister() {

    // Première étape, on récupere les values des inputs
    let firstName = document.querySelector("#firstNameRegister").value
    let lastName = document.querySelector("#lastNameRegister").value
    let email = document.querySelector("#emailRegister").value
    let password = document.querySelector("#passwordRegister").value
    let passwordbis = document.querySelector('#verifPasswordRegister').value
    console.log(firstName, lastName, email, password, passwordbis)
    // On construit un objet dont les clefs ( nom de champs) doivent être identiques à la classe User.
    let user = {
        firstName_user: firstName,
        lastName_user: lastName,
        email_user: email,
        password_user: password,
        password_bis_user: passwordbis
    }


    // On crée les paramètres de la requête HTTP qui sera envoyée à PHP
    let params = {
        // Méthode HTPP Post ( pour que le traitement puisse vérifier avec if(isset($_POST)))
        method: "POST",
        // On précise toujours le format de la requête HHTP
        // Ici du json, mais ca pourrait être du form data, du form url encoded , etc...
        headers: {
            "Content-Type": "application/json; charset=utf-8",
        },
        // Dans le corps de la requête HTTP, va se trouver la donnée
        // On va lui passer nos données de l'objet user crée précédement

        body: JSON.stringify(user),
    };

    /**fetch est une méthode qui fait une requête sur l'url passée en paramètre
     * cette méthode retourne une Promise.
     *  https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Promise
     */
    fetch("./../src/Controllers/register.php", params)
        // La méthode .then est une méthode de l'objet Promise
        // Elle permet d'appeler le code de la fonction passée en paramètre dès que la Promise se "résout" (resolve)
        // On peut aussi passer  une deuxième fonction, de gestion des erreurs ('onrejected)
        // Ici, deux syntaxes pour les fonctions : une "lambda" ou arrow-function, et une fonction anonyme explicite
        .then((res) => res.json())
        .then(function (data) {
            console.log(data)
            document.getElementById('modalSubscription').classList.add('hidden');
            document.getElementById('modalLogin').classList.remove('hidden');
        });
}


//Fonction login

async function handleLogin() {

    let email = document.querySelector("#emailLogin").value
    let password = document.querySelector("#passwordLogin").value
   
    let user = {
        email_user: email,
        password_user: password,
    }

    let params = {
        method: "POST",

        headers: {
            "Content-Type": "application/json; charset=utf-8",
        },

        body: JSON.stringify(user),
    };

    fetch("./../src/Controllers/register.php", params)
      
        .then((res) => res.json())
        .then(function (data) {
            console.log(data)
            document.getElementById('modalLogin').classList.add('hidden');
            document.getElementById('modalTdl').classList.remove('hidden');
        });
}



