<html lang="en">
    <head>
        <title>Profil</title>
        <?php require 'connect.php';?>
    </head>
    <body style="background-color:#03e9f4">
        <center><h1>Profil</h1></center>
        <h1>Welcome to your account
            <h3 style="color:red;"><?php echo ($_SESSION['email']);?></h3>
        </h1>
        <a href="deconnexion.php" style="float:right;">se deconnecter</a>
    </body>
</html>