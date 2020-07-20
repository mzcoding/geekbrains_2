<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index()
	{
		$lastLogin = Auth::user()->last_login;
		return view('account.index', ['lastLogin' => $lastLogin]);
	}
}
