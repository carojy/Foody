<?php
$users = [
    [
        'full_name' => 'Mickaël Andrieu',
        'email' => 'mickael.andrieu@exemple.com',
        'pseudo' => 'Mika',
        'age' => 34,
        'password'=>'bonjour'
    ],
    [
        'full_name' => 'Mathieu Nebra',
        'email' => 'mathieu.nebra@exemple.com',
        'pseudo' => 'Mat',
        'age' => 34,
        'password'=>'test'
    ],
    [
        'full_name' => 'Laurène Castor',
        'email' => 'laurene.castor@exemple.com',
        'pseudo' => 'Lolo',
        'age' => 28,
        'password'=>'lalat'
    ],
];

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
        'recipe' => 'Etape 1 : coupez les carottes et les faire cuire à la poele.',
        'author' => 'laurene.castor@exemple.com',
        'is_enabled' => false,
    ],
    [
        'title' => 'Burger végé',
        'recipe' => 'Etape 1 : coupez les champignons et faites les cuire à la poele, réserver.<br>
        Etape 2 : faire cuire l\'oeuf au plat puis réserver.<br>
        Etape 3 : faire griller les pains burgers.<br>
        Etape 4 : tartiner de crème fraîche les pains burgers, monter ensuite avec de la salade, le cheddar, les champignons, et l\oeuf',
        'author' => 'mathieu.nebra@exemple.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Camembert pané sucré',
        'recipe' => 'Etape 1 : coupez le camembert en quartier et les pommes en tranches.<br>
        Etape 2 : trempez les quartiers de camemberts dans le jaune d\'oeuf puis dans la chapelure jusque\'à l\épaisseur désirée de panage.<br>
        Etape 3 : faire frire chaque quartier dans l\huile, puis disposer le tout dans une assiette de salade.',
        'author' => 'laurene.castor@exemple.com',
        'is_enabled' => true,
    ],
];

?>