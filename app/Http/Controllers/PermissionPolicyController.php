<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Products;

use Auth;

use App\User;

use App\Permission;

class PermissionPolicyController extends Controller
{
    public function showPermissionPolicy($id)
    {
    // 	$product = Products::find($id);

    	Auth::loginUsingId($id);
    	
    	$user = User::find($id);
    	$user_role = $user->role;
    	
    // 	Auth::logout();

    	// $this->authorize('show-product', $product);
    	
    	return view('permissionpolicy', compact('user_role'));
    }
}
