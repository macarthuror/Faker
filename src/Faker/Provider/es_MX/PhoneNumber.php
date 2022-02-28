<?php

namespace Faker\Provider\es_MX;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = [
        '+52 ### ### ####',
        '+52 ## #### ####',
        '+52#########',
        '### ### ####',
        '## #### ####',
        '#########',
    ];

    protected static $tollFreeFormats = [
        '800#######',
        '800 ### ####'
    ];

    public static function tollFreeNumber()
    {
        return static::numerify(static::randomElement(static::$tollFreeFormats));
    }
}
