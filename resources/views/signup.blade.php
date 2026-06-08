@extends('main_layout')

@section('header-title', 'MarketFlow | Регистрация аккаунта')


@section('content')
<div class="auth-page">
    <div class="auth-container">
        <div class="auth-card">
            <!-- Декоративная линия -->
            <div class="card-accent"></div>
            
            <!-- Заголовок -->
            <div class="auth-header">
                <div class="auth-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="url(#gradient)" stroke-width="1.5">
                        <defs>
                            <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" style="stop-color:#5b8cff"/>
                                <stop offset="100%" style="stop-color:#9f7aff"/>
                            </linearGradient>
                        </defs>
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" stroke="currentColor" stroke-linecap="round"/>
                        <circle cx="12" cy="7" r="4" stroke="currentColor" stroke-linecap="round"/>
                        <path d="M17 3.5a4 4 0 0 1 0 7" stroke="currentColor" stroke-linecap="round"/>
                    </svg>
                </div>
                <h2>Создать аккаунт</h2>
                <p>Присоединяйтесь к MarketFlow</p>
            </div>

            <!-- Форма регистрации -->
            <form action="/register" method="post" class="auth-form">
                @csrf

                @if(session('error'))
                <div class="alert alert-error">
                    <span class="alert-icon">⚠️</span>
                    {{ session('error') }}
                </div>
                @endif

                @if($errors->any())
                <div class="alert alert-error">
                    <span class="alert-icon">⚠️</span>
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
                @endif

                <!-- Поле Имя -->
                <div class="form-group">
                    <label for="name">
                        <span class="label-text">Имя и фамилия</span>
                    </label>
                    <div class="input-field">
                        <span class="field-icon">👤</span>
                        <input type="text" 
                               id="name" 
                               name="name" 
                               value="{{ old('name') }}"
                               placeholder="Иван Иванов"
                               required>
                    </div>
                </div>

                <!-- Поле Email -->
                <div class="form-group">
                    <label for="email">
                        <span class="label-text">Email</span>
                    </label>
                    <div class="input-field">
                        <span class="field-icon">📧</span>
                        <input type="email" 
                               id="email" 
                               name="email" 
                               value="{{ old('email') }}"
                               placeholder="ivan@example.com"
                               required>
                    </div>
                </div>

                <!-- Поле Телефон -->
                <div class="form-group">
                    <label for="phone">
                        <span class="label-text">Телефон</span>
                    </label>
                    <div class="input-field">
                        <span class="field-icon">📱</span>
                        <input type="tel" 
                               id="phone" 
                               name="phone" 
                               value="{{ old('phone') }}"
                               placeholder="+7 900 123-45-67">
                    </div>
                </div>

                <!-- Поле Пароль -->
                <div class="form-group">
                    <label for="password">
                        <span class="label-text">Пароль</span>
                    </label>
                    <div class="input-field">
                        <span class="field-icon">🔒</span>
                        <input type="password" 
                               id="password" 
                               name="password" 
                               placeholder="••••••••"
                               required>
                    </div>
                </div>

                <!-- Поле Подтверждение пароля -->
                <div class="form-group">
                    <label for="password_confirmation">
                        <span class="label-text">Подтверждение пароля</span>
                    </label>
                    <div class="input-field">
                        <span class="field-icon">🔐</span>
                        <input type="password" 
                               id="password_confirmation" 
                               name="password_confirmation" 
                               placeholder="••••••••"
                               required>
                    </div>
                </div>

                <!-- Соглашение с правилами -->
                <div class="form-options">
                    <label class="custom-checkbox">
                        <input type="checkbox" name="agree" required>
                        <span class="checkbox-mark"></span>
                        <span class="checkbox-text">Я согласен с <a href="#" class="link-inline">правилами маркетплейса</a></span>
                    </label>
                </div>

                <!-- Кнопка регистрации -->
                <button type="submit" class="btn-primary">
                    <span>Зарегистрироваться</span>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </button>

                <!-- Ссылка на вход -->
                <div class="auth-footer">
                    <span class="footer-text">Уже есть аккаунт?</span>
                    <a href="{{ route('account') }}" class="link-register">Войти в аккаунт</a>
                </div>
            </form>
        </div>
        
        <!-- Блок преимуществ -->
        <div class="auth-benefits">
            <div class="benefit-item">
                <span class="benefit-icon">🚚</span>
                <div class="benefit-text">
                    <h4>Бесплатная доставка</h4>
                    <p>от 5000 ₽ по всей России</p>
                </div>
            </div>
            <div class="benefit-divider"></div>
            <div class="benefit-item">
                <span class="benefit-icon">🔄</span>
                <div class="benefit-text">
                    <h4>30 дней возврата</h4>
                    <p>без вопросов и комиссий</p>
                </div>
            </div>
            <div class="benefit-divider"></div>
            <div class="benefit-item">
                <span class="benefit-icon">⭐</span>
                <div class="benefit-text">
                    <h4>Бонусная программа</h4>
                    <p>кешбэк до 10%</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection