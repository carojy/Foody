<?php

$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => 'Etape 1 : des flageolets !',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => 'Etape 1 : de la semoule',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
    [
        'title' => 'Escalope milanaise',
        'recipe' => 'Etape 1 : prenez une belle escalope',
        'author' => 'mathieu.nebra@exemple.com',
        'is_enabled' => true,
    ],
];



?>

<!DOCTYPE html>
<html>
<head>
    <title>Affichage des recettes</title>
</head>
<body>
    <h1>Affichage des recettes</h1>
        
    <?php  foreach ($recipes as $status):?>
        <?php if (array_key_exists('is_enabled', $status) && $status['is_enabled'] == true ):?>

        <h2><?php echo $status['title']; ?></h2>
        <p><?php echo $status['recipe']; ?></p>
        <p><i><?php echo $status['author']; ?></i></p>

        <?php endif;?>
    <?php endforeach;?>


</body>
</html>