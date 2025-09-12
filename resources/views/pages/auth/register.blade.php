<x-layouts.main>

    @section('title', __('Register your account | :site', ['site' => config('app.name')]))
    @section('header', __('Register your account'))

    <div class="register-form">
        <x-general.logo/>
        <h2>{{ __('Register your account') }}</h2>
        <p>{{ __('Or') }} <a href="{{ route('login') }}">{{ __('sign in to it') }}</a></p>
        <div class="form-holder">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                {{-- username --}}
                <x-forms.input name="username"
                               autcm="username"
                               rqurd focus
                               idx="1"
                               label="{{ __('Username') }}"
                               place="{{ __('Enter your username') }}"
                               value="{{ old('username') }}">
                    <x-heroicon-o-user class='icon'/>
                </x-forms.input>

                {{-- password --}}
                <x-forms.password name="password"
                                  autcm="current-password"
                                  rqurd
                                  idx="2"
                                  label="{{ __('Password') }}"
                                  place="{{ __('Enter your password') }}"/>

                {{-- password --}}
                <x-forms.password name="password_confirmation"
                                  autcm="password_confirmation"
                                  rqurd
                                  idx="3"
                                  label="{{ __('Confirm Password') }}"
                                  place="{{ __('Confirm your password') }}"/>

                {{-- submit --}}
                <button type="submit" tabindex="4" class="group sign-in">
                    <span><x-heroicon-o-user-plus class="icon"/></span> {{ __('Register') }}
                </button>
            </form>
        </div>
    </div>
</x-layouts.main>
