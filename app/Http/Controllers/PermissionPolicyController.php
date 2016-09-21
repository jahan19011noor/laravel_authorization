<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Products;

use Auth;

class PermissionPolicyController extends Controller
{
    public function showPermissionPolicy($id)
    {
    	$product = Products::find($id);

    	// Auth::loginUsingId(1);
    	Auth::logout();

    	// $this->authorize('show-product', $product);
    	
    	return view('permissionpolicy', compact('product'));
    }
}
