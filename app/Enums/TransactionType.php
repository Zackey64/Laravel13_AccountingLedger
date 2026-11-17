<?php

namespace App\Enums;

enum TransactionType: string
{
    case INCOME = 'income';
    case EXPENSE = 'expense';
    case TRANSFER = 'transfer';

    public function label(): string
    {
        return match ($this) {
            self::INCOME => '収入',
            self::EXPENSE => '支出',
            self::TRANSFER => '振替',
        };
    }
}
