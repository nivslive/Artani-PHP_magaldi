
<section class="collumn">

<?php      
                Component::render('info-head', 'home/info');
                Component::render('info-subhead', 'home/info'); 
                $carousel_folder1 = 'carousel-1';
                $dir1   = 'public/img/'.$carousel_folder1;
                $carousel_files1 = scandir($dir1);
                $carousel_files1 = array_splice($carousel_files1, 2);
                $dataCarousel = [];
                foreach($carousel_files1 as $f1):
                        array_push($dataCarousel, "$dir1/$f1");         
                endforeach;
            
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