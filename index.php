<?php
$userName = "Rage";
$userBio = "Casual Gamer • White Monster Enjoyer • Anime Enthusiast";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php echo $userName; ?> | Gamer Vlog</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

<!-- MAIN CSS -->
<link rel="stylesheet" href="css/mainStyle.css">

</head>

<body>

<!-- NAVIGATION -->

<nav>
    <div class="logo"><?php echo $userName; ?></div>

    <div class="navLinks">
        <a href="javascript:void(0)">HOME</a>
        <a href="javascript:void(0)">STREAMS</a>
        <a href="javascript:void(0)">VLOGS</a>
        <a href="javascript:void(0)">ANIME LIST</a>
        <a href="javascript:void(0)">CONTACT</a>
    </div>
</nav>

<!-- MAIN LANDING SECTION -->

<section class="mainSection">

    <div class="customText">
        <h1>
            I AM <span><?php echo $userName; ?></span>
        </h1>

        <p>
            <?php echo $userBio; ?><br><br>
            To obtain something, something of equal value must be lost or given in return.
        </p>

        <button class="customButton" type="button">
        ENTER THE VLOG
        </button>
    </div>

    <div class="customAvatar">
        <img src="assets/kazuma.jpg" alt="Anime Gamer Avatar">
    </div>

</section>

<!-- MAIN JS -->
<script src="js/mainScript.js"></script>

</body>
</html>