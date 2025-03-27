<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;
class HomeController extends Controller
{
    public function home()
    {
    	$data['meta_title'] = 'Hindustan Next Taste';
    	$data['meta_description'] = '';
    	$data['meta_keywords'] = '';
    	$data['getProduct'] = ProductModel::getProduct();
    	return view('home',$data);
    }
}
