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
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Stock</title>
</head>
<body>
    <header>
        <div class="admin">
            <div class="img">
                <img src="images/2.jpg" alt="Image non disponible" height="75" width="75" class="img-admin">
            </div>
            <div class="txt">
                <h3>Admin</h3>
                <p><a href="#" class="voir">voir profil</a></p>
            </div>
            </div>
            <div class="log-out">
                <a href="index.php" class="decon">Log-out   <i class="fas fa-power-off"></i></a>
            </div>
        
    </header>
    <div id="boody">
    <nav>
        <div class="menu-link">
            <ul>
            <li><a href="dashboard.php"><i class="fas fa-tachometer-alt"></i>  --  Dashboard</a></li>
                <li><a href="entree.php"><i class="fas fa-cart-plus"></i>   --   Entrée</a></li>
                <li><a href="sortie.php"><i class="fas fa-shopping-bag"></i>  --  Sortie</a></li>
                <li><a href="produit.php"><i class="fas fa-dolly-flatbed"></i>   --   Produit </a></li>
                <li><a href="stock.php"><i class="fas fa-warehouse"></i>   --     Stock </a></li>
                <li><a href="fournisseur.php"><i class="fas fa-user-plus"></i>   --   Fournisseur</a></li>
                <li><a href="categorie.php"><i class="fas fa-sort"></i>      --   Categorie</a></li>
                <li><a href="journal.php"><i class="fas fa-newspaper"></i>   --   Journal</a></li>
                <li><a href="utilisateur.php"><i class="fas fa-users"></i>   --  Utilisateur</a></li>
                <li><a href="statistique.php"><i class="fas fa-chart-line"></i>     --    Statistique</a></li>
        </div>
    </nav>
    <?php
    $stock=$bdd->query("SELECT E.*,S.* FROM entreestock E, sortiestock S WHERE CodePro=codepro");
    ?>
    <section>
        <h2 class="title-stock">En Stock</h2>
        <div class="table-stock">
            <h3 class="titlestock">Liste des produits en stock</h3>
            <fieldset class="fieldset4">
            <table>
                   <thead class="thead-stock">
                       <tr>
                           <th class="th-stock">Code Produit</th>
                           <th class="th-stock">Designation</th>
                           <th class="th-stock">Categorie</th>
                           <th class="th-stock">Quantite</th>
                           <th class="th-stock">Prix</th>
                           <th class="th-stock">Date</th>
                           <th class="th-stock" colspan="2">Actions</th>
                       </tr>
                   </thead>
                   <tbody class="tbody-stock">
                       <?php
                       while($datastock=$stock->fetch()){
                       ?>
                       <tr>
                           <td class="td-stock"><?php echo $datastock[""]?></td>
                           <td class="td-stock"></td>
                           <td class="td-stock"></td>
                           <td class="td-stock"></td>
                           <td class="td-stock"></td>
                           <td class="td-stock"></td>
                           <td class="td-stock"></td>
                           <td class="td-stock"></td>
                       </tr>
                       <?php
                       }
                       ?>
                   </tbody>
                </table>
            </fieldset>
        </div>
    </section>
    </div>
</body>
</html>