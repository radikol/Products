<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        //Get data from DB in here and pass it to the view

        return view('index.index', [
            'title' => 'Laravel Project about us',
            'text' => '<p>
                Welcome to our page where ypu can find a ton of products!
            </p>',
            'imgURL' => './assets/img/portfolio/project-portrait-1.jpg',
        ]);
    }
}
