
<section class="collumn">

<?php      
                Component::render('info-head', 'home/info-2');
                Component::render('info-subhead', 'home/info-2'); 

                $carouselFolder1 = 'public/img/carousel-3';

                $dataCarousel1 = [  "$carouselFolder1/1.png",
                                    "$carouselFolder1/2.png",
                                    "$carouselFolder1/3.png",];
           
                Component::render('Carousel', 'Home', false, false, ['data' => $dataCarousel1, 
                                                                     'item' => '-1',
                                                                     'style' => 'Carousel1.css',
                                                                     'script' => 'Carousel1.js',
                                                                  ]);
           
                $video1 = '';
                Component::render('info-description', 'home/info-2');
                
                
                extract(['video' => $video1, 'videoclass' => '-2']);
                var_dump($video, $videoclass);
                Component::render('Video', 'Home', true);                  

         
         ?>
            <section class="info  pt-3 row">

        <?php 
                Component::render('info-principal', 'home/info-2');
                Component::render('info-details', 'home/info-2');?>


  
        </section>

        <?php Component::render('info-final', 'home/info-2');?>
</section>


<?php
        $folder = 'plantas-2';
        Component::render('Plantas', 'Home', false, false, ['folder' => $folder]); 
     ?>