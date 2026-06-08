@extends('main_layout')

@section('is_search-bar')
    @include('includes.search-bar')
@endsection

@section('content')
<div class="marketplace-container">
        <!-- Верхний блок маркетплейса -->
        <div class="mp-header">
            {{-- <div class="seller-stats">
                🏪 1 200+ продавцов · 35 000+ товаров
            </div> --}}
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
            {{-- <div class="view-all">Смотреть всё →</div> --}}
        </div>

        <!-- ГРИД ТОВАРОВ — пустой каркас с заглушками, но с элементами продавцов (маркетплейс стиль) -->
        <div class="market-grid">
            
            @include('includes.cards')

        <!-- Плашка с информацией (сетка готова, но не заполнена) -->
        

        <!-- Секция "Популярные продавцы" (декоративная, для антуража) -->
    
    </div>


@endsection

