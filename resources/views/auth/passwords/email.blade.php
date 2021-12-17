@extends('layouts.app')

@section('content')
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Reset Password') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    <form method="POST" action="{{ route('password.email') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Send Password Reset Link') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
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
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
{{--                        <form method="POST" action="{{ route('reset_password_by_email') }}">--}}
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                        <h3 class="auth-form__title">Восстановление пароля</h3>
                        <div class="form-input">
                            <label class="form-input__label">Введите почту, указанную при регистрации</label>
                            <input id="email" type="email" class="form-input__control form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <div>
                                    @error('email')
                                    <span class="form-input__error-text invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                        </div>
                        <div class="auth-form__recovery">
                            <a class="auth-form__recovery-link" href="{{route('login')}}">Войти в личный кабинет</a>
                        </div>
                            <button type="submit" class="button auth-form__button">{{ __('Отправить пароль') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
