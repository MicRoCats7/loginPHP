<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book
{
    

    private static $book = [
        [
            'id' => 1,
            'judul' => 'The Great Gatsby',
            'pengarang' => 'F. Scott Fitzgerald',
            'harga' => '180.000'
        ],
        [
            'id' => 2,
            'judul' => 'The Catcher in the Rye',
            'pengarang' => 'J. D. Salinger',
            'harga' => '200.000'
        ],
        [
            'id' => 3,
            'judul' => 'The Lord of the Rings',
            'pengarang' => 'J. R. R. Tolkien',
            'harga' => '300.000',
        ],
        [
            'id' => 4,
            'judul' => 'The Hobbit',
            'pengarang' => 'J. R. R. Tolkien',
            'harga' => '250.000',
        ],
        [
            'id' => 5,
            'judul' => 'Harry Potter and the Philosopher\'s Stone',
            'pengarang' => 'J. K. Rowling',
            'harga' => '200.000',
        ]
    ];

    public static function all(){
        return collect(self::$book);
    }

    public static function find($id){
        $book = static::all();
        return $book->firstWhere('id', $id);
    }
}
