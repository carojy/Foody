<?php

$recipes = [
    [
        'title' => 'Lasagnes végétariennes',
        'recipe' => 'Etape 1 - Coupez et faire cuire les champignons, puis réserver.<br>
        Etape 2 - Pelez et hachez l’oignon et l’ail. Faites revenir à la poele. </br>
        Etape 3 - Ajoutez le beurre et la farine dans la pele. Ensuite incorporer petit à petit le lait en remuant.</br>
        Etape 4 - Dans un plat allant au four, superposez les feuilles de lasagne, le mélange oignons-ail / béchamel, champignons, épinards, tomates séchées et parmesan.</br>
        Etape 5 - Enfournez 30 min à 200°C. ',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Chili sin carne',
        'recipe' => 'Etape 1 : coupez les carottes et les faire cuire à la poele',
        'author' => 'mickael.andrieu@exemple.com',
        'is_enabled' => false,
    ],
    [
        'title' => 'Burger végé',
        'recipe' => 'Etape 1 : coupez lles champignons et faites les cuire à la poele, réserver.',
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