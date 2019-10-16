<?php


require_once '../includes/config.php';

$posts = get_all_posts();



if(!empty(($_GET['id']))){
    $getid = intval($_GET['id']);
    delete_article($getid);
    header('location:index.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>BLOG</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
</head>
</head>
<body>

<a href='deconnexion.php'><button type="button" class="btn btn-danger">Se déconnecter</button></a>

<h1 class="text-center">BLOG</h1>

        <form method="POST">

        <a href="creation.php" class="btn btn-elegant">Création</a>

        <!-- Card -->
<div class="card">


<!-- Card content -->
<div class="card-body">

  <!-- Title -->

    <?php foreach($posts as $post): ?>
        <strong><?= $user['pseudo'] ?></strong>
        <small class="pull-right text-muted"> a envoyé <i class="far fa-envelope"></i></small>
        <h2 class="card-title"><?= $post['title'] ?></h2>
        <p class="card-text"><?= $post['content'] ?></p>
        <a href="modifier.php?id= <?= $post['id'] ?>" class="btn btn-elegant">Modifier</a>
        <a href="index.php?id=<?= $post['id'] ?>" class="btn btn-elegant">Supprimer</a>
        <a href="recup.php?id= <?= $post['id'] ?>" class="btn btn-elegant">afficher</a>
    <?php endforeach; ?>
  <!-- Text -->
  <!-- Button -->

</div>

</div>
<!-- Card -->

            

        </form>


    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/js/mdb.js"></script>
    <!-- VueJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.js"></script>
    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"></script>
    <!-- SCRIPTS -->
    <script src="js/app.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
