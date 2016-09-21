<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Products;

use Auth;

class ProductAuthorizeController extends Controller
{
    public function showAuthorize($id)
    {
    	$product = Products::find($id);

    	//================================================//
    	//	Using $this->authorize:  //
    	//	Using Auth Login we can acces page contents   //
    	//	along with the gate controllerd "can" statement //
    	// 	With "logout" we cannot acces the page contents//
    	// 	because the $this->authorize will make the action //
    	// 	unauthorized //
    	//==================================================//

		// Auth::loginUsingId(1);
    	Auth::logout();

    	$this->authorize('show-product', $product);
    	
    	return view('gateproduct', compact('product'));
    }
}
