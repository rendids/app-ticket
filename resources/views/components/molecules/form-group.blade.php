<div class="mb-3">
    @if($label)
        <label for="{{ $id }}" class="form-label">{{ $label }}</label>
    @endif
    <x-atoms.input id="{{ $id }}" name="{{ $name }}" value="{{ $value ?? '' }}" placeholder="{{ $placeholder }}" />
</div>
