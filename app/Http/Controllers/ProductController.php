<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function product()
    {
        return view('product');
    }

    public function products($id)
    {
        switch($id){
            case 1:
                return view('productid', ['link' => 'marbel-edu-games']);
            break;
            case 2:
                return view('productid', ['link' => 'marbel-and-friends-kids-games']);
            break;
            case 3:
                return view('productid', ['link' => 'riri-story-books']);
            break;
            case 4:
                return view('productid', ['link' => 'kolak-kids-songs']);
            break;
        }
    }

}
