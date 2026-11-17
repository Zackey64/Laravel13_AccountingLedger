<?php

namespace App\Enums;

enum PaymentType: string
{
    case CASH = 'cash';
    case BANK = 'bank';
    case CREDIT = 'credit_card';
    case ACCOUNTS_PAYABLE = 'accounts_payable';

    public function label(): string
    {
        return match ($this) {
            self::CASH => '現金',
            self::BANK => '預金',
            self::CREDIT => 'クレジット',
            self::ACCOUNTS_PAYABLE => '未払金',
        };
    }
}
