<?php 

        
$carouselFolder2 = 'public/img/carousel-2';
$dataCarousel2 = [  "$carouselFolder2/1.png",
                    "$carouselFolder2/2.png",
                    "$carouselFolder2/3.png",];

Component::render('Carousel', 'Home', false, false, [ 'data' => $dataCarousel2, 
                                                      'item' => '-2',
                                                      'style' => 'Carousel2.css',
                                                      'script' => 'Carousel2.js',
                                                    ]);                                                      

Component::render('Button', 'home/layout');

?>


<section class="section-upper-container center collumn black" style="border-top: 20px solid orange; border-bottom:20px solid orange;">


    <h1 class="text-center w-50 bold">
    No coração dos Jardins com 3 Suítes ou 4
Dorms. Studios+ com pé-direito 3,40m
    </h1>

    
</section>


