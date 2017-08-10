<?php
/**
 * Created by PhpStorm.
 * User: magir
 * Date: 27/07/2017
 * Time: 00:44
 */

namespace App\Facades;


use Illuminate\Support\Facades\Facade;

class OfiClinicFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'OfiClinic';
    }
}