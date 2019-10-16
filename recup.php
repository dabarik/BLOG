<?php


require_once '../includes/config.php';

$title = ($_GET['id']);

$title1 = recuperer_article($title);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>modifier</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <p><?= $title1['title'] ?></p>

    </br>
    </br>
    </br>
    </br>
    </br>
    <p><?= $title1['content'] ?></p>
         

</body>
</html>