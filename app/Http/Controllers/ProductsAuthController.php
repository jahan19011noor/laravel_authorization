<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Products;

use Auth;

//===========================================//
//	Page content access control using Auth   //
//===========================================//

class ProductsAuthController extends Controller
{
    public function showAuth($id)
    {
    	$product = Products::find($id);

    	//================================================//
    	//	Using Auth Login we can acces page contents   //
    	//	along with the gate controllerd "can" statement //
    	// 	With "logout" we can access the page contents //
    	// 	except for the gate controlled "can" statement //
    	//==================================================//

		// Auth::loginUsingId(1);
    	Auth::logout();
    	
    	return view('policyproduct', compact('product'));
    }
}
