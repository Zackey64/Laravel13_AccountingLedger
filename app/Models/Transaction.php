<?php

namespace App\Models;

use App\Enums\PaymentType;
use App\Enums\TransactionType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class Transaction extends Model
{
    use HasUlids;
    //
    protected $fillable = [
        'transaction_type',
        'transaction_date',
        'account_id',
        'payment_type',
        'transfer_from_account_id',
        'transfer_from_vendor',
        'transfer_to_account_id',
        'transfer_to_vendor',
        'description',
        'vendor',
        'amount',
    ];

    protected function casts(): array
    {
        return [
            'transaction_type' => TransactionType::class,
            'payment_type' => PaymentType::class,
            'transaction_date' => 'date',
            'amount' => 'integer',
        ];
    }

    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}
