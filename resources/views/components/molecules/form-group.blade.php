<div class="mb-3">
    {{-- Ensure $type is set to 'text' by default if it's not passed --}}
    @php
        $type = $type ?? 'text'; // Default to 'text' if no type is provided
    @endphp

    {{-- Display label if available --}}
    @if ($label)
        <label for="{{ $id }}" class="form-label">{{ $label }}</label>
    @endif

    {{-- Use textarea if the type is 'textarea' --}}
    @if ($type == 'textarea')
        <textarea id="{{ $id }}" name="{{ $name }}" class="form-control" placeholder="{{ $placeholder ?? '' }}">{{ old($name, $value ?? '') }}</textarea>
    @else
        <x-atoms.input id="{{ $id }}" name="{{ $name }}" type="{{ $type }}"
            value="{{ old($name, $value ?? '') }}" placeholder="{{ $placeholder ?? '' }}" />
    @endif
</div>
