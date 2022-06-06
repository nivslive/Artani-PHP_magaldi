<?php   
     Layout::title('[PREVIEW] Magaldi');
    
     
     Component::render('Header', 'Home', true, true);
     $logo1 = 'logo-moema.png';
     Component::render('Logo', 'Home', true, false, ['logo' => $logo1, 'logostyle' => "style='background-color:#ede8e2'"]);
     Component::render('Info', 'Home', true, true); 
     Component::render('Section', 'Home', true);
     $logo2 = 'logo-jau.png';
     Component::render('Logo', 'Home', true, false, ['logo' => $logo2, 'logostyle' => "style='background-color:#d4c5af'"]); 
     Component::render('Info-2', 'Home'); 
     Component::render('Info-3', 'Home', true); 
     Component::render('Footer', 'Home', true); 

     
     Layout::config('Js');



     ?>


<?php
     //require __DIR__.'/configuration/HTML/Js.php';