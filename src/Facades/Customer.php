<?php namespace Bantenprov\Customer\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The Customer facade.
 *
 * @package Bantenprov\Customer
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class Customer extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'customer';
    }
}
