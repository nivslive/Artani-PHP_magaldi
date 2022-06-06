
<section class="collumn">

<?php      
                Component::render('info-head', 'Home/info');
                Component::render('info-subhead', 'Home/info'); 
                $carousel_folder1 = 'carousel-1';
                $dir1   = 'public/img/'.$carousel_folder1;
                $carousel_files1 = scandir($dir1);
                $carousel_files1 = array_splice($carousel_files1, 2);
                $dataCarousel = [];
                foreach($carousel_files1 as $f1):
                        array_push($dataCarousel, "$dir1/$f1");         
                endforeach;
            
                Component::render('Carousel', 'Home', true, false, ['data' => $dataCarousel, 'item' => '']);
                Component::render('info-description', 'Home/info');
                Component::render('Video', 'Home/info');  ?>
<section class="info  pt-3 evenly row">


        <?php 

                Component::render('info-principal', 'Home/info');
                Component::render('info-details', 'Home/info');?>


  
        </section>

        <?php Component::render('info-final', 'Home/info');?>
</section>


<?php
        $folder = 'plantas-1';
        Component::render('Plantas', 'Home', true, true, ['folder' => $folder]); 
     
     
     ?>