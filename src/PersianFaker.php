<?php

namespace GlassCode\PersianFaker;

class PersianFaker
{
    private static $path = __DIR__ . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR;
    private static $extension = '.php';

    public static function get($value)
    {
        if (file_exists(self::$path . $value . self::$extension)) {

            $data = include_once self::$path . $value . self::$extension;
            return $data[array_rand($data)];
        }
        return null;
    }

    public static function name()
    {
        return self::get('Name');
    }

    public static function lastname()
    {
        return self::get('Lastname');


    }

    public static function nationalCode()
    {
        return mt_rand(1111111111, 9999999999);
    }


    /**
     * Generate phone
     *
     * @param string $oprator =>  mci | irancell | rightel
     * @return string
     * @example 09123456789
     *
     */
    public static function phone($operator = null)
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

    public static function certificate()
    {
        return self::get('Certificate');
    }



}
