<?php
session_start();
if(!$_SESSION['sess_id']){
    header('Location: ../../../demos/dark/login.html');
}




include '../config.php';

echo($_POST['hidden']);
$dossier = $_POST['dossier'];
$date= date("Y-m-d");
$sql = "UPDATE stockage SET Date_Modif_Stockage = '".$date."', Id_Parent_Dossier_Stockage ='".$dossier."' WHERE Id_Stockage = ".$_POST['hidden']." AND Id_Compte_Stockage = ".$_SESSION['sess_id']."";
// Prepare statement
$stmt = $conn->prepare($sql);
// execute the query
$stmt->execute();

header("location:../../../demos/dark/files.php");

?>