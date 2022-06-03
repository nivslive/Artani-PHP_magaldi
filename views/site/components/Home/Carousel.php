    <?php if(isset($style) and  !$style == ''):?>

        <link rel="stylesheet" type="text/css" href="public/css/components/<?=$style?>">


    <?php endif; ?>
<section class="slider-container-body<?=$item?>">
    
<div class="slider-container<?=$item?>">

    <div class="slider-content<?=$item?>">
<?php foreach($data as $d): ?>
    <div class="slider-single<?=$item?>">
            <img class="slider-single-image" src="<?=$d?>" alt="6" />
           <!-- <h1 class="slider-single-title">Through the Mountains</h1>
            <a class="slider-single-likes" href="javascript:void(0);">
                <i class="fa fa-heart"></i>
                <p>1,247</p>
            </a> -->
        </div>
<?php endforeach; ?>







    </div>
</div>


</section>



<?php if(isset($script) and !$script == ''):?>


<script src="public/js/components/<?=$script?>"></script>

<?php endif; ?>