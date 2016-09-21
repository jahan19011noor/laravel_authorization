<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Products;

use Gate;

use App;

use Auth;


//===========================================//
//	Page content access control using Gate   //
//===========================================//

class ProductsController extends Controller
{
    public function showGate($id)
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
		//	except for the contents inside "can"  //
		//	so the page is accessed by the gate "can" section is not shown   //
		//=======================================================================//

    	if(Gate::allows('show-product', $product))
    	{
    		App::abort(403, "Access Denied");
    	}

    	return view('gateproduct', compact('product'));
    }
}
