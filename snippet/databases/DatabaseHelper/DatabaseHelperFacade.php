<?php

namespace App\Foundation\DatabaseHelper;

use Illuminate\Support\Facades\Facade;

/**
 * Class DatabaseHelperFacade
 * @package App\Foundation\DatabaseHelper
 */
class DatabaseHelperFacade extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'database_helper';
    }

}