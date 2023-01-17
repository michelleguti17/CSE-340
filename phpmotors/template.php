<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    
    <title>PHP MOTORS - Template</title>
    <script src='script.js'></script>
</head>
<body>
<div class='template-home'> 
<header>
<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/phpmotors/snippets/header.php'; ?> 
</header>
<nav><?php require_once $_SERVER['DOCUMENT_ROOT'] .'/phpmotors/snippets/navigation.php'; ?> </nav>


<main>
<h2 class='temp-title'>Content Title Here</h2>
</main>
<footer><?php require_once $_SERVER['DOCUMENT_ROOT'] .'/phpmotors/snippets/footer.php'; ?></footer>


</div>
</body>

</html>