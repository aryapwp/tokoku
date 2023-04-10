<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        //get items
        $items = Items::latest()->paginate(5);

        //render view with items
        return view('Items.index', compact('items'));
    }

    public function create()
    {
        return view('items.create');
    }

    public function store(Request $request)
    {
        $aitem = new Items;
        $aitem->name = $request->input('name');
        $aitem->price = $request->input('price');
        $aitem->description = $request->input('description');
        $aitem->save();
        
        //redirect to index
        return redirect()->route('items.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
