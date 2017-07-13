<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use League\Fractal;
use League\Fractal\Manager;
use EllipseSynergie\ApiResponse\Contracts\Response;

class ApiController extends Controller
{
    public $response;
    
    /**
     * @param Response
     */
    public function __construct(Response $response)
    {
        $this->response = $response;
    }
}