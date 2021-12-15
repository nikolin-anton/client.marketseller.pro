@extends('layouts.app')
@section('content')
    <div class="profile-menu">
        <div class="profile-menu__container">
            <div class="profile-menu__email">mqf10660@yuoia.com</div>
            <div class="profile-menu__burger"><span></span><span></span><span></span><span></span></div>
        </div>
    </div>
    <div class="profile-dropdown">
        <div class="profile-dropdown__container">
            <ul class="profile-menu__dropdown">
                <li class="profile-menu__item"><a class="profile-menu__link" href="">Мои продукты</a></li>
                <li class="profile-menu__item"><a class="profile-menu__link" href="">Настройки</a></li>
                <li class="profile-menu__item">Выход</li>
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
                    <form>
                        <h3 class="auth-form__title">Заполните все поля</h3>
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
                            <label class="form-input__label">Новый пароль</label><input class="form-input__control" type="password" placeholder="" name="new-password" value="" />
                            <img
                                src="{{asset('img/eye_of.png')}}"
                                alt="eye"
                                class="form-input__eye"
                            />
                            <div class="form-input__error-text"></div>
                        </div>
                        <div class="form-input">
                            <label class="form-input__label">Новый пароль еще раз</label><input class="form-input__control" type="password" placeholder="" name="new-password-onemore" value="" />
                            <img
                                src="{{asset('img/eye_of.png')}}"
                                alt="eye"
                                class="form-input__eye"
                            />
                            <div class="form-input__error-text"></div>
                        </div>
                        <button class="button auth-form__button" disabled="">Сменить Пароль</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal__overlay hide"></div>
    <div class="modal hide">
        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <style>
                    .cls-1 {
                        fill: none;
                        stroke-linecap: round;
                        stroke-linejoin: round;
                        stroke-width: 3px;
                    }
                </style>
            </defs>
            <g id="cross">
                <line class="cls-1" x1="7" x2="25" y1="7" y2="25"></line>
                <line class="cls-1" x1="7" x2="25" y1="25" y2="7"></line>
            </g>
        </svg>
        <div class="modal__text"></div>
    </div>
@endsection
