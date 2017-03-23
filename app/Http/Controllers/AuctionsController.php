<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuctionsController extends Controller
{

    public function categoryProducts($category)
    {
   		//return $category;
   		return 'Productes amb aquesta categoria';
	}



}
