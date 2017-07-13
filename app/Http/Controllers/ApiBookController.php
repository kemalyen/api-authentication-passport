<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Auth;
use App\Book;
use App\Transformers\BookTransformer;
use League\Fractal;
use League\Fractal\Manager;


class ApiBookController extends ApiController
{
    public function index()
    {
        $books = Book::all();
        return $this->response->withCollection($books, new BookTransformer);
    }

    public function show(Book $book)
    {
        return $this->response->withItem($book, new BookTransformer);
    }

}
