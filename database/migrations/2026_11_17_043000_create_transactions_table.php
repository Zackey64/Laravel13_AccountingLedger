<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->ulid('id')->primary();

            $table->string('transaction_type');
            $table->date('transaction_date');

            // 収入・支出
            $table->foreignUlid('account_id')->nullable()->constrained('accounts');
            $table->string('payment_type')->nullable();

            // 振替元
            $table->foreignUlid('transfer_from_account_id')->nullable()->constrained('accounts');
            $table->string('transfer_from_vendor')->nullable();

            // 振替先
            $table->foreignUlid('transfer_to_account_id')->nullable()->constrained('accounts');
            $table->string('transfer_to_vendor')->nullable();

            $table->string('description')->nullable();
            $table->string('vendor')->nullable();

            $table->unsignedBigInteger('amount');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
