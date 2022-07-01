<?php 
class Number 
{
    private static $suffix ="€";

    private static function withzero($chiffre){
        if ($chiffre < 10) {
            return $chiffre;
        }
    }

public function function  avecEuro( $chiffre): void
{
   return $chiffre . self::$suffix;
}


    ?>