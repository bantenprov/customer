<?php namespace Bantenprov\Customer\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bantenprov\Customer\Facades\Customer;
use Bantenprov\Customer\Models\CustomerModel;

/**
 * The CustomerController class.
 *
 * @package Bantenprov\Customer
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class CustomerController extends Controller
{
    public function demo()
    {
        return Customer::welcome();
    }
}
