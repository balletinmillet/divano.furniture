<?php

namespace App\Tools;

class Template
{
    public static function route()
    {
        return config('view.template.route');
    }

    public static function path()
    {
        return config('view.template.path');
    }

}
