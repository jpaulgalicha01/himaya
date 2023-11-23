<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <link rel="icon" type="image/png" href="../images/himaya-logo-circle.png"/>
        <meta name="author" content="<?=$user_fname." ".$user_mname." ".$user_lname?>" />
        <title>Himaya - User (<?=$_SESSION['title']?>)</title>
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- Date Range -->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
        
        <style type="text/css">
            .loaded-wrapper{
                width: 100%;
                height: 100%;
                background: #212529;
                position: absolute;
                top: 0;
                left: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                z-index: 99999999;
            }
            .loader {
              width: 48px;
              height: 48px;
              border-radius: 50%;
              display: inline-block;
              position: relative;
              border: 3px solid;
              border-color: #FFF #FFF transparent transparent;
              box-sizing: border-box;
              animation: rotation 1s linear infinite;
            }
            .loader::after,
            .loader::before {
              content: '';  
              box-sizing: border-box;
              position: absolute;
              left: 0;
              right: 0;
              top: 0;
              bottom: 0;
              margin: auto;
              border: 3px solid;
              border-color: transparent transparent #DC3545 #DC3545;
              width: 40px;
              height: 40px;
              border-radius: 50%;
              box-sizing: border-box;
              animation: rotationBack 0.5s linear infinite;
              transform-origin: center center;
            }
            .loader::before {
              width: 32px;
              height: 32px;
              border-color: #FFF #FFF transparent transparent;
              animation: rotation 1.5s linear infinite;
            }
                
            @keyframes rotation {
              0% {
                transform: rotate(0deg);
              }
              100% {
                transform: rotate(360deg);
              }
            } 
            @keyframes rotationBack {
              0% {
                transform: rotate(0deg);
              }
              100% {
                transform: rotate(-360deg);
              }
            }

            .view-user-modal{
                font-size: 1rem;
                font-weight: bold;
                text-align: justify;
            }

            .print-title{
                display: none;
            }

            @media print {
                body {
                    visibility: hidden;
                }
                .print-title{
                    display: block;
                }
                .printableTable {
                    visibility: visible;
                }

                .printableTable{
                    position: absolute;
                    top: 0%;
                    left: 0%;
                }
            }
                
        </style>
    </head>
    <div class="loaded-wrapper" id="loader">
        <div class="loader"></div>
    </div>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="../index.php">
                <img src="../images/himaya-logo-circle.png" width="50" height="50"> <span>Himaya</span>
            </a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <div class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">

            </div>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">

            <?php
                include'navbar.php';
            ?>

            <div id="layoutSidenav_content">