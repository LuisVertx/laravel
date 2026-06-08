@extends('main_layout')

@section('header-title', 'MarketFlow | Админ панель')

@section('is_admin')
    <li class="active-admin-link"><a href="/admin">👑 Админ панель</a></li>
@endsection

@section('content')
<div class="admin-dashboard">
    <div class="admin-form-card">
        <h2>📦 Добавление нового товара</h2>
        <p>Заполните форму, чтобы разместить товар на маркетплейсе MarketFlow</p>
        
        <form class="admin-form" action="/submit" method="POST">
            @csrf
            <div class="admin-form-row">
                <div class="admin-form-group">
                    <label for="photo">📷 Фото товара</label>
                    <input type="file" id="photo" name="photo" accept="image/*" placeholder="Эмодзи или URL изображения" value="">
                </div>
                <div class="admin-form-group">
                    <label for="title">🏷️ Название товара</label>
                    <input type="text" id="title" name="title" placeholder="Введите название товара" required>
                </div>
            </div>
            
            <div class="admin-form-row">
                <div class="admin-form-group">
                    <label for="price">💰 Цена (₽)</label>
                    <input type="number" id="price" name="price" placeholder="Например: 3490" required>
                </div>
                <div class="admin-form-group">
                    <label for="seller">👤 Продавец</label>
                    <input type="text" id="seller" name="seller" placeholder="Название магазина или имя продавца" required>
                </div>
            </div>
            
            <div class="admin-form-row">
                <div class="admin-form-group">
                    <label for="rating">⭐ Рейтинг</label>
                    <select id="rating" name="rating">
                        <option value="5">★★★★★ 5.0</option>
                        <option value="4.5">★★★★☆ 4.5</option>
                        <option value="4">★★★★☆ 4.0</option>
                        <option value="3.5">★★★☆☆ 3.5</option>
                        <option value="3">★★★☆☆ 3.0</option>
                    </select>
                </div>
                <div class="admin-form-group">
                    <label for="category">📂 Категория</label>
                    <select id="category" name="category">
                        <option value="Electronic">📱 Электроника</option>
                        <option value="Wear">👗 Одежда</option>
                        <option value="House">🏠 Дом и уют</option>
                        <option value="Games">🎮 Игры</option>
                        <option value="Books">📚 Книги</option>
                        <option value="Beaty">💄 Красота</option>
                    </select>
                </div>
            </div>
            
            <div class="admin-form-row">
                <div class="admin-form-group">
                    <label for="description">📝 Описание товара</label>
                    <textarea id="description" name="description" rows="3" placeholder="Краткое описание товара..."></textarea>
                </div>
            </div>
            
            <button type="submit" class="admin-submit-btn">➕ Добавить товар на маркетплейс</button>
        </form>
    </div>
</div>
@endsection