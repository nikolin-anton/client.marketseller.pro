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
                        <form>
                            <h3 class="auth-form__title">Восстановление пароля</h3>
                            <div class="form-input">
                                <label class="form-input__label">Введите почту, указанную при регистрации</label><input class="form-input__control" type="text" placeholder="" name="email" value="mqf10660@yuoia.com" />
                                <div class="form-input__error-text"></div>
                            </div>
                            <div class="auth-form__recovery"><a class="auth-form__recovery-link" href="">Войти в личный кабинет</a></div>
                            <button class="button auth-form__button">Отправить пароль</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection