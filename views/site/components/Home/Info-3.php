
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
<?php Component::render('Form2', 'Home/layout', false, false, ['desc'=> '', 'form_style' =>  "style='font-size: 21px;'" ]);?>
    </section>

</section>
<?php

              Component::render('info-final', 'Home/info-3');
              Component::render('Button', 'Home/layout');?>
    </section>




<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>
let inputs = document.querySelectorAll('input[type="submit"]')
let select1 = document.querySelector('.select-1');
let select2 = document.querySelector('.select-2');
let select3 = document.querySelector('.select-3');
let select4 = document.querySelector('.select-4');
let select5 = document.querySelector('.select-5');
let select6 = document.querySelector('.select-6');
let form = document.querySelector('.form-input');

select1.style.display = 'flex';
select2.style.display = 'flex';
select3.style.display = 'flex';
select4.style.display = 'none';
select5.style.display = 'none';
select6.style.display = 'none';
i = 0;
function nextInputs(e) {
    e.preventDefault();

    if(!((select1.value == "")  || (select2.value == "")  || (select3.value == "")))  {
        (i == 0 || i == 1) && i++

        if(i == 1){ 
        select1.style.display = 'none';
        select2.style.display = 'none';
        select3.style.display = 'none';
        select4.style.display = 'flex';
        select5.style.display = 'flex';
        select6.style.display = 'flex';
        inputs.forEach((input) => {
                  input.value = "Enviar"
            })   
       
    }
        
        if(i == 2){ 

       

          if((!(select4.value == "Qual empreendimento de seu interesse?") && !(select5.value == "Qual a metragem desejada?") && !(select6.value == "Preferência de contato?")    ) ){

                    swal({  position: 'top-end',
                    icon: 'success',
                    title: 'Você será redirecionado para o WhatsApp...',
                    showConfirmButton: false,
                    })

                    setTimeout(() => {
                        form.submit() 
                    }, 2000)
                }   

                else {
                    swal({  position: 'top-end',
                    icon: 'error',
                    title: 'Você escolheu uma opção padrão. Escolha outra.',
                    showConfirmButton: false,
                })

        }
            
            }

     

    }

    else {

        swal({  position: 'top-end',
        icon: 'error',
        title: 'Falta escrever algum dado.',
        showConfirmButton: false,
        })

    }
  
}



let select1_1 = document.querySelector('.select-1_1');
let select1_2 = document.querySelector('.select-1_2');
let select1_3 = document.querySelector('.select-1_3');
let select1_4 = document.querySelector('.select-1_4');
let select1_5 = document.querySelector('.select-1_5');
let select1_6 = document.querySelector('.select-1_6');
let form_1 = document.querySelector('.form-input_1');

select1_1.style.display = 'flex';
select1_2.style.display = 'flex';
select1_3.style.display = 'flex';
select1_4.style.display = 'none';
select1_5.style.display = 'none';
select1_6.style.display = 'none';
i_1 = 0;
function nextInputs1(e) {
    e.preventDefault();
      

    if(!((select1_1.value == "")  || (select1_2.value == "")  || (select1_3.value == "")))  {
        (i_1 == 0 || i_1 == 1) && i_1++

        if(i_1 == 1){ 
        select1_1.style.display = 'none';
        select1_2.style.display = 'none';
        select1_3.style.display = 'none';
        select1_4.style.display = 'flex';
        select1_5.style.display = 'flex';
        select1_6.style.display = 'flex';
        inputs.forEach((input) => {
                  input.value = "Enviar"
            })   
        }
        
        if(i_1 == 2){ 

          if((!(select1_4.value == "Qual empreendimento de seu interesse?") && !(select1_5.value == "Qual a metragem desejada?") && !(select1_6.value == "Preferência de contato?")    ) ){

                    swal({  position: 'top-end',
                    icon: 'success',
                    title: 'Você será redirecionado para o WhatsApp...',
                    showConfirmButton: false,
                    })

                    setTimeout(() => {
                        form.submit() 
                    }, 2000)
                }   

                else {
                    swal({  position: 'top-end',
                    icon: 'error',
                    title: 'Você escolheu uma opção padrão. Escolha outra.',
                    showConfirmButton: false,
                })

        }
            
            }

     

    }

    else {

        swal({  position: 'top-end',
        icon: 'error',
        title: 'Falta escrever algum dado.',
        showConfirmButton: false,
        })

    }
  
}


</script>


