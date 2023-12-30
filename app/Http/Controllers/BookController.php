<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $book = Book::all();
        return view('books.index')->with('book',$book);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //    'name'=>'rquired',
        //    'details'=>'rquired',
        //    'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
        $input = $request->all();
        if($image = $request->file('image')){
            $destinationPath = 'images/';
            $profileImage = date('YmdHis').'.'.$image->getClientOriginalExtension();
            $image->move($destinationPath,$profileImage);
            $input['image'] = "$profileImage";
        }

        Book::create($input);
        return redirect('books/create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Book::find($id);
        return view('books.show')->with('book',$book);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::find($id);
        return view('books.edit')->with('book',$book);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $book = Book::find($id);
        $input = $request->all();
        if($image = $request->file('image')){
            $destinationPath = 'images/';
            $profileImage = date('YmdHis').'.'.$image->getClientOriginalExtension();
            $image->move($destinationPath,$profileImage);
            $input['image'] = "$profileImage";
        }

        $book->update($input);
        return redirect('books');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Book::destroy($id);
        return redirect('books');
    }
}
