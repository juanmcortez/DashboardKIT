@props([
    'idx' => false,
    'name' => '',
    'label' => false,
    'autcm' => false,
    'rdoly' => false,
    'dsbld' => false,
    'rqurd' => false,
    'focus' => false,
])
<div class="holder">
    <input type="checkbox"
           name="{{ $name }}"
           autocomplete="{{ $autcm }}"
           @required($rqurd)
           @readonly($rdoly)
           @disabled($dsbld)
           @if($idx) tabindex="{{ $idx }}" @endif
           @if($focus) autofocus @endif
           class="@error($name) border-danger @enderror"
        @checked(old('checked')) />
    @if($label)
        <label for="{{ $name }}">{{ $label }}</label>
    @endif
</div>
