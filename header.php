<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mojo Developer Test</title>
    <!-- <link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700&display=swap" rel="stylesheet">
 -->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Merriweather:300,400,700&display=swap');
    </style>
    <?php wp_head();?>


</head>

<?php $hero = get_field('hero');?>

<body>
    <!-- Header -->
    <header>
        <nav>
            <img id="logo"
                src="<?php bloginfo('template_url'); ?>/images/logo.png"
                alt="">
            </div>
            <div id="navbar">
                <div class="navbar__top">
                    <a href="#">800 (555-1234)</a>
                    <a href="#">test@domain.com</a>
                    <a href="#">Customer Service</a>
                    <a href="#">Submit a Referral</a>
                    <a href="#">F</a>
                    <a href="#">T</a>
                    <a href="#">L</a>
                </div>
                <div class="navbar__bottom">
                    <a href="#">Why Us</a>
                    <a href="#">Our Services</a>
                    <a href="#">Partners</a>
                    <a href="#">Contact</a>
                </div>
            </div>
        </nav>
        <div class="hero__text">
            <h1><?php echo $hero['hero_title']?>
            </h1>
        </div>
    </header>