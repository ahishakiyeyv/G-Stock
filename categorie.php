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
    <link rel="stylesheet" href="css/styles.css">
    <title>Categorie</title>
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
                <li class="li"><a class="link" href="entree.php"><i class="fas fa-cart-plus"></i>  --  Entrée</a></li>
                <li class="li"><a class="link" href="sortie.php"><i class="fas fa-shopping-bag"></i>  --  Sortie</a></li>
                <li class="li"><a class="link" href="produit.php"><i class="fas fa-dolly-flatbed"></i>  --  Produit </a></li>
                <li class="li"><a class="link" href="stock.php"><i class="fas fa-warehouse"></i>  --  Stock </a></li>
                <li class="li"><a class="link" href="fournisseur.php"><i class="fas fa-user-plus"></i>  --  Fournisseur</a></li>
                <li class="li"><a class="link" href="categorie.php"><i class="fas fa-sort"></i>  --  Categorie</a></li>
                <li class="li"><a class="link" href="journal.php"><i class="fas fa-newspaper"></i>  --  Journal</a></li>
                <li class="li"><a class="link" href="utilisateur.php"><i class="fas fa-users"></i>  --  Utilisateur</a></li>
                <li class="li"><a class="link" href="statistique.php"><i class="fas fa-chart-line"></i>  --  Statistique</a></li>
        </div>
    </nav>
    <section id="section">
        <h2 class="title-cat">Categorie</h2>
        <div class="categ">
            <h3 class="s-titcat">Ajouter une Categorie</h3>
            <fieldset class="fieldset7">
                <form action="" method="post">
                <table>
                    <tr>
                     <th class="th-cat">Nouvelle Categorie:   </th>
                   
                        <th><input type="text" name="categorie" class="inpt-cat" placeholder="Nouvelle categorie..."></th>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Ajouter" id="sub-cat" name="submit"></td>
                   <td> <input type="reset" value="Annuler" id="res-cat"></td>
                    </tr>
                </table>
                </form>
            </fieldset>
        </div>
        <?php
        $select=$bdd->query("SELECT * FROM categorie ORDER BY id_cat ASC LIMIT 5");
        if(isset($_GET["supp"])){
            $id_to_delete=$_GET["supp"];
            $delete=$bdd->EXEC("DELETE FROM categorie WHERE id_cat=$id_to_delete");
        }
        ?>
        <div class="recup-cat">
            <h3 class="s-titcat2">Liste des categories</h3>
            <fieldset class="fieldset8">
            <table class="table06">
                    <thead class="thead-cat">
                       <tr>
                           <th class="th2-cat">Nom Categorie</th>
                           <th class="th2-cat"colspan="2">Actions</th>
                       </tr>
                   </thead>
                   <tbody class="tbody-cat">
                   <?php
                   while($dataselect=$select->fetch()){
                   ?>
                       <tr>
                           <td class="td-cat"><?php echo $dataselect["nom_cat"];?></td>
                           <td class="td-cat"><a class="btn-upd" href="modifiercat.php?mod=<?php echo $dataselect["id_cat"]?>"><i class="far fa-edit"></i>Modifier</a></td>
                           <td class="td-cat"><a class="btn-sup" href="categorie.php?supp=<?php echo $dataselect["id_cat"]?>"><i class="fas fa-trash-alt"></i>Supprimer</a></td>
                           
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
<?php
if(isset($_POST["submit"])){
    $categorie=$_POST["categorie"];
    $insert=$bdd->prepare("INSERT INTO categorie(nom_cat)VALUES(?)");
    $insert->execute(array($categorie));
}
?>