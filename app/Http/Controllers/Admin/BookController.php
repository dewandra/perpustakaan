<?php

namespace App\Http\Controllers\Admin;
;
use App\Models\Book;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function addBook()
    {
        $category = Category::all();
        return view('admin.book.book', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function storeBook(Request $request)
    {
         // Validate input
         $request->validate([
            'title' => 'required',
            'author_name' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
            'quantity' => 'required|integer',
            'book_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'author_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'required|exists:categories,id',
        ]);

        // Create new book instance
        $data = new Book;
        $data->title = $request->title;
        $data->author_name = $request->author_name;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->quantity = $request->quantity;
        $data->category_id = $request->category;

        // Handle book image upload
        if ($request->hasFile('book_img')) {
            $book_img = $request->file('book_img');
            $book_img_name = time().'.'.$book_img->getClientOriginalExtension();
            $book_img->move(public_path('book'), $book_img_name);
            $data->book_img = $book_img_name;
        }

        // Handle author image upload
        if ($request->hasFile('author_img')) {
            $author_img = $request->file('author_img');
            $author_img_name = time().'.'.$author_img->getClientOriginalExtension();
            $author_img->move(public_path('author'), $author_img_name);
            $data->author_img = $author_img_name;
        }

        // Save to database
        $data->save();

        // Redirect with message
        return redirect()->back()->with('msg', 'Book added successfully!');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(book $book)
    {
        //
    }
}
