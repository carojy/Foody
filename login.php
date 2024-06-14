<?php


$postData = $_POST;

if (isset($postData['email']) && isset($postData['motPasse'])) {
    if (!filter_var($postData['email'], FILTER_VALIDATE_EMAIL)) {
        $errorMessage = 'Ton email n\'est pas valide !';

    } else {
        foreach($users as $user){
            if(
                $user['email'] === $postData['email'] &&
                $user['motPasse'] === $postData['motPasse']
            ) {
                $loggedUser = [
                    'email' => $user['email'],
                ];
            }
        }

        if(!isset($loggedUser)) {
            $errorMessage = sprintf(
                'Ces infos ne sont pas valides, vérifie ton mail et mot de passe : %s / %s', 
                $postData['email'], strip_tags($postData['motPasse'])
            );
        }
    }
}

?>