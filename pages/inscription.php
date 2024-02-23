<!-- Connexion réussie -->
<?php
include "connect.php";
?>

<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css/inscription.css">
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
    inscription utilisateur
    </div>
    <form class="p-3 mt-3">
        <div class="form-field d-flex align-items-center">
            <span class="fas fa-id-card"></span>
            <input type="text" name="matricule" id="matricule" placeholder="Matricule">
        </div>
        <div class="form-field d-flex align-items-center">
            <span class="far fa-user"></span>
            <input type="text" name="nom" id="nomUtilisateur" placeholder="Nom">
        </div>
        <div class="form-field d-flex align-items-center">
            <span class="far fa-user"></span>
            <input type="text" name="prenom" id="prenomUtilisateur" placeholder="Prenom">
        </div>
        <div class="form-field d-flex align-items-center">
            <span class="fas fa-key"></span>
            <input type="text" name="type" id="typeUtilisateur" placeholder="Type">
        </div>
        <div class="form-field d-flex align-items-center">
            <span class="fas fa-building"></span>
            <input type="text" name="entrprise" id="entreprise" placeholder="Entreprise">
        </div>
        <div class="form-field d-flex align-items-center">
            <span class="fas fa-university"></span>
            <input type="text" name="departement" id="departementutilisateur" placeholder="Departement">
        </div>
        <div class="form-field d-flex align-items-center">
            <span class="fas fa-key"></span>
            <input type="password" name="Mot_de_passe" id="pwd" placeholder="Mot de passe">
        </div>
        <button class="btn mt-3">Inscription</button>
        <div class="card-footer text-center pt-0 px-lg-2 px-1 mt-3">
            <p class="mb-4 text-sm mx-auto">
              Vous avez un compte ?
              <a href="connection.php" class="text-info text-gradient font-weight-bold">Connecter vous</a>
            </p>
          </div>
    </form>
    <div class="text-center fs-6">
        <!-- <a href="#">Mot de passe oublié ?</a> ou <a href="">S’enregistrer</a> -->
    </div>
</div>

</body>
</html>