<?php
namespace Template\Controller;



use League\Plates\Engine;

class Web 

{
    
    
    
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
            var_dump($data);
             $phone = '55' . preg_replace('/[^\d]/i', '', '11974885114');
            $name = $data['name'];
            $telefone = $data['phone'];
            $email = $data['email'];
            $empreendimento = $data['empreendimento'];
            $metragem = $data['metragem'];
            $contato = $data['contato'];
            $message = "Olá Magaldi, tudo bem? Meu nome é $name e gostaria de mais informações referente à:
                        Qual tipo de empreendimento: $empreendimento 
                        Metragem: $metragem
                        
                        Meu telefone é: $telefone
                        Meu Email é: $email
                        A melhor forma de me contatar é via $contato";

                   


    
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