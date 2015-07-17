<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;

//importa
use CodeCommerce\Product;
use CodeCommerce\Http\Controllers\Controller;
use CodeCommerce\Http\Requests\ProductRequest;


class AdminProductsController extends Controller
{    
    private $products;
        
    public function __construct(Product $product){
        $this->products = $product;
    }
    
    public function index(){
        $products = $this->products->paginate(5);
        return view('admin.products.index', compact('products'));
    }
    
    public function create(){
        return view('admin.products.create');
    }
    
    public function store(ProductRequest $request){
        $this->products->create($request->all());
        return redirect()->route('a.p.index');
    }
    
    public function edit($id){
        $product = $this->products->find($id);
        return view('admin.products.edit', compact('product'));
    }
    
    public function update($id, ProductRequest $request){
        $this->products->find($id)->update($request->all());
        return redirect()->route('a.p.index');
    }
    
    public function destroy($id){ 
        $this->products->find($id)->delete();
        return redirect()->route('a.p.index');
    }
}
