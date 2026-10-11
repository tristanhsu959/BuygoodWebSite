<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\ViewModels\HomeViewModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	private $_service;
	private $_currentAction = NULL;
	
	public function __construct(protected HomeViewModel $_viewModel)
	{
	}
	
	public function index(Request $request)
	{
		return view('home')->with('viewModel', $this->_viewModel);
	}
	
}