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
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Modifier Utilisateur</title>
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
    if(isset($_GET["mod"])){
        $select=$bdd->query("SELECT * FROM utilisateur WHERE id_util=".$_GET["mod"]."");
        $datasel=$select->fetch();
    }
    ?>
    <section id="section">
    <div class="users">
            <h3 class="stit-user">Modifier un Utilisateur</h3>
            <fieldset class="fieldset9">
                <form action="" method="post">
                <table>
                <tr>
                     <th class="th-user">Nom</th>
                        <th><input type="text" name="nom" class="inpt-user"placeholder="Nom..." value="<?php echo $datasel["nom_util"]?>" ></th>
                    </tr>
                    <tr>
                     <th class="th-user">Prenom</th>
                        <th><input type="text" name="prenom" class="inpt-user"placeholder="Prenom..." value="<?php echo $datasel["prenom_util"]?>"></th>
                    </tr>
                    <tr>
                     <th class="th-user">Email</th>
                        <th><input type="text" name="email" class="inpt-user"placeholder="Email..." value="<?php echo $datasel["email_util"]?>" required></th>
                    </tr>
                    <tr>
                     <th class="th-user">Adresse</th>
                        <th><input type="text" name="adresse" class="inpt-user"placeholder="Adresse..." value="<?php echo $datasel["adresse_util"]?>"></th>
                    </tr>
                    <tr>
                     <th class="th-user">Telephone</th>
                        <th><input type="text" name="phone" class="inpt-user"placeholder="Telephone..." value="<?php echo $datasel["phone_util"]?>"></th>
                    </tr>
                    <tr>
                     <th class="th-user">Mot de Passe</th>
                        <td><input type="password" name="motdepasse" class="inpt-user" placeholder="Mot de Passe..." value="<?php echo $datasel["password_util"]?>" required></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Modifier" id="sub-user" name="submit"></td>
                   <td> <input type="reset" value="Annuler" id="res-user"></td>
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
    $name=$_POST["nom"];
    $surname=$_POST["prenom"];
    $mail=$_POST["email"];
    $adresse=$_POST["adresse"];
    $phone=$_POST["phone"];
    $password=$_POST["motdepasse"];
    $update=$bdd->EXEC("UPDATE utilisateur SET nom_util='$name',prenom_util='$surname',email_util='$mail',adresse_util='$adresse',phone_util='$phone',password_util='$password' WHERE id_util=".$_GET["mod"]."");
    header("location:utilisateur.php");
    ob_end_flush();
}
?>