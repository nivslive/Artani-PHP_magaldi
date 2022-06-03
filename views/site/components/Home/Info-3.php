
<section class="collumn pb-3">

<?php      
           

    $carouselFolder4 = 'public/img/carousel-4';
    $dataCarousel4 = [  "$carouselFolder4/1.png",
                        "$carouselFolder4/2.png",
                        "$carouselFolder4/3.png",];

    Component::render('Carousel', 'Home', false, false, 
        [   'data' => $dataCarousel4, 
            'item' => '-4',
            'style' => 'Carousel4.css',
            'script' => 'Carousel4.js',
                                    ]);                       

           
    Component::render('Button', 'home/layout');
    Component::render('info-description', 'home/info-3');
             ?>
    <section class="info  pt-3 row">

        <?php  
        Component::render('info-persons', 'home/info-3');?>

    </section>
        <h1 class="text-center pb-1 bold">PREENCHA ESSE FORMULÁRIO E A CONSULTORA<br>
        MAGALDI ENTRARÁ EM CONTATO COM VOCÊ!</h1>
        <section class="header-container-form collumn center text-center">
<?php Component::render('Form', 'home/layout', false, false, ['desc' => '',
'style' => 'font-size: 21px;']);?>
    </section>

</section>
<?php

              Component::render('info-final', 'home/info-3');
              Component::render('Button', 'home/layout');?>
    </section>

