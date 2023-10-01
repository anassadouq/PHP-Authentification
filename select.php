<title>Select</title>
<h1>List Users</h1>
<?php
require 'connect.php';

$params = [];
$query = "SELECT * FROM users";

if(isset($_GET['nom']) && !empty($_GET['nom'])){
    $query .= ' WHERE nom like :nom';
    $params['nom'] = '%'.$_GET['nom'].'%'; 
}                                            
$result = $pdo->prepare($query);             
$result->execute($params);                   
$users = $result->fetchAll(PDO::FETCH_ASSOC);

?>                                           

<form action="#" method='get'>
    <input type="text" name='nom' placeholder='name' value=
   '<?php
         echo $_GET['nom'] ?? '';
    ?>'
    >
    <input type='submit' value='search'>
</form>
<a href="s'inscrire.php">Add a new element</a>
<?php
if (count($users)) {
    echo 
        '<table border=1> 
            <tr>
                <td>Nom</td>
                <td>Prenom</td>
                <td>Email</td>
                <td>Password</td>
            </tr>';
    foreach ($users as $user) {
        echo 
       '<tr>
            <td>'.$user['nom'].'</td>
            <td>'.$user['prenom'].'</td>
            <td>'.$user['email'].'</td>
            <td>'.$user['password'].'</td>
        </tr>';
    }
    echo
       '</table>';
}