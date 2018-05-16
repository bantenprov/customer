<?php namespace Bantenprov\Customer\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * The CustomerModel class.
 *
 * @package Bantenprov\Customer
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class CustomerModel extends Model
{
    /**
    * Table name.
    *
    * @var string
    */
    protected $table = 'customer';

    /**
    * The attributes that are mass assignable.
    *
    * @var mixed
    */
    protected $fillable = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
