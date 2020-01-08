<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use App\Customer;
use App\Product;
use App\Service;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
		$customer = new Customer;
		$dataCustomer = $customer->getAllCustomers();
		$list = array();
		$list = $dataCustomer;
	
		$product = new Product;
		$dataProduct = $product->getAllProducts();
		$listProducts = array();
		$listProducts = $dataProduct; 

		$service = new Service;
		$dataService = $service->getAllServices();
		$listServices = array();
		$listServices = $dataService; 
		
		
		
		return view('Front-end.welcome.welcome',compact('list','listProducts','listServices'));
      
    }
}
