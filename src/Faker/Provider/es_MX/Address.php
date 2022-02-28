<?php

namespace Faker\Provider\es_MX;

class Address extends \Faker\Provider\es_ES\Address
{
    protected static $cityPrefix = ['San', 'Valle de', 'Villa', 'Ciudad', 'Los'];
    protected static $citySuffix = ['del Rio', 'del Carmen', 'Bravo', 'de Agua', 'de la Sierra'];
    protected static $citys = [
        'Ciudad de México', 'Tijuana', 'San Cristóbal Ecatepec', 'León', 'Puebla de Zaragoza', 'Ciudad Juárez', 'Guadalajara', 'Zapopan', 'Monterrey', 'Nezahualcóyotl', 'Chihuahua', 'Mérida', 'Cancún', 'Saltillo', 'Aguascalientes', 'Hermosillo', 'Mexicali', 'San Luis Potosí', 'Culiacán Rosales', 'Santiago de Querétaro', 'Naucalpan de Juárez (municipio de Naucalpan)', 'Morelia', 'Chimalhuacán', 'Reynosa', 'Torreón', 'Tlalnepantla de Baz', 'Acapulco de Juárez', 'Tlaquepaque', 'Guadalupe', 'Victoria de Durango', 'Tuxtla Gutiérrez', 'Apodaca', 'Ciudad López Mateos', 'Cuautitlán Izcalli', 'Heroica Matamoros', 'General Escobedo', 'Irapuato', 'Xalapa', 'Tonalá', 'Mazatlán', 'Nuevo Laredo', 'San Nicolás de los Garza', 'Veracruz (municipio de Veracruz)', 'Ojo de Agua', 'Xico', 'Celaya', 'Tepic', 'Ixtapaluca', 'Cuernavaca', 'Villahermosa'
    ];
    protected static $streetPrefix = [
        'Calle', 'Avenida', 'Prolongación', 'Paseo', 'Calzada', 'Camino', 'Eje', 'Plaza', 'Privada', 'Cerrada'
    ];
    protected static $streetSuffix = ['Norte', 'Sur', 'Oriente', 'Poniente'];
    protected static $municipality = [
        'Tijuana', 'Iztapalapa', 'León', 'Puebla', 'Ecatepec de Morelos', 'Juárez', 'Zapopan', 'Guadalajara', 'Gustavo A. Madero', 'Monterrey', 'Nezahualcóyotl', 'Mexicali', 'Querétaro', 'Culiacán', 'Mérida', 'Aguascalientes', 'Chihuahua', 'Hermosillo', 'San Luis Potosí', 'Benito Juárez', 'Toluca', 'Saltillo', 'Morelia', 'Naucalpan de Juárez', 'Acapulco de Juárez', 'Álvaro Obregón', 'Tlajomulco de Zúñiga', 'Torreón', 'Chimalhuacán', 'Reynosa', 'Tlalpan', 'Durango', 'San Pedro Tlaquepaque', 'Centro', 'Tlalnepantla de Baz', 'Apodaca', 'Guadalupe', 'Coyoacán', 'Veracruz', 'Tuxtla Gutiérrez', 'Irapuato', 'Tonalá', 'Cuautitlán Izcalli', 'Tecámac', 'Cuauhtémoc', 'Ixtapaluca', 'Matamoros', 'Atizapán de Zaragoza', 'Celaya', 'Tultitlán'
    ];
    protected static $state = [
        'Ciudad de México', 'Aguascalientes', 'Baja California', 'Baja California Sur', 'Campeche', 'Coahuila de Zaragoza', 'Colima', 'Chiapas', 'Chihuahua', 'Durango', 'Guanajuato', 'Guerrero', 'Hidalgo', 'Jalisco', 'México', 'Michoacán de Ocampo', 'Morelos', 'Nayarit', 'Nuevo León', 'Oaxaca', 'Puebla', 'Querétaro', 'Quintana Roo', 'San Luis Potosí', 'Sinaloa', 'Sonora', 'Tabasco', 'Tamaulipas', 'Tlaxcala', 'Veracruz de Ignacio de la Llave', 'Yucatán', 'Zacatecas'
    ];
    protected static $cityFormats = [
        '{{cityPrefix}} {{lastName}} {{citySuffix}}',
        '{{cityPrefix}} {{firstName}}',
        '{{lastName}} {{citySuffix}}',
        '{{citys}}',
    ];
    protected static $streetNameFormats = [
        '{{streetPrefix}} {{firstName}}',
        '{{streetPrefix}} {{lastName}}',
        '{{streetPrefix}} {{lastName}} {{streetSuffix}}',
    ];
    protected static $secondaryAddressFormats = ['Dpto. ###', 'Casa #', 'Casa ##', 'Int. ##', 'Hab. ###', 'Piso #', 'Piso ##'];

    /**
     * @example 'Coyoacán'
     */
    public static function municipality()
    {
        return static::randomElement(static::$municipality);
    }
}
