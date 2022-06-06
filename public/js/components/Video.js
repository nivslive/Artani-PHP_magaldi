
let vid = document.querySelector(".myVideo"); 
var play = document.querySelector(".header-section_video_play");
var pause = document.querySelector(".header-section_video_pause");
indice = '2';
let vid2 = document.querySelector(".myVideo"+indice); 
var play2 = document.querySelector(".header-section_video_play"+indice);
var pause2 = document.querySelector(".header-section_video_pause"+indice);
pause2.style.display = "none"
vid2.style.opacity = "0.3"
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
  
  
  function playVid2() { 
    vid2.play(); 
    pause2.style.display = "flex"
    play2.style.display = "none"
    vid2.style.opacity = "1"
  
  } 
  
  function pauseVid2() { 
   vid2.pause(); 
    pause2.style.display = "none"
    play2.style.display = "flex"
      vid2.style.opacity = "0.3"
  } 
  
   vid2.addEventListener('ended', function(){
                pause2.style.display = "none"
                play2.style.display = "flex"
                  });

  