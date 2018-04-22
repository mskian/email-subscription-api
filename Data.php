<?php

class Data{

    /**
     * Returns a sanatized int;
     *
     * @param int $data
     * @return int
     */
    public static function clean_int($data){
        $data = preg_replace("/[^0-9]/", "", $data);
        return (int)$data;
    }

    /**
     * Returns an alpha sanatized string;
     *
     * @param string $data
     * @return string
     */
    public static function clean_alpha($data){
        $data = preg_replace("/[^a-zA-Z]/", "", $data);
        return $data;
    }

    /**
     * Returns an alpha-numeric sanatized string;
     *
     * @param string $data
     * @return string
     */
    public static function clean_alphanumeric($data){
        $data = preg_replace("/[^a-zA-Z0-9]/", "", $data);
        return $data;
    }

    /**
     * Returns an alpha-numeric whitespace sanatized string;
     *
     * @param string $data
     * @return string
     */
    public static function clean_simple($data){
        $data = preg_replace("/[^a-zA-Z0-9 ]/", "", $data);
        return $data;
    }

    /**
     * Returns an alpha-numeric basic character sanatized string;
     *
     * @param string $data
     * @return string
     */
    public static function clean_basic($data){
        $data = preg_replace("/[^a-zA-Z0-9~!@#$:=%^&?*\/()_+-. ]/", "", $data);
        return $data;
    }

    /**
     * Returns a sanatized email;
     *
     * @param string $data
     * @return string
     */
    public static function clean_email($data) {
        $data = preg_replace("/[^a-zA-Z0-9-@.]/", "", $data);
        return $data;
    }

    /**
     * Returns an alpha-numeric advanced character sanitized string;
     *
     * @param string $data
     * @return string
     */
    public static function clean_advanced($data){
        $data = preg_replace("/[^a-zA-Z0-9 \/{}[]:._~\-!@#\$%\^&\*áàâãªäÁÀÂÃÄÍÌÎÏíìîïéèêëÉÈÊËóòôõºöÓÒÔÕÖúùûüÚÙÛÜçÇñÑ]+/", $data);
        return $data;
    }

    /**
     * Checks if provided integer is odd
     *
     * @param $int Number to check if odd
     * @return bool
     */
    public static function is_odd($int){
        return (self::clean_int($int) % 2 == 1);
    }

    /**
     * Checks if provided integer is even
     *
     * @param $int Number to check if even
     * @return bool
     */
    public static function is_even($int){
        return (self::clean_int($int) % 2 == 0);
    }
}