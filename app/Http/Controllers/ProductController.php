<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view("products", [
            // "products" => $products->get()
            "products" => $products
        ]);
    }

    public function show(string $id) {
        $item = Product::findOrFail($id);

        return view("product-details", [
            "product" => $item
        ]);
    }

    public function create(Request $request)
    {
        $item = new Product;

        $item->description = $request->input('description');
        $item->category_id = $request->input('category');
        $item->jenis_id = $request->input('jenis');
        $item->isActive = $request->input('isActive');
        
        $item->save();

        return redirect('/products');
    }

    public function update(Request $request, $id)
    {
        $item = Product::find($id);
        $item->description = $request->input('description');
        $item->category_id = $request->input('category');
        $item->jenis_id = $request->input('jenis');
        $item->isActive = $request->input('isActive');
        
        $item->save();
        return redirect('/products');
    }

    public function delete($id) {
        $record = Product::find($id); 

        if ($record) {
            $record->delete();
        }

        return redirect('/products');
    }
}
