<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CustomerController extends Controller
{
    public function index()
    {
        //get customers
        $customers = Customers::latest()->paginate(5);

        //render view with customers
        return view('customers.index', compact('customers'));
    }


    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * store
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'name'     => 'required',
            'address'     => 'required',
            'phone'   => 'required|min:10'
        ]);

        //upload image
        /*$image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());*/

        //create customer
        Customers::create([
            'name'     => $request->name,
            'address'     => $request->address,
            'phone'   => $request->phone
        ]);

        //redirect to index
        return redirect()->route('customers.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * edit
     *
     * @param  mixed $customer
     * @return void
     */
    public function edit(Customers $customer)
    {
        return view('customers.edit', compact('customer'));
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $customer
     * @return void
     */
    public function update(Request $request, Customers $customer)
    {
        //validate form
        $this->validate($request, [
            'name'     => 'required',
            'address'     => 'required',
            'phone'   => 'required|min:10'
        ]);

        $customer->update([
            'name'     => $request->name,
            'address'   => $request->address,
            'phone' => $request->phone
        ]);

        //redirect to index
        return redirect()->route('customers.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy(Customers $customer)
    {
        /*//delete image
        Storage::delete('public/customers/'. $customer->image);*/

        //delete customer
        $customer->delete();

        //redirect to index
        return redirect()->route('customers.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
