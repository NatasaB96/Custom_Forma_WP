<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>

</head>
<body>

    <!--navigacija-->
    <nav>
        <div class="col dropDown">

            <a class="ge"><img src="<?php echo get_template_directory_uri();?>/images/germany.png">DE&nbsp;<i class="fas fa-angle-down"></i></a>
            <a hidden class="uk"><img src="<?php echo get_template_directory_uri();?>/images/england.png">UK&nbsp;<i class="fas fa-angle-down"></i></a>
            
        </div>
        <div class="col logoCol">
            <a href=""<?php echo esc_url(home_url()); ?>"><img src="<?php echo get_template_directory_uri();?>/images/Slack_Technologies_Logo.png"></a>
        </div>

        <div class="col socialIcons">
             
            <a><span class="number">+41 71 123 45 67&nbsp;<span class="triangle"></span></span><i class="fas fa-phone"></i></a>
            <a><i class="fas fa-envelope"></i></a>
            <a><i class="fas fa-map-marker-alt"></i></a>
        </div>
    </nav>
    