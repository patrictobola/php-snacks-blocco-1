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
    <?php if (strlen($name) > 3) : ?>
        <?php if (str_contains($email, '@') && str_contains($email, '.')) : $result = 'Accesso Consentito' ?>

        <?php endif ?>
    <?php endif ?>
    <h1><?= $result ?></h1>
</body>

</html>