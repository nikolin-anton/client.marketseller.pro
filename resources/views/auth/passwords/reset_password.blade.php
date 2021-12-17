@extends('layouts.app')

@section('content')
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
            @if (\Session::has('status'))
                <div class="alert alert-success" style="display: flex; justify-content: end; padding: 0 10px 10px 0;">
                    <ul>
                        <li>{!! \Session::get('status') !!}</li>
                    </ul>
                </div>
            @endif
            <div class="setting-page__title-wrapper">
                <div class="setting-page__mob-title">Смена пароля</div>
                <div class="setting-page__mob-sub">Заполните все поля</div>
            </div>
            <div class="form-card">
                <div class="form-card__cover form-card__cover--setting"><h2 class="form-card__title">Смена пароля</h2></div>
                <div class="auth-form">
                    <form method="POST" action="{{ route('reset_password.update') }}">
                        @csrf
{{--                        <input type="hidden" name="token" value="{{ $token }}">--}}
                        <h3 class="auth-form__title">Заполните все поля</h3>
                        <div class="form-input">
                            <label class="form-input__label">Введите действующий пароль</label><input class="form-input__control form-control @error('current_password') is-invalid @enderror"  type="password" placeholder="" name="current_password" value="" />
                            <img src="{{asset('img/eye_of.png')}}" alt="eye" class="form-input__eye" />
                           <div>
                               @error('current_password')
                               <span class="form-input__error-text invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                               @enderror
                           </div>

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
                            <img src="{{asset('img/eye_of.png')}}" alt="eye" class="form-input__eye" />
                           <div>
                               @error('password_confirmation')
                               <span class="form-input__error-text invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                               @enderror
                           </div>
                        </div>
                        <button type="submit" class="button auth-form__button form-control @error('status') is-invalid @enderror">{{ __('Сменить пароль') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
