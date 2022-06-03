

        <div class="info-details default-bg-color-3 collumn center radius-2 ml-1">
                <h1 class="text-center pt-2 bold">DIFERENCIAIS:</h1>
                <div class="info-details-container text-center center pb-1 row">


        <?php 
$detailsInfo1 = ['TOMADA PARA BICICLETAS E CARROS ELÉTRICOS ',
                'FECHADURAS INTELIGENTES NAS UNIDADES',
                'REÚSO DE ÁGUAS PLUVIAIS',
                'GERADOR DE CONFORTO PARA ELEVADOR E SISTEMAS DE SEGURANÇA',
                'LOJAS NO TÉRREO',
                'SISTEMA DE AQUECIMENTO SOLAR (PREVISÃO)',
                'ÁREAS VERDES DE ACESSO EXCLUSIVO AOS CONDÔMINOS',
                'INFRAESTRUTURA PARA WI-FI NAS ÁREAS COMUNS']; 
                foreach($detailsInfo1 as $key => $details):
                        $key = $key + 1;
                echo "    <div class='info-details-item collumn evenly'>


                        <img src='public/icons/icons-1/icon-$key.png'>
                        $details
                        </div>";
                endforeach;


?>

        </div>
        </div>


