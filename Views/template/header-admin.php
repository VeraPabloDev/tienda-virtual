<!doctype html>
<html lang="en">

<head>
    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link href="<?php echo BASE_URL; ?>assets/css/bootstrap-extended.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo BASE_URL . 'assets/css/fontawesome.min.css'; ?>">
    

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="<?php echo BASE_URL; ?>assets/images/favicon-32x32.png" type="image/png" />
    <link href="<?php echo BASE_URL; ?>assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="<?php echo BASE_URL; ?>assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="<?php echo BASE_URL; ?>assets/css/pace.min.css" rel="stylesheet" />
    <script src="<?php echo BASE_URL; ?>assets/js/pace.min.js"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="<?php echo BASE_URL; ?>assets/css/app.css" rel="stylesheet">
    <link href="<?php echo BASE_URL; ?>assets/css/icons.css" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/dark-theme.css" />
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/semi-dark.css" />
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/header-colors.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL . 'assets/DataTables/datatables.min.css'; ?>">
    <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script>
    <link href="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone.css" rel="stylesheet" type="text/css" />

    <title><?php echo TITLE . ' - ' . $data['title']; ?></title>

</head>

<body>
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        <div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <img src="<?php echo BASE_URL; ?>assets/images/apple-icon.png" class="logo-icon" alt="logo icon">
                </div>
                <div>
                    <h4 class="logo-text"><?php echo TITLE; ?></h4>
                </div>
                <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a href="<?php echo BASE_URL . 'admin/home'; ?>">
                        <div class="parent-icon"><i class='bx bx-home-circle'></i>
                        </div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL . 'usuarios'; ?>">
                        <div class="menu-title"><i class='fas fa-users'></i> Usuarios</div>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL . 'categorias'; ?>">
                        <div class="menu-title"><i class='fas fa-tags'></i> Categorias</div>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL . 'productos'; ?>">
                        <div class="menu-title"><i class='fas fa-list'></i> Productos</div>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL . 'pedidos'; ?>">
                        <div class="menu-title"><i class='fas fa-bell'></i> Pedidos</div>
                    </a>
                </li>
            </ul>
            <!--end navigation-->
        </div>
        <!--end sidebar wrapper -->
        <!--start header -->
        <header>
            <div class="topbar d-flex align-items-center">
                <nav class="navbar navbar-expand">
                    <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
                    </div>
                    <div class="search-bar flex-grow-1">

                    </div>
                    <div class="user-box dropdown">
                        <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="<?php echo BASE_URL; ?>assets/images/apple-icon.png" class="user-img" alt="user avatar">
                            <div class="user-info ps-3">
                                <p class="user-name mb-0"><?php echo $_SESSION['nombre_usuario']; ?></p>
                                <p class="designattion mb-0"><?php echo $_SESSION['email']; ?></p>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="<?php echo BASE_URL . 'admin/salir'; ?>"><i class='bx bx-log-out-circle'></i><span>Cerrar sesión</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!--end header -->
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">