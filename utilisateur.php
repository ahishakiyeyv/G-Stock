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
                           <th class="th2-user">Mot de Passe</th>
                           <th class="th2-user"colspan="3">Actions</th>
                       </tr>
                   </thead>
                   <?php
                   while($dataselection=$selection->fetch()){
                   ?>
                   <tbody class="tbody-user">
                       <tr>
                           <td class="td-user"><?php echo $dataselection["nom_util"]?></td>
                           <td class="td-user"><?php echo $dataselection["prenom_util"]?></td>
                           <td class="td-user"><?php echo $dataselection["email_util"]?></td>
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
        $password=$_POST["motdepasse"];
        $insertion=$bdd->prepare("INSERT INTO utilisateur(nom_util,prenom_util,email_util,password_util)VALUES(?,?,?,?)");
        $insertion->execute(array($name,$surname,$mail,$password));
    }
?>