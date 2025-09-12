<x-layouts.main>

    @section('title', __('Sign in to your account | :site', ['site' => config('app.name')]))
    @section('header', __('Sign in to your account'))

    <div class="login-form">
        <x-general.logo/>
        <h2>{{ __('Sign in to your account') }}</h2>
        <p>{{ __('Or') }} <a href="{{ route('register') }}">{{ __('create a new one') }}</a></p>
        <div class="form-holder">
            <form method="POST" action="{{ route('login') }}">
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

                <!-- Remember Me & Forgot Password -->
                <div class="remember">
                    <x-forms.checkbox name="remember"
                                      autcm="remember"
                                      idx="3"
                                      label="{{ __('Remember me') }}"
                                      checked="{{ old('remember') ? true : false }}"/>
                    <a href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
                </div>

                {{-- submit --}}
                <button type="submit" tabindex="4" class="group sign-in">
                    <span><x-heroicon-o-arrow-right-on-rectangle class="icon"/></span>
                    {{ __('Sign in') }}
                </button>
            </form>
        </div>
    </div>

</x-layouts.main>
