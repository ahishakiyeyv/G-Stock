<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <li><a href="stock.php">Stock   <i class="fas fa-warehouse"></i></a></li>
                <li><a href="fournisseur.php">Fournisseur     <i class="fas fa-user-plus"></i></a></li>
                <li><a href="categorie.php">Categorie     <i class="fas fa-sort"></i></a></li>
                <li><a href="journal.php">Journal     <i class="fas fa-newspaper"></i></a></li>
                <li><a href="utilisateur.php">Utilisateur     <i class="fas fa-users"></i></a></li>
                <li><a href="statistique.php">Statistique    <i class="fas fa-chart-line"></i></a></li>
        </div>
    </nav>
    <section>
        <h2 class="title-cat">Categorie</h2>
        <div class="categ">
            <h3 class="s-titcat">Ajouter une Categorie</h3>
            <fieldset class="fieldset7">
                <form action="" method="post">
                <table>
                    <tr>
                     <th class="th-cat">Nouvelle Categorie</th>
                   
                        <th><input type="text" name="" class="inpt-cat"placeholder="Nouvelle categorie..."></th>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Ajouter" id="sub-cat"></td>
                   <td> <input type="reset" value="Annuler" id="res-cat"></td>
                    </tr>
                </table>
                </form>
            </fieldset>
        </div>
        <div class="recup-cat">
            <h3 class="s-titcat2">Liste des categories</h3>
            <fieldset class="fieldset8">
            <table>
                    <thead class="thead-cat">
                       <tr>
                           <th class="th2-cat">Nom Categorie</th>
                           <th class="th2-cat"colspan="2">Actions</th>
                       </tr>
                   </thead>
                   <tbody class="tbody-cat">
                       <tr>
                           <td class="td-cat"></td>
                           <td class="td-cat"></td>
                           <td class="td-cat"></td>
                       </tr>
                   </tbody>
                    </table>
            </fieldset>
        </div>
    </section>
    </div>
</body>
</html>