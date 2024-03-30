<?php
	ob_start();
?>

<!doctype html>
<html lang="en" data-bs-theme="light">

<!-- Mirrored from templates.g5plus.net/glowing-bootstrap-5/dashboard/add-product-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Jan 2024 14:29:49 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Product List - Glowing - Bootstrap 5 HTML Templates</title>
	<script src="../../cdn-cgi/apps/head/2oc_RD5SS6wgN5SiQnSEnWVNHg8.js"></script><link rel="icon" href="https://templates.g5plus.net/glowing-bootstrap-5/assets/images/others/favicon.ico">
	<link rel="stylesheet" href="vendors/lightgallery/css/lightgallery-bundle.min.css">
	<link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="vendors/animate/animate.min.css">
	<link rel="stylesheet" href="vendors/slick/slick.css">
	<link rel="stylesheet" href="vendors/mapbox-gl/mapbox-gl.min.css">
	<link rel="stylesheet" href="../cdn.jsdelivr.net/npm/bootstrap-icons%401.9.1/font/bootstrap-icons.css">
	<link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/theme.css">
	<link rel="stylesheet" href="../cdn.jsdelivr.net/npm/select2%404.0.13/dist/css/select2.min.css" />
	<link rel="stylesheet" href="../cdn.jsdelivr.net/npm/select2-bootstrap-5-theme%401.3.0/dist/select2-bootstrap-5-theme.min.css" />
	<link rel="stylesheet" href="app/css/theme.css">
</head>
<body>
<div class="wrapper dashboard-wrapper">
<div class="d-flex flex-wrap flex-xl-nowrap">
<div class="db-sidebar bg-body">
<aside class="navbar navbar-expand-xl navbar-light d-block px-0 header-sticky dashboard-nav py-0">
<div class="sticky-area border-right">
<div class="d-flex px-6 px-xl-10 w-100 border-bottom py-7 justify-content-between">
<a href="https://templates.g5plus.net/glowing-bootstrap-5/" class="navbar-brand py-4">
<img class="light-mode-img" src="app/images/others/logo.png" width="179" height="26" alt="Glowing - Bootstrap 5 HTML Templates">
<img class="dark-mode-img" src="app/images/others/logo-white.png" width="179" height="26" alt="Glowing - Bootstrap 5 HTML Templates"></a>
<div class="ml-auto d-flex align-items-center ">
<div class="d-flex align-items-center d-xl-none">
<div class="color-modes position-relative px-4">
<a class="bd-theme btn btn-link nav-link dropdown-toggle d-inline-flex align-items-center justify-content-center text-primary p-0 position-relative rounded-circle" href="#" aria-expanded="true" data-bs-toggle="dropdown" data-bs-display="static" aria-label="Toggle theme (light)">
<svg class="bi my-1 theme-icon-active"><use href="#sun-fill"></use></svg>
</a>
<ul class="dropdown-menu dropdown-menu-end fs-14px" data-bs-popper="static">
<li>
<button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="light" aria-pressed="true">
<svg class="bi me-4 opacity-50 theme-icon"><use href="#sun-fill"></use></svg>
Light
<svg class="bi ms-auto d-none"><use href="#check2"></use></svg>
</button>
</li>
<li>
<button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
<svg class="bi me-4 opacity-50 theme-icon"><use href="#moon-stars-fill"></use></svg>
Dark
<svg class="bi ms-auto d-none"><use href="#check2"></use></svg>
</button>
</li>
<li>
<button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto" aria-pressed="false">
<svg class="bi me-4 opacity-50 theme-icon"><use href="#circle-half"></use></svg>
Auto
<svg class="bi ms-auto d-none"><use href="#check2"></use></svg>
</button>
</li>
</ul>
</div>
<div class="dropdown no-caret py-4 px-3 d-flex align-items-center notice me-6">
<a href="#" class="dropdown-toggle text-body-emphasis fs-5 fw-500 lh-1 position-relative" data-bs-toggle="dropdown">
<i class="far fa-bell"></i>
<span class="badge bg-primary rounded-pill position-absolute fw-bold fs-13px bottom-100 start-100 translate-middle-x">1</span>
</a>
<div class="dropdown-menu dropdown-menu-end">
<a class="dropdown-item" href="#">Action</a>
<a class="dropdown-item" href="#">Another action</a>
<a class="dropdown-item" href="#">Something else here</a>
</div>
</div>
</div>
<button class="navbar-toggler border-0 px-0" type="button" data-bs-toggle="collapse" data-bs-target="#primaryMenuSidebar" aria-controls="primaryMenuSidebar" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
</div>
</div>
<div class="collapse navbar-collapse bg-body position-relative z-index-5" id="primaryMenuSidebar">
<form class="d-block d-xl-none pt-8 px-6">
<div class="input-group position-relative bg-body-tertiary">
<input type="text" class="form-control border-0 bg-transparent pl-4 shadow-none" placeholder="Search Item">
<div class="input-group-append fs-14px px-6 border-start border-2x ">
<button class="bg-transparent border-0 outline-none py-5">
<i class="far fa-search"></i>
</button>
</div>
</div>
</form>
<ul class="list-group list-group-flush list-group-no-border w-100 p-6">
<li class="list-group-item px-0 py-0 sidebar-item mb-3 border-0">
<a href="index.php" class="text-heading text-decoration-none lh-1 sidebar-link py-5 px-6 d-flex align-items-center" title="Dashboard">
<span class="sidebar-item-icon w-40px d-inline-block text-muted">
<i class="fas fa-home-lg-alt"></i>
</span>
<span class="sidebar-item-text fs-14px fw-semibold">Dashboard</span>
</a>
</li>
<li class="list-group-item px-0 py-0 sidebar-item mb-3 has-children border-0">
<a href="addCategory" class="text-heading text-decoration-none lh-1 d-flex sidebar-link align-items-center py-5 px-6 position-relative" data-bs-toggle="collapse" aria-expanded="false" title="Products">
<span class="sidebar-item-icon d-inline-block w-40px text-muted">
<i class="fas fa-shopping-bag"></i>
</span>
<span class="sidebar-item-text fs-14px fw-semibold">Category</span>
<span class="position-absolute top-50 end-5 translate-middle-y"><i class="far fa-angle-down"></i></span>
</a>
</li>
<li class="list-group-item px-0 py-0 sidebar-item mb-3 has-children border-0">
<a href="addProduct" class="text-heading text-decoration-none lh-1 d-flex sidebar-link align-items-center py-5 px-6 position-relative" data-bs-toggle="collapse" aria-expanded="false" title="Add Product">
<span class="sidebar-item-icon d-inline-block w-40px text-muted">
<i class="fas fa-plus-square"></i>
</span>
<span class="sidebar-item-text fs-14px fw-semibold">Products</span>
<span class="position-absolute top-50 end-5 translate-middle-y"><i class="far fa-angle-down"></i></span>
</a>
</li>
</ul>
</div>
</div>
</aside>
</div>
<div class="page-content">
<header class="main-header bg-body position-relative d-none d-xl-block px-10 py-6">
<div class="container-fluid">
<nav class="navbar navbar-light py-0 row no-gutters px-3 px-lg-0">
<div class="col-md-4 px-0 px-md-6 order-1 order-md-0">
<form>
<div class="input-group position-relative bg-input rounded">
<input type="text" class="form-control border-1 pl-4 shadow-none" placeholder="Search Item">
<div class="input-group-append fs-14">
<button class="btn btn-hover-bg-primary btn-hover-border-primary rounded-0 rounded-end border-start border-0 h-100 px-8 py-5">
<i class="far fa-search"></i>
</button>
</div>
</div>
</form>
</div>
<div class="col-md-6 d-flex flex-wrap justify-content-md-end align-items-center order-0 order-md-1">
<div class="color-modes position-relative pe-4">
<a class="bd-theme btn btn-link nav-link dropdown-toggle d-inline-flex align-items-center justify-content-center text-primary p-0 position-relative rounded-circle" href="#" aria-expanded="true" data-bs-toggle="dropdown" data-bs-display="static" aria-label="Toggle theme (light)">
<svg class="bi my-1 theme-icon-active"><use href="#sun-fill"></use></svg>
</a>
<ul class="dropdown-menu dropdown-menu-end fs-14px" data-bs-popper="static">
<li>
<button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="light" aria-pressed="true">
<svg class="bi me-4 opacity-50 theme-icon"><use href="#sun-fill"></use></svg>
Light
<svg class="bi ms-auto d-none"><use href="#check2"></use></svg>
</button>
</li>
<li>
<button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
<svg class="bi me-4 opacity-50 theme-icon"><use href="#moon-stars-fill"></use></svg>
Dark
<svg class="bi ms-auto d-none"><use href="#check2"></use></svg>
</button>
</li>
<li>
<button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto" aria-pressed="false">
<svg class="bi me-4 opacity-50 theme-icon"><use href="#circle-half"></use></svg>
Auto
<svg class="bi ms-auto d-none"><use href="#check2"></use></svg>
</button>
</li>
</ul>
</div>
<div class="dropdown no-caret px-4 mx-3 py-2">
<a href="#" class="dropdown-toggle fs-5 text-decoration-none fw-500 lh-1 animation-shake position-relative" data-bs-toggle="dropdown">
<i class="far fa-bell"></i>
<span class="badge text-bg-dark rounded-circle">4</span>
</a>
<div class="dropdown-menu dropdown-menu-end">
<a class="dropdown-item" href="#">Action</a>
<a class="dropdown-item" href="#">Another action</a>
<a class="dropdown-item" href="#">Something else here</a>
</div>
</div>
<a href="#" class="request-full-screen d-block px-4 mx-3 fs-5" title="Full screen">
<i class="far fa-rss-square"></i>
</a>
<div class="dropdown px-4 mx-3 py-2 dropdown-language">
<a href="#" class="dropdown-toggle fs-5" data-bs-toggle="dropdown"><i class="far fa-globe-americas"></i></a>
<div class="dropdown-menu dropdown-menu-end">
<a class="dropdown-item text-brand" href="#"><img src="app/images/dashboard/flag-us.png" alt="English">English</a>
<a class="dropdown-item" href="#"><img src="images/dashboard/flag-fr.png" alt="Français">Français</a>
<a class="dropdown-item" href="#"><img src="images/dashboard/flag-jp.png" alt="Français">Français</a>
<a class="dropdown-item" href="#"><img src="images/dashboard/flag-cn.png" alt="Français">Français</a>
</div>
</div>
<div class="dropdown pl-2 py-2">
<a href="#" class="dropdown-toggle text-heading pr-3 pr-sm-6 d-flex align-items-center justify-content-end" data-bs-toggle="dropdown">
<img src="app/images/dashboard/avatar-2.png" alt="Ronald Hunter" class="rounded-circle" width="40">
</a>
<div class="dropdown-menu dropdown-menu-end w-100">
<a class="dropdown-item" href="#">My Profile</a>
<a class="dropdown-item" href="#">Logout</a>
</div>
</div>
</div>
</nav>
</div>
</header>