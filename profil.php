<?php
include("database.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/03.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Mon Profil</title>
</head>
<body id="container">
<header>
        <div class="admin">
            <div class="img">
                <!-- <img src="images/2.jpg" alt="Image non disponible" height="75" width="75" class="img-admin"> -->
            </div>
            <div class="txt">
                <!-- <h3 class="adm">Admin</h3>
                <p class="prof"><a href="profil.php" class="voir">voir profil</a></p> -->
            </div>
            </div>
            <div class="log-out">
                <!-- <a href="index.php" class="decon">Log-out   <i class="fas fa-power-off"></i></a> -->
            </div>
        
    </header>
    <div id="boody">
    <nav>
        <div class="menu-link">
            <ul class="ul">
            <li class="li"><a class="link" href="dashboard.php"><i class="fas fa-tachometer-alt"></i>  --  Dashboard</a></li>
                <li class="li"><a class="link" href="entree.php"><i class="fas fa-cart-plus"></i>   --   Entrée</a></li>
                <li class="li"><a class="link" href="sortie.php"><i class="fas fa-shopping-bag"></i>  --  Sortie</a></li>
                <li class="li"><a class="link" href="produit.php"><i class="fas fa-dolly-flatbed"></i>   --   Produit </a></li>
                <li class="li"><a class="link" href="stock.php"><i class="fas fa-warehouse"></i>   --     Stock </a></li>
                <li class="li"><a class="link" href="fournisseur.php"><i class="fas fa-user-plus"></i>   --   Fournisseur</a></li>
                <li class="li"><a class="link" href="categorie.php"><i class="fas fa-sort"></i>      --   Categorie</a></li>
                <li class="li"><a class="link" href="journal.php"><i class="fas fa-newspaper"></i>   --   Journal</a></li>
                <li class="li"><a class="link" href="utilisateur.php"><i class="fas fa-users"></i>   --  Utilisateur</a></li>
                <li class="li"><a class="link" href="statistique.php"><i class="fas fa-chart-line"></i>     --    Statistique</a></li>
        </div>
    </nav>
    <section id="section">
        <div class="contain">
            <div class="img-prof">
                <img src="images/2.jpg" alt="images non disponible" class="img-contain">
            </div>
            <div class="desc">
                <div class="description">
                    <p class="desc1">BONJOUR, JE M'APPELLE</p>
                    <h3 class="admin-name">Admin</h3>
                    <h5>Developpeur Web & Application <span class="badge bg-secondary">My Job</span></h5>
                    <ul class="ule">
                        <li class="lii">EMAIL:</li>
                        <li class="lii">ADRESSE:</li>
                        <li class="lii">TELEPHONE:</li>
                    </ul>
                    <p class="lin"></p>
                </div>
            </div>
        </div>
    </section>
    </div>
</body>
</html>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>