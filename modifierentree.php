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
    <title>Modifier Entree</title>
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
            if(isset($_GET["mod"])){
                $id_to_update=$_GET["mod"];
                $select=$bdd->query("SELECT * FROM entreestock WHERE id_stock=".$_GET["mod"]);
                $dataselect=$select->fetch();
            }
        ?>
    <div class="tabl1">
           <h3 class="s-title">Ajouter un produit</h3>
           <fieldset  class="table1">
               <form action="" method="post">
            <table>
                <tr>
                     <th class="th1">Code Produit:</th>
                     <td>
                         <select name="codepro" class="inpt1"> 
                         <option value="">---Code Produit---</option>
                         <?php 
                         
                        $reponse=$bdd->query("SELECT CodePro FROM produit ORDER BY id_pro ASC");
                        while($data=$reponse->fetch()){
                            ?>
                            
                            <option value="<?php echo $data["CodePro"]?>"><?php echo $data["CodePro"]?></option>
                            <?php
                        }
                        ?>
                     <!-- <input type="text" name="codepro" class="inpt1" placeholder="code produit..."> -->
                     
                  
                     </select>
                     </td>
                </tr>
                <tr>
                     <th class="th1">Designation:</th>
                     <td><input type="text" name="designation" class="inpt1" placeholder="designation..." value="<?php echo $dataselect["Designation"]?>"></td>
                </tr>
                <tr>
                     <th class="th1">Categorie:</th>
                    <td>
                        <select name="categorie" class="inpt1">
                            <option value="">---Categorie---</option>
                        <?php
                        $req=$bdd->query("SELECT nom_cat FROM categorie ORDER BY id_cat ASC");
                        while($data=$req->fetch()){
                        ?>
                        <option value="<?php echo $data["nom_cat"]?>"><?php echo $data["nom_cat"]?></option>
                        <?php
                        }
                        ?>
                        </select>
                    <!-- <input type="text" name="categorie" class="inpt1" placeholder="categorie..."></td> -->
                </tr>
                <tr>
                    <th class="th1">Date d'Entrée:</th>
                    <td><input type="date" name="dateEn" class="inpt1" value="<?php echo $dataselect["date_Entre"]?>"></td>
                </tr>
                <tr>
                    <th class="th1">Quantité:</th>
                    <td><input type="number" name="quantite" class="inpt1" placeholder="quantite..." value="<?php echo $dataselect["Quantite"]?>"></td>
                </tr>
                <tr>
                    <th class="th1">Prix d'achat:</th>
                    <td><input type="text" name="prixA" class="inpt1" placeholder="prix d'achat..." value="<?php echo $dataselect["Prix_Achat"]?>"></td>
                </tr>
                <tr>
                    <th class="th1">Fournisseur:</th>
                    <td>
                    <select name="fournis" class="inpt1">
                        <option value="">---Fournisseur---</option>
                        <?php
                        $rep=$bdd->query("SELECT nom_fourn FROM fournisseur ORDER BY id_fourn");
                        while($data=$rep->fetch()){
                        ?>
                        <option value="<?php echo $data["nom_fourn"]?>"><?php echo $data["nom_fourn"]?></option>
                            <?php
                        }
                            ?>
                    </select>    
                    <!-- <input type="text" name="" class="inpt1" placeholder="fournisseur..."> -->
                
                </td>
                </tr>
                <tr>
                    <th></th>
                    <td><input type="submit" value="Ajouter" id="sub1" name="submit">
                    <input type="reset" value="Annuler" id="res1"></td>
                </tr>
            </table>
            </form>
            </fieldset>
        </div>
    </section>
    </div>
</body>
</html>
<?php
if(isset($_POST["submit"])){
    $code=$_POST["codepro"];
    $designation=$_POST["designation"];
    $categorie=$_POST["categorie"];
    $date=$_POST["dateEn"];
    $quantite=$_POST["quantite"];
    $prix=$_POST["prixA"];
    $fournisseur=$_POST["fournis"];
    $update=$bdd->EXEC("UPDATE entreestock SET CodePro='$code', Designation='$designation', Categorie='$categorie' , date_Entre='$date' , Quantite='$quantite' , Prix_Achat='$prix' , fournisseur='$fournisseur' WHERE id_stock=".$_GET["mod"]."");
    header("location:entree.php");
}
?>