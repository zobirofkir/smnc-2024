@props([
    'label',
    'name',
    'id',
    'options',
    'value'
])

@php
    $fill_value = old($name) ?? $value ?? '';
@endphp

<div>
    <label for="{{ $id }}" class="cs_input_label cs_heading_color" style="font-size: 19px">{{ $label }}</label>
    <select name="{{ $name }}" id="{{ $id }}" class="cs_select">
        @foreach($options as $option)
            <option value="{{ $option }}" @if($fill_value === $option) selected @endif>{{ $option }}</option>
        @endforeach
    </select>
    @error($name)
        <div class="text-danger mt-1 pl-1">
            {{ $message }}
        </div>
    @enderror
    <div class="cs_height_42 cs_height_xl_25"></div>
</div>
