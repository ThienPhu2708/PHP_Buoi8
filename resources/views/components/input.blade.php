@props(['name', 'label' => null, 'type' => 'text', 'value' => null])

<div class="field">
    <label for="{{ $name }}">{{ $label ?? ucfirst($name) }}</label>
    <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" value="{{ old($name, $value) }}" {{ $attributes }}>
    @error($name)
        <div class="error">{{ $message }}</div>
    @enderror
</div>
