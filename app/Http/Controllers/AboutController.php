<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){

        $title=(object)[
            'span1' => 'A Free Bootstrap 4 Business Theme', 
            'span2' => 'Business Casual'
        ];
        
        $nav = (object)[
            'a1Href' => 'home',
            'a1Txt' => 'Home',
            'a2Href' => 'about',
            'a2Txt' => 'About',
            'a3Href' => 'prod',
            'a3Txt' => 'Products', 
            'a4Href' => 'store',
            'a4Txt' => 'Store'
        ];

        $section=(object)[
            'span1' => 'Strong Coffee, Strong Roots', 
            'span2' => 'About Our Cafe', 
            'p1' => 'Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee sourced from artisan farmers in various regions of South and Central America. We are dedicated to travelling the world, finding the best coffee, and bringing back to you here in our cafe.', 
            'p2part1' => 'We guarantee that you will fall in ', 
            'p2em' => 'lust', 
            'p2part2' => ' with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time.'
        ];

        $footer = (object)[
            'p' => 'Copyright &copy; Your Website 2019'
        ];

        return view('pages.about', compact('title', 'nav', 'section', 'footer'));
    }
}
