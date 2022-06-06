
<section class="collumn">

<?php      
                Component::render('info-head', 'Home/info-2');
                Component::render('info-subhead', 'Home/info-2'); 

        
                $carousel_folder3 = 'carousel-3';
                $dir3   = 'public/img/'.$carousel_folder3;
                $carousel_files3 = scandir($dir3);
                $carousel_files3 = array_splice($carousel_files3, 2);
                $dataCarousel3 = [];
                foreach($carousel_files3 as $f3):
                        array_push($dataCarousel3, "$dir3/$f3");         
                endforeach;
           
                Component::render('Carousel', 'Home', false, false, ['data' => $dataCarousel3, 
                                                                     'item' => '-1',
                                                                     'style' => 'Carousel1.css',
                                                                     'script' => 'Carousel1.js',
                                                                  ]);
           

                Component::render('info-description', 'Home/info-2');
                Component::render('Video', 'Home/info-2', true);                  

         
         ?>
            <section class="info  pt-3 row">

        <?php 
                Component::render('info-principal', 'Home/info-2');
                Component::render('info-details', 'Home/info-2');?>


  
        </section>

        <?php Component::render('info-final', 'Home/info-2');?>
</section>


<?php
        $folder = 'plantas-2';
        Component::render('Plantas', 'Home', false, false, ['folder' => $folder]); 
     ?>