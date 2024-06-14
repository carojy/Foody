<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foody - Contact</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">
    <div class="container">
        
    <?php require_once(__DIR__ . '/header.php');?>

        <h1>Contacte moi</h1>

        <form action="submit_contact.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help">
                <div id="email-help" class="form-text">Je ne revends pas encore les email.</div>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Ton petit mot</label>
                <textarea class="form-control" placeholder="Exprime toi" id="message" name="message"></textarea>
            </div>
            <div class="mb-3">
                <label for="document" class="form-label">Pièce jointe</label>
                <input type="file" class="form-control" id="document" name="document" />
            </div>
                <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
        <br />
    </div>
        
    <?php require_once(__DIR__ . '/footer.php'); ?>

</body>
</html>