<?php

namespace App\Http\Controllers;

use App\Enums\PaymentType;
use App\Models\Account;
use App\Models\Transaction;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    public function index()
    {
        $transactions = Transaction::latest()->get();

        return view('incomes.index', compact('transactions'));
    }

    //
    public function create()
    {
        $accounts = Account::query()->pluck('name', 'id');
        $paymentTypes = PaymentType::cases();

        return view('incomes.create', compact('accounts', 'paymentTypes'));
    }

    public function store(Request $request)
    {
        return redirect()->route('incomes.index');
    }
}
