

<link rel="stylesheet" type="text/css" href="public/css/components/Video2.css">

<style>
.glightbox_video2:hover
.play2{
    fill: white;
  transition:fill .4s .3s ease-out;
}

.glightbox_video2 {
  position: absolute;
  }

.outer_circle2 {
  stroke-width: 3;
  stroke-dasharray: 410; 
   stroke-dashoffset: 0;
  stroke-linecap: square;
  transition: all .4s ease-out;
}

.glightbox_video2:hover .outer_circle2 {
stroke-dashoffset:410;
  transition: stroke .7s .4s ease-out, stroke-dashoffset .4s ease-out
}

.glightbox_video2:hover 
.inner-circle2 {
  fill: #BF2428;
  transition:fill .4s .3s ease-out;
  
}

.glightbox_video2:hover
.play2{
    fill: white !important;
  transition:fill .4s .3s ease-out;
}

</style>
<section class="center pt-3">
<div class="header-section_video2">


<div class="header-section_video_frame2">
<video class="myVideo2">
<source src="public/video/2.mp4" type="video/mp4">
Your browser does not support HTML5 video.      
</video>                                                      </div>

<a class="glightbox_video2 pointer" onclick="playVid2()"> 
                <svg width="240" height="240" viewBox="0 0 131 131" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="inner-circle2" d="M65 21C40.1488 21 20 41.1488 20 66C20 90.8512 40.1488 111 65 111C89.8512 111 110 90.8512 110 66C110 41.1488 89.8512 21 65 21Z" fill="white"></path>
                    <circle class="outer_circle2" cx="65.5" cy="65.5" r="64" stroke="white"></circle>
                    <path class="play2" fill-rule="evenodd" clip-rule="evenodd" d="M60 76V57L77 66.7774L60 76Z" fill="#BF2428"></path>
                </svg>
                </a>
<!--<button onclick="playVid2()" class="header-section_video_play2"></button>
-->
<button onclick="pauseVid2()" class="header-section_video_pause2" style="display: none;"></button>
</div>
</section>



