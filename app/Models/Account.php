<?php

namespace App\Models;

use App\Enums\AccountType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUlids;

class Account extends Model
{
    use HasUlids;
    
    protected $fillable = [
        'name',
        'account_type',
    ];

    protected function casts()
    {
        return [
            'account_type' => AccountType::class,
        ];
    }
}
