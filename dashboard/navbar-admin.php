<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
     <!-- bootstrap -->
    <link rel="stylesheet" href="../assets/app/css/bootstrap.min.css">
	<!-- font awesome -->
    <link rel="stylesheet" href="../assets/icons/css/font-awesome.css"> 
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="../assets/style.css">


        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../template/assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../template/css/styles.css" rel="stylesheet"/>
</head>
<body>

<!-- Area NAvbar dan Side Bar -->

<div class="d-flex" id="wrapper">

<!-- Sidebar-->
<div class="bg-dark border-end bg-white" id="sidebar-wrapper">
    <div class="sidebar-heading border-bottom bg text-white">
        SideBar
    </div>
    <div class="list-group list-group-flush">
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="index_admin.php">Dashboard</a>

        
        <a class="list-group-item p-3" style="background-color: #27374D; color:#ffffff;" href="#!">Setting</a>
        <a class="list-group-item p-3" style="background-color: #27374D; color:#ffffff;" href="#!">Dukungan</a>
    </div>
</div>

<!-- Area atas-->
<div id="page-content-wrapper">
    <!-- Navigasi Atas-->
    <nav class=" bg navbar navbar-expand-lg border-bottom">
                    <div class="container-fluid">
                        <button class="btn text-white " id="sidebarToggle">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                            <style>svg{fill:#ffffff}</style>
                            <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/>
                        </svg>
                        </button>
                        <button class="navbar-toggler text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                            <style>svg{fill:#ffffff}</style><path d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z"/>
                        </svg></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0 nav nav-pills">
                                <li class="nav-item active"><a class="nav-link text-white"  href="#data">Data</a></li>
                                <li class="nav-item active"><a class="nav-link text-white"  href="#tabel_tidakhadir">Tabel Tidak Hadir</a></li>
                                <li class="nav-item active"><a class="nav-link text-white"  href="#tabel_izinpulang">Tabel Izin Pulang</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-white" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Akun</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item text-dark" href="setting_akun.php">Setting data Akun</a>
                                        <a class="dropdown-item text-dark" href="#!">Ubah Password</a>
                                        <a class="dropdown-item text-dark" href="login.php">LogOut</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

