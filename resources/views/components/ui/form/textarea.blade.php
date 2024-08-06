@props([
    'label',
    'name',
    'id',
    'type',
    'rows',
    'max'
])

<div>
    <label for="{{ $id }}" class="cs_input_label cs_heading_color" style="font-size: 19px">{{ $label }} @if($max) ( maximum caractères: {{ $max }} ) @endif</label>
    <textarea type="{{ $type ?? 'text' }}"
              name="{{ $name }}"
              id="{{ $id }}"
              rows="{{ $rows ?? 10 }}"
              class="cs_form_field"
    >{{ old($name) }}</textarea>
    <div style="
        display: flex;
        align-items: center;
        justify-content: space-between;
    ">
        @error($name)
        <div class="text-danger mt-1 pl-1">
            {{ $message }}
        </div>
        @enderror
        <div>
            <div>Number of characters: <span id="{{$id}}_charCount">0</span></div>
        </div>
    </div>
    <div class="cs_height_42 cs_height_xl_25"></div>
</div>

<script>
    // jQuery code
    $(document).ready(function() {
        // Add an input event listener to the textarea
        $('#{{$id}}').on('input', function() {
            let max = {{ $max }} ?? null;
            let count = $(this).val().length;

            if(max) {
                if (count > max) {
                    $(this).val($(this).val().substring(0, max));
                    count--;
                }
            }

            $('#{{$id}}_charCount').text(count);
        });
    });
</script>
