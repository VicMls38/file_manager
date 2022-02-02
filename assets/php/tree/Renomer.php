<?php
session_start();
if(!$_SESSION['sess_id']){
    header('Location: ../../../demos/dark/login.html');
}

include '../config.php';

$stmt = $conn->prepare("SELECT Data_Stockage FROM stockage where Id_Compte_Stockage = '".$_SESSION['sess_id']."' AND Id_Stockage = '".$_POST['hidden']."'");
    $stmt->execute();
  
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(($stmt->fetchAll()) as $k=>$v) {
        $data = $v['Data_Stockage'];
        $data = explode("/", $data);
        $file = $data[0];
        $id_file = $data[1];
        $debut_file = $file."/".$id_file."/"; 
        $data = $data[2];
        $data = explode(".", $data);
        $data1 = $data[0]; // Nom
        $data2 = $data[1]; // Extansion
        $date= date("Y-m-d");
        $sql = "UPDATE stockage SET Data_Stockage = '".$debut_file.$_POST['renomer'].".".$data2."', Date_Modif_Stockage = '".$date."' WHERE Id_Stockage = '".$_POST['hidden']."' AND Id_Compte_Stockage = '".$_SESSION['sess_id']."' ";
        echo($sql);
        // Prepare statement
        $stmt = $conn->prepare($sql);

        // execute the query
        $stmt->execute();
        
        rename("../stockage/file/".$_SESSION['sess_id']."/".$data1.".".$data2."","../stockage/file/".$_SESSION['sess_id']."/".$_POST['renomer'].".".$data2."");

        $sql = "UPDATE stockage SET Nom_Stockage = '".$_POST['renomer'].".".$data2."', Date_Modif_Stockage = '".$date."' WHERE Id_Stockage = '".$_POST['hidden']."' AND Id_Compte_Stockage = '".$_SESSION['sess_id']."' ";
        // Prepare statement
        $stmt = $conn->prepare($sql);
        // execute the query
        $stmt->execute();

}


header("location:../../../demos/dark/files.php");




?>