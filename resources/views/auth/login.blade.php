
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン | Accounting Ledger</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-gray-100 flex items-center justify-center px-4">

    <main class="w-full max-w-md">

        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800">
                Accounting Ledger
            </h1>
            <p class="mt-2 text-sm text-gray-400">
                アカウントにログインしてください
            </p>
        </div>

        <div class="bg-white rounded-xl border border-gray-300 p-8">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="flex flex-col gap-4">
                    <x-input
                        name="email"
                        label="メールアドレス"
                        type="email"
                    />
                    <x-input
                        name="password"
                        label="パスワード"
                        type="password"
                    />
                    <x-button>
                        ログイン
                    </x-button>
                </div>
            </form>
        </div>

        <p class="mt-6 text-center text-xs text-gray-400">
            © {{ date('Y') }} Accounting Ledger
        </p>
        
    </main>

</body>
</html>
