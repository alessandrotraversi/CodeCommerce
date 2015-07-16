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
    
    public function create(){
        return "oi";
    }
    
    public function store(){
        return "oi";
    }
    
    public function edit($id){
        return "oi";
    }
    
    public function update($id){
        return "oi";
    }
    
    public function destroy($id){ 
        return "oi";
    }
}
