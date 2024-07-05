<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StockController extends Controller
{
    public function index()
    {
        return view('stock', [
            "stock" => Stock::all()
        ]);
    }
    public function show(string $id) {
        $item = Stock::findOrFail($id);

        return view("stock-details", [
            "stock" => $item
        ]);
    }

    public function create(Request $request)
    {
        $item = new Stock;

        $item->category_id = $request->input('category');
        $item->jenis_id = $request->input('jenis');
        $item->product_id = $request->input('product');
        $item->location_id = $request->input('location');
        $item->quantity = $request->input('quantity');
        $item->isActive = $request->input('isActive');
        
        $item->save();

        return redirect('/products');
    }

    public function update(Request $request, $id)
    {
        $item = Stock::find($id);
        $item->category_id = $request->input('category');
        $item->product_id = $request->input('product');
        $item->jenis_id = $request->input('jenis');
        $item->isActive = $request->input('isActive');
        
        $item->save();
        return redirect('/stocks');
    }

    public function delete($id) {
        $record = Stock::find($id); 

        if ($record) {
            $record->delete();
        }

        return redirect('/stocks');
    }
}
