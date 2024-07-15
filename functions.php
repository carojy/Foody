<?php



function displayAuthor(string $authorEmail, array $users): string {
    foreach ($users as $user){
        if ($authorEmail === $user['email']){
            return $user['pseudo']. ' (' . $user['age'] . ' ans)';
        }
    }
}



function isValidRecipe(array $status):bool {
    if (array_key_exists('is_enabled', $status)){
        $isEnabled = $status['is_enabled'];
    } else {
        $isEnabled = false;
    }
    return $isEnabled;
}

function getRecipes(array $recipes):array {
    $validRecipes = [];

    foreach ($recipes as $status){
        if (isValidRecipe($status)){
            $validRecipes[] = $status;
        }
    }
    return $validRecipes;
}


function redirectToUrl(string $url):never{
    header("Location:{$url}"); // header("Location: {$url} indique au navigateur de charger une nouvelle page spécifiée par $url
    exit(); // arrête reste du code PHP
}









?>