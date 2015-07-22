<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

//importa
use CodeCommerce\Product;
use CodeCommerce\Category;
use CodeCommerce\ProductImage;
use CodeCommerce\Http\Controllers\Controller;
use CodeCommerce\Http\Requests\ProductRequest;
use CodeCommerce\Http\Requests\ProductImageRequest;


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
    
    public function create(Category $category){ 
        $categories = $category->lists('name', 'id'); 
        return view('admin.products.create', compact('categories'));
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
    
    public function images($id){
        $product = $this->products->find($id);
        return view('admin.products.images.images', compact('product'));
    }
    
    public function createImage($id){
        $product = $this->products->find($id);
        return view('admin.products.images.create_image', compact('product'));
    }
    
    public function storeImage(ProductImageRequest $request, $id, ProductImage $productImage){
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        
        $image = $productImage::create(['product_id'=>$id, 'extension'=>$extension]);
        Storage::disk('public_local')->put($image->id.'.'.$extension, File::get($file));
        
        return redirect()->route('a.p.i.index', ['id'=>$id]);
    }
    
    public function destroyImage($id, ProductImage $productImage){ 
        $image = $productImage->find($id);
        
        if(file_exists(public_path() . '/upload'.$image->id.'.'.$image->extension)){
            Storage::disk('public_local')->delete($image->id.'.'.$image->extension);   
        }
        
        
        $product = $image->product;
        $image->delete();
        
        return redirect()->route('a.p.i.index', ['id'=>$product->id]);
    }
}


