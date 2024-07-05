<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JenisController extends Controller
{
    public function index()
    {
        return view('jenis', [
            "jenis" => Jenis::all()
        ]);
    }

    public function show(string $id) {
        $jenis = Jenis::findOrFail($id);
        $categories = Category::all();

        return view("jenis-details", [
            "jenis" => $jenis,
            "categories" => $categories
        ]);
    }

    public function create(Request $request)
    {
        $item = new Jenis;

        $item->description = $request->input('description');
        $item->category_id = $request->input('category');
        $item->isActive = $request->input('isActive');
        
        $item->save();

        return redirect('/jenis');
    }

    public function update(Request $request, $id)
    {
        $item = Jenis::find($id);
        $item->description = $request->input('description');
        $item->category_id = $request->input('category');
        $item->isActive = $request->input('isActive');
        
        $item->save();
        return redirect('/jenis')->with('success', 'Item updated successfully');
    }

    public function delete($id) {
        $record = Jenis::find($id); 

        if ($record) {
            $record->delete();
        }

        return redirect('/jenis');
    }
}
