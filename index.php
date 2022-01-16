<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification</title>
    <style>
        body{
            background-image: url("../Gstock/images/1.jpg");
            background-repeat: no-repeat;
            background-size:cover;
        }
    fieldset{
        width:400px;
        margin-left:430px;
        margin-top:250px;
        background-color: black;
        border-radius: 20px;
        opacity: 0.7;
    }
    #email{
        height:30px;
        width:250px;
    }
    #password{
        height:30px;
        width:250px;
     
    }
    legend{
        font-family:Arial, Helvetica, sans-serif;
        font-size: 20px;
        color:ivory;
    }
    th{
        font-family: Arial, Helvetica, sans-serif;
        color:ivory;
    }
    #sub{
        height:30px;
    }
    #sub:hover{
        color:ivory;
        background: gray;
        transition:0.7s;
    }
    </style>
</head>
<body>
    <fieldset>
        <legend>Connectez-vous</legend>
    <form method="post">
        <table>
            <tr>
                <th>EMAIL:</th>
                <td><input type="email" name="email" id="email" placeholder="votre email..." required></td>
            </tr>
            <tr>
                <th>MOT DE PASSE:</th>
                <td><input type="password" name="motdepasse" id="password" placeholder="**********" required></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="Connexion" id="sub"></td>
            </tr>
        </table>   
    </form>
    </fieldset>
</body>
</html>