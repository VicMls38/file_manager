<?php

try{
include '../config.php';
}catch(PDOException $e){
    header("location:../../../demos/dark/404.html");
}

if(!isset($_POST["nom"]) || !isset($_POST["prenom"]) || !isset($_POST["email"]) || !isset($_POST["password"])){
    header("location:../../../demos/dark/register.html");
}else{

$nom = trim($_POST['nom']);
$prenom = trim($_POST['prenom']);;
$email = trim($_POST['email']);
$password = trim($_POST['password']);
$password = hash('sha256',$password);

if(($nom=="") || ($prenom=="") || ($email=="") || ($password=="")){
    header("location:../../../demos/dark/register.html");
}else{

    try{
    $sql = "INSERT INTO compte (Nom_Compte, Prenom_Compte, Email_Compte, Password_Compte) VALUES ('$nom', '$prenom', '$email', '$password')";
    // use exec() because no results are returned
    $conn->exec($sql);
 
    //echo "New record created successfully";
    header("location:../../../demos/dark/login.html");
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }


}





}
?>