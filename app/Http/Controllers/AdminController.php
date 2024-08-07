<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index() {
        if (Auth::id()) {
            $role = Auth()->user()->role;

            if($role == 'admin'){
                return view('admin.index');
            } else if($role == 'user'){
                return view ('home.index');
            }
        }
    }

    public function category() {

        $cat = Category::all();
        return view('admin.category', compact('cat'));
    }

    public function addCat(Request $request) {
        // Validasi input
        $request->validate([
            'category' => 'required|unique:categories,cat_title'
        ]);
    
        // Buat instance kategori baru
        $data = new Category;
    
        // Set judul kategori dari input
        $data->cat_title = $request->category;
    
        // Simpan kategori ke database
        $data->save();
    
        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('msg', 'Category added successfully!');
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
