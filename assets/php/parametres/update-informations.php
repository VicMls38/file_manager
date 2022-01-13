<?php

try{
include '../config.php';
}catch(PDOException $e){
    header("location:../../../demos/dark/404.html");
}



$dateNais = trim($_POST['dateNais']);
$tel = trim($_POST['tel']);;
$cp = trim($_POST['cp']);
$ville = trim($_POST['ville']);
$adresse1 = trim($_POST['adresse1']);
$adresse2 = trim($_POST['adresse2']);
$region = trim($_POST['region']);
$pays = trim($_POST['pays']);


    try{
    $sql = "UPDATE compte SET DateNais_Compte = '".$dateNais."', Tel_Compte = '".$tel."', Cp_Compte = '".$cp."', Ville_Compte = '".$ville."', Adresse1_Compte = '".$adresse1."', Adresse2_Compte = '".$adresse2."', Region_Compte = '".$region."', Pays_Compte = '".$pays."'  ";
    // use exec() because no results are returned
    $conn->exec($sql);
    //echo "New record created successfully";

    $_SESSION['sess_datenais'] = $dateNais;
    $_SESSION['sess_tel'] = $tel;
    $_SESSION['sess_cp'] = $cp;
    $_SESSION['sess_ville'] = $ville;
    $_SESSION['sess_adresse1'] = $adresse1;
    $_SESSION['sess_adresse2'] = $adresse2;
    $_SESSION['sess_region'] = $region;
    $_SESSION['sess_pays'] = $pays;
   
    header("location:../../../demos/dark/settings.php");
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }









?>