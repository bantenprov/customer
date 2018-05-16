<?php namespace Bantenprov\Customer\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bantenprov\Customer\Facades\Customer;

/* Models */
use Bantenprov\Customer\Models\CustomerModel;
use App\User;

/* ETC */
use Ramsey\Uuid\Uuid;

/**
 * The CustomerController class.
 *
 * @package Bantenprov\Customer
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = CustomerModel::with('getUser')->get();

        return view('customer::index',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::doesntHave('customers')->get();

        return view('customer::create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'      => 'required',
            'type'      => 'required',
            'user_id'   => 'required|unique:customers',
        ]);

        CustomerModel::create([
            'uuid'      => Uuid::uuid5(Uuid::NAMESPACE_DNS, 'bantenprov.go.id'.date('YmdHis')),
            'nama'      => $request->nama,
            'type'      => $request->type,
            'user_id'   => $request->user_id,
        ]);

        $request->session()->flash('message', 'Successfully add the customer!');

        return redirect()->route('customer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = CustomerModel::find($id);

        return view('customer::show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = CustomerModel::find($id);

        $users = User::doesntHave('customers')->get();

        return view('customer::edit', compact('customer','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CustomerModel::find($id)->delete();

        $request->session()->flash('message', 'Successfully delete the customer!');
    }
}
