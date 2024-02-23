<?php
if(isset($_SESSION["id_utilisateur"])){
    $id_session_sauv = $_SESSION["id_utilisateur"];
    //Information Utilisateur
    $check = "SELECT * FROM utilisateur WHERE id_utilisateur ='$id_session_sauv'";
    $result = mysqli_query($conn, $check);// execution requet check
    $nombre = mysqli_num_rows($result);// nombre de resultat
    $row = mysqli_fetch_assoc($result);// sauv information des champs de la table dans row
    $id = $row['id_utilisateur'];
    $nom = $row['nom'];
    $prenom = $row['prenom'];
    $matricule = $row['matricule'];
    $entreprise = $row['entreprise'];
    $date_inscription= $row['date_enregistrement'];
    echo 'WELCOME!!! '.$nom.'<br>';

}else{
    header('Location: seconnecter.php');
}

?>
