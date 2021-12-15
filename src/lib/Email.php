<?php

namespace GlassCode\PersianFaker\lib;

use Illuminate\Support\Str;

class Email
{
    private static $operator = ['gmail.com' , 'yahoo.com' , 'outlook.com' , 'mihanmail.ir' , 'chmail.ir'];

    public static function generate($operator = null)
    {
        if (!$operator){
            $operator = self::$operator[array_rand(self::$operator)];
        }

        return Str::random(mt_rand(9,20)) . '@' . $operator;

    }

}
