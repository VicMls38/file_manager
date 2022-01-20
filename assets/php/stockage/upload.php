<?php
session_start();
if(!$_SESSION['sess_id']){
    header('Location:../../../demos/dark/login.html');
 }
include '../config.php';

$request = 0;
if(isset($_POST['request'])){ 
  $request = $_POST['request'];
}



    if(isset($_FILES['file'])){

        if(!empty($_FILES['file']['name'])){
            //Ajouter IMG dans la bdd :
            $date = date('Y-m-d');
            $name = $_FILES["file"]['name'];
            $type = $_FILES["file"]['type'];
            $data = file_get_contents($_FILES["file"]['tmp_name']);
    
                $stmt = $conn->prepare("INSERT INTO Stockage (Id_Compte_Stockage,Nom_Stockage,Type_Stockage,Data_Stockage,Date_Stockage)
                VALUES (:Id_Compte_Stockage, :Nom_Stockage, :Type_Stockage, :Data_Stockage, :Date_Stockage)");
                $stmt->bindParam(':Id_Compte_Stockage', $_SESSION['sess_id']);
                $stmt->bindParam(':Nom_Stockage', $name);
                $stmt->bindParam(':Type_Stockage', $type);
                $stmt->bindParam(':Data_Stockage', $data);
                $stmt->bindParam(':Date_Stockage', $date);
                $stmt->execute();
    
    
                header ("location:../../../demos/dark/files.php");
        }else{/*header ("location:../../../demos/dark/files.php");*/}
    }else{/*header ("location:../../../demos/dark/files.php");*/}

if($request == 2){ 
    $filename = $_POST['name'];  
    unlink($filename); 
    exit;
  }

/*
    if(isset($_FILES['folder'])){
        if(!empty($_FILES['folder']['name'])){
        //Ajouter IMG dans la bdd :
            $date = date('Y-m-d');
            $name = $_FILES["folder"]['name'];
            $type = $_FILES["folder"]['type'];
            $data = file_get_contents($_FILES["folder"]['tmp_name']);

            $stmt = $conn->prepare("INSERT INTO Stockage (Id_Compte_Stockage,Nom_Stockage,Type_Stockage,Data_Stockage,Date_Stockage)
            VALUES (:Id_Compte_Stockage, :Nom_Stockage, :Type_Stockage, :Data_Stockage, :Date_Stockage)");
            $stmt->bindParam(':Id_Compte_Stockage', $_SESSION['sess_id']);
            $stmt->bindParam(':Nom_Stockage', $name);
            $stmt->bindParam(':Type_Stockage', $type);
            $stmt->bindParam(':Data_Stockage', $data);
            $stmt->bindParam(':Date_Stockage', $date);
            $stmt->execute();


            header ("location:../../../demos/dark/files.php");
        }else{header ("location:../../../demos/dark/files.php");}
    }else{}
*/
?>