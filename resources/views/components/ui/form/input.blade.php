@props([
    'label',
    'name',
    'id',
    'type',
    'deep_path'
])

@php
    $val = old($deep_path ?? $name);
@endphp

<div>
    <label for="{{ $id }}" class="cs_input_label cs_heading_color" style="font-size: 19px">{{ $label }}</label>
    <input type="{{ $type ?? 'text' }}"
           name="{{ $name }}"
           id="{{ $id }}"
           value="{{ $val }}"
           class="cs_form_field"
    >
    @error($deep_path ?? $name)
        <div class="text-danger mt-1 pl-1">
             {{ $message }}
        </div>
    @enderror
    <div class="cs_height_42 cs_height_xl_25"></div>
</div>
