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
    <title>Entrée Stock</title>
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
        <h2 class="title">Entrée en Stock</h2>
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
                     <td><input type="text" name="designation" class="inpt1" placeholder="designation..."></td>
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
                    <td><input type="date" name="dateEn" class="inpt1"></td>
                </tr>
                <tr>
                    <th class="th1">Quantité:</th>
                    <td><input type="number" name="quantite" class="inpt1" placeholder="quantite..."></td>
                </tr>
                <tr>
                    <th class="th1">Prix d'achat:</th>
                    <td><input type="text" name="prixA" class="inpt1" placeholder="prix d'achat..."></td>
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
        <?php
            $recup=$bdd->query("SELECT * FROM entreestock ORDER BY id_stock ASC LIMIT 10");
        if(isset($_GET["supp"])){
            $id_to_delete=$_GET["supp"];
            $delete=$bdd->EXEC("DELETE FROM entreestock WHERE id_stock=$id_to_delete");
        }
        
        ?>


        <div class="tab-recup">
            <h3 class="s-title1">Liste des Entrées</h3>
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
                           <td class="td2"><a href="entree.php?supp=<?php echo $data["id_stock"]?>"><i class="fas fa-trash-alt"></i></a> </td>
                           <td class="td2"><a href="modifierentree.php?mod=<?php echo $data["id_stock"]?>"><i class="far fa-edit"></i></a></td>
                          
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
    $code=$_POST["codepro"];
    $designation=$_POST["designation"];
    $categorie=$_POST["categorie"];
    $dateEn=$_POST["dateEn"];
    $quantite=$_POST["quantite"];
    $prix=$_POST["prixA"];
    $fournisseur=$_POST["fournis"];
    $insertion=$bdd->prepare("INSERT INTO entreestock(CodePro,Designation,Categorie,date_Entre,Quantite,Prix_Achat,fournisseur)VALUES(?,?,?,?,?,?,?)");
    $insertion->execute(array($code,$designation,$categorie,$dateEn,$quantite,$prix,$fournisseur));

}
?>