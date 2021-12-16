@extends('layouts.app')

@section('content')
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Reset Password') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('password.update') }}">--}}
{{--                        @csrf--}}

{{--                        <input type="hidden" name="token" value="{{ $token }}">--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Reset Password') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<div class="profile-menu">
    <div class="profile-menu__container">
        <div class="profile-menu__email">{{ Auth::user()->email }}</div>
        <div class="profile-menu__burger"><span></span><span></span><span></span><span></span></div>
    </div>
</div>
<div class="profile-dropdown">
    <div class="profile-dropdown__container">
        <ul class="profile-menu__dropdown">
            <li class="profile-menu__item"><a class="profile-menu__link" href="{{route('home')}}">Мои продукты</a></li>
            <li class="profile-menu__item"><a class="profile-menu__link" href="{{route('password.reset', '@csrf')}}">Настройки</a></li>
            <li class="profile-menu__item"><a class="dropdown-item" href="{{ route('logout') }}"
                                              onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                    {{ __('Выход') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form></li>
        </ul>
    </div>
</div>
<div class="setting-page">
    <div class="setting-page__container">
        <div>
            <h1 class="setting-page__title"><a class="single-course__back-link" href=""></a>Настройки аккаунта</h1>
        </div>
        <div class="setting-page__title-wrapper">
            <div class="setting-page__mob-title">Смена пароля</div>
            <div class="setting-page__mob-sub">Заполните все поля</div>
        </div>
        <div class="form-card">
            <div class="form-card__cover form-card__cover--setting"><h2 class="form-card__title">Смена пароля</h2></div>
            <div class="auth-form">
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <h3 class="auth-form__title">Заполните все поля</h3>
                    <div class="form-input">
                        <label class="form-input__label">Введите email</label>
                        <input id="user" type="email" class="form-input__control form-control @error('email') is-invalid @enderror" name="user" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                             @error('user')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                             @enderror
                    </div>
                    <div class="form-input">
                        <label class="form-input__label">Введите действующий пароль</label><input class="form-input__control" type="password" placeholder="" name="current-password" value="" />
                        <img
                            src="{{asset('img/eye_of.png')}}"
                            alt="eye"
                            class="form-input__eye"
                        />
                        <div class="form-input__error-text"></div>
                    </div>
                    <div class="form-input">
                        <label class="form-input__label">Новый пароль</label><input id="password" type="password" class="form-input__control form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        <img
                            src="{{asset('img/eye_of.png')}}"
                            alt="eye"
                            class="form-input__eye"
                        />
                        <div class="form-input__error-text"></div>
                    </div>
                    <div class="form-input">
                        <label class="form-input__label">Новый пароль еще раз</label><input id="password-confirm" type="password" class="form-input__control form-control" name="password_confirmation" required autocomplete="new-password">
                        <img
                            src="{{asset('img/eye_of.png')}}"
                            alt="eye"
                            class="form-input__eye"
                        />
                        <div class="form-input__error-text"></div>
                    </div>
                    <button type="submit" class="button auth-form__button">{{ __('Сменить пароль') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
