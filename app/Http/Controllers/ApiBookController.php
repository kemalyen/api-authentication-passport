<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Auth;
use App\Book;


class ApiBookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return response()->json(compact('books'));
    }

    public function show(Book $book)
    {
        return response()->json(compact('book'));
    }

}
