<div class="{{ $classnameDiv }}">
    @if ($label)
        <label class="{{ $classnameLabel }}" for="{{ $id }}">{{ $label }}</label>
    @endif

    @if (isset($rows) && $rows > 0)
        <textarea id="{{ $id }}" name="{{ $name }}" rows="{{ $rows }}"
            class="{{ $classnameInput }} @error($name) is-invalid @enderror" maxlength="{{ $maxlength }}"
            placeholder="{{ $placeholder }}" {{ $readonly ? 'readonly' : '' }}
            @if ($autofocus) autofocus @endif>{{ old($name) }}</textarea>
    @else
        <input type="{{ $type }}" class="{{ $classnameInput }} @error($name) is-invalid @enderror"
            id="{{ $id }}" name="{{ $name }}" maxlength="{{ $maxlength }}"
            placeholder="{{ $placeholder }}" value="{{ old($name) }}" {{ $readonly ? 'readonly' : '' }}
            autocomplete="{{ $autocomplete }}" @if ($autofocus) autofocus @endif />
    @endif

    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
