<?php 
$persons = ['ALEX HANAZAKI: PROJETO DE PAISAGISMO', 
            'FGMF ARQUITETOS: PROJETO DE ARQUITETURA', 'MIGUEL PINTO: PROJETO DE DESCRIÇÃO'];
?>

<div class="info-3-persons center w-100 p-2 ">

<?php foreach($persons as $key => $person): ?>
<div class="collumn center text-center">
   <?php $key = $key + 1;
        $person = explode(':',$person);
         ?>
   <img src="public/img/persons/<?=$key?>.png">
<span class="bold text-center"><?=$person[0]?></span>  <span><?=$person[1]?><span> 
</div>

<?php endforeach; ?>

</div>

