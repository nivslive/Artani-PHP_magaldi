let vid = document.querySelector(".myVideo"); 
var play = document.querySelector(".header-section_video_play");
var pause = document.querySelector(".header-section_video_pause");
pause.style.display = "none"
vid.style.opacity = "0.3"
function playVid() { 
  vid.play(); 
  pause.style.display = "flex"
  play.style.display = "none"
  vid.style.opacity = "1"

} 

function pauseVid() { 
 vid.pause(); 
  pause.style.display = "none"
  play.style.display = "flex"
    vid.style.opacity = "0.3"
} 

 vid.addEventListener('ended', function(){
              pause.style.display = "none"
              play.style.display = "flex"
                });
