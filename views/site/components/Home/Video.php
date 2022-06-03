<?=$videoclass?>


<section class="center pt-3">
<div class="header-section_video">


<div class="header-section_video_frame">
<video class="myVideo myVideo<?=$videoclass?>">
<source src="public/video/video_principal.mp4" type="video/mp4">
Your browser does not support HTML5 video.      
</video>                                                      </div>

<button onclick="playVid<?=str_replace('-', '', $videoclass)?>()" class="header-section_video_play header-section_video_play<?=$videoclass?>"></button>

<button onclick="pauseVid()" class="header-section_video_pause<?=$videoclass?>" style="display: none;"></button>
</div>
</section>