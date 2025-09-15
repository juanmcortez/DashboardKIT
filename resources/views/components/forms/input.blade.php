@props([
    'idx' => false,
    'name' => '',
    'place' => '',
    'label' => false,
    'autcm' => false,
    'rdoly' => false,
    'dsbld' => false,
    'rqurd' => false,
    'focus' => false,
])
<div class="group">
    @if($label)
        <label for="{{ $name }}">{{ $label }}</label>
    @endif
    <div class="holder">
        <input type="text"
               name="{{ $name }}"
               autocomplete="{{ $autcm }}"
               placeholder="{{ $place }}"
               @required($rqurd)
               @readonly($rdoly)
               @disabled($dsbld)
               @if($idx) tabindex="{{ $idx }}" @endif
               @if($focus) autofocus @endif
               class="@error($name) border-danger @enderror"/>
        <div class="field">{{ $slot }}</div>
    </div>
    @error($name)
    <p class="error">{{ $message }}</p>
    @enderror
</div>
