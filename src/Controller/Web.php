<?php
namespace Template\Controller;

use Exception;
use League\Plates\Engine;
use Template\Configuration\Config;
use Template\Services\Mailer;
use Template\Helper\FlashMessageTrait;

class Web 

{
    
    use FlashMessageTrait;
    
    private $view;
    
    
    
    public function __construct()
    
    {
        
        $this->view = new Engine(__DIR__ . '/../../views/site/');
        
    }
    
    
    
    public function index()
    
    {
        echo $this->view->render('home', []);
        
    }



    public function submit($data) {
      //  echo "<style>* {opacity:0}</style>";
            
            $name = $data['name'];
            $telefone = $data['phone'];
            $email = $data['email'];
            $empreendimento = $data['empreendimento'];
            $metragem = $data['metragem'];
            $contato = $data['contato'];

            $mailer = new Mailer;
            $view = utf8_decode("
                        <span><h3>Nome:</h3>

                            $name

                        </span>          <hr>       <br>

                        <span><h3>Telefone:</h3>

                        $telefone

                    </span>

                            <hr>
                            <br>
                    <span><h3>Email:</h3> 

                            $email  


                    <hr><br>
                    <h1>Qual é o empreendimento de seu interesse?</h1>

                            $empreendimento 


                               <hr><br>       
                               
                 <h1>Qual a metragem?</h1>

                    $metragem 
   
   
                                  <hr><br>
                                  
                                  <h1>Preferencia de contato?</h1>

                                  $contato 
                 
                 
                                                <hr><br>                 ");
       



    
                try {   
                    $mailer->setSubject('Cadastro - MAGALDI MOEMA');
                    $mailer->setMessage($view);

            $mailer->send("marketing@mazukim.com.br", $data['name']);
            //$mailer->send("consultoramagaldi@gmail.com", $data['name']);
  
        } catch(Exception $e) {
            $this->defineMensagem('error', 'Erro ao fazer a requisição. Tente novamente mais tarde.');
   
        }

            

            $phone = '55' . preg_replace('/[^\d]/i', '', '11988519002');
            $message = "Olá Magaldi, tudo bem? Meu nome é $name e gostaria de mais informações referente ao empreendimento $empreendimento e a metragem de $metragem 
                        //// Meu telefone é: $telefone,  Meu Email é: $email, e a melhor forma de me contatar é via $contato";
    
            // DO NOT EDIT BELOW
    
            $message = urlencode($message);
    
            $message = str_replace('+','%20',$message);
    
            $iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
    
            $android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
    
            $palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
    
            $berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
    
            $ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
    
            // check if is a mobile
    
            if ($iphone || $android || $palmpre || $ipod || $berry == true)
    
            {
    
                header('Location: whatsapp://send?phone='.$phone.'&text='.$message);
    
            //OR
    
                echo "<script>window.location='whatsapp://send?phone='.$phone.'&text='.$message</script>";
    
            }
    
            // all others
    
            else {
    
                header('Location: https://web.whatsapp.com/send?phone='.$phone.'&text='.$message);
    
            //OR
    
                echo "<script>window.location='https://web.whatsapp.com/send?phone='.$phone.'&text='.$message</script>";
    
            }

   


    }
    
}