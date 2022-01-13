<?php
session_start();
if(!$_SESSION['sess_id']){
    header('Location: login.html');
 }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filedash - File Manager Dashboard</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../assets/media/image/favicon.png"/>

    <!-- Main css -->
    <link rel="stylesheet" href="../../vendors/bundle.css" type="text/css">

    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;700&display=swap" rel="stylesheet">


    <!-- App css -->
    <link rel="stylesheet" href="../../assets/css/app.min.css" type="text/css">

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
                            <a href="#" class="nav-link mobile-header-search-btn" title="Search">
                                <i class="ti-search"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" title="Dark">
                                <i class="fa fa-moon-o"></i>
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link nav-link-notify" title="Notifications" data-toggle="dropdown">
                                <i class="ti-bell"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                                <div class="bg-primary px-3 py-3">
                                    <h6 class="mb-0">Notifications</h6>
                                </div>
                                <div class="dropdown-scroll">
                                    <ul class="list-group list-group-flush">
                                        <li>
                                            <a href="#"
                                               class="list-group-item d-flex hide-show-toggler">
                                                <div>
                                                    <figure class="avatar mr-3">
                                                        <span
                                                            class="avatar-title bg-secondary-bright text-secondary rounded-circle">
                                                            <i class="ti-server"></i>
                                                        </span>
                                                    </figure>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="mb-0">
                                                        Your storage space is running low!
                                                        <i title="Mark as unread" data-toggle="tooltip"
                                                           class="hide-show-toggler-item fa fa-check font-size-11 position-absolute right-0 top-0 mr-3 mt-3"></i>
                                                    </p>
                                                    <span class="text-muted small">4 sec ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                               class="list-group-item d-flex hide-show-toggler">
                                                <div>
                                                    <figure class="avatar mr-3">
                                                        <img src="../../assets/media/image/user/man_avatar4.jpg"
                                                             class="rounded-circle" alt="avatar">
                                                    </figure>
                                                </div>
                                                <div>
                                                    <p class="mb-0">
                                                        <span class="text-primary">Jonny Richie</span> uploaded new
                                                        files
                                                        <i title="Mark as read" data-toggle="tooltip"
                                                           class="hide-show-toggler-item fa fa-circle-o font-size-11 position-absolute right-0 top-0 mr-3 mt-3"></i>
                                                    </p>
                                                    <span class="text-muted small">20 min ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="text-divider text-center small pb-2 px-3">
                                            <span>Old notifications</span>
                                        </li>
                                        <li>
                                            <a href="#"
                                               class="list-group-item d-flex hide-show-toggler">
                                                <div>
                                                    <figure class="avatar mr-3">
                                                        <span
                                                            class="avatar-title bg-info-bright text-info rounded-circle">
                                                            <i class="fa fa-cloud-upload"></i>
                                                        </span>
                                                    </figure>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="mb-0">
                                                        Upgrade plan
                                                        <i title="Mark as unread" data-toggle="tooltip"
                                                           class="hide-show-toggler-item fa fa-check font-size-11 position-absolute right-0 top-0 mr-3 mt-3"></i>
                                                    </p>
                                                    <span class="text-muted small">45 sec ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"
                                               class="list-group-item d-flex hide-show-toggler">
                                                <div>
                                                    <figure class="avatar mr-3">
                                                        <span
                                                            class="avatar-title bg-success-bright text-success rounded-circle">
                                                            <i class="ti-share"></i>
                                                        </span>
                                                    </figure>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="mb-0">
                                                        A file has been shared
                                                        <i title="Mark as unread" data-toggle="tooltip"
                                                           class="hide-show-toggler-item fa fa-check font-size-11 position-absolute right-0 top-0 mr-3 mt-3"></i>
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
                            <a href="#" class="nav-link" title="Settings" data-sidebar-target="#settings">
                                <i class="ti-settings"></i>
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link profile-nav-link dropdown-toggle" title="User menu"
                               data-toggle="dropdown">
                                <span class="mr-2 d-sm-inline d-none"><?php echo($_SESSION['sess_nom']." ".$_SESSION['sess_prenom']); ?></span>
                                
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                                <div class="text-center py-4">
                                    
                                    <h5 class="mb-0"><?php echo($_SESSION['sess_nom']." ".$_SESSION['sess_prenom']); ?></h5>
                                </div>
                                <div class="list-group list-group-flush">
                                    <a href="#" class="list-group-item" data-sidebar-target="#settings">Settings</a>
                                    <a href="http://bifor.laborasyon.com/login" class="list-group-item text-danger"
                                       data-sidebar-target="#settings">Sign Out!</a>
                                </div>
                                <div class="pb-0 p-4">
                                    <div class="mb-4">
                                        <h6 class="d-flex justify-content-between">
                                            Completed Tasks
                                            <span class="float-right">%68</span>
                                        </h6>
                                        <div class="progress" style="height:5px;">
                                            <div class="progress-bar bg-primary" role="progressbar"
                                                 style="width: 68%;" aria-valuenow="68" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
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
                    <a  href="index.php">
                        <i class="nav-link-icon ti-pie-chart"></i>
                        <span class="nav-link-label">Dashboard</span>
                        <span class="badge badge-danger badge-small">2</span>
                    </a>
                </li>
                <li>
                    <a  href="files.php">
                        <i class="nav-link-icon ti-file"></i>
                        <span class="nav-link-label">Fichiers</span>
                    </a>
                </li>
                <li>
                    <a  class="active" href="settings.php">
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
                    <div class="page-header">
        <h2>Paramètres</h2>
    </div>

    <div class="nav nav-pills mb-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-item nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Compte</a>
        <a class="nav-item nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Informations</a>
        <a class="nav-item nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Sécurité</a>
        
    </div>
    <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <div class="content-title">
                <h4>Compte</h4>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <form action="../../assets/php/parametres/update-compte.php" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nom</label>
                                    <input type="text" name="nom" class="form-control" value="<?php echo($_SESSION['sess_nom']);?>">
                                </div>
                                <div class="form-group">
                                    <label>Prénom</label>
                                    <input type="text" name="prenom" class="form-control" value="<?php echo($_SESSION['sess_prenom']);?>">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control" value="<?php echo($_SESSION['sess_email']);?>">
                                </div>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Sauvegarder">
                    </form>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            <div class="content-title">
                <h4>Informations</h4>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <form action="../../assets/php/parametres/update-informations.php" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Date de naissance</label>
                                    <input type="date" name="dateNais" class="form-control" value=" ">
                                </div>
                                <div class="form-group">
                                    <label>Télephone</label>
                                    <input type="text" name="tel"  class="form-control" value=" ">
                                </div>
                                <div class="form-group">
                                    <label>Code postal</label>
                                    <input type="text" name="cp" class="form-control" value=" ">
                                </div>
                                <div class="form-group">
                                    <label>Ville</label>
                                    <input type="text" name="ville" class="form-control" value=" ">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Adresse 1</label>
                                    <input type="text" name="adresse1" class="form-control" value=" ">
                                </div>
                                <div class="form-group">
                                    <label>Adresse 2</label>
                                    <input type="text" name="adresse2" class="form-control" value="">
                                </div>
                                <div class="form-group">
                                    <label>Région</label>
                                    <input type="text" name="region" class="form-control" value=" ">
                                </div>
                                <div class="form-group">
                                    <label>Pays</label>
                                    <input type="text" name="pays" class="form-control" value=" ">
                                </div>
                            </div>
                        </div>
                      
                        <input type="submit" class="btn btn-primary" value="Sauvegarder">
                    </form>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
            <div class="content-title">
                <h4>Sécurité</h4>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <form action="../../assets/php/parametres/update-securite.php" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Ancien mot-de-passe</label>
                                    <input type="password" name="old_pwd" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Nouveau mot-de-passe</label>
                                    <input type="password" name="pwd" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Confirmation mot-de-passe</label>
                                    <input type="password" name="re_pwd"class="form-control">
                                </div>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Sauvegarder">
                    </form>
                </div>
            </div>
        </div>
            </div>
            <!-- ./ Content -->

            <!-- Footer -->
            <footer class="content-footer d-print-none">
                <div>© 2020 Filedash - <a href="http://laborasyon.com" target="_blank">Laborasyon</a></div>
                <div>
                    <nav class="nav">
                        <a href="https://themeforest.net/licenses/standard" class="nav-link">Licenses</a>
                        <a href="#" class="nav-link">Change Log</a>
                        <a href="#" class="nav-link">Get Help</a>
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
                            <a href="#" class="list-group-item px-0 d-flex align-items-center">
                                <div class="mr-3">
                                    <figure class="avatar">
                                        <span class="avatar-title bg-primary-bright text-primary rounded">
                                            <i class="ti-image"></i>
                                        </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0">Images</p>
                                    <span class="small text-muted">259 Files</span>
                                </div>
                                <div>
                                    <h5 class="text-primary">15.7 GB</h5>
                                </div>
                            </a>
                            <a href="#" class="list-group-item px-0 d-flex align-items-center">
                                <div class="mr-3">
                                    <figure class="avatar">
                                        <span class="avatar-title bg-primary-bright text-primary rounded">
                                            <i class="ti-control-play"></i>
                                        </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0">Videos</p>
                                    <span class="small text-muted">8 Files</span>
                                </div>
                                <div>
                                    <h5 class="text-primary">20 GB</h5>
                                </div>
                            </a>
                            <a href="#" class="list-group-item px-0 d-flex align-items-center">
                                <div class="mr-3">
                                    <figure class="avatar">
                                        <span class="avatar-title bg-primary-bright text-primary rounded">
                                            <i class="ti-files"></i>
                                        </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0">Documents</p>
                                    <span class="small text-muted">46 Files</span>
                                </div>
                                <div>
                                    <h5 class="text-primary">10.5 GB</h5>
                                </div>
                            </a>
                            <a href="#" class="list-group-item px-0 d-flex align-items-center">
                                <div class="mr-3">
                                    <figure class="avatar">
                                        <span class="avatar-title bg-primary-bright text-primary rounded">
                                            <i class="ti-file"></i>
                                        </span>
                                    </figure>
                                </div>
                                <div class="flex-grow-1">
                                    <p class="mb-0">Other Files</p>
                                    <span class="small text-muted">50 Files</span>
                                </div>
                                <div>
                                    <h5 class="text-primary">2.8 GB</h5>
                                </div>
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
                <div class="sidebar-footer">
                    <button class="btn btn-lg btn-block btn-outline-primary">
                        <i class="fa fa-cloud-upload mr-3"></i> Upload
                    </button>
                </div>
            </div>
            <!-- ./ Sidebar - Storage -->

            <!-- Sidebar - File info -->
            <div class="sidebar" id="view-detail">
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
                        <div class="col-md-5">File name:</div>
                        <div class="col-md-7"><a href="#" class="link-1">Meeting-notes.doc</a></div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-5">File type:</div>
                        <div class="col-md-7">Word File</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-5">File size:</div>
                        <div class="col-md-7">22 KB</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-5">Created:</div>
                        <div class="col-md-7">Monday, July 02, 2020 9:34am</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-5">Modified:</div>
                        <div class="col-md-7 text-success">Monday, July 02, 2020 9:34am</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-5">Accessed:</div>
                        <div class="col-md-7">Monday, July 03, 2020 10:22am</div>
                    </div>
                </div>
                <div class="sidebar-footer">
                    <button class="btn btn-lg btn-block btn-primary">
                        <i class="ti-share mr-3"></i> Share
                    </button>
                </div>
            </div>
            <!-- ./ Sidebar - file info -->

            <!-- Sidebar - Settings -->
            <div class="sidebar" id="settings">
                <div class="sidebar-header">
                    <h4>Settings</h4>
                    <a href="#" class="btn btn-light btn-floating sidebar-close-btn">
                        <i class="ti-angle-right"></i>
                    </a>
                </div>
                <div class="sidebar-content">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item pl-0 pr-0">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                                <label class="custom-control-label" for="customSwitch1">Allow notifications.</label>
                            </div>
                        </li>
                        <li class="list-group-item pl-0 pr-0">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                <label class="custom-control-label" for="customSwitch2">Hide user requests</label>
                            </div>
                        </li>
                        <li class="list-group-item pl-0 pr-0">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch3" checked>
                                <label class="custom-control-label" for="customSwitch3">Speed up demands</label>
                            </div>
                        </li>
                        <li class="list-group-item pl-0 pr-0">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch4" checked>
                                <label class="custom-control-label" for="customSwitch4">Hide menus</label>
                            </div>
                        </li>
                        <li class="list-group-item pl-0 pr-0">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch5">
                                <label class="custom-control-label" for="customSwitch5">Remember next visits</label>
                            </div>
                        </li>
                        <li class="list-group-item pl-0 pr-0">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="customSwitch6">
                                <label class="custom-control-label" for="customSwitch6">Enable report
                                    generation.</label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- ./ Sidebar - Settings -->
        </div>
        <!-- ./ Sidebar group -->
    </div>
    <!-- ./ Content wrapper -->
</div>
<!-- ./ Layout wrapper -->

<!-- Main scripts -->
<script src="../../vendors/bundle.js"></script>



<!-- App scripts -->
<script src="../../assets/js/app.min.js"></script>
</body>
</html>
