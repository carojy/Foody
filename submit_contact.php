<?php
$postData = $_POST;



if (
    empty($postData['email'])
    || !filter_var($postData['email'], FILTER_VALIDATE_EMAIL)
    || empty($postData['message'])
    || trim($postData['message']) === ''
) {
    echo('Oops ... Entre des infos valides pour que faire partir ce formulaire &#x1F914');
    return;
}

$isFileLoaded = false;

if (isset($_FILES['document']) && $_FILES['document']['error'] === 0){
    if ($_FILES['document']['size'] > 1000000) {
        echo "L'envoi n'a pas pu être effectué, erreur ou image trop volumineuse";
        return;
    }

    $fileInfo = pathinfo($_FILES['document']['name']);
    $extension = $fileInfo['extension'];
    $allowedExtensions = ['jpg','jpeg','gif','png'];


    if (!in_array($extension, $allowedExtensions)){
        echo "l'envoi n'a pas fonctionné, l'extension {$extension} n'est pas autorisée";
        return;
    }

    $path = __DIR__ . '/uploads/';
    if (!is_dir($path)) {
        echo "L'envoi n'a pas pu être effectué, le dossier uploads est manquant";
        return;
    }

    move_uploaded_file($_FILES['document']['tmp_name'], $path . basename($_FILES['document']['name']));
    $isFileLoaded = true;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foody - Msg reçu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">

        <?php require_once(__DIR__ . '/header.php'); ?>
        <h1>&#x1F48C Merci pour votre message !</h1>
                
        <div class="card">
            
            <div class="card-body">
                <h5 class="card-title">Rappel de votre message</h5>
                <p class="card-text"><b>Email</b> : <?php echo ($postData['email']); ?></p>
                <p class="card-text"><b>Message</b> : <?php echo (strip_tags($postData['message'])); ?></p> 
                <?php if ($isFileLoaded) : ?>
                    <div class="alert alert-success" role="alert">
                        L'envoi a bien été effectué !
                    </div>
                <?php endif; ?>
            
            </div>
        </div>

</div>
</body>
</html>