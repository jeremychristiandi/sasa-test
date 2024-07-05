<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use App\Models\Product;
use App\Models\Jenis;
use App\Models\Category;
use App\Models\Location;
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
        $categories = Category::all();
        $jenis = Jenis::all();
        $products = Product::all();
        $locations = Location::all();

        return view("stock-details", [
            "stock" => $item,
            "categories" => $categories,
            "jenis" => $jenis,
            "products" => $products,
            "locations" => $locations,
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
        
        $item->save();

        return redirect('/stocks');
    }

    public function update(Request $request, $id)
    {
        $item = Stock::find($id);
        $item->category_id = $request->input('category');
        $item->product_id = $request->input('product');
        $item->jenis_id = $request->input('jenis');
        $item->location_id = $request->input('location');
        $item->quantity = $request->input('quantity');
        
        $item->save();
        return redirect('/stocks')->with('success', 'Item has been updated!');
    }

    public function delete($id) {
        $record = Stock::find($id); 

        if ($record) {
            $record->delete();
        }

        return redirect('/stocks')->with('success', 'Item has been deleted!');
    }
}
