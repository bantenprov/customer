<?php

namespace Bantenprov\Customer\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustomerModel extends Model 
{

    protected $table = 'customers';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = [
        'uuid',
        'nama',
        'type',
        'user_id',
    ];

    public function getUser()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    /* public function getCustomerRetribusi()
    {
        return $this->hasMany('CustomerRetribusi', 'id');
    } */

}