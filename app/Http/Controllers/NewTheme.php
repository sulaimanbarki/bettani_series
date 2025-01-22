<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Slide;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Http\Request;


class NewTheme extends Controller
{
    public function index1()
    {
        $categories = Category::where('enabled', 1)->limit(5)->get();
        $bestsellings = Book::where('enabled', 1)->orderBy('orderNo')->limit(5)->get();
        $books = Book::where('enabled', 1)->orderBy('orderNo')->limit(12)->get();
        $authors = Author::where('enabled', 1)->with('books')->inRandomOrder()->limit(20)->get();

        $leftslides = Slide::where('type', 0)->get();
        $rightslides = Slide::where('type', 1)->get();

        return view('front/new-theme/index', compact('categories', 'books', 'bestsellings', 'authors', 'leftslides', 'rightslides'));
    }
}
