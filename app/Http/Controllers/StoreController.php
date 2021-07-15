<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index(){
        $title=(object)['span1' => 'A Free Bootstrap 4 Business Theme', 'span2' => 'Business Casual'];
        return view('pages.store', compact('title'));
    }
}
