<?php 

        
$carousel_folder2 = 'carousel-2';
$dir2   = 'public/img/'.$carousel_folder2;
$carousel_files2 = scandir($dir2);
$carousel_files2 = array_splice($carousel_files2, 2);
$dataCarousel2 = [];
foreach($carousel_files2 as $f2):
        array_push($dataCarousel2, "$dir2/$f2");         
endforeach;


Component::render('Carousel', 'Home', false, false, [ 'data' => $dataCarousel2, 
                                                      'item' => '-2',
                                                      'style' => 'Carousel2.css',
                                                      'script' => 'Carousel2.js',
                                                    ]);                                                      

Component::render('Button', 'home/layout');

?>


<section class="section-upper-container center collumn black" style="border-top: 20px solid orange; border-bottom:20px solid orange;">


    <h1 class="text-center w-75 m-w-100 f-size-50 m-f-size-25 bold">
    No coração dos Jardins com 3 Suítes ou 4
Dorms. Studios+ com pé-direito 3,40m
    </h1>

    
</section>


