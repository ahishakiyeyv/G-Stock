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
    <title>Journal</title>
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
    <section id="section">
    <?php
            $recup=$bdd->query("SELECT * FROM entreestock ORDER BY id_stock ASC LIMIT 10");
        ?>
        <div class="journ">
            <h2 class="title-journ1">Journal d'Entrée</h2>
            <div class="tab-recup">
            <!-- <h3 class="s-title1">Liste des Entrées</h3> -->
            <fieldset class="fieldset1">
                <table>
                   <thead class="thead">
                       <tr>
                           <th class="th2">Code Produit</th>
                           <th class="th2">Designation</th>
                           <th class="th2">Categorie</th>
                           <th class="th2">Date d'Entrée</th>
                           <th class="th2">Quantite</th>
                           <th class="th2">Prix d'Achat</th>
                           <th class="th2">Fournisseur</th>
                           <th class="th2"colspan="2">Actions</th>
                       </tr>
                   </thead>
                   <tbody class="tbody">
                       <?php
                        while($data=$recup->fetch()){
                       ?>
                       <tr>
                           <td class="td2"><?php echo $data["CodePro"]?></td>
                           <td class="td2"><?php echo $data["Designation"]?></td>
                           <td class="td2"><?php echo $data["Categorie"]?></td>
                           <td class="td2"><?php echo $data["date_Entre"]?></td>
                           <td class="td2"><?php echo $data["Quantite"]?></td>
                           <td class="td2"><?php echo $data["Prix_Achat"]?></td>
                           <td class="td2"><?php echo $data["fournisseur"]?></td>
                           <td class="td2">Modifier</td>
                           <td class="td2">Supprimer</td>
                          
                       </tr>
                       <?php
                        }
                       ?>
                   </tbody>
                </table>
            </fieldset>
        </div>
        </div>
        <?php
            $recup=$bdd->query("SELECT * FROM sortiestock ORDER BY id_sortie ASC");
        ?>
        <div class="journ1">
            <h2 class="title-journ2">Journal de Sortie</h2>
            <div class="recup-sort">
            <!-- <h3 class="stitle-recup">   Produits sortie</h3> -->
            <fieldset class="fieldset3">
            <table class="table07">
                   <thead class="thead-sort">
                       <tr>
                           <th class="th2-sort">Code Produit</th>
                           <th class="th2-sort">Designation</th>
                           <th class="th2-sort">Categorie</th>
                           <th class="th2-sort">Quantite sortie</th>
                           <th class="th2-sort">Prix</th>
                           <th class="th2-sort">Date sortie</th>
                           <th class="th2-sort"colspan="2">Actions</th>
                       </tr>
                   </thead>
                   <tbody class="tbody-sort">
                       <?php
                        while($datarecup=$recup->fetch()){
                       ?>
                       <tr>
                           <td class="td-sort"><?php echo $datarecup["codepro"]?></td>
                           <td class="td-sort"><?php echo $datarecup["designation"]?></td>
                           <td class="td-sort"><?php echo $datarecup["categorie"]?></td>
                           <td class="td-sort"><?php echo $datarecup["qte_sortie"]?></td>
                           <td class="td-sort"><?php echo $datarecup["Prix_Achat"]?></td>
                           <td class="td-sort"><?php echo $datarecup["date_sortie"]?></td>
                           <td class="td-sort">Modifier</td>
                           <td class="td-sort">Supprimer</td>
                       </tr>
                       <?php
                            }
                           ?>
                   </tbody>
                </table>
            </fieldset>
        </div>
        </div>
    </section>
    </div>
</body>
</html>