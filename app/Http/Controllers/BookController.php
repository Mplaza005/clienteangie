<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class BookController extends Controller
{
  private function fetchDataFromApi($url)
    {
        $response = Http::get($url);
        return $response->json();
    }
     public function index(){


        $url = env('URL_SERVER_API');

        $books = $this->fetchDataFromApi($url .'/books');

        return view('book.index',compact('books'));

     }
}

