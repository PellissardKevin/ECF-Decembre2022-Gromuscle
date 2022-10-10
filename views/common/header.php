<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gromuscle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="public/style/main.css">
</head>

<body class="<?= isset($_GET['id']) ? 'brick' : '' ?>">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <?php 
            if (isset($_GET['id'])) {
                echo '<a class="navbar-brand" href="/">← Retour</a>';
            } else {
                echo '<a class="navbar-brand" href="/API_test">Gromuscle</a>';
            }
            ?>
            <ul class="nav nav-pills">
                <?php
                if (\utils\SessionHelpers::isLogin()) {
                    var_dump($_SESSION);
                    echo '<li class="nav-item"><a href="/API_test/liste/'. $id . '" class="nav-link">Mon compte</a></li>';
                } else {
                    echo '<li class="nav-item"><a href="/API_test/login" class="nav-link">Connexion</a></li>';
                }
                ?>
                <li class="nav-item"><a href="/API_test/about" class="nav-link">À propos</a></li>
            </ul>
        </div>
    </nav>