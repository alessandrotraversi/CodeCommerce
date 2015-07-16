<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;
//importa
use CodeCommerce\Category;
use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;

class AdminCategoriesController extends Controller
{    
    private $categories;
        
    public function __construct(Category $category){
        $this->categories = $category;
    }
    
    public function index(){
        $categories = $this->categories->all();
        return view('admin.categories', compact('categories'));
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
