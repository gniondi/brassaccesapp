<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css/connection.css">
    <link rel="stylesheet" href="../fonts/css/all.css">
    <link rel="stylesheet" href="../bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="../images/brassivoire_favicone.png">
    <title>Brassaccesapp</title>
</head>
<body>
<div class="wrapper">
    <div class="logo">
        <img src="../images/logo-brassivoire.png" alt="">
    </div>
    <div class="text-center mt-4 name">
        verification des acces
    </div>
    <form class="p-3 mt-3">
        <div class="form-field d-flex align-items-center">
            <span class="far fa-user"></span>
            <input type="text" name="matricule" id="matricule" placeholder="Matricule">
        </div>
        <div class="form-field d-flex align-items-center">
            <span class="fas fa-key"></span>
            <input type="password" name="Mot_de_passe" id="pwd" placeholder="Mot de passe">
        </div>
        <button class="btn mt-3">Connexion</button>
    </form>
    <div class="text-center fs-6">
    <!-- <a href="#">Mot de passe oublié ?</a> ou  -->
        <a href="inscription.php">S’inscrire</a>
    </div>
</div>

</body>
</html>