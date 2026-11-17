<?php

namespace Database\Seeders;

use App\Enums\AccountType;
use App\Models\Account;
use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $accounts = [
            // 資産
            ['name' => '現金', 'account_type' => AccountType::ASSET],
            ['name' => '普通預金', 'account_type' => AccountType::ASSET],
            ['name' => '売掛金', 'account_type' => AccountType::ASSET],
            ['name' => '前払金', 'account_type' => AccountType::ASSET],
            // 負債
            ['name' => '未払金', 'account_type' => AccountType::LIABILITY],
            ['name' => '買掛金', 'account_type' => AccountType::LIABILITY],
            // 収益
            ['name' => '売上高', 'account_type' => AccountType::REVENUE],
            ['name' => '雑収入', 'account_type' => AccountType::REVENUE],
            // 費用
            ['name' => '仕入', 'account_type' => AccountType::EXPENSE],
            ['name' => '給与', 'account_type' => AccountType::EXPENSE],

        ];
        foreach ($accounts as $account) {
            Account::create($account);
        }
    }
}
