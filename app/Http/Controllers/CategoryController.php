<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index() {
        return view('category', [
            "categories" => Category::all()
        ]);
    }

    public function show(string $id) {
        $category = Category::findOrFail($id);

        return view("category-details", [
            "category" => $category
        ]);
    }

    public function create(Request $request)
    {
        $category = new Category;

        $category->description = $request->input('description');
        $category->isActive = $request->input('isActive');
        
        $category->save();

        return redirect('/categories');
    }

    public function update(Request $request, $id)
    {
        $item = Category::find($id);
        $item->description = $request->input('description');
        $item->isActive = $request->input('isActive');
        
        $item->save();
        return redirect('/categories');
    }

    public function delete($id) {
        $record = Category::find($id); 

        if ($record) {
            $record->delete();
        }

        return redirect('/categories');
    }
}
