<?php

namespace Faker\Provider\es_MX;

class Person extends \Faker\Provider\es_ES\Person
{
    protected static $stateCode = [
        'AS', 'BC', 'BS', 'CC', 'CS', 'CH', 'CL', 'CM', 'DF', 'DG', 'GT', 'GR', 'HG', 'JC', 'MC', 'MN', 'MS', 'NT', 'NL', 'OC', 'PL', 'QT', 'QR', 'SP', 'SL', 'SR', 'TC', 'TS', 'TL', 'VZ', 'YN', 'ZS', 'NE'
    ];

    protected static $consonants = [
        'B', 'C', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'V', 'X', 'Z', 'W'
    ];

    /**
     * Generates a random Registro Federal de Contribuyentes (RFC)
     *
     * @example 'DAJI111017'
     * @example 'OIIJ321019802'
     *
     * @see https://es.wikipedia.org/wiki/Registro_Federal_de_Contribuyentes#:~:text=Determinaci%C3%B3n%20del%20RFC,-El%20RFC%2C%20al&text=Se%20refiere%20a%20la%20persona,la%20inicial%20del%20apellido%20materno.
     */
    public static function rfc($homoclave = false)
    {
        // First 4 letters
        $rfc = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 1);
        $rfc .= self::randomElement(['A','E','I','O','U']);
        $rfc .= substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 2);

        // Year
        $rfc .= str_pad(rand(1, 99), 2, "0", STR_PAD_LEFT);
        // Month
        $rfc .= str_pad(rand(1,12), 2, "0", STR_PAD_LEFT);
        // Day
        $rfc .= str_pad(rand(1,31), 2, "0", STR_PAD_LEFT);

        if ($homoclave) {
            $rfc .= rand(100,999);
        }

        return $rfc;
    }

    /**
     * Generates a random Clave Única de Registro de Población (CURP)
     *
     * @example 'OALI920621HDFRBR00'
     *
     * @see https://es.wikipedia.org/wiki/Clave_%C3%9Anica_de_Registro_de_Poblaci%C3%B3n
     */
    public static function curp()
    {
        // base
        $curp = self::rfc();

        $curp .= self::randomElement(['H','M']);

        $curp .= self::randomElement(self::$stateCode);

        $curp .= implode('', self::randomElements(self::$consonants, 3));

        $curp .= str_pad(rand(1, 99), 2, "0", STR_PAD_LEFT);

        return $curp;
    }

}
