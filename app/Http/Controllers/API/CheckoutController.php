<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\CheckoutRequest;

// ambil model
use App\Model\Product\Product;
use App\Model\Transaction;
use App\Model\TransactionDetail;

class CheckoutController extends Controller
{
    public function checkout(CheckoutRequest $request)
    {
        // dd($request->body);
        // masukkan semua dari transaction_details
        $data = $request->except('transaction_details');
        $data['uuid'] = 'TRX' . mt_rand(10000, 99999) . mt_rand(100, 999);

        $transaction = Transaction::create($data);

        foreach ($request->transaction_details as $product_id) {
            $details[] = new TransactionDetail([
                'transaction_id' => $transaction->id,
                'product_id' => $product_id,
            ]);
            // mengurangi jumlah produk -1
            // Product::find($product_id)->decrement('quantity');
        }
        // nyimpan relasinya, lalu save langsung banyak
        $transaction->details()->saveMany($details);

        return ResponseFormatter::success($transaction);
    }
}
