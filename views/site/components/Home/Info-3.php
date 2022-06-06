
<section class="collumn pb-3">

<?php      
           

    
           $carousel_folder4 = 'carousel-4';
           $dir4   = 'public/img/'.$carousel_folder4;
           $carousel_files4 = scandir($dir4);
           $carousel_files4 = array_splice($carousel_files4, 2);
           $dataCarousel4 = [];
           foreach($carousel_files4 as $f4):
                   array_push($dataCarousel4, "$dir4/$f4");         
           endforeach;
      

    Component::render('Carousel', 'Home', false, false, 
        [   'data' => $dataCarousel4, 
            'item' => '-4',
            'style' => 'Carousel4.css',
            'script' => 'Carousel4.js',
                                    ]);                       

           
    Component::render('Button', 'Home/layout');
    Component::render('info-description', 'Home/info-3');
             ?>
    <section class="info  pt-3 row">

        <?php  
        Component::render('info-persons', 'Home/info-3');?>

    </section>
        <h1 class="text-center pb-1 pl-1 pr-1 bold">PREENCHA ESSE FORMULÁRIO E A CONSULTORA<br>
        MAGALDI ENTRARÁ EM CONTATO COM VOCÊ!</h1>
        <section class="header-container-form collumn center text-center">
<?php Component::render('Form', 'Home/layout', false, false, ['desc'=> '', 'form_style' =>  "style='font-size: 21px;'" ]);?>
    </section>

</section>
<?php

              Component::render('info-final', 'Home/info-3');
              Component::render('Button', 'Home/layout');?>
    </section>


<script>

let select1 = document.querySelector('.select-1');
let select2 = document.querySelector('.select-2');
select1.style.display = 'none';
select2.style.display = 'none';
function showInputs() {
  select1.style.display = 'flex';
select2.style.display = 'flex';
}

</script>


