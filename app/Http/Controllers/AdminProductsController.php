<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;

//importa
use CodeCommerce\Product;
use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;

class AdminProductsController extends Controller
{
    
    
    private $products;
        
    public function __construct(Product $product){
        $this->products = $product;
    }
    
    public function index(){
        $products = $this->products->all();
        return view('admin.products', compact('products'));
    }
}
