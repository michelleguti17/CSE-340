<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>PHP MOTORS - Template</title>
</head>
<div class='template-home'> 
<header>
<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/phpmotors/snippets/header.php'; ?> 
</header>
<nav><?php require_once $_SERVER['DOCUMENT_ROOT'] .'/phpmotors/snippets/navigation.php'; ?> </nav>
<body>

<main>
<p class='content'>Content Title Here</p>
</main>
<footer><?php require_once $_SERVER['DOCUMENT_ROOT'] .'/phpmotors/snippets/footer.php'; ?></footer>

</body>
</div>
<script src='script.js'></script>
</html>