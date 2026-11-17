
@props([
    'name',
    'label',
    'value' => null,
    'placeholder' => '',
    'description' => null,
])
<div>
    {{-- ラベル --}}
    <label
        for="{{ $name }}"
        class="mb-1 block text-xs text-gray-600"
    >
        {{ $label }}
    </label>

    {{-- 入力欄 --}}
    <input
        type="text"
        id="{{ $name }}"
        name="{{ $name }}"
        value="{{ old($name, $value ?? '') }}"
        placeholder="{{ $placeholder }}"
        class="w-full px-3 py-1 rounded-lg border border-gray-300 text-sm"
    >

    {{-- 説明 --}}
    @if ($description)
        <p class="mt-1 text-xs text-gray-400">
            {{ $description }}
        </p>
    @endif

    {{-- エラー --}}
    @error($name)
        <p class="mt-1 text-xs text-red-600">
            {{ $message }}
        </p>
    @enderror
</div>
