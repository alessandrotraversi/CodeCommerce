<?php

namespace CodeCommerce\Http\Controllers;


use CodeCommerce\Category;
use Illuminate\Http\Request;
use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;


class WelcomeController extends Controller{
        
    private $categories;
        
    public function __construct(Category $category){
        $this->categories = $category;
    }
    
    public function index(){
        $categories = $this->categories->all();
        return view('esempio', compact('categories'));
    }
    
}