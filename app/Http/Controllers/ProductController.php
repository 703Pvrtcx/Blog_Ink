<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json($products);
    }
    //Create new product
    public function store(Request $request){
        //Validation
        $request->validate([
            'name'=> 'required',
            'price'=> 'required',
            'category'=> 'required',
            'imageURL'=> 'required',
        ]);
        //Save to database
        $product = Product::create([
            'name'=> $request-> name,
            'price'=> $request-> price,
            'category'=> $request-> category,
            'imageURL'=> $request-> imageURL,
            'description'=> $request-> description
        ]);
        //Return response
        return  response()->json($product);
    }
        //Create new project
        public function update(Request $request, Product $product){
            //Validation
            $request->validate([
                'name'=> 'required',
                'price'=> 'required',
                'category'=> 'required',
                'imageURL'=> 'required',
            ]);
            //Save to database
            $product->update([
                'name'=> $request-> name,
                'price'=> $request-> price,
                'category'=> $request-> category,
                'imageURL'=> $request-> imageURL,
                'description'=> $request-> description
            ]);
            //Return response
            return  response()->json($product);
        }
        public function destroy( Product $product){
        $product->delete();
        return response()->json($product);
        }
}
