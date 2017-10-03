<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DepositMethod;
use App\User;

class DepositMethodController extends Controller
{
    public function getList() {
    	return DepositMethod::all()->toJson();
    }

    public function getOwners(Request $request) {
    	$owners = User::whereIn('user_type', ['admin','manager'])->get(['id', 'name']);
    	return response()->json($owners);
    }   

    public function add(Request $request) {
    	$deposit_method = DepositMethod::firstOrcreate($request->all());
    	return response()->json($deposit_method);
    }

    public function delete(Request $request, $id) {
    	$deleted = DepositMethod::destroy($id);
    	return response()->json($deleted?true:false);
    }    
}
