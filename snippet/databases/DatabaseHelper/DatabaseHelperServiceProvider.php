<?php

namespace App\Foundation\DatabaseHelper;

use Illuminate\Support\ServiceProvider;

/**
 * Class DatabaseHelperServiceProvider
 * @package App\Foundation\DatabaseHelper
 */
class DatabaseHelperServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind('database_helper', function () {
            return new DataBaseHelper;
        });
    }

}
