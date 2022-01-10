<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/fontawesome.min.css" integrity="sha512-r9kUVFtJ0e+8WIL8sjTUlHGbTLwlOClXhVqGgu4sb7ILdkBvM2uI+n/Fz3FN8u3VqJX7l9HLiXqXxkx2mZpkvQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="frontend/css/styles.css">
    <title>Mots de passe oublier</title>
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-in-container">
            <form method="POST" action="{{ route('password.request') }}">
                <h1>Demande de restauration</h1>
                @if(session('status'))
                <div class="alert alert-success" role="alert">
                    {{session('status')}}
                </div>
                @endif
                @csrf
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  placeholder="Email" />
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <button type="submit" name="reset" value="reset" >Envoyer</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1>Bienvenue tous nos voeux de bonheur</h1>
                    <p>Entrez vos données personnelles identifient et  plonger dans notre monde </p>
                    <button class="ghost" id="signIn">S'identifier</button>
                </div>
            </div>
        </div>
    </div>
    <script src="frontend/js/scrin.js"></script>
    <script src="https://kit.fontawesome.com/b57218c511.js" crossorigin="anonymous"></script>
</body>

</html>
