<?php

namespace GlassCode\PersianFaker\lib;

class Phone
{
    public static function generate($operator = null)
    {
        $number = 0;
        switch ($operator) {
            case 'mci' :
                $number = '0912';
                break;
            case 'rightel' :
                $number = '0921';
                break;
            case 'irancell':
                $number = '0935';
                break;
            default :
                $number = '09' . mt_rand(10, 99);

        }
        return $number . mt_rand(1000000, 9999999);
    }
}
