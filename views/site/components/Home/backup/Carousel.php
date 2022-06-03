 <style type="text/css">@-ms-viewport{width:auto!important;}</style>
    <link rel="stylesheet" type="text/css" href="public/css/glider.css" />
    <script src="public/js/glider.js"></script>
    <script>
      window.addEventListener('load',function(){
        document.querySelector('.glider').addEventListener('glider-slide-visible', function(event){
            var glider = Glider(this);
            console.log('Slide Visible %s', event.detail.slide)
        });
        document.querySelector('.glider').addEventListener('glider-slide-hidden', function(event){
            console.log('Slide Hidden %s', event.detail.slide)
        });
        document.querySelector('.glider').addEventListener('glider-refresh', function(event){
            console.log('Refresh')
        });
        document.querySelector('.glider').addEventListener('glider-loaded', function(event){
            console.log('Loaded')
        });

       
        window._ = new Glider(document.querySelector('.glider'), {
            slidesToShow: 1, //'auto',
            slidesToScroll: 1,
            itemWidth: 150,
            draggable: true,
            scrollLock: false,
            dots: '#dots',
            rewind: true,
            arrows: {
                prev: '.glider-prev',
                next: '.glider-next'
            },
            responsive: [
                {
                    breakpoint: 2000,
                    settings: {
                        slidesToScroll: 'auto',
                        itemWidth: 300,
                        slidesToShow: 'auto',
                        exactWidth: true
                    }
                },
                {
                    breakpoint: 1210,
                    settings: {
                        slidesToScroll: 1,
                        slidesToShow: 1,
                        dots: true,
                    }
                },
                {
                    breakpoint: 800,
                    settings: {
                        slidesToScroll: 2,
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToScroll: 1,
                        slidesToShow: 1,
                        dots: false,
                        arrows: false,
                        scrollLock: true
                    }
                }
            ]
        });
      });
    </script>


    <!--
        Used to frame the glider on the page

        Not necessary for Glider.js
    -->
    <style type="text/css">


.glider-slide .visible .left-1 {
display: none !important;
       }

.glider-slide .visible .right-1 {
    display: none !important;
}

       .glider-slide .visible .center {
display: none !important;
       }


        .myVideo {
    width: 100%;
    height: 94%;
    /* border-radius: 5rem; */
}
  .glider-track {
    height: 19rem;
    align-items: center;
}


        .glider-contain {
            width: 90%;
            max-width: 997px;
            margin: 0 auto;
            display:block;
        }
        .glider-slide {
            min-height: 150px;
        }
        .glider-slide img {
            width: 100%;
        }

        .arrow-carousel-left {
          transform: rotate(180deg);
        }
        .glider-prev {
          left: -5rem;
        }
        @media(max-width:1158px){
            .glider-prev {
          display:none;
        }
        }

        .arrow-carousel {
          clip-path: polygon(20% 0%, 16% 10%, 57% 50%, 12% 94%, 20% 100%, 50% 70%, 70% 50%, 50% 30%);
    background: var(--color-3);
    width: 84px;
    height: 84px;
        }
        .glider-next {
          right: -5rem;
        }
        @media(max-width:1158px){
            .glider-next {
          display:none;
        }
        }

        .carousel-video-item {
    background: white;
    width: 90%;
    height: 15em;
    margin-right: 20px;
    flex-direction: column;
    align-items: center;
    border-radius: 25px;
    box-shadow: 11px 13px 1px orange;
    justify-content: center;
        }

        .carousel-video-frame {
          background: gray;
    width: 80%;
    height: 68%;
    align-items: center;
    border-radius: 27px;
        }

        .carousel-video-play {
          margin-top: 10px;
    margin-bottom: 10px;
    width: 30px;
    height: 30px;
    background-color: var(--color-3);
    clip-path: polygon(0% 0%, 100% 50%, 0% 100%);
    cursor: pointer;
        }

             .carousel-video-pause {
              display: none;
          margin-top: 10px;
    margin-bottom: 10px;
    width: 30px;
    height: 30px;
    background-color: var(--color-3);
    clip-path: polygon(0% 0%, 0% 100%, 36% 100%, 36% 0, 65% 0, 66% 100%, 100% 100%, 100% 0%);
    cursor: pointer;
        }

    </style>

  <section class="carousel-conteiner">
    <div class="glider-contain">
        <div class="glider">

















               <div class="carousel-video-item">



            </div>










            <div class="carousel-video-item">



</div>






<div class="carousel-video-item">



</div>

























        </div>
        <button class="glider-prev"><div class="arrow-carousel arrow-carousel-left">.</div></button>
        <button class="glider-next"><div class="arrow-carousel">.</div></button>

    </div>

    <div class="carousel-deslizar-icon">
        <img src="public/img/deslizar.png">
    </div>

    </section>

    <div class="testandocontagem">
    <div>

    </div>

    <div>

    </div>
    
        <div>

    </div>


</div>

