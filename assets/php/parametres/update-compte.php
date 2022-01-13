
<?php

try{
include '../config.php';
}catch(PDOException $e){
    header("location:../../../demos/dark/404.html");
}

session_start();

if(!isset($_POST["nom"]) || !isset($_POST["prenom"]) || !isset($_POST["email"])){
    header("location:../../../demos/dark/settings.php");
}else{

$nom = trim($_POST['nom']);
$prenom = trim($_POST['prenom']);;
$email = trim($_POST['email']);


if(($nom=="") || ($prenom=="") || ($email=="")){
    header("location:../../../demos/dark/settings.php");
}else{

    try{
    $sql = "UPDATE compte SET Nom_Compte = '".$nom."', Prenom_Compte = '".$prenom."', Email_Compte = '".$email."' WHERE Id_Compte = '".$_SESSION['sess_id']."'";
    // use exec() because no results are returned
    $conn->exec($sql);
    //echo "New record created successfully";
    $_SESSION['sess_nom'] = $nom;
    $_SESSION['sess_prenom'] = $prenom;
    $_SESSION['sess_email'] = $email;
    header("location:../../../demos/dark/settings.php");
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }


}





}
?>