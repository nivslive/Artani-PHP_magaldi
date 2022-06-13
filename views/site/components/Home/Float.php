<style>



.whatsapp .action {

width: 100%;

padding-right:20px;
padding-bottom:20px;

text-align: right;

display: flex;

justify-content: flex-end;

flex-wrap: wrap;

}



.whatsapp .action .clearfix {

width: 100%;

float: left;

}



.whatsapp .action hgroup {

background-color: #fff !important;

padding: 15px 20px;

border-radius: 10px 10px 0 10px;

position: relative;

text-align: center;

max-width: 200px;

margin-bottom: 15px;

margin-right: 10px;

box-shadow: 0 0 5px 2px rgba(0, 0, 0, .3);

}



.whatsapp .action hgroup::before {

content: '';

position: absolute;

bottom: -15px;

right: 0;

width: 0;

height: 0;

border-style: solid;

border-width: 15px 15px 0 15px;

border-color: #008000 transparent transparent transparent;

}



.whatsapp .action h2 {

font-size: .8em;

margin: 0;

}



.whatsapp .action p {

font-size: 1.25em;

font-weight: bold;

margin: 0;

}



.whatsapp .action .close {

position: absolute;

width: 20px;

height: 20px;

background-color: #fff;

border-radius: 50%;

top: -5px;

right: -5px;

color: <?= (is_null($color) || empty($color->getColorFirst())) ? '#000034' : $color->getColorFirst() ?>;

font-size: .8em;

line-height: 22px;

}



.whatsapp .btn-floating {

background-color: #008000 !important;

width: 50px;

height: 50px;

line-height: 50px;

font-size: 1.75em;

}



.whatsapp .form {

background-color: white;

border-radius: 10px;

position: relative;

overflow: hidden;

box-shadow: 0 0 5px 2px rgba(0, 0, 0, .3);

display: none;

}



.whatsapp .form header {

display: flex;

align-items: center;

flex-wrap: nowrap;

background-color: #008000;

padding: 20px;

position: relative;

}



.whatsapp .form img {

width: 50px;

height: 50px;

border-radius: 50%;

background-color: white;

object-fit: contain;

padding: 5px;

margin-right: 10px;

}



.whatsapp .form h3 {

font-size: 1.1em;

font-weight: bold;

margin: 0;

color: white;

}



.whatsapp .form p {

font-size: .8em;

margin-top: 5px;

margin-bottom: 0;

line-height: 1.25em;

color: white;

}



.whatsapp .form a {

position: absolute;

right: 10px;

top: 0px;

font-size: 2em;

color: white;

}



.whatsapp .form fieldset {

padding: 20px !important;

}



.whatsapp .form input {

border: 1px solid #999 !important;

border-radius: 5px !important;

padding-left: 1em !important;

width: calc(100% - 1.1em) !important;

margin: 0 !important;

margin-bottom: 10px !important;

font-size: 1em !important;

box-shadow: none !important;

outline: none !important;

}



.whatsapp .form textarea {

border: 1px solid #999 !important;

border-radius: 5px !important;

padding: 1em !important;

margin: 0 !important;

margin-bottom: 5px !important;

resize: none;

height: 6em !important;

box-shadow: none !important;

outline: none !important;

}



.whatsapp .form input::placeholder,

.whatsapp .form textarea::placeholder {

color: #666;

}



.whatsapp .form .btn {

width: 100%;

background-color: #008000 !important;

box-shadow: none !important;

text-transform: none !important;

border-radius: 10px;

height: 3em;

line-height: 3em;

}





.float {

font-family: 'Open Sans', Tahoma, Geneva, Verdana, sans-serif;

position: fixed;

bottom: 10px;

right: 10px;

z-index: 1000;

}



.float p,

.float strong {

display: block;

}

.float svg {

float: left;
margin-right: 6px;
margin-top: 2px;
width:15px;

}

.float .btn-floating {

width: 200px !important;

height: auto !important;

border-radius: 30px !important;

font-size: 1.1em !important;

display: flex;
flex-direction: column;
align-items: center;

padding: 10px 20px;

line-height: 20px;

box-shadow: none !important;
background-color: #34af23 !important;

}
/*
.float .btn-floating {

width: 50px !important;

height: 50px !important;

text-align: center;

font-size: 1.5em !important;

background-color: #34af23 !important;

line-height: 50px;

box-shadow: none !important;

}*/



.float p {

font-size: .7em;

margin: 0;


margin-bottom: 0em;

display:initial;

}



.float strong {

font-weight: normal !important;

display: initial;

}





.pulse-button {

    box-shadow: 0 0 0 0 greenyellow;
    border-radius: 50rem;
  cursor: pointer;
  -webkit-animation: pulse 1.25s infinite cubic-bezier(0.66, 0, 0, 1);
  -moz-animation: pulse 1.25s infinite cubic-bezier(0.66, 0, 0, 1);
  -ms-animation: pulse 1.25s infinite cubic-bezier(0.66, 0, 0, 1);
  animation: pulse 1.25s infinite cubic-bezier(0.66, 0, 0, 1);
}
.pulse-button:hover 
{
  -webkit-animation: none;-moz-animation: none;-ms-animation: none;animation: none;
}

@-webkit-keyframes pulse {to {box-shadow: 0 0 0 45px rgba(232, 76, 61, 0);}}
@-moz-keyframes pulse {to {box-shadow: 0 0 0 45px rgba(232, 76, 61, 0);}}
@-ms-keyframes pulse {to {box-shadow: 0 0 0 45px rgba(232, 76, 61, 0);}}
@keyframes pulse {to {box-shadow: 0 0 0 45px rgba(232, 76, 61, 0);}}

</style>

<aside class="float pulse-button center text-center">
		<a target="_blank" href="https://api.whatsapp.com/send?phone=55<?=USER_NUMBER?>&text=Entre%20em%20contato%20com%20um%20dos%20nossos%20consultores%20Magaldi" class="btn-floating waves-effect pulse text-white">
		<span>	
			<svg class="svg-inline--fa fa-whatsapp fa-w-14" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="whatsapp" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"></path></svg><!-- <span class="fab fa-whatsapp"></span> Font Awesome fontawesome.com --> 
            <p>Chame Agora Mesmo!</p> </span><strong><?=USER_NUMBER_PREVIEW?></strong>
		</a>
	</aside>