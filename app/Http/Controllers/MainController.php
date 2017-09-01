<?php

namespace App\Http\Controllers;

use Yaro\Jarboe\Http\Controllers\TreeController as Controller;
use App\Models\Product;


class MainController extends Controller
{
    public function index()
    {
        return view('pages.index');
    } // end index
    
    public function content()
    {
        $node = $this->node;
        return view('pages.static', compact('node'));
    } // end content
    
    public function catalog()
    {
        $node = $this->node;
        $products = Product::paginate(6);
        $products->map(function($product, $key) use($node) {
            $uri = $node->getUrl() .'/'. $product->getUri();
            $product->setUrl(url($uri));
            
            return $product;
        });
        
        return view('catalog.list', compact('products'));
    } // end catalog
    
    public function product($id, $slug)
    {
        $node = $this->node;
        $product = Product::find($id);
        
        return view('catalog.product', compact('product', 'node'));
    } // end product
    
}
