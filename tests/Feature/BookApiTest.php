<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Log;

class BookApiTest extends TestCase
{
   use DatabaseMigrations;
    
   public function testMustAccessBooks()
    {
        factory(\App\Book::class, 100)->create();

        $response = $this->json('GET', '/api/books');
        $books = json_decode($response->getContent());
        $this->assertEquals(100, count($books->books));
    }        

    public function testAuthToShowSingleBook()
    {
        \Artisan::call("passport:install");
        $user = factory(\App\User::class)->create();
        $book = factory(\App\Book::class)->create();

        $token = $user->createToken('Token Name')->accessToken;

        $response = $this->get('/api/books/'. $book->id, ['HTTP_Authorization' => 'Bearer '.$token]);
        
        $response_book = json_decode($response->getContent());
        $result = false;
        if($response_book->book->title === $book->title)
        {
            $result = true;
        }
        $this->assertEquals(true, $result);        
    }
}
