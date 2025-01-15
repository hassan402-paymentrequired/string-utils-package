<?php

namespace Hassan\FirstPackage;

class StringUtils
{

    /**
     * check if the string is empty or not
     */
    public static function contain(string $str, string $substr): bool
    {
        return str_contains($str, $substr);
    }

    public static function trim(string $str): string
    {
        return trim($str);
    }

    /**
     * convert the first letter to an array
     */
    public static function capitaliseFirstLetter(string $str): string
    {
        return ucfirst(strtolower($str));
    }


    /**
     * convert the first each letter to uppercase
     */
    public static function capitaliseEachFirstLetter(string $str): string
    {
        return ucwords(strtolower($str));
    }

    /**
     * shuffle a string randomly
     */
    public static function shuffle(string $str): string
    {
        return str_shuffle($str);
    }

    /**
     * count the number of words in the string
     */
    public static function count(string $str): int
    {
        return str_word_count($str);
    }

    /**
     * convert string to an array
     */
    public static function toArray(string $str): array
    {
        return str_split($str);
    }

    /**
     * convert string to uppercase
     */
    public static function toUpperCase(string $str): string
    {
        return strtoupper($str);
    }

    /**
     * convert string to lowercase
     */
    public static function toLowerCase(string $str): string
    {
        return strtolower($str);
    }

    /**
     * check if the string is empty or not
     */
    public static function isEmpty(string $str): bool
    {
        return $str === '';
    }


    /**
     * check if the string is empty or not
     */
    public static function getPosition(string $str, string $substr): int
    {
        return strpos($str, $substr);
    }
}
