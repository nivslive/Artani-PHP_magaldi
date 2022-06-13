
<style>
.button-inscrevase {

    height: 3em;
    align-items: center;
    justify-content: center;
    padding: 35px 40px;
    color: white;
    line-height:10px;
    border: 0;
    font-size: 1em;
    border-radius: 1.5em;
    background: #4aff00;
  /**   margin: 27px 0px 61px 0px; **/
    font-weight: bold;
}

.frase-button a {
    height:40px;
}
.button-inscrevase * {
  display: initial;
}
.glow-on-hover {
    border: none;
    outline: none;
    color: #fff;
    background: #4aff00;
    cursor: pointer;
    position: relative;
    z-index: 0;
    border-radius: 10px;
}

.glow-on-hover:before {
    content: '';
    background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #ff0000);
    position: absolute;
    top: -2px;
    left:-2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 10px;
}

.glow-on-hover:active {
    color: #000
}

.glow-on-hover:active:after {
    background: transparent;
}

.glow-on-hover:hover:before {
    opacity: 1;
}

.glow-on-hover:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: #4aff00;
    left: 0;
    top: 0;
    border-radius: 10px;
}

@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}
@media(max-width:420px){
  .button-inscrevase {
    padding: 58px 14px;
    color: white;
    line-height: 19px;
        margin: auto;
        width: 92%;
  }
}
</style>
<section class="center pt-1 pb-3">
<a href="https://api.whatsapp.com/send?phone=55<?=USER_NUMBER?>&text=Entre%20em%20contato%20com%20um%20dos%20nossos%20consultores%20Magaldi">
<button class="button-inscrevase text-center collumn pointer glow-on-hover"> <h2 class="bold">ESTAMOS ONLINE</h2> <br>
<h3 class="bold">FALE COM A CONSULTORA MAGALDI</h3> </button></a>
</section>