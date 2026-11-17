<x-layouts.app title="収入登録">
    <h1>収入登録</h1>

    <form action="{{ route('incomes.store') }}" method="POST">
        @csrf

        <div class="flex flex-col gap-4">
            <x-input
                name="transaction_date"
                label="取引日"
                type="date"
            />

            <x-input
                name="description"
                label="摘要"
                type="text"
            />

            <x-input
                name="amount"
                label="金額"
                type="number"
            />

            <x-select
                name="account_id"
                label="勘定科目"
                :options="$accounts"
            />

            <x-select
                name="payment_type"
                label="取引手段"
                :options="$paymentTypes"
            />

            <x-input
                name="vendor"
                label="取引先"
                type="text"
            />

            <x-input
                name="due_date"
                label="回収予定日"
                type="date"
            />

            <x-button>
                登録
            </x-button>
        </div>
    </form>
</x-layouts.app>