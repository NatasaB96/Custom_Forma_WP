<?php include 'header.php' ?>

    <!--slider-->
    <section class="slider">
        
        <h2>Lorem, ipsum.</h2>
        <h1>Headline area</h1>
        <h5>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</h5>

        <div class="layerRow">
          
            <div class="layer1"></div>
            <div class="layer2">
                <div class="owl-carousel owl-theme">
            
                    <div class="item">     
                        <img src="<?php echo get_template_directory_uri();?>/images/slider1.png">
                        <div class="text">
                            <h4>Headline Area</h4>
                            <p>Short Description lorem ipsum dolore.</p>
                        </div> 
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri();?>/images/slider2.png">
                        <div class="text">
                            <h4>Headline Area</h4>
                            <p>Short Description lorem ipsum dolore.</p>
                        </div>

                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri();?>/images/slider3.png">
                        <div class="text">
                            <h4>Headline Area</h4>
                            <p>Short Description lorem ipsum dolore.</p>
                        </div>
                    </div>
              
                </div>
            </div>
        </div>

    </section>

    <!--uber uns-->
    <?php get_template_part('uberUns'); ?>

    <!--  kontakt -->
    <?php get_template_part('contact'); ?>



<?php include 'footer.php' ?>