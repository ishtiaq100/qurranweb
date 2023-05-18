<?php

namespace App\Http\Controllers\Admin;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    //
    public function index(){
        $books = Book::all();
        return view('admin.booklisting',compact('books'));
    }

    public function create(){
        return view('admin.addbook');
    }

    public function save(Request $request){
        $validate = Validator::make($request->all(),
        ['name'=>'required',
        'author'=>'required',
        'avail_status'=>'required',
        'status'=>'required',
        'price'=>'required',
        'book_img1'=>'mimes:jpeg,jpg,png',
        'book_img2'=>'mimes:jpeg,jpg,png',

        ]

        );

        if($validate->fails()){

            return redirect()->back()->with('messages','Insert the Requried fields');
        }else{
            $book = new   Book();
            $book->name = $request->name;
            $book->author = $request->author;
            $book->avail_status = $request->avail_status;
            $book->status = $request->status;
            $book->price = $request->price;

            if($request->hasfile('book_img1')){
            $file = $request->file('book_img1');
            $filename = time().'_1.'.$file->getClientOriginalExtension();
            $file->move('uploads/books',$filename);
            $book->book_img1 = $filename;
            }

            if($request->hasfile('book_img2')){
                $file = $request->file('book_img2');
                $filename = time().'_2.'.$file->getClientOriginalExtension();
                $file->move('uploads/books',$filename);
                $book->book_img2 = $filename;
                }
        $response = $book->save();
        if($response==true){
            return redirect()->back()->with('messages','Record Inserted Successfully');

        }else{
            return redirect()->back()->with('messages','Record not Inserted');

        }

    }
}

public function edit($id){
   $book = Book::find($id);
    return view('admin.editbook',compact('book'));
}


public function update( Request $request, $id){
    $validate = Validator::make($request->all(),
    ['name'=>'required',
    'author'=>'required',
    'avail_status'=>'required',
    'status'=>'required',
    'price'=>'required',
    'book_img1'=>'mimes:jpeg,jpg,png',
    'book_img2'=>'mimes:jpeg,jpg,png',

    ]

    );

    if($validate->fails()){

        return redirect()->back()->with('messages','Insert the Requried fields');
    }else{
        $book = Book::find($id);
        $book->name = $request->name;
        $book->author = $request->author;
        $book->avail_status = $request->avail_status;
        $book->status = $request->status;
        $book->price = $request->price;

        if($request->hasfile('book_img1')){
        $file = $request->file('book_img1');
        $filename = time().'_1.'.$file->getClientOriginalExtension();
        $file->move('uploads/books',$filename);
        $destination = 'uploads/books/'.$book->book_img1;
        if(File::exists($destination)){
            File::delete($destination);
        }

        $book->book_img1 = $filename;
        }

        if($request->hasfile('book_img2')){
            $file = $request->file('book_img2');
            $filename = time().'_2.'.$file->getClientOriginalExtension();
            $file->move('uploads/books',$filename);
            $destination2 = 'uploads/books/'.$book->book_img2;
        if(File::exists($destination2)){
            File::delete($destination2);
        }
            $book->book_img2 = $filename;
            }
    $response = $book->update();
    if($response==true){
        return redirect()->back()->with('messages','Record Updated Successfully');

    }else{
        return redirect()->back()->with('messages','Record Updated Successfully');

    }

}
}


public function delete($id){
    $book = Book::find($id);

    $book->delete();
    return redirect()->back()->with('messages','Record Deleted');


}


}
