<?php      require  __DIR__.DIRECTORY_SEPARATOR.'configuration'
                      .DIRECTORY_SEPARATOR.'Repositories'
                      .DIRECTORY_SEPARATOR.'Init.php';



     Layout::title('[PREVIEW] Magaldi');
    
     Component::render('Header', 'Home', true, true);
     $logo1 = 'logo-moema.png';
     Component::render('Logo', 'Home', true, false, ['logo' => $logo1, 'logostyle' => "style='background-color:#ede8e2'"]);
     Component::render('Info', 'Home', true); 
     Component::render('Section', 'Home', true);
     $logo2 = 'logo-jau.png';
     Component::render('Logo', 'Home', true, false, ['logo' => $logo2, 'logostyle' => "style='background-color:#d4c5af'"]); 
    Component::render('Info-2', 'Home'); 
    Component::render('Info-3', 'Home', true); 
     Component::render('Footer', 'Home', true); 

/*

    $carouselFolder1 = 'public/img/carousel-1';

     $dataCarousel1 = [  "$carouselFolder1/externa-01.png",
                         "$carouselFolder1/externa-01.png",
                         "$carouselFolder1/externa-01.png",];

     Component::render('Carousel', 'Home', false, false, ['data' => $dataCarousel1, 
                                                          'item' => '-1',
                                                          'style' => 'Carousel1.css',
                                                          'script' => 'Carousel1.js',
                                                       ]);


    $carouselFolder2 = 'public/img/carousel-1';
    $dataCarousel2 = [  "$carouselFolder2/externa-01.png",
                        "$carouselFolder2/externa-01.png",
                        "$carouselFolder2/externa-01.png",];

    Component::render('Carousel', 'Home', false, false, [ 'data' => $dataCarousel2, 
                                                          'item' => '-2',
                                                          'style' => 'Carousel2.css',
                                                          'script' => 'Carousel2.js',
                                                        ]);                                                      
    
                    
    $carouselFolder3 = 'public/img/carousel-1';

    $dataCarousel3 = [ "$carouselFolder3/externa-01.png",
                       "$carouselFolder3/externa-01.png",
                       "$carouselFolder3/externa-01.png",];

    Component::render('Carousel', 'Home', false, false, [ 'data' => $dataCarousel3, 
                                                        'item' => '-3',
                                                        'style' => 'Carousel3.css',
                                                        'script' => 'Carousel3.js',
                                                      ]);                       
    
    */
    
    
    
                                                          require __DIR__.'/configuration/HTML/Js.php';