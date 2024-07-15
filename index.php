
<?php
session_start();
require_once(__DIR__.'/variables.php');
require_once(__DIR__ . '/functions.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foody - Site de recettes</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>

<body class="d-flex flex-column min-vh-100">
    <div class = "affichage-recettes">
        
        <?php require_once(__DIR__ . '/header.php');?>
        <h1>Toutes les recettes</h1>

        <?php require_once(__DIR__ .'/login.php');?>
            
        <?php  foreach (getRecipes($recipes) as $status):?>
            <article>
                <h3><?php echo $status['title']; ?></h3>
                <div><?php echo $status['recipe']; ?></div>
                <i><?php echo displayAuthor($status['author'], $users); ?></i>

            </article>
        <?php endforeach;?>
    </div>

    <?php require_once(__DIR__ . '/footer.php'); ?>
</body>
</html>