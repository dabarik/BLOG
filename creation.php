<?php 

require_once '../includes/config.php';


if(!empty($_POST['creer'])){
    if(!empty($_POST['title'] && !empty($_POST['content']))) {
        $title = ($_POST['title']);
        $content = ($_POST['content']);

        create_article($title, $content);
        header('location:index.php');
    }
    else{
        $error = 'Veuillez compléter les champs';
    }
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Météo</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet"></head>
<body>
    
        <h1 class="text-center">Création</h1>
      
        <div class="container">
        <div class="row">
        <form method="POST">

        <input name="title">
        
        </br>
        </br>
        </br>
        <textarea name="content" cols="30" rows="10"></textarea>


        <button  name="creer" value="Créer" class="btn btn-elegant" style={margin-top: -10px;}>Créer</button>

<?php

if (isset($error))
{
?>
  <div class="alert alert-danger" role="alert">
    <?= $error ?>
  </div>
  <?php
}
?>

        </form>
        </div>
        </div>
  
</body>
</html>
