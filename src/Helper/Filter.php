<?php



namespace Template\Helper;



trait Filter

{

    public static function string(?string $string)

    {
       return  filter_var($string, FILTER_SANITIZE_STRING);
    }

}

