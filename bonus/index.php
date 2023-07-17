<?php
$original_paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione assumenda dolores excepturi eos eum dicta adipisci quae explicabo eveniet magnam? Molestiae, maiores ipsum deleniti minima nisi nulla inventore unde ut. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione assumenda dolores excepturi eos eum dicta adipisci quae explicabo eveniet magnam? Molestiae, maiores ipsum deleniti minima nisi nulla inventore unde ut. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione assumenda dolores excepturi eos eum dicta adipisci quae explicabo eveniet magnam? Molestiae, maiores ipsum deleniti minima nisi nulla inventore unde ut. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione assumenda dolores excepturi eos eum dicta adipisci quae explicabo eveniet magnam? Molestiae, maiores ipsum deleniti minima nisi nulla inventore unde ut. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione assumenda dolores excepturi eos eum dicta adipisci quae explicabo eveniet magnam? Molestiae, maiores ipsum deleniti minima nisi nulla inventore unde ut.';
$result_paragraphs = explode(".", $original_paragraph)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Original paragraph</h1>
    <p><?= $original_paragraph ?> </p>
    <h1>All trimmed paragraphs</h1>
    <?php foreach ($result_paragraphs as $paragraph) : ?>
        <p><?= $paragraph . '.' ?> </p>

    <?php endforeach ?>
</body>

</html>