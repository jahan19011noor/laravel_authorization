<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Products;

use Gate;

use App;

class ProductPolicyGateController extends Controller
{
    public function showGatePolicy($id)
    {
    	$product = Products::find($id);

    	//=======================================================================//
		//	"denies" prevents access to the page and displayes "Access Denied"   //
		//	because the show-product gate condition defined in "AuthServiceProvider.php//
		//	"is not satisfied   //
		//=======================================================================//

    	// if(Gate::denies('show-product', $product))
    	// {
    	// 	App::abort(403, "Access Denied");
    	// }

    	//=======================================================================//
		//	"allows" allows access to the page and displayes page contents  //
		//	although the show-product gate condition defined in "AuthServiceProvider.php//
		//	is not satisfied   //
		//=======================================================================//

    	if(Gate::allows('policy_for_product', $product))
    	{
    		App::abort(403, "Access Denied");
    	}

    	return view('policyproduct', compact('product'));
    }
}
