<?php
ob_start();
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
    <title>Modifier Fournisseur</title>
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
            $select=$bdd->query("SELECT * FROM fournisseur WHERE id_fourn=".$_GET["mod"]."");
            $dataupdate=$select->fetch();
        }
        ?>
    <div class="fourniss">
            <h3 class="s-titFourn">Modifier un Fournisseur</h3>
            <fieldset class="fieldset5">
                <form action="" method="post">
                <table>
                    <tr>
                        <th class="th-fourn">Nom</th>
                        <td><input type="text" name="nomfourn" class="inpt-fourn" placeholder="Nom..." value="<?php echo $dataupdate["nom_fourn"]?>"></td>
                    </tr>
                    <tr>
                        <th class="th-fourn">Prenom</th>
                        <td><input type="text" name="prenomfourn" class="inpt-fourn" placeholder="Prenom..." value="<?php echo $dataupdate["prenom_fourn"]?>"></td>
                    </tr>
                    <tr>
                        <th class="th-fourn">Addresse</th>
                        <td><input type="text" name="adressefourn" class="inpt-fourn" placeholder="Addresse..." value="<?php echo $dataupdate["addresse_fourn"]?>"></td>
                    </tr>
                    <tr>
                        <th class="th-fourn">Telephone</th>
                        <td><input type="text" name="telephonefourn" class="inpt-fourn" placeholder="Telephone..." value="<?php echo $dataupdate["telephone_fourn"]?>"></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td><input type="submit" value="Modifier" id="sub-fourn" name="submit">
                        <input type="reset" value="Annuler" id="res-fourn"></td>
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
    $name=$_POST["nomfourn"];
    $surname=$_POST["prenomfourn"];
    $adresse=$_POST["adressefourn"];
    $phone=$_POST["telephonefourn"];
    $update=$bdd->EXEC("UPDATE fournisseur SET nom_fourn='$name',prenom_fourn='$surname',addresse_fourn='$adresse',telephone_fourn='$phone' WHERE id_fourn=".$_GET["mod"]."");
    header("location:fournisseur.php");
    ob_end_flush();
}
?>