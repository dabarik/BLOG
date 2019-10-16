<?php   

require_once '../includes/config.php';

$title = ($_GET['id']);

$title1 = recuperer_article($title);

if (!empty($_POST['modifier'])){
    if(!empty($_POST['title'] && !empty($_POST['content']))) {

        $bla = ($_POST['title']);
        $blabla = ($_POST['content']);

        update_article($title, $bla, $blabla);

        header('location:index.php');

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
    
    <div class="container">
        <h1 class="text-center">modifier</h1>
        <div class="row">
        <form method="POST">

        <input value="<?= $title1['title']?>"name="title" style="width:200px; height:30px;">

        </br>
        </br>
        </br>
        </br>


        <textarea name="content" cols="30" rows="10"><?= $title1['content']?></textarea>

        </br>
        </br>
        </br>
        </br>
        </br>

        <input type="submit" name="modifier" value="modifier">
         


        </form>
        </div>
    </div>
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