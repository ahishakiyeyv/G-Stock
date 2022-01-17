<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <li><a href="#">Dashboard    <i class="fas fa-tachometer-alt"></i></a></li>
                <li><a href="#">Entrée    <i class="fas fa-cart-plus"></i></a></li>
                <li><a href="#">Sortie    <i class="fas fa-shopping-bag"></i></a></li>
                <li><a href="#">Stock   <i class="fas fa-warehouse"></i></a></li>
                <li><a href="#">Fournisseur     <i class="fas fa-user-plus"></i></a></li>
                <li><a href="#">Categorie     <i class="fas fa-sort"></i></a></li>
                <li><a href="#">Journal     <i class="fas fa-newspaper"></i></a></li>
                <li><a href="#">Utilisateur     <i class="fas fa-users"></i></a></li>
                <li><a href="#">Statistique    <i class="fas fa-chart-line"></i></a></li>
        </div>
    </nav>
    <section>
        <h2 class="title-four">Fournisseur</h2>
        <div class="fourniss">
            <h3 class="s-titFourn">Ajouter un Fournisseur</h3>
            <fieldset class="fieldset5">
                <table>
                    <tr>
                        <th class="th-fourn">Nom</th>
                        <td><input type="text" name="" class="inpt-fourn" placeholder="Nom..."></td>
                    </tr>
                    <tr>
                        <th class="th-fourn">Prenom</th>
                        <td><input type="text" name="" class="inpt-fourn" placeholder="Prenom..."></td>
                    </tr>
                    <tr>
                        <th class="th-fourn">Addresse</th>
                        <td><input type="text" name="" class="inpt-fourn" placeholder="Addresse..."></td>
                    </tr>
                    <tr>
                        <th class="th-fourn">Telephone</th>
                        <td><input type="text" name="" class="inpt-fourn" placeholder="Telephone..."></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td><input type="submit" value="Enregistrer" id="sub-fourn">
                        <input type="reset" value="Annuler" id="res-fourn"></td>
                    </tr>
                </table>
            </fieldset>
        </div>
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
                       <tr>
                           <td class="td-fourn"></td>
                           <td class="td-fourn"></td>
                           <td class="td-fourn"></td>
                           <td class="td-fourn"></td>
                           <td class="td-fourn"></td>
                           <td class="td-fourn"></td>
                       </tr>
                   </tbody>
                    </table>
            </fieldset>
        </div>
    </section>
    </div>
</body>
</html>