<?php
    require_once '<bd/connexion.php';
    require_once 'bd/projet_db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Gestion de Projets</title>
</head>
<body>
    <?php
        require_once 'layout/navbar.php';
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            $page .= '.php';
            $pages = scandir('view');
            if(in_array($page, $pages)){
                include_once 'view/'.$page;
            }else{
                echo "<div class='alert alert-danger'>Erreur</div>";
            }
        }else {
            echo "<div class='alert alert-success'>Bienvenue !</div>";
        }
        require_once 'layout/topbar.php';
    ?> 
</body>
</html>