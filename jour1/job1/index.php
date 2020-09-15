<?php 
require 'controllers/Utilisateurs.php';
//require 'models/Utilisateurs.php';

    $user = new Utilisateurs_model();


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<header>
    <?php
        include 'views/header.php';
    ?>
</header>
<body>

<?php
    if (isset($_GET['page'])) 
    {
        if ($_GET['page'] == "addUser") 
        {
            include "views/add-user.php";
        } 
        else 
        {
            include "views/list-users.php";
        }
    } 
        else 
        {
            include "views/list-users.php";
        }

    ?>



    
</body>
<footer>
    <?php
        include 'views/footer.php';
    ?>
</footer>
</html>