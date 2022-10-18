<?php
 
namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
 
class ProductController extends Controller
{
  
    public function index()
    {
        $products = Product::with('category')->get();
        $categories = Category::with('products')->get();
        
        return view('products.index', compact('products', 'categories'));
    }
 
    
}