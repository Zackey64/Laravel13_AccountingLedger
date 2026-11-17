@props([
    'name',
    'label',
    'options' => [],
    'value' => null,
    'placeholder' => '選択してください',
    'description' => null,
])

<div>
    <label for="{{ $name }}" class="mb-1 block text-xs text-gray-600">
        {{ $label }}
    </label>

    <select
        id="{{ $name }}"
        name="{{ $name }}"
        {{ $attributes->merge([
            'class' => 'w-full rounded-lg border border-gray-300 px-3 py-1 text-sm'
        ]) }}
    >
        <option value="">{{ $placeholder }}</option>

        @foreach ($options as $optionValue => $optionLabel)
            <option
                value="{{ $optionValue }}"
                @selected(old($name, $value) == $optionValue)
            >
                {{ $optionLabel }}
            </option>
        @endforeach
    </select>

    @if ($description)
        <p class="mt-1 text-xs text-gray-500">
            {{ $description }}
        </p>
    @endif

    @error($name)
        <p class="mt-1 text-xs text-red-600">{{ $message }}</p>
    @enderror
</div>
