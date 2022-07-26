<?php

namespace App\Repository;

use App\Models\Config;

class Functions
{
    public static function getConfigs()
    {
        $config = array();
        $configs = Config::all();
        foreach ($configs as $con) {
            $config[$con->name] = $con->value;
        }
        return $config;
    }

    public static function getConfig($name)
    {
        $config = Config::where('name', $name)->get()->first();
        if ($config) return $config->value;
        else return null;
    }

}
