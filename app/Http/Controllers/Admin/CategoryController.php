<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    

public function category() {

    $cat = Category::all();
        return view('admin.category.category', compact('cat'));
    }
    
    public function addCat(Request $request) {
        // validate input
        $request->validate([
            'category' => 'required|unique:categories,cat_title'
        ]);
        
        // create new Category instance
        $data = new Category;
        
        // Set database coloumn from input
        $data->cat_title = $request->category;
        
        // save to database
        $data->save();
        
        // Redirect with message
        return redirect()->back()->with('msg', 'Category added successfully!');
    }
    
    public function editCat($id) {
        $data = Category::find($id);
        return view('admin.category.editCat',compact('data'));
        }
        
        public function updateCat(Request $request, $id) {
        $data = Category::find($id);
        
        $data->cat_title = $request->category_name;
        $data->save();
        return redirect('/category')->with('msg', 'Category title update successfully!');
    }

    public function deleteCat($id) {
        try {
            $cat = Category::findOrFail($id); // Akan melemparkan pengecualian jika kategori tidak ditemukan
            $cat->delete();
        
            return redirect()->back()->with('msg', 'Category deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('msg', 'An error occurred: ' . $e->getMessage());
        }
    }
    
    
   
}
