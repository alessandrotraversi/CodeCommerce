<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;
//importa
use CodeCommerce\Category;
use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;
use CodeCommerce\Http\Requests\CategoryRequest;

class AdminCategoriesController extends Controller
{    
    private $categories;
        
    public function __construct(Category $category){
        $this->categories = $category;
    }
    
    public function index(){
        $categories = $this->categories->paginate(5);
        return view('admin.categories.index', compact('categories'));
    }
    
    public function create(){
        return view('admin.categories.create');
    }
    
    public function store(CategoryRequest $request){
        $this->categories->create($request->all());
        return redirect()->route('a.c.index');
    }
    
    public function edit($id){
        $category = $this->categories->find($id);
        return view('admin.categories.edit', compact('category'));
    }
    
    public function update($id, CategoryRequest $request){
        $this->categories->find($id)->update($request->all());
        return redirect()->route('a.c.index');
    }
    
    public function destroy($id){ 
        $this->categories->find($id)->delete();
        return redirect()->route('a.c.index');
    }
}
