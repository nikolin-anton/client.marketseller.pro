@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
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
            <li class="profile-menu__item"><a class="profile-menu__link" href="/">Мои продукты</a></li>
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
<div class="courses-list">
    <div class="courses-list__container">
        <h2 class="courses-list__title">Мои продукты</h2>
        <div class="courses-card courses-card--disabled">
            <div class="courses-card__body">
                <div><h3 class="courses-card__title">MARKETSELLER - Стань успешным менеджером маркетплейсов</h3></div>
                <a target="_blank" href="https://yoomoney.ru/payments/external/confirmation?orderId=294c1a7a-000f-5000-9000-13f957d9e35f&preselectedPaymentType=AC">
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
@endsection
