<?php

namespace App\Http\Controllers\Front;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    //

    public function index(){
        $books = Book::where('status',1)->get();
        return view('frontend.homepage',compact('books'));
    }
}
