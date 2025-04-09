<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;
use App\Models\Reviews;
class HomeController extends Controller
{
    public function home()
    {
    	$data['header_title'] = 'Home';
    	$data['meta_title'] = 'Hindustan Next Taste';
    	$data['meta_description'] = '';
    	$data['meta_keywords'] = '';
    	$data['getProduct'] = ProductModel::getProduct();
    	$data['getReview'] = Reviews::getReview();
    	return view('home',$data);
    }
}
