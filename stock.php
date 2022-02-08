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
                <h3 class="adm">Admin</h3>
                <p class="prof"><a href="profil.php" class="voir">voir profil</a></p>
            </div>
            </div>
            <div class="log-out">
                <a href="index.php" class="decon">Log-out   <i class="fas fa-power-off"></i></a>
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
    <?php
    $stock=$bdd->query("SELECT * FROM entreestock ORDER BY id_stock");
    // $stock=$bdd->query("SELECT E.CodePro,E.Categorie,E.Quantite,E.Prix_Achat,P.*,S.* FROM produit P,entreestock E,sortiestock S WHERE E.CodePro=P.CodePro AND S.codepro=P.codepro");
    // $stockee=$bdd->query("SELECT qte_stock FROM stock");
    // $entree=$bdd->query("SELECT Quantite FROM entreestock");
    // $sortie=$bdd->query("SELECT qte_sortie FROM sortiestock");
    if(isset($_GET["supp"])){
        $id=$_GET["supp"];
        $delete=$bdd->EXEC("DELETE FROM stock WHERE idstock=$id");
        
    }
    ?>
    <section id="section">
        <h2 class="title-stock">En Stock</h2>
        <div class="table-stock">
            <h3 class="titlestock">Liste des produits en stock</h3>
            <fieldset class="fieldset4">
            <table class="table04">
                   <thead class="thead-stock">
                       <tr>
                           <th class="th-stock">Code Produit</th>
                           <th class="th-stock">Designation</th>
                           <th class="th-stock">Categorie</th>
                           <th class="th-stock">Quantite</th>
                           <th class="th-stock">Prix de Vente</th>
                           <th class="th-stock">Prix de Vente Total</th>
                           <th class="th-stock" colspan="2">Actions</th>
                       </tr>
                   </thead>
                   <tbody class="tbody-stock">
                       <?php
                       (int)$total=0;
                       while($datastock=$stock->fetch()){
                         (int)$prix=$datastock["Prix_Achat"];
                       (int)$total += $datastock["Quantite"] * (int)$prix;
                       ?>
                       <tr>
                           <td class="td-stock"><?php echo $datastock["CodePro"]?></td>
                           <td class="td-stock"><?php echo $datastock["Designation"]?></td>
                           <td class="td-stock"><?php echo $datastock["Categorie"]?></td>
                           <td class="td-stock"><?php echo $datastock["Quantite"]?></td>
                           <td class="td-stock"><?php echo $datastock["Prix_Achat"]?></td>
                           <td class="td-stock"><?php echo $datastock["Quantite"] * (int)$prix?></td>
                           <!-- <td class="td-stock"><a href="stock.php?supp=<?php echo $datastock["idstock"]?>">Supprimer</a></td> -->
                           <td class="td-stock">Modifier</td>
                           <td class="td-stock">Vendre</td>
                       </tr>
                       <?php
                       }
                       ?>
                       <tr>
                           <td class="td-stocke">Total:</td>
                           <td class="td-stock"></td>
                           <td class="td-stock"></td>
                           <td class="td-stock"></td>
                           <td class="td-stock"></td>
                           <td class="td-stocke"><?php echo (int)$total?></td>
                           <td class="td-stock"></td>
                           <td class="td-stock"></td>
                       </tr>
                       
                   </tbody>
                </table>
            </fieldset>
        </div>
    </section>
    </div>
</body>
</html>