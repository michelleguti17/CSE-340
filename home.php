<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>PHP MOTORS - HOME</title>
</head>
<div class='template-home'> 
<header>
<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/phpmotors/snippets/header.php'; ?> 
</header>
<nav><?php require_once $_SERVER['DOCUMENT_ROOT'] .'/phpmotors/snippets/navigation.php'; ?> </nav>
<body>

<main>
<p class='content'>Welcome to PHP Motors!</p>

<div id="car-description">
                <h3>DMC Delorean</h3>
                
                <p class= "paragraph-description">3 Cup holders </br>
                Superman doors </br>
                Fuzzy dice!</p>
                <img id ="delorean" src="/phpmotors/images/delorean.jpg" alt="Car-Delorean">
                <button type="button">Own Today</button>
</div> 
<div id =flex-des>
<div id="car-reviews">
                <h2>DMC Delorean Reviews</h2>
                <ul class= "list-description">
                    <li class="ld">"So fast its almost like traveling in time." (4/5)</li>
                    <li class="ld">"Coolest ride on the road." (4/5)</li>
                    <li class="ld">"I'm feeling Marty McFly!" (5/5)</li>
                    <li class="ld">"The most futuristic ride of our day." (4/5)</li>
                    <li class="ld">"80's livin and I love it!" (5/5)</li>
                </ul>
</div>
<div id="car-upgrades">
<h2>Delorean Upgrades</h3>
                <div id="upgrade-img">
             
                    <div class="upgrades" id="upgrade1">
                        <img src="/phpmotors/images/upgrades/flux-cap.png" alt="Flux capacitor">
                        <a href="#">Flux Capacitor</a>
                    </div>
                    <div class="upgrades" id="upgrade2">
                        <img src="/phpmotors/images/upgrades/flame.jpg" alt="Flames">
                        <a href="#">Flame Decals</a>

                    </div>
                    <div class="upgrades"  id="upgrade3">
                        <img src="/phpmotors/images/upgrades/bumper_sticker.jpg" alt="Bumper sticker">
                        <a href="#">Bumper Sticker</a>

                    </div>
                    <div class="upgrades"  id="upgrade4">
                        <img src="/phpmotors/images/upgrades/hub-cap.jpg" alt="Hub Cap">
                        <a href="#">Hub Caps</a>

                    </div>
                </div>


</div>
</div>
</main>
<footer><?php require_once $_SERVER['DOCUMENT_ROOT'] .'/phpmotors/snippets/footer.php'; ?></footer>

</body>
</div>
<script src='script.js'></script>
</html>