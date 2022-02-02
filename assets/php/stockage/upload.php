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

           
                $stmt = $conn->prepare("SELECT Nom_Stockage FROM stockage WHERE Id_Compte_Stockage = ".$_SESSION['sess_id']."");
                $stmt->execute();
                $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                
        
            //Ajouter IMG dans la bdd :
                $date = date('Y-m-d');

                foreach(($stmt->fetchAll()) as $k=>$v) {
                    echo $v['Nom_Stockage'];
                    if($v['Nom_Stockage'] == $_FILES["file"]["name"]){
                        echo("Marche pas !!");
                        header("location:../../../demos/dark/files.php");
                        die();
                        
                    }else{
                        echo("Ca marche !!!");
                    }
                }

                $target_dir = "file/".$_SESSION['sess_id']."/";
                $target_file = $target_dir . basename($_FILES["file"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);

                $mime = $_FILES["file"]["type"];
                $size = $_FILES["file"]["size"];
                $path = $target_dir.$_FILES["file"]["name"];
                $name = $_FILES["file"]["name"];

                $stmt = $conn->prepare("INSERT INTO stockage (Id_Compte_Stockage, Nom_Stockage ,Type_Stockage,Size_Stockage,Data_Stockage, Date_Stockage, Date_Modif_Stockage)
                VALUES (:Id_Compte_Stockage, :Nom_Stockage, :Type_Stockage, :Size_Stockage, :Data_Stockage, :Date_Stockage, :Date_Modif_Stockage)");
                $stmt->bindParam(':Id_Compte_Stockage', $_SESSION['sess_id']);
                $stmt->bindParam(':Nom_Stockage', $name);
                $stmt->bindParam(':Type_Stockage', $mime);
                $stmt->bindParam(':Size_Stockage', $size);
                $stmt->bindParam(':Data_Stockage', $path);
                $stmt->bindParam(':Date_Stockage', $date);
                $stmt->bindParam(':Date_Modif_Stockage', $date);
                $stmt->execute();
    
                
                header ("location:../../../demos/dark/files.php");
            
        }else{header ("location:../../../demos/dark/files.php");}
    
    }else{header ("location:../../../demos/dark/files.php");}

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