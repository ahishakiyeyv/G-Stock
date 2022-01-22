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
    <link rel="stylesheet" href="css/styles.css">
    <title>Fournisseur</title>
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
        <h2 class="title-four">Fournisseur</h2>
        <div class="fourniss">
            <h3 class="s-titFourn">Ajouter un Fournisseur</h3>
            <fieldset class="fieldset5">
                <form action="" method="post">
                <table>
                    <tr>
                        <th class="th-fourn">Nom</th>
                        <td><input type="text" name="nomfourn" class="inpt-fourn" placeholder="Nom..."></td>
                    </tr>
                    <tr>
                        <th class="th-fourn">Prenom</th>
                        <td><input type="text" name="prenomfourn" class="inpt-fourn" placeholder="Prenom..."></td>
                    </tr>
                    <tr>
                        <th class="th-fourn">Addresse</th>
                        <td><input type="text" name="adressefourn" class="inpt-fourn" placeholder="Addresse..."></td>
                    </tr>
                    <tr>
                        <th class="th-fourn">Telephone</th>
                        <td><input type="text" name="telephonefourn" class="inpt-fourn" placeholder="Telephone..."></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td><input type="submit" value="Enregistrer" id="sub-fourn" name="submit">
                        <input type="reset" value="Annuler" id="res-fourn"></td>
                    </tr>
                </table>
                </form>
            </fieldset>
        </div>
<?php
$select=$bdd->query("SELECT * FROM fournisseur ORDER BY id_fourn ASC LIMIT 5");
?>
        <div class="recup-fourn">
            <h3 class="stit-fourn">Liste des Fournisseurs</h3>
            <fieldset class="fieldset6">
                    <table>
                    <thead class="thead-fourn">
                       <tr>
                           <th class="th2-fourn">Nom</th>
                           <th class="th2-fourn">Prenom</th>
                           <th class="th2-fourn">Addresse</th>
                           <th class="th2-fourn">Telephone</th>
                           <th class="th2-fourn"colspan="2">Actions</th>
                       </tr>
                   </thead>
                   <?php
                   while($dataselect=$select->fetch()){
                   ?>
                   <tbody class="tbody-fourn">
                       <tr>
                           <td class="td-fourn"><?php echo $dataselect["nom_fourn"]?></td>
                           <td class="td-fourn"><?php echo $dataselect["prenom_fourn"]?></td>
                           <td class="td-fourn"><?php echo $dataselect["addresse_fourn"]?></td>
                           <td class="td-fourn"><?php echo $dataselect["telephone_fourn"]?></td>
                           <td class="td-fourn">Modifier</td>
                           <td class="td-fourn">supprimer</td>
                           
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
    $name=$_POST["nomfourn"];
    $prenom=$_POST["prenomfourn"];
    $addresse=$_POST["adressefourn"];
    $phone=$_POST["telephonefourn"];
    $insert=$bdd->prepare("INSERT INTO fournisseur(nom_fourn,prenom_fourn,addresse_fourn,telephone_fourn)VALUES(?,?,?,?)");
    $insert->execute(array($name,$prenom,$addresse,$phone));
}
?>