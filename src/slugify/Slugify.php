<?php

namespace slugify;

class Slugify
{
    public static $allowed_symbols = '\w\d\-\.\'';

    /**
     * @param string $str
     * @return string
     */
    public static function process($str)
    {
        if (function_exists('\\transliterator_transliterate')) {
            $str = \transliterator_transliterate('Any-Latin; Latin-ASCII; Lower()', $str);
        }
        if (function_exists('\\iconv')) {
            $str = \iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $str);
        }
        $str = trim(strtolower($str));
        return preg_replace(array('!\s+!', '![^' . static::$allowed_symbols . ']!', '!-+!'), array('-', '', '-'), $str);
    }
}
