<?php

use App\Models\City;

if (! function_exists('geobase')) {
    /**
     * This method returns a GeoIP2 City model.
     *
     * @param  string  $ipAddress  IPv4 or IPv6 address as a string.
     * @return \GeoIp2\Model\City|null
     *
     * @throws \GeoIp2\Exception\AddressNotFoundException  if the address is
     *                                                     not in the database
     * @throws \MaxMind\Db\Reader\InvalidDatabaseException if the database
     *                                                     is corrupt or invalid
     *
     */
    function geobase($ipAddress)
    {
        return app('geobase')->city($ipAddress);
    }
}

if (! function_exists('city')) {
    /**
     * [city description]
     *
     * @param  string       $ipAddress  IPv4 or IPv6 address as a string.
     * @param  string|null  $default    Name or domain
     * @return City|null
     *
     * @see https://github.com/maxmind/GeoIP2-php/blob/master/src/Record/City.php
     */
    function city(string $ipAddress, string $default = null) {
        try {
            $city = City::whereName(geobase($ipAddress)->city->name)->first();

            return $city ?? value(function () use ($default) {
                if (is_string($default)) {
                    return City::where('name', $default)
                           ->orWhere('domain', $default)
                           ->first()
                     ;
                }
            });
        } catch (\GeoIp2\Exception\AddressNotFoundException $e) {
            // pass
        }
    }
}

if (! function_exists('subdomain')) {
    /**
     * Find first subdomain if exsist.
     *
     * @param  string  $url
     * @return string
     */
    function subdomain($url) {
        if($host = parse_url($url, \PHP_URL_HOST)) {
            $pieces = explode('.', $host);

            // example.com:80
            // www.example.com:80
            // sub.example.com:80
            // www.sub.example.com:80
            if ($pieces[0] === 'www') {
                $pieces = array_slice($pieces, 1);
            }

            if (count($pieces) > 2) {
                return $pieces[0];
            }
        }

        return '';
    }
}
