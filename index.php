<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <h1>Password Generator</h1>

    <form method="GET">
        <div class="input-group flex-nowrap my-3">
            <span class="input-group-text" id="passwordgenerator">Inserisci una numero</span>
            <input type="number" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" id="passgenerator" name="passgenerator">
            <input type="submit">
        </div>
    </form>

    <?php

    include "./partials/functions.php"

    ?>

    La password generata è: <?php echo passwordGenerator($numberGet) ?>


    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>