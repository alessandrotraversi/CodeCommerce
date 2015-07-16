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
}
