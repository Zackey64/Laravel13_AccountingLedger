<?php

namespace App\Enums;

enum AccountType: string
{
    case ASSET = 'asset';
    case LIABILITY = 'liability';
    case EQUITY = 'equity';
    case REVENUE = 'revenue';
    case EXPENSE = 'expense';

    public function label(): string
    {
        return match ($this) {
            self::ASSET => '資産',
            self::LIABILITY => '負債',
            self::EQUITY => '純資産',
            self::REVENUE => '収益',
            self::EXPENSE => '費用',
        };
    }
}
