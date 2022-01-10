<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/fontawesome.min.css" integrity="sha512-r9kUVFtJ0e+8WIL8sjTUlHGbTLwlOClXhVqGgu4sb7ILdkBvM2uI+n/Fz3FN8u3VqJX7l9HLiXqXxkx2mZpkvQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="frontend/css/styles.css">
    <title>Login</title>
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="#">
                <h1>Créer un compte</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>ou utilisez votre email pour vous inscrire</span>
                <input type="text" placeholder="Nom complet" />
                <input type="email" placeholder="Email" />
                <input type="password" placeholder="Votre de mot de passe " />
                <button>Créer un compte</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="#">
                <h1 >S'identifier</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>ou utilisez votre compte</span>
                <input type="email" placeholder="Email" />
                <input type="password" placeholder="Mot de passe " />
                <a href="#">Mot de passe oublié?</a>
                <button>S'identifier</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Vous êtes de retour</h1>
                    <p>Pour rester connecté avec nous, veuillez vous connecter avec vos informations personnelles</p>
                    <button class="ghost" id="signIn">S'identifier</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Bienvenue tous nos voeux de bonheur</h1>
                    <p>Entrez vos données personnelles identifient et  plonger dans notre monde </p>
                    <button class="ghost" id="signUp">S'inscrire</button>
                </div>
            </div>
        </div>
    </div>
    <script src="frontend/js/scrin.js"></script>
    <script src="https://kit.fontawesome.com/b57218c511.js" crossorigin="anonymous"></script>
</body>

</html>
