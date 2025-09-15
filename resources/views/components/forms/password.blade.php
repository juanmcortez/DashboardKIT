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
<div class="group" x-data="{ showPassword: false }">
    @if($label)
        <label for="{{ $name }}">{{ $label }}</label>
    @endif
    <div class="holder">
        <input :type="showPassword ? 'text' : 'password'"
               name="{{ $name }}"
               autocomplete="{{ $autcm }}"
               placeholder="{{ $place }}"
               @required($rqurd)
               @readonly($rdoly)
               @disabled($dsbld)
               @if($idx) tabindex="{{ $idx }}" @endif
               @if($focus) autofocus @endif
               class="@error($name) border-danger @enderror"/>
        <div class="field">
            <x-heroicon-o-lock-closed class="icon"/>
        </div>
        <button type="button" @click="showPassword = !showPassword" class="show-password">
            <x-heroicon-o-eye class="icon" x-show="!showPassword"/>
            <x-heroicon-o-eye-slash class="icon" x-show="showPassword"/>
        </button>
    </div>
    @error($name)
    <p class="error">{{ $message }}</p>
    @enderror
</div>
