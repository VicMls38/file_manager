
<?php
session_start();
if(!$_SESSION['sess_id']){
    header('Location: ../../../demos/dark/login.html');
}

//connexion bdd :
include '../config.php';

$file_id = $_GET['File_Id'];
$stmt = $conn->prepare("SELECT * FROM stockage where Id_Compte_Stockage = '".$_SESSION['sess_id']."' AND Id_Stockage = '".$file_id."'");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(($stmt->fetchAll()) as $k=>$v) {

if(isset($v['Data_Stockage']))
{
    $var_1 = $v['Data_Stockage'];
//    $file = $var_1;
}
$dir = "../stockage/"; // trailing slash is important
$file = $dir . $var_1;

if (file_exists($file))
    {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename($file));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    ob_clean();
    flush();
    readfile($file);
    exit;
    }
} //- the missing closing brace

header("Location: ../../../demos/dark/files.php")
?>