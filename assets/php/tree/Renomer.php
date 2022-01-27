<?php
session_start();
if(!$_SESSION['sess_id']){
    header('Location: ../../../demos/dark/login.html');
}

include '../config.php';


$sql = "UPDATE stockage SET Nom_Stockage = '".$_POST['renomer']."' WHERE Id_Stockage = '".$_POST['hidden']."' AND Id_Compte_Stockage = '".$_SESSION['sess_id']."' ";
// Prepare statement
$stmt = $conn->prepare($sql);
// execute the query
$stmt->execute();

header("location:../../../demos/dark/files.php");




?>