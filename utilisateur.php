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
    <title>Utilisateur</title>
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
            <li><a href="dashboard.php"><i class="fas fa-tachometer-alt"></i>  --  Dashboard</a></li>
                <li><a href="entree.php"><i class="fas fa-cart-plus"></i>   --   Entrée</a></li>
                <li><a href="sortie.php"><i class="fas fa-shopping-bag"></i>  --  Sortie</a></li>
                <li><a href="produit.php"><i class="fas fa-dolly-flatbed"></i>   --   Produit </a></li>
                <li><a href="stock.php"><i class="fas fa-warehouse"></i>   --     Stock </a></li>
                <li><a href="fournisseur.php"><i class="fas fa-user-plus"></i>   --   Fournisseur</a></li>
                <li><a href="categorie.php"><i class="fas fa-sort"></i>      --   Categorie</a></li>
                <li><a href="journal.php"><i class="fas fa-newspaper"></i>   --   Journal</a></li>
                <li><a href="utilisateur.php"><i class="fas fa-users"></i>   --  Utilisateur</a></li>
                <li><a href="statistique.php"><i class="fas fa-chart-line"></i>     --    Statistique</a></li>
        </div>
    </nav>
    <section>
        <h2 class="title">Utilisateur</h2>
        <div class="users">
            <h3 class="stit-user">Ajouter un Utilisateur</h3>
            <fieldset class="fieldset9">
                <form action="" method="post">
                <table>
                <tr>
                     <th class="th-user">Nom</th>
                        <th><input type="text" name="nom" class="inpt-user"placeholder="Nom..."></th>
                    </tr>
                    <tr>
                     <th class="th-user">Prenom</th>
                        <th><input type="text" name="prenom" class="inpt-user"placeholder="Prenom..."></th>
                    </tr>
                    <tr>
                     <th class="th-user">Email</th>
                        <th><input type="text" name="email" class="inpt-user"placeholder="Email..."></th>
                    </tr>
                    <tr>
                     <th class="th-user">Adresse</th>
                        <th><input type="text" name="adresse" class="inpt-user"placeholder="Adresse..."></th>
                    </tr>
                    <tr>
                     <th class="th-user">Telephone</th>
                        <th><input type="text" name="phone" class="inpt-user"placeholder="Telephone..."></th>
                    </tr>
                    <tr>
                     <th class="th-user">Mot de Passe</th>
                        <td><input type="password" name="motdepasse" class="inpt-user" placeholder="Mot de Passe..."></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Ajouter" id="sub-user" name="submit"></td>
                   <td> <input type="reset" value="Annuler" id="res-user"></td>
                    </tr>
                </table>
                </form>
            </fieldset>
        </div>
        <?php
        $selection=$bdd->query("SELECT * FROM utilisateur ORDER BY id_util LIMIT 5");
        ?>
        <div class="recup-user">
        <h3 class="s-tituser">Liste des Utilisateurs</h3>
            <fieldset class="fieldset01">
            <table>
                    <thead class="thead-user">
                       <tr>
                       <th class="th2-user">Nom</th>
                           <th class="th2-user">Prenom</th>
                           <th class="th2-user">Email</th>
                           <th class="th2-user">Adresse</th>
                           <th class="th2-user">Telephone</th>
                           <th class="th2-user">Mot de Passe</th>
                           <th class="th2-user"colspan="3">Actions</th>
                       </tr>
                   <tbody class="tbody-user">
                   </thead>
                   <?php
                   while($dataselection=$selection->fetch()){
                   ?>
                       <tr>
                           <td class="td-user"><?php echo $dataselection["nom_util"]?></td>
                           <td class="td-user"><?php echo $dataselection["prenom_util"]?></td>
                           <td class="td-user"><?php echo $dataselection["email_util"]?></td>
                           <td class="td-user"><?php echo $dataselection["adresse_util"]?></td>
                           <td class="td-user"><?php echo $dataselection["phone_util"]?></td>
                           <td class="td-user"><?php echo $dataselection["password_util"]?></td>
                           <td class="td-user">Modifier</td>
                           <td class="td-user">Supprimer</td>
                           <td class="td-user">Activer</td>
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
        $name=$_POST["nom"];
        $surname=$_POST["prenom"];
        $mail=$_POST["email"];
        $adresse=$_POST["adresse"];
        $phone=$_POST["phone"];
        $password=$_POST["motdepasse"];
        $insertion=$bdd->prepare("INSERT INTO utilisateur(nom_util,prenom_util,email_util,adresse_util,phone_util,password_util)VALUES(?,?,?,?)");
        $insertion->execute(array($name,$surname,$mail,$adresse,$phone,$password));
    }
?>