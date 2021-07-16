<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){

        $title = (object)[
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

        $section1 = (object)[
            'span1' => 'Blended to Perfection', 
            'span2' => 'Coffees &amp; Teas', 
            'imgSrc' => 'products-01.jpg', 
            'p1' => "We take pride in our work, and it shows. Every time you order a beverage from us, we guarantee that it will be an experience worth having. Whether it's our world famous Venezuelan Cappuccino, a refreshing iced herbal tea, or something as simple as a cup of speciality sourced black coffee, you will be coming back for more."
        ]; 

        $section2 = (object)[
            'span1' => 'Delicious Treats, Good Eats', 
            'span2' => 'Bakery &amp; Kitchen', 
            'imgSrc' => 'products-02.jpg', 
            'p' => 'Our seasonal menu features delicious snacks, baked goods, and even full meals perfect for breakfast or lunchtime. We source our ingredients from local, oragnic farms whenever possible, alongside premium vendors for specialty goods.'
        ];

        $section3 = (object)[
            'span1' => 'From Around the World', 
            'span2' => 'Bulk Speciality Blends', 
            'imgSrc' => 'products-03.jpg', 
            'p' => "Travelling the world for the very best quality coffee is something take pride in. When you visit us, you'll always find new blends from around the world, mainly from regions in Central and South America. We sell our blends in smaller to large bulk quantities. Please visit us in person for more details."
        ];

        $footer = (object)[
            'p' => 'Copyright &copy; Your Website 2019'
        ];

        return view('pages.products', compact('title', 'nav', 'section1', 'section2', 'section3', 'footer'));
    }
}
