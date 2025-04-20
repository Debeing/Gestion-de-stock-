<?php

include_once'../model/fonction.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=logout" />
    
    <title>Admin Dashboard</title>
</head>
<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus icon'></i>
            <span class="logo_name">Debeing</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="../vue/dashboard.php" class="active">
                    <i class="bx bx-grid-alt"></i>
                    <span class="links-name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="../vue/article.php" class="active">
                    <i class="bx bx-box"></i>
                    <span class="links-name">Article</span>
                </a>
            </li>
            <li>
                <a href="#" class="active">
                    <i class="bx bx-list-ul"></i>
                    <span class="links-name">Vente</span>
                </a>
            </li>
            <li>
                <a href="client.php" class="active">
                    <i class="bx bx-pie-chart-alt-2"></i>
                    <span class="links-name">Client</span>
                </a>
            </li>
            <li>
                <a href="#" class="active">
                <i class='bx bx-cart-download'></i>
                    <span class="links-name">Fournisseur</span>
                </a>
            </li>
            <li>
                <a href="#" class="active">
                    <i class="bx bx-grid-alt"></i>
                    <span class="links-name">Commandes</span>
                </a>
            </li>
            <li>
                <a href="#" class="active">
                    <i class='bx bx-user'></i>
                    <span class="links-name">Utilisateur</span>
                </a>
            </li>
            <li>
                <a href="#" class="active">
                    <i class='bx bx-cog'></i>
                    <span class="links-name">Configuration</span>
                </a>
            </li>
        </ul>
        <div class="logout-details">
        <a href="#" class="active">
            <span class="links-name" id="logout">Déconnexion</span>
        </a>
    </div>
    </div>
   <section class="home-section">
        <nav class="navbar">
             <a href="#" class="active">
                 <i class="bx bx-menu"></i>
                 <span class="Dash">Dashboard</span>
             </a>
             <input class="input" type="text" placeholder="Recherche...">
             <select name="user" id="user" class="user">
                 <option value="" class="user">Eric</option>
                 <option value="option1" class="user">Option 1</option>
                 <option value="option2" class="user">Option 2</option>
             </select>
        </nav>