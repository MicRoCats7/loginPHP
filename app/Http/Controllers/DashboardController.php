<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\publisher;

class DashboardController extends Controller
{
    public static function index(){
        return view('dashboard.book.all', [
            'publisher' => Publisher::all(),
            'books' => Book::filter(request(['search', 'category']))->paginate(5)    
        ]);
    }

    public static function show(Book $book){
        return view('dashboard.book.detail', [
            'book' => $book
        ]);
    }

    public static function create(){
        return view('dashboard.book.create', [
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
        return redirect('/dashboard/book/all')->with('succes', 'Book has been added');
    }

    public function destroy(Book $book){
        Book::destroy($book->id);
        return redirect('/dashboard/book/all')-> with('success', 'Data Berhasil Dihapus');
    }

    public function edit(Book $book){
        return view('dashboard.book.edit', [
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
        return redirect('/dashboard/book/all')->with('succes', 'Data has been updated');
    }
}
