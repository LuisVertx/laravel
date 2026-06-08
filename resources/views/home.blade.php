@extends('main_layout')

@section('is_search-bar')
    @include('includes.search-bar')
@endsection

@section('content')
<div class="marketplace-container">
        <!-- Верхний блок маркетплейса -->
        <div class="mp-header">
            <div class="seller-stats">
                🏪 1 200+ продавцов · 35 000+ товаров
            </div>
        </div>

        <!-- Категории / фильтры (визуально) -->
        <div class="categories-row">
            <div class="cat-item active-cat">🔥 Рекомендации</div>
            <div class="cat-item">📱 Электроника</div>
            <div class="cat-item">👗 Одежда</div>
            <div class="cat-item">🏠 Дом и уют</div>
            <div class="cat-item">🎮 Игры</div>
            <div class="cat-item">📚 Книги</div>
            <div class="cat-item">⚡ Premium-бренды</div>
        </div>

        <!-- Товарная сетка (пустая, стилизованная под реальный маркетплейс) -->
        <div class="section-title">
            <h3><span></span> Популярные товары</h3>
            <div class="view-all">Смотреть всё →</div>
        </div>

        <!-- ГРИД ТОВАРОВ — пустой каркас с заглушками, но с элементами продавцов (маркетплейс стиль) -->
        <div class="market-grid">
            
            @include('includes.cards')

        <!-- Плашка с информацией (сетка готова, но не заполнена) -->
        <div class="info-banner">
            <span>🛍️ Маркетплейс</span>
            <p>Сетка товаров готова к наполнению реальными позициями от продавцов</p>
            <small>Карточки содержат всю необходимую структуру: название, фото, рейтинг, цену, информацию о продавце и кнопку корзины. Адаптивно под любые устройства.</small>
        </div>

        <!-- Секция "Популярные продавцы" (декоративная, для антуража) -->
        <div class="popular-sellers">
            <h4 style="margin-bottom: 0.8rem; font-size: 1.1rem;">🌟 Топ-продавцы этой недели</h4>
            <div class="sellers-flex">
                <div class="seller-card">
                    <div class="seller-icon">📱</div>
                    <div style="font-size: 0.8rem; font-weight: 500;">TechStore</div>
                </div>
                <div class="seller-card">
                    <div class="seller-icon">👟</div>
                    <div style="font-size: 0.8rem; font-weight: 500;">FashionLab</div>
                </div>
                <div class="seller-card">
                    <div class="seller-icon">🎮</div>
                    <div style="font-size: 0.8rem; font-weight: 500;">GameHub</div>
                </div>
                <div class="seller-card">
                    <div class="seller-icon">🏠</div>
                    <div style="font-size: 0.8rem; font-weight: 500;">HomeStyle</div>
                </div>
                <div class="seller-card">
                    <div class="seller-icon">⚡</div>
                    <div style="font-size: 0.8rem; font-weight: 500;">ElectroZone</div>
                </div>
            </div>
        </div>
    </div>


@endsection

