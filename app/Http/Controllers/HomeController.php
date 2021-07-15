<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $title=(object)['span1' => 'A Free Bootstrap 4 Business Theme', 'span2' => 'Business Casual'];

        $sect1=(object)['span1' => 'Fresh Coffee', 'span2' => 'Worth Drinking', 'p' => 'Every cup of our quality artisan coffee starts with locally sourced, hand picked ingredients. Once you try it, our coffee will be a blissful addition to your everyday morning routine - we guarantee it!', 'a' => 'Visit Us Today!', 'aHref' => '#'];

        $sect2=(object)['span1' => 'Our Promise', 'span2' => 'To You', 'p' => 'When you walk into our shop to start your day, we are dedicated to providing you with friendly service, a welcoming atmosphere, and above all else, excellent products made with the highest quality ingredients. If you are not satisfied, please let us know and we will do whatever we can to make things right!'];

        return view('pages.home', compact('title', 'sect1', 'sect2'));
    }
}
