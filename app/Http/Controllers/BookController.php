<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\publisher;

class BookController extends Controller
{
    public static function index(){
        return view('book.all', [
            'books' => Book::all()
        ]);
    }

    public static function show(Book $book){
        return view('book.detail', [
            'book' => $book
        ]);
    }

    public static function create(){
        return view('book.create', [
            'publisher' => publisher::all()
        ]);
    }

    public static function store(Request $request){
        $validateData = $request->validate([
            'publisher_id' => 'required',
            'judul' => 'required|max:225',
            'pengarang' => 'required|max:225',
            'harga' => 'required'
        ]);

        Book::create($validateData);
        return redirect('/book/all')->with('succes', 'Book has been added');
    }

    public function destroy(Book $book){
        Book::destroy($book->id);
        return redirect('/book/all')-> with('success', 'Data Berhasil Dihapus');
    }

    public function edit(Book $book){
        return view('book.edit', [
            'publisher' => publisher::all(),
            'book' => $book
        ]);
    }

    public function update(Request $request, Book $book){
        $validateData = $request->validate([
            'publisher_id' => 'required',
            'judul' => 'required|max:225',
            'pengarang' => 'required|max:225',
            'harga' => 'required'
        ]);

        Book::where('id', $book->id)
            ->update($validateData);
        return redirect('/book/all')->with('succes', 'Data has been updated');
    }
}
