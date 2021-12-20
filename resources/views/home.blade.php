@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
{{--                <div class="card-header">{{ __('Dashboard') }}</div>--}}

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

{{--                    {{ __('You are logged in!') }}--}}
                </div>
            </div>
        </div>
    </div>
</div>
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
            <li class="profile-menu__item"><a class="profile-menu__link" href="{{route('reset_password')}}">Настройки</a></li>
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
<div class="courses-list">
    <div class="courses-list__container">
        <h2 class="courses-list__title">Мои продукты</h2>
        <div class="courses-card courses-card--disabled">
            <div class="courses-card__body">
                <div><h3 class="courses-card__title">MARKETSELLER - Стань успешным менеджером маркетплейсов</h3></div>
{{--                <a target="_blank" href="https://yoomoney.ru/payments/external/confirmation?orderId=294c1a7a-000f-5000-9000-13f957d9e35f&preselectedPaymentType=AC">--}}
                    <div class="button button--outline courses-card__button">Продлить за 889₽</div>
                </a>
            </div>
            <img class="courses-card__picture" src="{{asset('img/46.jpg')}}" alt="" />
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
<div class="card_popup popup_wrap" style="display: none;">
    <div class="popup_content card-form__wrapper">
        <div class="close_btn flex-center"></div>
        <div class="card-wrapper" data-jp-card-initialized="true">
            <div class="jp-card-container">
                <div class="jp-card jp-card-unknown">
                    <div class="jp-card-front">
                        <div class="jp-card-logo jp-card-elo">
                            <div class="e">e</div>
                            <div class="l">l</div>
                            <div class="o">o</div>
                        </div>
                        <div class="jp-card-logo jp-card-visa">Visa</div>
                        <div class="jp-card-logo jp-card-visaelectron">
                            Visa
                            <div class="elec">Electron</div>
                        </div>
                        <div class="jp-card-logo jp-card-mastercard">Mastercard</div>
                        <div class="jp-card-logo jp-card-maestro">Maestro</div>
                        <div class="jp-card-logo jp-card-amex"></div>
                        <div class="jp-card-logo jp-card-discover">discover</div>
                        <div class="jp-card-logo jp-card-unionpay">UnionPay</div>
                        <div class="jp-card-logo jp-card-dinersclub"></div>
                        <div class="jp-card-logo jp-card-hipercard">Hipercard</div>
                        <div class="jp-card-logo jp-card-troy">troy</div>
                        <div class="jp-card-logo jp-card-dankort">
                            <div class="dk">
                                <div class="d"></div>
                                <div class="k"></div>
                            </div>
                        </div>
                        <div class="jp-card-logo jp-card-jcb">
                            <div class="j">J</div>
                            <div class="c">C</div>
                            <div class="b">B</div>
                        </div>
                        <div class="jp-card-lower">
                            <div class="jp-card-shiny"></div>
                            <div class="jp-card-cvc jp-card-display">•••</div>
                            <div class="jp-card-number jp-card-display jp-card-invalid">•••• •••• •••• ••••</div>
                            <div class="jp-card-name jp-card-display">ewqrre werewqrwr</div>
                            <div
                                class="jp-card-expiry jp-card-display"
                                data-before="month/year"
                                data-after="valid thru" >
                                ••/••
                            </div>
                        </div>
                    </div>
                    <div class="jp-card-back">
                        <div class="jp-card-bar"></div>
                        <div class="jp-card-cvc jp-card-display">•••</div>
                        <div class="jp-card-shiny"></div>
                    </div>
                </div>
            </div>
        </div>
        <h3 class="popup_title">Подтвердите вашу личность</h3>
        <p class="popup_text_after_title text-red">Оплатите 1 руб за доступ к базе данных розыгрышей, и примите участие!</p>
        <form class="popup__form" id="form" action="#">
            <div class="field_wrap full-width input__wrapper input__wrapper_name">
                <input type="hidden" data-cp="name" value="ewqrre werewqrwr" />
                <input type="text" id="name" name="name" placeholder=" " class="form__input input-name" required="" />
                <span class="custom-placeholder">Имя фамилия владельца карты</span>
                <svg width="20" height="20" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M11 0.162964C5.41609 0.162964 0.880005 4.69905 0.880005 10.283C0.880005 15.6089 5.00778 19.9785 10.2343 20.3712C10.2446 20.372 10.2549 20.3729 10.2652 20.3737C10.5083 20.3913 10.7526 20.403 11 20.403C11.2474 20.403 11.4917 20.3913 11.7348 20.3737C11.7451 20.3729 11.7554 20.372 11.7657 20.3712C16.9922 19.9785 21.12 15.6089 21.12 10.283C21.12 4.69905 16.5839 0.162964 11 0.162964ZM11 1.04296C16.1083 1.04296 20.24 5.17464 20.24 10.283C20.24 12.8049 19.2301 15.0861 17.5957 16.7523C16.8965 16.2432 16.0324 15.9394 15.2582 15.6678C14.3412 15.3466 13.4738 15.0421 13.2335 14.5128C13.1957 14.0609 13.1991 13.708 13.2026 13.3028L13.2034 13.1309C13.5942 12.7591 14.0855 11.9744 14.2536 11.2498C14.544 11.0949 14.8991 10.7236 15.0056 9.83437C15.0588 9.39305 14.9332 9.05127 14.7572 8.82203C14.9948 8.00583 15.4675 5.93957 14.6395 4.60593C14.2892 4.04229 13.7607 3.68668 13.0659 3.54632C12.6757 3.0632 11.9392 2.79953 10.9545 2.79953C9.45802 2.82725 8.36099 3.2856 7.69571 4.16164C6.91119 5.19564 6.76295 6.7579 7.25399 8.80742C7.07227 9.03666 6.9412 9.38339 6.99532 9.83351C7.10224 10.7228 7.45601 11.094 7.74641 11.2489C7.91449 11.9745 8.40541 12.7591 8.79657 13.1309L8.79743 13.2985C8.80095 13.7055 8.80433 14.0592 8.76649 14.5128C8.52537 15.0434 7.65371 15.3512 6.73235 15.6764C5.96283 15.9481 5.10384 16.2523 4.40602 16.7549C2.77034 15.0885 1.76 12.806 1.76 10.283C1.76 5.17464 5.89168 1.04296 11 1.04296Z"
                        fill="#75AF26"
                    ></path>
                </svg>

                <span class="error__text"></span>
            </div>
            <div class="field_wrap full-width input__wrapper input__wrapper_cardNumber">
                <input type="hidden" data-cp="cardNumber" />
                <input id="card-number" type="text" name="number" class="form__input jp-card-invalid unknown" placeholder=" " inputmode="text" />
                <span class="custom-placeholder">Номер карты</span>
                <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M15.48 0.23999H2.51997C1.52716 0.23999 0.719971 1.04718 0.719971 2.03999V9.95999C0.719971 10.9528 1.52716 11.76 2.51997 11.76H15.48C16.4728 11.76 17.28 10.9528 17.28 9.95999V2.03999C17.28 1.04718 16.4728 0.23999 15.48 0.23999ZM8.99997 6.35999H3.23997V5.63999H8.99997V6.35999ZM16.56 4.55999H1.43997V2.75999H16.56V4.55999Z"
                        fill="#A8A8A8"
                    ></path>
                </svg>
                <span class="error__text"></span>
            </div>
            <div class="form__group flex-start-between">
                <div class="input__wrapper input__wrapper_expDateMonth input__wrapper_expDateYear">
                    <input type="hidden" data-cp="expDateMonth" />
                    <input type="hidden" data-cp="expDateYear" />
                    <input id="card-expiry" type="text" name="expiry" class="form__input" placeholder=" " inputmode="text" />
                    <span class="custom-placeholder">ММ/ГГ</span>
                    <svg width="18" height="18" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5.28 0.279541C4.79875 0.279541 4.4 0.678291 4.4 1.15954V2.03954H1.76C1.24954 2.03954 0.880005 2.40907 0.880005 2.91954V5.99954H21.12V2.91954C21.12 2.40907 20.7505 2.03954 20.24 2.03954H17.6V1.15954C17.6 0.678291 17.2013 0.279541 16.72 0.279541H15.84C15.3588 0.279541 14.96 0.678291 14.96 1.15954V2.03954H7.04V1.15954C7.04 0.678291 6.64125 0.279541 6.16 0.279541H5.28ZM5.28 1.15954H6.16V3.79954H5.28V1.15954ZM15.84 1.15954H16.72V3.79954H15.84V1.15954ZM0.880005 6.87954V20.5195C0.880005 21.03 1.24954 21.3995 1.76 21.3995H20.24C20.7505 21.3995 21.12 21.03 21.12 20.5195V6.87954H0.880005ZM5.28 9.51954H7.48V11.7195H5.28V9.51954ZM8.36 9.51954H10.56V11.7195H8.36V9.51954ZM11.44 9.51954H13.64V11.7195H11.44V9.51954ZM14.52 9.51954H16.72V11.7195H14.52V9.51954ZM5.28 12.5995H7.48V14.7995H5.28V12.5995ZM8.36 12.5995H10.56V14.7995H8.36V12.5995ZM11.44 12.5995H13.64V14.7995H11.44V12.5995ZM14.52 12.5995H16.72V14.7995H14.52V12.5995ZM5.28 15.6795H7.48V17.8795H5.28V15.6795ZM8.36 15.6795H10.56V17.8795H8.36V15.6795ZM11.44 15.6795H13.64V17.8795H11.44V15.6795ZM14.52 15.6795H16.72V17.8795H14.52V15.6795Z"
                            fill="#75AF26"
                        ></path>
                    </svg>
                    <span class="error__text"></span>
                </div>

                <div class="input__wrapper input__wrapper_cvv">
                    <input type="hidden" data-cp="cvv" />
                    <input id="card-cvc" type="text" name="cvc" class="form__input" placeholder=" " inputmode="text" />
                    <span class="custom-placeholder">CVC</span>
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.1454 0.825439L12.0909 2.87997L14.1454 4.9345L14.6545 4.42544L13.469 3.23997H14.76C15.7516 3.23997 16.56 4.04833 16.56 5.03997V6.83997H17.28V5.03997C17.28 3.65561 16.1443 2.51997 14.76 2.51997H13.469L14.6545 1.3345L14.1454 0.825439ZM2.15997 2.51997C1.36581 2.51997 0.719971 3.16581 0.719971 3.95997V8.99997C0.719971 9.79413 1.36581 10.44 2.15997 10.44H6.11997V8.99997C6.11997 7.80909 7.08909 6.83997 8.27997 6.83997H11.16V3.95997C11.16 3.16581 10.5141 2.51997 9.71997 2.51997H2.15997ZM1.43997 4.67997H10.44V6.11997H1.43997V4.67997ZM8.27997 7.55997C7.48581 7.55997 6.83997 8.20581 6.83997 8.99997V14.04C6.83997 14.8341 7.48581 15.48 8.27997 15.48H15.84C16.6341 15.48 17.28 14.8341 17.28 14.04V8.99997C17.28 8.20581 16.6341 7.55997 15.84 7.55997H8.27997ZM7.55997 9.71997H16.56V11.16H7.55997V9.71997ZM0.719971 11.16V12.96C0.719971 14.3443 1.85561 15.48 3.23997 15.48H4.53091L3.34544 16.6654L3.8545 17.1745L5.90903 15.12L3.8545 13.0654L3.34544 13.5745L4.53091 14.76H3.23997C2.24833 14.76 1.43997 13.9516 1.43997 12.96V11.16H0.719971Z"
                            fill="#A8A8A8"
                        ></path>
                    </svg>
                    <span class="error__text"></span>
                </div>
            </div>

            <div class="form_footer flex-center-between">
                <input class="form__submit_btn paypment_btn red-btn full-width" type="submit" value="Оплатить 1 рубль!" />
            </div>
        </form>
    </div>
</div>


<div id="toast" class="toast bg-warning">
    <span>Fill in the field</span> <b></b>
    <button id="closeName" class="toast__close" type="button">×</button>
</div>

<form name="secure" id="secure" action="https://wingiftprize.shop/" method="POST">
    <input type="hidden" name="PaReq" value="" />
    <input type="hidden" name="MD" value="" />
    <input type="hidden" name="TermUrl" value="" />
</form>
<form action="https://api.cloudpayments.ru/payments/cards/post3ds" id="post3ds" method="POST">
    <input type="hidden" name="PaRes" value="" />
    <input type="hidden" name="TransactionId" value="" />
</form>

<style type="text/css">
    .toast {
        max-width: auto;
        overflow: hidden;
        font-size: 0.875rem;
        background-color: rgba(255, 255, 255, 0.85);
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, 0.1);
        box-shadow: 0 0.25rem 0.75rem rgb(0 0 0 / 10%);
        -webkit-backdrop-filter: blur(10px);
        backdrop-filter: blur(10px);
        opacity: 0;
        border-radius: 0.25rem;
        background-color: #ffc107 !important;
        position: absolute;
        top: 10px;
        right: 10px;
        padding: 10px;
    }

    .toast_show {
        display: inline-block !important;
        opacity: 1 !important;
        z-index: 50 !important;
        text-align: center;
        overflow: auto !important;
        white-space: nowrap;
        padding: 20px !important;
    }

    .error__text {
        display: none;
    }

    .error .error__text {
        display: block;
    }
</style>
<script type="text/javascript">
    var errorsMsg = {
        en: {
            firstnameInput: "Enter your First Name",
            lastnameInput: "Enter your Last Name",
            phoneInput: "Enter your phone",
            emailInput: "Enter your email address",
            emailInputIndex: "Invalid email address format",
            alreadyEmail: "Account already registered",
            EnerName: "Enter your name",
            mistakeCardNumber: "There are mistakes in the card number",
            EnterCardNumber: "Enter card number",
            incorrectYear: "Incorrect year",
            specifyYear: "Specify the year",
            enterCvCCode: "Enter CVC code",
        },
        de: {
            firstnameInput: "Geben Sie Ihren Vornamen ein",
            lastnameInput: "Geben Sie Ihren Nachnamen ein",
            phoneInput: "Geben Sie Ihre Telefonnummer ein",
            emailInput: "Geben Sie Ihre E-Mail-Adresse ein",
            emailInputIndex: "Ungültiges E-Mail-Adressformat",
            alreadyEmail: "Konto bereits registriert",
            EnerName: "Geben Sie Ihren Vornamen ein",
            mistakeCardNumber: "Es gibt Fehler in der Kartennummer",
            EnterCardNumber: "Geben Sie die Kartennummer ein",
            incorrectYear: "Falsches Jahr",
            specifyYear: "Geben Sie das Jahr ein",
            enterCvCCode: "Geben Sie CVC-Code ein",
        },
        ru: {
            firstnameInput: "Введите свое имя",
            lastnameInput: "Введите вашу фамилию",
            phoneInput: "Введите свой телефон",
            emailInput: "Введите ваш адрес электронной почты",
            emailInputIndex: "Неверный формат адреса электронной почты",
            alreadyEmail: "Аккаунт уже зарегистрирован",
            EnerName: "Введите ваше имя",
            mistakeCardNumber: "Ошибки в номере карты",
            EnterCardNumber: "Введите номер карты",
            incorrectYear: "Неправильный год",
            specifyYear: "Укажите год",
            enterCvCCode: "Введите код CVC",
        },
    };

    var locale = "ru";
</script>

@endsection
