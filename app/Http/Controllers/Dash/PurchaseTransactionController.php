<?php

namespace App\Http\Controllers\Dash;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\PurchaseTransaction;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PurchaseTransactionController extends Controller
{
    public function index()
    {
        $transactions = PurchaseTransaction::with('product')->with('product.store')->paginate(7);
        return view('dashboard.purchaseTransactions.index')->with('transactions', $transactions);
    }
    public function report(){
        $products = Product::withTrashed()->paginate(7);
        foreach ($products as $product) {
            $product->photo = storage::disk('public')->url($product->photo);
        }
        return view('dashboard.purchaseTransactions.report')->with('products', $products);
    }


//    public function create()
//    {
//        $products = Product::get();
//        return view('dashboard.purchaseTransactions.create')->with('products', $products);
//    }
//
//    public function store(Request $request)
//    {
//        Validator::make($request->all(), [
//            'product_id' => 'Required',
//        ]);
//        $product_id = $request->input('product_id');
//        $product = Product::find($product_id);
//        if ($product->flag == 'base') {
//            $price = $product->base_price;
//        } else {
//            $price = $product->discount_price;
//        }
//        $time_of_transaction = Carbon::now();
//        $transaction = new PurchaseTransaction;
//        $transaction->product_id = $product_id;
//        $transaction->price = $price;
//        $transaction->time_of_transaction = $time_of_transaction;
//        $transaction->save();
//
//        return redirect()->back();
//    }
//
//    public function edit($id)
//    {
//        $transaction = PurchaseTransaction::where('id', $id)->first();
//        $products = Product::get();
//        return view('dashboard.purchaseTransactions.edit')->with('transaction', $transaction)->with('products', $products);
//    }
//
//    public function update(Request $request, $id)
//    {
//        Validator::make($request->all(), [
//            'product_id' => 'Required',
//        ]);
//        $product_id = $request->input('product_id');
//        $product = Product::find($product_id);
//        if ($product->flag == 'base') {
//            $price = $product->base_price;
//        } else {
//            $price = $product->discount_price;
//        }
//        $time_of_transaction = Carbon::now();
//        $transaction = new PurchaseTransaction;
//        $transaction->price = $price;
//        $transaction->product_id = $product_id;
//        $transaction->time_of_transaction = $time_of_transaction;
//        $transaction->save();
//
//        return redirect()->back();
//    }
//
//    public function destroy($id)
//    {
//        PurchaseTransaction::where('id', $id)
//            ->delete();
//        return redirect()->back();
//    }
//
//    public function restore($id)
//    {
//        PurchaseTransaction::where('id', $id)
//            ->restore();
//        return redirect()->back();
//    }
}
