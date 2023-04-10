<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\Customers;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        //get order
        $orders = Orders::latest()->paginate(5);

        //render view with orders
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
      $customers = Customers::get();
      $orders = Orders::get();
      return view('orders.create')
      ->with('customers', $customers)
      ->with('orders', $orders);
    }

    public function store(Request $request)
    {
        $total = $request->subtotal - $request->discount;
        $oc = new Orders;
        $oc->code = $request->input('code');
        $oc->date = $request->input('date');
        $oc->customers_id = $request->input('customer_id');
        $oc->address = $request->input('address');
        $oc->subtotal = $request->input('subtotal');
        $oc->discount = $request->input('discount');
        $oc->total = $total;
        $oc->save();
        //validate form
        /*$this->validate($request, [
            'code'     => 'required',
            'date'     => 'required',
            'address' => 'required',
            'subtotal' => 'required|numeric',
            'discount' => 'required|numeric'
        ]);*/

        /*$total = $request->subtotal - $request->discount;*/
        //upload image
        /*$image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());*/
        /*$customer = $request->customer_id;*/
        //create customer
        /*Orders::create([
            'code'     => $request->code,
            'date'     => $request->date,
            'customers_id'   => $customer,
            'address'     => $request->address,
            'subtotal'     => $request->subtotal,
            'discount'     => $request->discount,
            'total' => $total
        ]);*/

        //redirect to index
        return redirect()->route('orders.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * edit
     *
     * @param  mixed $order
     * @return void
     */
    public function edit(Orders $order)
    {
        $customers = Customers::get();
        $orders = Orders::where('id', $order)->first();
        return view('orders.edit')
        ->with('customers', $customers)
        ->with('orders', $orders);
        /*$orders = Orders::where('id', $order)->first();
        return view('orders.edit', ['data' => $orders])
        ->with('orders', $orders)
        ->with('customers', $customers);*/
    }

    public function update(Request $order)
    {
        $id = $order->input('id');
        $ord = Orders::find($id);
        $ord->code = $order->input('code');
        $ord->date = $order->input('date');
        $ord->customer_id = $order->input('customer_id');
        $ord->address = $order->input('address');
        $ord->subtotal = $order->input('subtotal');
        $ord->discount = $order->input('discount');
        $total = $order->input('subtotal') - $order->input('discount');
        $ord->total = $total;
        // $fp->port = $r->input('port');
        $ord->save();
        return redirect()->route('orders.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
    public function destroy(Orders $order)
    {
        /*//delete image
        Storage::delete('public/customers/'. $customer->image);*/

        //delete orders
        $order->delete();

        //redirect to index
        return redirect()->route('orders.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
    
}
