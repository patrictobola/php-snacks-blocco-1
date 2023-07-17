<?php
$name = $_GET['name'] ?? '';
$email = $_GET['email'] ?? '';
$age = $_GET['age'] ?? '';
$result = 'Accesso negato';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Il nome deve avere più di 3 lettere  -->
    <?php if (strlen($name) > 3) : ?>
        <!-- La mail deve contenere la chiocciola e il punto -->
        <?php if (str_contains($email, '@') && str_contains($email, '.')) : ?>
            <!-- L'età dev'essere un numero. Se risulta tutto valido, solo a questo punto l'accesso è consentito  -->
            <?php if (is_numeric($age)) : $result = 'Accesso Consentito' ?>

            <?php endif ?>
        <?php endif ?>
    <?php endif ?>
    <h1><?= $result ?></h1>
</body>

</html>