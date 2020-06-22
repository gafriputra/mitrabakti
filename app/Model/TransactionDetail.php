<?php

namespace App\Model;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Model\Transaction;
use App\Model\Product\Product;

class TransactionDetail extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'product_id', 'transaction_id', 'quantity'
    ];

    protected $hidden = [];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transaction_id', 'id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
