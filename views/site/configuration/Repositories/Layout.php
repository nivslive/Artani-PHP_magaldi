<?php


class Layout {



	public static function config($config){


 		$root = $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.NAME_PATH.'views'.DIRECTORY_SEPARATOR.'site';
				

				require  $root.DIRECTORY_SEPARATOR.'configuration'
                      .DIRECTORY_SEPARATOR.'HTML'
                      .DIRECTORY_SEPARATOR.$config.'.php';

             }



             public static function title(string $title){
       
               self::config('Head');
                echo "<title> $title</title>";
                self::config('endHead'); }
      

         }

	?>