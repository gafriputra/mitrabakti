<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Model\TransactionDetail;


class Transaction extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'uuid', 'name', 'email', 'phone', 'address', 'transaction_total', 'transaction_status', 'shipping'
    ];

    protected $hidden = [];

    public function details()
    {
        return $this->hasMany(TransactionDetail::class, 'transaction_id');
    }
}
