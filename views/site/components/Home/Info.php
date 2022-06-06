
<section class="collumn">

<?php      
                Component::render('info-head', 'home/info');
                Component::render('info-subhead', 'home/info'); 
                $carouselFolder =   'public/img/carousel-1';

                $dataCarousel = [   "$carouselFolder/externa-01.png",
                                      "$carouselFolder/externa-01.png",
                                      "$carouselFolder/externa-01.png",];
            
                Component::render('Carousel', 'Home', true, false, ['data' => $dataCarousel, 'item' => '']);
                Component::render('info-description', 'home/info');
                Component::render('Video', 'home/info');  ?>
<section class="info  pt-3 evenly row">


        <?php 

                Component::render('info-principal', 'home/info');
                Component::render('info-details', 'home/info');?>


  
        </section>

        <?php Component::render('info-final', 'home/info');?>
</section>


<?php
        $folder = 'plantas-1';
        Component::render('Plantas', 'Home', true, true, ['folder' => $folder]); 
     
     
     ?>