<?php

namespace GlassCode\PersianFaker;

class PersianFaker
{
    private static $path = __DIR__ . DIRECTORY_SEPARATOR . 'lib' . DIRECTORY_SEPARATOR;
    private static $extension = '.php';

    public static function get($value, array $array = null)
    {
        if (!$array) {
            if (file_exists(self::$path . $value . self::$extension)) {
                $data = include_once self::$path . $value . self::$extension;
                return $data[array_rand($data)];
            }
        } else {
            $method = $array['method'];
            $class = 'GlassCode\PersianFaker\lib\\' . $value;
            return $class::$method($array['value']);
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
        return self::get('Phone', ['method' => 'generate', 'value' => $operator]);
    }

    public static function certificate()
    {
        return self::get('Certificate');
    }

    public static function job()
    {
        return self::get('Job');
    }

    public static function company()
    {
        return self::get('Company');
    }

    public static function domain()
    {
        return self::get('Domain');
    }

    public static function address()
    {
        return self::get('Address');
    }

    public static function state()
    {
        return self::get('State');
    }

    public static function city()
    {
        return self::get('City');
    }

    public static function word()
    {
        return self::get('Word');
    }

    public static function email(string $operator = null)
    {
        return self::get('Email', ['method' => 'generate', 'value' => $operator]);
    }

    public static function paragraph(int $count = 1) : string
    {
        $lorem = self::get('Paragraph');
        return str_repeat($lorem , $count);
    }

    public static function sentence()
    {
        return self::get('Sentence');
    }

}
