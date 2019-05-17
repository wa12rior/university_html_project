<?php

class Config {
    private static $config = [
        'db' => [
            'host'      => '127.0.0.1',
            'database'  => 'html',
            'user'      => 'root',
            'password'  => 'root'
        ]
    ];
    public static function get($path) {
        $configPart = self::$config;
        foreach (explode('.', $path) as $key) {
            $configPart = $configPart[$key];
        }  
        
        return $configPart;
    }
}