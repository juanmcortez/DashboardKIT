<x-layouts.main>

    @section('title', __('Recover your password | :site', ['site' => config('app.name')]))
    @section('header', __('Recover your password'))

    <div class="forgot-password-form">
        <x-general.logo/>
        <h2>{{ __('Recover your password?') }}</h2>
        <p>{{ __('Or') }} <a href="{{ route('login') }}">{{ __('sign in to it') }}</a>. {{ __('No user?') }} <a
                href="{{ route('register') }}">{{ __('create a new one!') }}</a></p>
        <div class="form-holder">
            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                {{-- username --}}
                <x-forms.input name="email"
                               autcm="email"
                               rqurd focus
                               idx="1"
                               label="{{ __('E-mail') }}"
                               place="{{ __('Enter your e-mail') }}"
                               value="{{ old('email') }}">
                    <x-heroicon-o-envelope class='icon'/>
                </x-forms.input>

                {{-- submit --}}
                <button type="submit" tabindex="2" class="group sign-in">{{ __('Recover password') }}</button>
            </form>
        </div>
    </div>

</x-layouts.main>
