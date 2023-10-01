<html>
    <head>
        <title>S'inscrire</title>
        <link rel="stylesheet" href="loginCss.css">
    </head>
    <body>
        <form method='get' action="#">
            <h1>S'inscrire</h1>
            <input type="text" name="nom" placeholder="Votre Nom"><br><br> 
            <input type="text" name="prenom" placeholder="Votre Prenom"><br><br>
            <input type="text" name="email" placeholder="Votre Email"><br><br> 
            <input type="password" name="password" placeholder="Votre Mot de passe"><br><br> 
            <td align="center"><br>
            <button class="button">S'inscrire</button>
        </form>

        <?php
            require 'connect.php';

            if (isset($_GET['nom'], $_GET['prenom'], $_GET['email'], $_GET['password'])
                && !empty($_GET['nom'])
                && !empty($_GET['prenom'])
                && !empty($_GET['email'])
                && !empty($_GET['password'])
            ){
                $data = [
                    'nom' => $_GET['nom'],
                    'prenom' => $_GET['prenom'],
                    'email' => $_GET['email'],
                    'password' => md5($_GET['password']),
                ];
                $query = 'INSERT INTO users (nom, prenom,email, password) 
                        VALUES (:nom, :prenom, :email, :password)';
                
                $stmt= $pdo->prepare($query);
                if ($stmt->execute($data)) {
                    header('location: select.php');
                } else {
                    echo 'Error';
                }
            }
        ?>
    </body>
</html>