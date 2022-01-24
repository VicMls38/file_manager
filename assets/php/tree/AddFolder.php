
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Main css -->
     <link rel="stylesheet" href="../../../vendors/bundle.css" type="text/css">
     <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap" rel="stylesheet">

    <!-- App css -->
    <link rel="stylesheet" href="../../../assets/css/app.min.css" type="text/css">

    <title>Chargement</title>
</head>
<body class="dark">
<!-- Preloader -->
<div class="preloader">
    <div class="preloader-icon"></div>
</div>
<!-- ./ Preloader -->


</body>
</html>


<?php

session_start();
if(!$_SESSION['sess_id']){
    header('Location: ../../../demos/dark/login.html');
}


include '../config.php';

$nom = $_POST['nom'];
$racine = $_POST['racine'];

if($racine == "1"){

$racine = 1;
$stmt = $conn->prepare("INSERT INTO dossier (Id_Compte_Dossier, Nom_Dossier, Parent_Dossier) VALUES (:Id_Compte_Dossier, :Nom_Dossier, :Parent_Dossier)");

$stmt->bindParam(':Id_Compte_Dossier', $_SESSION['sess_id']);
$stmt->bindParam(':Nom_Dossier', $nom);
$stmt->bindParam(':Parent_Dossier', $racine);
$stmt->execute();
header("location:../../../demos/dark/files.php");

}else{

    $racine = 0;
    $parent = $_POST['parent_folder'];
    $stmt = $conn->prepare("INSERT INTO dossier (Id_Compte_Dossier, Nom_Dossier, Parent_Dossier, Id_Parent_Dossier) VALUES (:Id_Compte_Dossier, :Nom_Dossier, :Parent_Dossier, :Id_Parent_Dossier)");
    
    $stmt->bindParam(':Id_Compte_Dossier', $_SESSION['sess_id']);
    $stmt->bindParam(':Nom_Dossier', $nom);
    $stmt->bindParam(':Parent_Dossier', $racine);
    $stmt->bindParam(':Id_Parent_Dossier', $parent);
    $stmt->execute();
    header("location:../../../demos/dark/files.php");
}


?>