

        <div class="info-details default-bg-color-3 collumn center radius-2 ml-1">
                <h1 class="text-center pt-1 pb-1 bold">DIFERENCIAIS:</h1>
                <div class="info-details-container text-center center pb-1 row">


        <?php 
$detailsInfo1 = ['SALA DE MASSAGEM',
                'PISCINA',
                'BRINQUEDOTECA',
                'ACADEMIA EQUIPADA',
                'SALÃO DE FESTAS',
                'SAUNA']; 
                foreach($detailsInfo1 as $key => $details):
                        $key = $key + 1;
                echo "    <div class='info-details-item collumn evenly'>

                        <div class='center' style='    background: white;
                        padding: 9px;
                        width: 80px;
                        height: 80px;
                        border-radius: 20px;
                        border-bottom: 6px double;
                        border-right: 6px double;'>

                        <img src='public/icons/icons-2/$key.png'>
                        </div>
                        $details

              
                        </div>";
                endforeach;


?>



        </div>
        </div>


