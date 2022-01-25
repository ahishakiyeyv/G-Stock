<?php
include("database.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Sortie Stock</title>
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
                <li><a href="dashboard.php">Dashboard    <i class="fas fa-tachometer-alt"></i></a></li>
                <li><a href="entree.php">Entrée    <i class="fas fa-cart-plus"></i></a></li>
                <li><a href="sortie.php">Sortie    <i class="fas fa-shopping-bag"></i></a></li>
                <li><a href="produit.php">Produit    <i class="fas fa-dolly-flatbed"></i></a></li>
                <li><a href="stock.php">Stock   <i class="fas fa-warehouse"></i></a></li>
                <li><a href="fournisseur.php">Fournisseur     <i class="fas fa-user-plus"></i></a></li>
                <li><a href="categorie.php">Categorie     <i class="fas fa-sort"></i></a></li>
                <li><a href="journal.php">Journal     <i class="fas fa-newspaper"></i></a></li>
                <li><a href="utilisateur.php">Utilisateur     <i class="fas fa-users"></i></a></li>
                <li><a href="statistique.php">Statistique    <i class="fas fa-chart-line"></i></a></li>
        </div>
    </nav>
    <section>
        <h2 class="title-sort">Sortie Stock</h2>
        <div class="table2">
            <h3 class="stitle-sort">Produit sortie</h3>
            <fieldset class="fieldset2">
                <form action="" method="post">
                <table>
                    <tr>
                        <th class="th-sort">Code Produit</th>
                        <td>
                            <select name="code" class="inpt-sort">
                            <option value="">---code produit---</option>
                                <?php 
                                $req=$bdd->query("SELECT CodePro FROM produit ORDER BY id_pro");
                                while($data=$req->fetch()){
                                ?>
                                <option value="<?php echo $data["CodePro"]?>"><?php echo $data["CodePro"]?></option>
                                <?php 
                                }
                                ?>

                            </select>
                            <!-- <input type="text" name="" class="inpt-sort" placeholder="code produit..."> -->
                        </td>
                    </tr>
                    <tr>
                        <th class="th-sort">Designation</th>
                        <td><input type="text" name="designa" class="inpt-sort" placeholder="designation..."></td>
                    </tr>
                    <tr>
                        <th class="th-sort">Categorie</th>
                        <td>
                            <select name="categorie" class="inpt-sort">
                            <option value="">---categorie---</option>
                                <?php 
                                $req=$bdd->query("SELECT nom_cat FROM categorie ORDER BY id_cat");
                                while($datareq=$req->fetch()){
                                ?>
                                <option value="<?php echo $datareq["nom_cat"]?>"><?php echo $datareq["nom_cat"]?></option>
                                <?php 
                                }
                                ?>
                            </select>
                            <!-- <input type="text" name="" class="inpt-sort" placeholder="categorie..."> -->
                        </td>
                    </tr>
                    <tr>
                        <th class="th-sort">Quantite sortie</th>
                        <td><input type="number" name="qtesortie" class="inpt-sort" placeholder="quantite sortie..."></td>
                    </tr>
                    <tr>
                        <th class="th-sort">Prix</th>
                        <td><input type="text" name="prixachat" class="inpt-sort" placeholder="prix..."></td>
                    </tr>
                    <tr>
                        <th class="th-sort">Date sortie</th>
                        <td><input type="date" name="datesortie" class="inpt-sort"></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td><input type="submit" value="Enregistrer" id="btn-sub"name="submit">
                        <input type="reset" value="Annuler" id="btn-reset"></td>
                    </tr>
                </table>
                </form>
            </fieldset>
        </div>
        <?php
            $recup=$bdd->query("SELECT * FROM sortiestock ORDER BY id_sortie ASC");
        ?>
        <div class="recup-sort">
            <h3 class="stitle-recup">   Produits sortie</h3>
            <fieldset class="fieldset3">
            <table>
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
                           <?php
                            }
                           ?>
                           
                       </tr>
                   </tbody>
                </table>
            </fieldset>
        </div>
        <div class="print">
            <a href="#" class="printed">Imprimer le facture</a>
        </div>
    </section>
    </div>
</body>
</html>
<?php
    if(isset($_POST["submit"])){
        $code=$_POST["code"];
        $designat=$_POST["designa"];
        $categorie=$_POST["categorie"];
        $qtesortie=$_POST["qtesortie"];
        $prixachat=$_POST["prixachat"];
        $datesortie=$_POST["datesortie"];
        $insert=$bdd->prepare("INSERT INTO sortiestock(codepro,designation,categorie,qte_sortie,Prix_Achat,date_sortie)VALUES(?,?,?,?,?,?)");
        $insert->execute(array($code,$designat,$categorie,$qtesortie,$prixachat,$datesortie));
    }
?>