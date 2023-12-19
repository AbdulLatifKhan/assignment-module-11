<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SalesController extends Controller
{
    public function sales(){
        $sales = DB::table('sales')->get();
        return view('pages.sales', compact('sales'));
    }
    public function store(Request $request){

        $products = DB::table('products')
        ->where('id', '=', $request->id)
        ->first();

        $product_id = $products->id;
        $product_title = $products->title;
        $product_quantity = $products->quantity;
        $product_unit_price = $products->unit_price;

        $saleQuantity = $request->input('saleQuantity');
        $totalPrice = $saleQuantity * $product_unit_price;
        $updateProductQuantity = $product_quantity - $saleQuantity;


        $updateConfirmed = DB::table('products')
        ->where('id', $product_id)
        ->update(['quantity' => $updateProductQuantity]);

        if($updateConfirmed){
            DB::table('sales')->insert([
                'product_id' => $product_id,
                'title' => $product_title,
                'quantity' => $saleQuantity,
                'unit_price' => $product_unit_price,
                'total_price' => $totalPrice,
                
            ]);
            return redirect()->back()->with('success', 'Insert successful!');
        }

        return redirect()->back()->with('success', 'Update successful!');
    }
}
