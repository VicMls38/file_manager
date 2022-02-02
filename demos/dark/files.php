<?php
session_start();
if (!$_SESSION['sess_id']) {
    header('Location: login.html');
}
include '../../assets/php/config.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filedash - File Manager Dashboard</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../assets/media/image/favicon.png" />

    <!-- Main css -->
    <link rel="stylesheet" href="../../vendors/bundle.css" type="text/css">

    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap" rel="stylesheet">

    <!-- quill -->
    <link href="../../vendors/quill/quill.snow.css" rel="stylesheet" type="text/css">
    <!-- quill -->
    <link href="../../vendors/jstree/themes/default/style.min.css" rel="stylesheet" type="text/css">

    <!-- Clockpicker -->
    <link rel="stylesheet" href="../../vendors/clockpicker/bootstrap-clockpicker.min.css" type="text/css">

    <!-- Datepicker -->
    <link rel="stylesheet" href="../../vendors/datepicker/daterangepicker.css" type="text/css">

    <!-- Datatable -->
    <link rel="stylesheet" href="../../vendors/dataTable/datatables.min.css" type="text/css">

    <!-- Select2 -->
    <link rel="stylesheet" href="../../vendors/select2/css/select2.min.css" type="text/css">

    <!-- Prism -->
    <link rel="stylesheet" href="../../vendors/prism/prism.css" type="text/css">

    <!-- App css -->
    <link rel="stylesheet" href="../../assets/css/app.min.css" type="text/css">


    <!-- Style -->
    <link rel="stylesheet" href="../../vendors/Collapsible-Tree/hummingbird-treeview.css" type="text/css">

    <!-- Javascript -->
    <script src="../../vendors/Collapsible-Tree/hummingbird-treeview.min.js"></script>



    <!-- Css -->
    <link rel="stylesheet" href="../../vendors/dropzone/dist/min/dropzone.min.css" type="text/css">

    <script src="../../assets/js/raphael-2.1.4.min.js"></script>
    <script src="../../assets/js/justgage.js"></script>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="dark">




    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-icon"></div>
    </div>
    <!-- ./ Preloader -->

    <!-- Layout wrapper -->
    <div class="layout-wrapper">
        <!-- Header -->
        <div class="header d-print-none">
            <div class="header-container">
                <div class="header-body">
                    <div class="header-body-left">
                    </div>

                    <div class="header-body-right">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="#" class="nav-link" title="Dark">
                                    <i class="fa fa-moon-o"></i>
                                </a>
                            </li>

                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link nav-link-notify" title="Notifications" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                </a>
                                <!-- Notifs-->
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                                    <div class="bg-primary px-3 py-3">
                                        <h6 class="mb-0">Notifications</h6>
                                    </div>
                                    <div class="dropdown-scroll">
                                        <ul class="list-group list-group-flush">
                                            <li>
                                                <a href="#" class="list-group-item d-flex hide-show-toggler">
                                                    <div>
                                                        <figure class="avatar mr-3">
                                                            <span class="avatar-title bg-secondary-bright text-secondary rounded-circle">
                                                                <i class="ti-server"></i>
                                                            </span>
                                                        </figure>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="mb-0">
                                                            Vous allez bientôt manquer d'espace de stockage !
                                                            <i title="Mark as unread" data-toggle="tooltip" class="hide-show-toggler-item fa fa-check font-size-11 position-absolute right-0 top-0 mr-3 mt-3"></i>
                                                        </p>
                                                        <span class="text-muted small">Il y a 4 secondes</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="list-group-item d-flex hide-show-toggler">
                                                    <div>
                                                        <figure class="avatar mr-3">
                                                            <img src="../../assets/media/image/user/man_avatar4.jpg" class="rounded-circle" alt="avatar">
                                                        </figure>
                                                    </div>
                                                    <div>
                                                        <p class="mb-0">
                                                            <span class="text-primary">Jonny Richie</span> uploaded new
                                                            files
                                                            <i title="Mark as read" data-toggle="tooltip" class="hide-show-toggler-item fa fa-circle-o font-size-11 position-absolute right-0 top-0 mr-3 mt-3"></i>
                                                        </p>
                                                        <span class="text-muted small">20 min ago</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="text-divider text-center small pb-2 px-3">
                                                <span>Old notifications</span>
                                            </li>
                                            <li>
                                                <a href="#" class="list-group-item d-flex hide-show-toggler">
                                                    <div>
                                                        <figure class="avatar mr-3">
                                                            <span class="avatar-title bg-info-bright text-info rounded-circle">
                                                                <i class="fa fa-cloud-upload"></i>
                                                            </span>
                                                        </figure>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="mb-0">
                                                            Upgrade plan
                                                            <i title="Mark as unread" data-toggle="tooltip" class="hide-show-toggler-item fa fa-check font-size-11 position-absolute right-0 top-0 mr-3 mt-3"></i>
                                                        </p>
                                                        <span class="text-muted small">45 sec ago</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="list-group-item d-flex hide-show-toggler">
                                                    <div>
                                                        <figure class="avatar mr-3">
                                                            <span class="avatar-title bg-success-bright text-success rounded-circle">
                                                                <i class="ti-share"></i>
                                                            </span>
                                                        </figure>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="mb-0">
                                                            A file has been shared
                                                            <i title="Mark as unread" data-toggle="tooltip" class="hide-show-toggler-item fa fa-check font-size-11 position-absolute right-0 top-0 mr-3 mt-3"></i>
                                                        </p>
                                                        <span class="text-muted small">58 sec ago</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="px-3 py-2 text-right border-top">
                                        <ul class="list-inline small">
                                            <li class="list-inline-item mb-0">
                                                <a href="#">Mark All Read</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link profile-nav-link dropdown-toggle" title="User menu" data-toggle="dropdown">
                                    <span class="mr-2 d-sm-inline d-none"><?php echo ($_SESSION['sess_nom'] . " " . $_SESSION['sess_prenom']); ?></span>

                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                                    <div class="text-center py-4">

                                        <h5 class="mb-0"><?php echo ($_SESSION['sess_nom'] . " " . $_SESSION['sess_prenom']); ?></h5>
                                    </div>
                                    <div class="list-group list-group-flush">
                                        <a href="settings.php" class="list-group-item">Paramètres</a>
                                        <a href="../../assets/php/authentification/logout.php" class="list-group-item text-danger">Déconnexion !</a>
                                    </div>
                                    <div class="pb-0 p-4">
                                        <div class="mb-4">
                                            <h6 class="d-flex justify-content-between">
                                                Taches complétées
                                                <span class="float-right">%68</span>
                                            </h6>
                                            <div class="progress" style="height:5px;">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 68%;" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item header-toggler">
                        <a href="#" class="nav-link">
                            <i class="ti-arrow-down"></i>
                        </a>
                    </li>
                    <li class="nav-item sidebar-toggler">
                        <a href="#" class="nav-link">
                            <i class="ti-cloud"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- ./ Header -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- begin::navigation -->
            <div class="navigation">
                <div class="logo">
                    <a href=index.php>
                        <img src="../../assets/media/image/logo.png" alt="logo">
                    </a>
                </div>
                <ul>
                    <li>
                        <a href="index.php">
                            <i class="nav-link-icon ti-pie-chart"></i>
                            <span class="nav-link-label">Dashboard</span>
                            <span class="badge badge-danger badge-small">2</span>
                        </a>
                    </li>
                    <li>
                        <a class="active" href="files.php">
                            <i class="nav-link-icon ti-file"></i>
                            <span class="nav-link-label">Fichiers</span>
                        </a>
                    </li>
                    <li>
                        <a href="settings.php">
                            <i class="nav-link-icon ti-settings"></i>
                            <span class="nav-link-label">Paramètres</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- end::navigation -->

            <!-- Content body -->
            <div class="content-body">
                <!-- Content -->
                <div class="content">
                    <div class="page-header d-flex justify-content-between" id="alert">
                        <h2>Mes fichiers</h2>
                        <a href="#" class="files-toggler">
                            <i class="ti-menu"></i>
                        </a>
                    </div>

                    <div class="row">
                        <div class="col-xl-3 files-sidebar">
                            <div class="card border-0">
                                <h6 class="card-title">Mes Dossiers</h6>
                                <div id="files">



                                    <style>
                                        h1 {
                                            padding: 40px;
                                            text-align: center;
                                            font-size: 1.5em;
                                        }

                                        li a {
                                            text-decoration: none;
                                            color: #2d2f31;
                                        }

                                        .ul {
                                            background-color: white;
                                        }

                                        .span {
                                            width: 100%;
                                            padding: 10px;
                                            background: #2d2f31;
                                            color: white;
                                            font-size: 1.2em;
                                            font-variant: small-caps;
                                            cursor: pointer;
                                            display: block;
                                        }


                                        .span::before {
                                            float: right;
                                            right: 10%;
                                            content: "+";
                                        }

                                        .slide {
                                            clear: both;
                                            width: 100%;
                                            height: 0px;
                                            overflow: hidden;
                                            text-align: center;
                                            transition: height .4s ease;
                                        }

                                        <?php

                                        $stmt = $conn->prepare("SELECT * FROM dossier Where Id_Compte_Dossier = " . $_SESSION['sess_id'] . " AND Parent_Dossier = '1'");
                                        $stmt->execute();

                                        // set the resulting array to associative
                                        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                        $i = 0;
                                        foreach (($stmt->fetchAll()) as $k => $v) {
                                            echo ("
                                            #touch" . $i . " {position: absolute; opacity: 0; height: 0px;}    

                                            #touch" . $i . ":checked + .slide {height: auto;} 
                                            ");
                                            $i++;
                                        }

                                        ?>
                                    </style>
                                    <?php
                                    $stmt = $conn->prepare("SELECT * FROM dossier Where Id_Compte_Dossier = " . $_SESSION['sess_id'] . " AND Parent_Dossier = '1'");
                                    $stmt->execute();

                                    // set the resulting array to associative
                                    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                    $i = 0;
                                    foreach (($stmt->fetchAll()) as $k => $v) {

                                        echo ('<label for="touch' . $i . '" style="width:100%;"> <div class="span"><i style="color:yellow" class="fa fa-folder" aria-hidden="true"></i>&nbsp;&nbsp;' . $v['Nom_Dossier'] . '</div>    </label>      
                                             <input type="checkbox" id="touch' . $i . '"> ');

                                        $stmt1 = $conn->prepare("SELECT * FROM stockage Where Id_Compte_Stockage = '" . $_SESSION['sess_id'] . "' AND Id_Parent_Dossier_Stockage != 0 AND Id_Parent_Dossier_Stockage = " . $v['Id_Dossier'] . "");
                                        $stmt1->execute();

                                        // set the resulting array to associative
                                        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                        $j = 0;
                                        foreach (($stmt1->fetchAll()) as $k1 => $v1) {
                                            echo ('
    <ul class="slide ul">
    <li style="color:black;"><i class="fa fa-file" aria-hidden="true"></i>&nbsp;&nbsp;<a style="color:black; cursor:pointer">' . $v1['Nom_Stockage'] . '</a></li> 
    </ul>
    ');
                                            $j++;
                                        }
                                        $i++;
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                        <script>
                            $('.dd').nestable({
                                /* config options */
                            });
                        </script>

                        <div class="col-xl-9">
                            <form action="../../assets/php/stockage/upload.php" enctype="multipart/form-data" class="dropzone">

                            </form>
                            <input type="button" id="btn_submit" class="btn btn-primary" value="Valider">

                            <br><br>

                            <div class="content-title mt-0">
                                <h4>Documents</h4>
                            </div>
                            <div class="d-md-flex justify-content-between mb-4">
                                <ul class="list-inline mb-3">
                                    <li class="list-inline-item mb-0">
                                        <a href="#" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown">
                                            Ajouter
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal" style="cursor:pointer;">Nouveau dossier</a>
                                        </div>
                                    </li>
                                    <li class="list-inline-item mb-0">
                                        <a href="#" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown">
                                            Trier
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Date</a>
                                            <a class="dropdown-item" href="#">Nom</a>
                                            <a class="dropdown-item" href="#">Poids</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="table-responsive">
                                <table id="table-files" class="table table-borderless table-hover">
                                    <thead>
                                        <tr>
                                            <th>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="files-select-all">
                                                    <label class="custom-control-label" for="files-select-all"></label>
                                                </div>
                                            </th>
                                            <th>Nom</th>
                                            <th>Modification</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        try {

                                            if (isset($_GET['order'])) {
                                                $stmt = $conn->prepare("SELECT *, Size_Stockage AS poids, DATE_FORMAT(Date_Modif_Stockage, '%d/%m/%Y') as Date_Modif_Stockage from stockage WHERE Id_Compte_Stockage = " . $_SESSION['sess_id'] . " AND Type_Stockage LIKE '" . $_GET['order'] . "%" . "'");
                                                $stmt->execute();
                                            } else {
                                                $stmt = $conn->prepare("SELECT *, Size_Stockage AS poids, DATE_FORMAT(Date_Modif_Stockage, '%d/%m/%Y') as Date_Modif_Stockage from stockage WHERE Id_Compte_Stockage = " . $_SESSION['sess_id'] . "");
                                                $stmt->execute();
                                            }
                                            // set the resulting array to associative
                                            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                            foreach ($stmt->fetchAll() as $k => $v) {
                                                if ($v['poids'] > 1024) {
                                                    $v['poids'] = round($v['poids'] / 1024);
                                                    if ($v['poids'] > 1024) {
                                                        $v['poids'] = round($v['poids'] / 1024);
                                                        if ($v['poids'] > 1024) {
                                                            $v['poids'] = round($v['poids'] / 1024);
                                                            $v['poids'] = $v['poids'] . ' Go';
                                                        } else {
                                                            $v['poids'] = $v['poids'] . ' Mo';
                                                        }
                                                    } else {
                                                        $v['poids'] = $v['poids'] . ' Ko';
                                                    }
                                                } else {
                                                    $v['poids'] = $v['poids'] . ' Octets';
                                                }
                                                echo ('<tr>
                          <td class=" dt-body-center"><div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" id="customCheck' . $v['Id_Stockage'] . '"><label class="custom-control-label" for="customCheck' . $v['Id_Stockage'] . '"></label></div></td>
                          
                          <td>
                              <a href="#" class="d-flex align-items-center">
                                  <figure class="avatar avatar-sm mr-3">
                                      <span class="avatar-title bg-info text-black-50 rounded-pill">
                                          <i class="ti-file"></i>
                                      </span>
                                  </figure>
                                  <span class="d-flex flex-column">
                                      <!-- Nom -->
                                      <span class="text-primary">' . $v['Nom_Stockage'] . '</span>
                                      <!-- Poids -->
                                      <span class="small font-italic">' . $v['poids'] . ' </span>
                                  </span>
                              </a>
                          </td>
                          <!-- date -->
                          <td>' . $v['Date_Modif_Stockage'] . '</td>
                        
                          <td class="text-right">
                              <div class="dropdown">
                                  <a href="#" class="btn btn-floating" data-toggle="dropdown">
                                      <i class="ti-more-alt"></i>
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right">
                                      <a href="files.php?u=47" class="dropdown-item" data-sidebar-target="#view-detail-' . $v['Id_Stockage'] . '">View
                                          Details</a>
                                      <a href="../../assets/php/tree/telecharger.php?File_Id=' . $v['Id_Stockage'] . '" class="dropdown-item">Télecharger</a>
                                      <a href="#" id="' . $v['Id_Stockage'] . '" value="' . $v['Id_Stockage'] . '" onclick="Id(this.id);" data-toggle="modal" data-target="#exampleModal1" class="dropdown-item">Déplacer</a>
                                      <a href="#" id="' . $v['Id_Stockage'] . '" value="' . $v['Id_Stockage'] . '" onclick="Id3(this.id);" data-toggle="modal" data-target="#exampleModal4" class="dropdown-item">Renommer</a>                              
                                      <a href="#" id="' . $v['Id_Stockage'] . '" value="' . $v['Id_Stockage'] . '" onclick="Id2(this.id);" data-toggle="modal" data-target="#exampleModal3" class="dropdown-item">Supprimer</a> 
                                    </div>
                              </div>
                          </td>
                      </tr>');
                                            }
                                        } catch (PDOException $e) {
                                            echo "Error: " . $e->getMessage();
                                        }

                                        ?>

                                    </tbody>
                                </table>

                                <script>
                                    function Id(val) {
                                        console.log(val);
                                        document.getElementById("inputTypeHidden1").value = val
                                    }

                                    function Id2(val) {
                                        console.log(val);
                                        document.getElementById("inputTypeHidden3").value = val
                                    }

                                    function Id3(val) {
                                        console.log(val);
                                        document.getElementById("inputTypeHidden4").value = val
                                    }
                                </script>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- ./ Content -->

                <!-- Footer -->
                <footer class="content-footer d-print-none">
                    <div>© 2020 Filedash - <a href="http://laborasyon.com" target="_blank">IT CORE</a></div>
                    <div>
                        <nav class="nav">
                            <a href="https://themeforest.net/licenses/standard" class="nav-link">Licence</a>
                            <a href="#" class="nav-link">Besoin d'aide ?</a>
                        </nav>
                    </div>
                </footer>
                <!-- ./ Footer -->
            </div>
            <!-- ./ Content body -->

            <!-- Sidebar group -->
            <div class="sidebar-group d-print-none">
                <!-- Sidebar - Storage -->
                <div class="sidebar primary-sidebar show" id="storage">
                    <div class="sidebar-header">
                        <h4>Storage Overview</h4>
                    </div>
                    <div class="sidebar-content">
                        <div id="jauge" class="mb-3 200x160px"></div>
                        <script>
                            var g = new JustGage({
                                id: "jauge",
                                value: 10,
                                symbol: '%',
                                min: 0,
                                max: 100,
                                gaugeWidthScale: 0.6,
                                title: "Stockage utilisé",
                                valueFontColor: '#FFFFFF',


                            });
                        </script>
                        <div>
                            <div class="list-group list-group-flush mb-3">
                                <a href="files.php?order=image" class="list-group-item px-0 d-flex align-items-center">
                                    <div class="mr-3">
                                        <figure class="avatar">
                                            <span class="avatar-title bg-primary-bright text-primary rounded">
                                                <i class="ti-image"></i>
                                            </span>
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0">Images</p>
                                        <?php

                                        $stmt = $conn->prepare("SELECT sum(Size_Stockage) as poids ,count(*) as nbr from stockage WHERE Id_Compte_Stockage = " . $_SESSION['sess_id'] . " AND Type_Stockage Like 'image%'");
                                        $stmt->execute();
                                        // set the resulting array to associative
                                        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                        foreach ($stmt->fetchAll() as $k => $v) {
                                           
                                            if($k === 0 ){
                                                $v['poids'] = 0;
                                            }
                                            echo ('<span class="small text-muted">' . $v['nbr'] . ' Fichiers</span>

    </div>
    <div>
        <h5 class="text-primary">');
                                            if ($v['poids'] > 1024) {
                                                $v['poids'] = round($v['poids'] / 1024);
                                                if ($v['poids'] > 1024) {
                                                    $v['poids'] = round($v['poids'] / 1024);
                                                    if ($v['poids'] > 1024) {
                                                        $v['poids'] = round($v['poids'] / 1024);
                                                        $v['poids'] = $v['poids'] . ' Go';
                                                    } else {
                                                        $v['poids'] = $v['poids'] . ' Mo';
                                                    }
                                                } else {
                                                    $v['poids'] = $v['poids'] . ' Ko';
                                                }
                                            } else {
                                                $v['poids'] = $v['poids'] . ' Octets';
                                            }
                                            

                                            echo ('' . $v['poids'] . '</h5> </div>');
                                        }
                                        ?>
                                </a>
                                <a href="files.php?order=video" class="list-group-item px-0 d-flex align-items-center">
                                    <div class="mr-3">
                                        <figure class="avatar">
                                            <span class="avatar-title bg-primary-bright text-primary rounded">
                                                <i class="ti-control-play"></i>
                                            </span>
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0">Vidéo</p>
                                        <?php

                                        $stmt = $conn->prepare("SELECT sum(Size_Stockage) as poids ,count(*) as nbr from stockage WHERE Id_Compte_Stockage = " . $_SESSION['sess_id'] . " AND Type_Stockage Like 'video%'");
                                        $stmt->execute();
                                        // set the resulting array to associative
                                        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                        foreach ($stmt->fetchAll() as $k => $v) {
                                            if($k === 0 ){
                                                $v['poids'] = 0;
                                            }
                                            echo ('<span class="small text-muted">' . $v['nbr'] . ' Fichiers</span>
                                      
                                            </div>
                                            <div>
                                                <h5 class="text-primary">');
                                            if ($v['poids'] > 1024) {
                                                $v['poids'] = round($v['poids'] / 1024);
                                                if ($v['poids'] > 1024) {
                                                    $v['poids'] = round($v['poids'] / 1024);
                                                    if ($v['poids'] > 1024) {
                                                        $v['poids'] = round($v['poids'] / 1024);
                                                        $v['poids'] = $v['poids'] . ' Go';
                                                    } else {
                                                        $v['poids'] = $v['poids'] . ' Mo';
                                                    }
                                                } else {
                                                    $v['poids'] = $v['poids'] . ' Ko';
                                                }
                                            } else {
                                                $v['poids'] = $v['poids'] . ' Octets';
                                            }

                                            echo ('' . $v['poids'] . '</h5> </div>');
                                        }
                                        ?>
                                </a>
                                <a href="files.php?order=application" class="list-group-item px-0 d-flex align-items-center">
                                    <div class="mr-3">
                                        <figure class="avatar">
                                            <span class="avatar-title bg-primary-bright text-primary rounded">
                                                <i class="ti-files"></i>
                                            </span>
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0">Documents</p>
                                        <?php

                                        $stmt = $conn->prepare("SELECT sum(Size_Stockage) as poids ,count(*) as nbr from stockage WHERE Id_Compte_Stockage = " . $_SESSION['sess_id'] . " AND Type_Stockage Like 'application%'");
                                        $stmt->execute();
                                        // set the resulting array to associative
                                        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                        foreach ($stmt->fetchAll() as $k => $v) {
                                            if($k === 0 ){
                                                $v['poids'] = 0;
                                            }
                                            echo ('<span class="small text-muted">' . $v['nbr'] . ' Fichiers</span>

    </div>
    <div>
        <h5 class="text-primary">');
                                            if ($v['poids'] > 1024) {
                                                $v['poids'] = round($v['poids'] / 1024);
                                                if ($v['poids'] > 1024) {
                                                    $v['poids'] = round($v['poids'] / 1024);
                                                    if ($v['poids'] > 1024) {
                                                        $v['poids'] = round($v['poids'] / 1024);
                                                        $v['poids'] = $v['poids'] . ' Go';
                                                    } else {
                                                        $v['poids'] = $v['poids'] . ' Mo';
                                                    }
                                                } else {
                                                    $v['poids'] = $v['poids'] . ' Ko';
                                                }
                                            } else {
                                                $v['poids'] = $v['poids'] . ' Octets';
                                            }

                                            echo ('' . $v['poids'] . '</h5> </div>');
                                        }
                                        ?>
                                </a>
                                <a href="files.php?" class="list-group-item px-0 d-flex align-items-center">
                                    <div class="mr-3">
                                        <figure class="avatar">
                                            <span class="avatar-title bg-primary-bright text-primary rounded">
                                                <i class="ti-file"></i>
                                            </span>
                                        </figure>
                                    </div>
                                    <div class="flex-grow-1">
                                        <p class="mb-0">Total</p>
                                        <?php

                                        $stmt = $conn->prepare("SELECT sum(Size_Stockage) as poids ,count(*) as nbr from stockage WHERE Id_Compte_Stockage = " . $_SESSION['sess_id'] . "");
                                        $stmt->execute();
                                        // set the resulting array to associative
                                        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                        foreach ($stmt->fetchAll() as $k => $v) {
                                            if($k === 0 ){
                                                $v['poids'] = 0;
                                            }
                                            echo ('<span class="small text-muted">' . $v['nbr'] . ' Fichiers</span>

    </div>
    <div>
        <h5 class="text-primary">');
                                            if ($v['poids'] > 1024) {
                                                $v['poids'] = round($v['poids'] / 1024);
                                                if ($v['poids'] > 1024) {
                                                    $v['poids'] = round($v['poids'] / 1024);
                                                    if ($v['poids'] > 1024) {
                                                        $v['poids'] = round($v['poids'] / 1024);
                                                        $v['poids'] = $v['poids'] . ' Go';
                                                    } else {
                                                        $v['poids'] = $v['poids'] . ' Mo';
                                                    }
                                                } else {
                                                    $v['poids'] = $v['poids'] . ' Ko';
                                                }
                                            } else {
                                                $v['poids'] = $v['poids'] . ' Octets';
                                            }

                                            echo ('' . $v['poids'] . '</h5> </div>');
                                        }
                                        ?>
                                </a>
                            </div>
                        </div>
                        <div class="card border shadow-none">
                            <div class="card-body text-center">
                                <img class="img-fluid mb-3" src="../../assets/media/svg/upgrade.svg" alt="upgrade">
                                <h5>Get an Upgrade</h5>
                                <p class="text-muted">Get additional 500 GB space for your documents and files. Unlock now
                                    for more space.</p>
                                <button class="btn btn-primary">Upgrade</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./ Sidebar - Storage -->


                <?php
                $stmt = $conn->prepare("SELECT *, Size_Stockage AS poids, DATE_FORMAT(Date_Stockage, '%d/%m/%Y') as Date_Stockage ,DATE_FORMAT(Date_Modif_Stockage, '%d/%m/%Y') as Date_Modif_Stockage from stockage WHERE Id_Compte_Stockage = " . $_SESSION['sess_id'] . "");
                $stmt->execute();
                // set the resulting array to associative
                $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                foreach ($stmt->fetchAll() as $k => $v) {

                    echo ('
            <div class="sidebar" id="view-detail-' . $v['Id_Stockage'] . '">
                <div class="sidebar-header">
                    <h4>View Detail</h4>
                    <a href="#" class="btn btn-light btn-floating sidebar-close-btn">
                        <i class="ti-angle-right"></i>
                    </a>
                </div>
                <div class="sidebar-content">
                    <figure class="avatar mb-4">
                        <span class="avatar-title bg-info-bright text-info rounded-pill">
                            <i class="ti-file"></i>
                        </span>
                    </figure>

                    <div class="row mb-3">
                        <div class="col-md-5">Nom du fichier :</div>
                        <div class="col-md-7"><a href="#" class="link-1">' . $v['Nom_Stockage'] . '</a></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-5">Type du fichier :</div>
                        <div class="col-md-7">');

                    $explo = explode('/', $v['Type_Stockage']);
                    $type = $explo[0];
                    $type1 = $explo[1];
                    if ($type == "application") {
                        $type = $type1;
                    }

                    echo ('' . $type . '</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-5">Poids du fichier :</div>
                        <div class="col-md-7">');
                    if ($v['poids'] > 1024) {
                        $v['poids'] = round($v['poids'] / 1024);
                        if ($v['poids'] > 1024) {
                            $v['poids'] = round($v['poids'] / 1024);
                            if ($v['poids'] > 1024) {
                                $v['poids'] = round($v['poids'] / 1024);
                                $v['poids'] = $v['poids'] . ' Go';
                            } else {
                                $v['poids'] = $v['poids'] . ' Mo';
                            }
                        } else {
                            $v['poids'] = $v['poids'] . ' Ko';
                        }
                    } else {
                        $v['poids'] = $v['poids'] . ' Octets';
                    }
                    echo ('' . $v['poids'] . '</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-5">Créé :</div>
                        <div class="col-md-7">' . $v['Date_Stockage'] . '</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-5">Modifié:</div>
                        <div class="col-md-7 text-success">' . $v['Date_Modif_Stockage'] . '</div>
                    </div>
                </div>
                <div class="sidebar-footer">
                    <button class="btn btn-lg btn-block btn-primary">
                        <i class="ti-share mr-3"></i> Partager
                    </button>
                </div>
            </div>');
                }
                ?>
                <!-- ./ Sidebar - file info -->

            </div>
            <!-- ./ Sidebar group -->
        </div>

        <!-- ./ Content wrapper -->

    </div>


    <!-- modal nouveau dossier -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="" id="exampleModalLabel">Nouveau dossier</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="ti-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="../../assets/php/tree/AddFolder.php" method="POST">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Nom du dossier:</label>
                            <input type="text" class="form-control" id="recipient-name" name="nom">
                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer
                            </button>
                            <input type="submit" class="btn btn-primary" value="deplacer">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- modal déplacer -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="" id="exampleModalLabel1">Déplacer fichier : </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="ti-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="../../assets/php/tree/Deplacer.php" method="POST">

                        <input type="hidden" name="hidden" id="inputTypeHidden1" value="">

                        <label for="dossier">Déplacer vers ?</label><br>
                        <select name="dossier" id="dossier" class="form-control">
                            <?php
                            $stmt = $conn->prepare("SELECT * FROM dossier WHERE Id_Compte_Dossier = " . $_SESSION['sess_id'] . "");
                            $stmt->execute();

                            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                            foreach (($stmt->fetchAll()) as $k => $v) {
                                echo ('<option value="' . $v['Id_Dossier'] . '">' . $v['Nom_Dossier'] . '</option>');
                            }
                            ?>

                        </select>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer
                            </button>
                            <input type="submit" class="btn btn-primary" value="deplacer">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- modal Renomer -->
    <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="" id="exampleModalLabel4">Renomer fichier : </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="ti-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="../../assets/php/tree/Renomer.php" method="POST">

                        <input type="hidden" name="hidden" id="inputTypeHidden4" value="">

                        <label for="renomer">Renommer ?</label><br>
                        <input type="text" class="form-control" name="renomer">


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer
                            </button>
                            <input type="submit" class="btn btn-primary" value="Confirmer">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- modal supprimer -->
    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="" id="exampleModalLabel3"> Supprimer fichier : </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="ti-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="../../assets/php/tree/Supprimer.php" method="POST">

                        <input type="hidden" name="hidden" id="inputTypeHidden3" value="">

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer
                            </button>
                            <input type="submit" class="btn btn-primary" value="Supprimer">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>






    <!-- -------------------------------------- -->




    <!-- ./ Layout wrapper -->

    <!-- Main scripts -->
    <script src="../../vendors/bundle.js"></script>
    <script src="../../assets/js/raphael-2.1.4.min.js"></script>
    <script src="../../assets/js/justgage.js"></script>

    <!-- Datatable -->
    <script src="../../vendors/dataTable/datatables.min.js"></script>

    <!-- Jstree -->
    <script src="../../vendors/jstree/jstree.min.js"></script>

    <!-- Prism -->
    <script src="../../vendors/prism/prism.js"></script>

    <!-- Dropzone -->
    <script src="../../vendors/dropzone/dist/min/dropzone.min.js"></script>
    <script src="../../assets/js/examples/dropzone.js"></script>

    <!-- App scripts -->
    <script src="../../assets/js/app.min.js"></script>

    <script type='text/javascript'>
        Dropzone.autoDiscover = false;

        var myDropzone = new Dropzone(".dropzone", {
            addRemoveLinks: true,
            autoProcessQueue: false,
            parallelUploads: 10,
            maxFilesize: 4096,

        });



        $('#btn_submit').click(function() {
            myDropzone.processQueue();

        });

        myDropzone.on("queuecomplete", function() {
            this.removeAllFiles();
            location.reload();
        });
    </script>

    <script src="../../vendors/jquery/jquery-3.3.1.min.js"></script>

</body>

</html>