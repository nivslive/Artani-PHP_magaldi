
    <?php 

$dir    = 'public/img/'.$folder;
$files1 = scandir($dir);
$files1 = array_splice($files1, 2);
?>
    <section class="plantas-container center text-center collumn pt-3 pb-3">


    <h1 class="text-black bold pb-2">PLANTAS:</h1>
<div class="owl-carousel owl-theme center center m-auto w-75">


    <?php foreach($files1 as $file1): ?>

        <div class="item">
    <?="<img src='$dir/$file1'>";?>
        </div>
<?php endforeach; ?>
</div>
    </section>
<style>
.owl-dots {align-items:center; justify-content:center;}
.owl-nav {display:none;}
.owl-theme .owl-dots .owl-dot span {
    width: 47px; height: 10px; background:gray;
}
.owl-item {
    justify-content:center;
    align-items:center;
}
.owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span {
    background: orange;
}

.owl-theme .owl-dots, .owl-theme .owl-nav {
    flex-wrap: wrap; }


    .owl-carousel .owl-item img {
    max-width: 51rem;
}
</style>