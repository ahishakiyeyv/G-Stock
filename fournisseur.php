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
    <title>Fournisseur</title>
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
                   <tbody class="tbody-fourn">
                   <?php
                   while($dataselect=$select->fetch()){
                   ?>
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