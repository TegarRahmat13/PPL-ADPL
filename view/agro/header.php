<?php 
session_start();
include '../../linkconfig.php';
require PATH_CONTROLLER . "controller.php";

if(isset($_POST['logout'])){

    session_destroy();
    header('location: loginAgro.php');

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="agro_style.css">
    <!--=============== BOSTRAPP ===============-->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> -->
</head>
 <!---------------- HEADER ---------------->
 <form action="" method="post" id="my form">
        <header class="header" id="header">
            <nav class="nav container">
                <div class="nav__logo">
                    <img src="../../image/Logo.png" alt="header logo" class="header_logo">
                </div>
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="homeAgro.php" class="nav__link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="#" class="nav__link">Permintaan</a>
                        </li>
                        <li class="nav__item">
                            <a href="#" class="nav__link">Forum</a>
                        </li>
                        <li class="nav__item">
                            <a href="kemitraanAgro.php" class="nav__link">Kemitraan</a>
                        </li>
                        <li class="nav__item">
                            <a href="pencatatanAgro.php" class="nav__link">Pencatatan</a>
                        </li>
                    </ul>
                </div>

                <div class="nav__icon">
                    <i class="ri-user-fill" onclick="toggleMenu()"></i>
                </div>
            </nav>
            <div class="sub-menu-wrap" id="subMenu">
                    <div class="sub-menu">
                        <div class="user-info">
                            <img src="../../asset/user.png" alt="">
                            <h2>Ilham Zamzami</h2>
                        </div>
                        <hr>

                        <ul class="sub__list">
                            <li class="sub__item">
                                <a href="updateProfilAgro.php">
                                <div class="item">
                                    <i class="ri-user-line"></i>
                                    <p>Profile</p>
                                </div>
                                </a>
                            </li>
                            <li class="sub__item">
                                <a href="#">
                                <div class="item">
                                    <i class="ri-question-line"></i><p>Status Pengajuan</p>
                                </div>    
                                </a>
                            </li>
                            <li class="sub__item">
                                <a href="melihatTabelMitra_Agro.php">
                                    <div class="item">
                                        <i class="ri-store-2-line"></i><p>Mitra</p>
                                    </div>    
                                </a>
                            </li>
                            <li class="sub__item">
                                <a href="mitraPembayaran_Agro.php">
                                <div class="item">
                                    <i class="ri-coins-line"></i><p>Pembayaran</p>
                                </div>
                                </a>
                            <hr>
                            <li class="sub__item">
                                <a href="loginAgro.php">
                                <div class="item_logout">
                                <form action="" method="POST"  style="margin: 15px;margin-top:60px;color:white;text-align:left">
                                    <button style="border:none; background:none; font-family: var(--body-font); font-size: 1.2rem;font-weight: 500;display: flex;align-items: center;gap: 1rem;" class="ri-login-box-line" name="logout" type="submit">Logout</button>
                                    <!-- <a href="#" class="dashboard-nav-item" ><i class="fas fa-sign-out-alt"></i> Logout </a> -->
                                </form>
                                    <!-- <i class="ri-login-box-line" name="logout" type="submit"></i><p>Logout</p> -->
                                </div>
                                </a>
                            </li>   
                        </ul>
                    </div>
                </div>
        </header>
            <div class="btnkembali">
                <!-- <img src="../../image/Group 105.png" alt=""> -->
            </div>
        <script>
            let subMenu = document.getElementById("subMenu");
            function toggleMenu(){
                subMenu.classList.toggle("open-menu")
            }
        </script>
    </form>