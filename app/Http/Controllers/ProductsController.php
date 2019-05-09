<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductsController extends Controller
{
    public function index(){
        $products = Product::all();
        // $products = Product::find(1)->Category;
        // $products = Category::find(1)->Product;
        return view('products.index')->with('products', $products);
    } 
    public function create()
    {
        $categories = Category::all();
        $subcategories = SubCategory::find(1)->category;
        return view('products.create')->with('categories', $categories)->with('subcategories', $subcategories);
    }
}
