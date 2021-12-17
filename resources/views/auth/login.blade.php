@extends('layouts.app')

@section('content')
<div class="client-content" style="background: rgb(243, 243, 246);">
    <div class="auth-page">
        <div class="auth-page__container">
            <div class="auth-page__title-wrapper">
                <h1 class="auth-page__title">Вход в личный кабинет</h1>
                <h2 class="auth-page__subtitle">Укажите почту и пароль</h2>
            </div>
            <div class="form-card">
                <div class="form-card__cover form-card__cover--auth"><h2 class="form-card__title">Введите ваши данные</h2></div>
                <div class="auth-form">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <h3 class="auth-form__title">Авторизация</h3>
                        <div class="form-input">
                            <label class="form-input__label">Введите вашу почту</label>
                            <input id="email" type="email" class="form-input__control form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <div class="" style="color: red">
                                @error('email')
                                <span class="form-input__error-text invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-input">
                            <label class="form-input__label">Введите пароль</label>
                            <input id="password" type="password" class="form-input__control form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            <div class="form-input__error-text"></div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                               </span>
                            @enderror
                        </div>
                        <div class="auth-form__recovery">Забыли пароль?
                            @if (Route::has('password.request'))
                                <a class="auth-form__recovery-link" href="{{ route('password.request') }}">
                                    {{ __('Восстановить') }}
                                </a>
                            @endif
                        </div>
                        <button type="submit" class="button auth-form__button">{{ __('Войти') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
