<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\publisher;

class publisherController extends Controller
{
    public static function index(){
        return view('publisher.all', [
            'publishers' => publisher::all()
        ]);
    }

    public static function show(publisher $publisher){
        return view('publisher.detail', [
            'publisher' => $publisher
        ]);
    }
}