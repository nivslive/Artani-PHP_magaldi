<?php


class Component {






        public function __construct(){
              new Component;
        }


  
        public static function render(string $component, string $page = '', $style = false, $script = false, $data = []) {
                  $root = $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.NAME_PATH.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.'site';

                  if($style == true): echo '<link rel="stylesheet" type="text/css" href="public/css/components/'.$component.'.css" />'; endif;


                  extract($data);

                  
                if($page == '') {             
                  require  $root.DIRECTORY_SEPARATOR.'components'
                                      .DIRECTORY_SEPARATOR.ucfirst($component).'.php';
                }

                else {           
                require  $root.DIRECTORY_SEPARATOR.'components'
                                      .DIRECTORY_SEPARATOR.$page
                                      .DIRECTORY_SEPARATOR.ucfirst($component).'.php';
                                      }




                                      if($script == true): echo '<script type="text/javascript" href="public/js/components/'.$component.'.js" /></script>'; endif;



                                    } 

                                    


                }




              ?>