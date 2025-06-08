<?php 
$page_title = "Техническая База знаний";
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; 
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title ?></title>
    <link rel="stylesheet" href="/css/style.css">
    <style>
        .search-box {
            margin: 2rem 0;
            display: flex;
            max-width: 600px;
        }
        
        .search-box input {
            flex: 1;
            padding: 0.8rem 1rem;
            border: 1px solid #ddd;
            border-radius: 4px 0 0 4px;
            font-size: 1rem;
        }
        
        .search-box button {
            padding: 0 1.5rem;
            background-color: #3182ce;
            color: white;
            border: none;
            border-radius: 0 4px 4px 0;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        .search-box button:hover {
            background-color: #2b6cb0;
        }
        
        .search-highlight {
            background-color: #ffeb3b;
            padding: 0 2px;
        }
        
        .no-results {
            padding: 1rem;
            background-color: #fff5f5;
            border: 1px solid #ffebee;
            border-radius: 4px;
            margin: 1rem 0;
            display: none;
        }
        
        .category-card {
            margin-bottom: 2rem;
            padding: 1rem;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
        }
        
        .article-item {
            margin-bottom: 1rem;
            padding: 0.5rem;
            transition: all 0.3s ease;
        }
        
        .article-item:hover {
            background-color: #f8fafc;
        }
        
        .hidden-category {
            display: none;
        }
        
        .visible-category {
            display: block;
        }
        
        .hidden-article {
            display: none;
        }
    </style>
</head>
<body>

<div class="knowledge-base">
    <div class="container">

        
        <h1><?= $page_title ?></h1>
        
        <!-- Поиск -->
        <div class="search-box">
            <input type="text" placeholder="Поиск по статьям..." id="search-input" autocomplete="off">
            <button onclick="performSearch()">Найти</button>
        </div>
        
        <div id="no-results" class="no-results">
            По вашему запросу ничего не найдено. Попробуйте изменить поисковый запрос.
        </div>

        <!-- Категории -->
        <div class="category-list" id="category-container">
            
            <!-- Категория 0 -->
            <div class="category-card" data-category="Основы системного администрирования">
                <h2>Основы системного администрирования</h2>
                <div class="article-list">
                    <div class="article-item" data-title="Основы администрирования" data-description="Роли и обязанности сисадмина в корпоративной среде">
                        <a href="/knowledge-base/safety/os_adm.php">Основы администрирования</a>
                        <p>Роли и обязанности сисадмина в корпоративной среде</p>
                    </div>
                    <div class="article-item" data-title="Основы термины для администрирования" data-description="">
                        <a href="/knowledge-base/safety/termin.php">Основы термины для администрирования</a>
                        <p></p>
                    </div>
                    <div class="article-item" data-title="Модель OSI и TCP/IP" data-description="Подробный разбор сетевых моделей">
                        <a href="/knowledge-base/safety/model.php">Модель OSI и TCP/IP: подробный разбор</a>
                        <p>Подробный разбор сетевых моделей</p>
                    </div>
                    <div class="article-item" data-title="Настройка и диагностика сетевых интерфейсов" data-description="">
                        <a href="/knowledge-base/safety/diagnos.php">Настройка и диагностика сетевых интерфейсов</a>
                        <p></p>
                    </div>
                    <div class="article-item" data-title="Виртуальные сети" data-description="Настройка VLAN, VPN, VXLAN">
                        <a href="/knowledge-base/safety/vir_seti.php">Виртуальные сети</a>
                        <p>Настройка VLAN, VPN, VXLAN</p>
                    </div>
                    <div class="article-item" data-title="Wi-Fi - проектирование и безопасность" data-description="">
                        <a href="/knowledge-base/safety/wifi.php">Wi-Fi - проектирование и безопасность</a>
                        <p></p>
                    </div>
                    <div class="article-item" data-title="Командная строка, консоль, PowerShell" data-description="">
                        <a href="/knowledge-base/safety/konsol.php">Командная строка, консоль, PowerShell</a>
                        <p></p>
                    </div>
                    <div class="article-item" data-title="Системы мониторинга" data-description="Мониторинг промышленного оборудования">
                        <a href="/knowledge-base/safety/monitoring.php">Системы мониторинга</a>
                        <p>Мониторинг промышленного оборудования</p>
                    </div>
                </div>
            </div>

            <!-- Категория 0,1 -->
            <div class="category-card" data-category="Корпоративная ИТ-инфраструктура и безопасность">
                <h2>Корпоративная ИТ-инфраструктура и безопасность</h2>
                <div class="article-list">
                    <div class="article-item" data-title="Лицензирование программного обеспечения в корпоративной среде" data-description="">
                        <a href="/knowledge-base/safety/po_kop.php">Лицензирование программного обеспечения в корпоративной среде</a>
                        <p></p>
                    </div>
                    <div class="article-item" data-title="Мобильные устройства в корпоративной сети" data-description="">
                        <a href="/knowledge-base/safety/mob_vkop.php">Мобильные устройства в корпоративной сети</a>
                        <p></p>
                    </div>
                    <div class="article-item" data-title="Защита данных в корпоративной среде" data-description="">
                        <a href="/knowledge-base/safety/zachit_dan.php">Защита данных в корпоративной среде</a>
                        <p></p>
                    </div>
                    <div class="article-item" data-title="Резервное копирование" data-description="">
                        <a href="/knowledge-base/safety/rez_kop.php">Резервное копирование</a>
                        <p></p>
                    </div>
                    <div class="article-item" data-title="Аварийное восстановление (DRP)" data-description="">
                        <a href="/knowledge-base/safety/vostanov.php">Аварийное восстановление (DRP)</a>
                        <p></p>
                    </div>
                    <div class="article-item" data-title="Кибербезопасность" data-description="">
                        <a href="/knowledge-base/safety/kib_bz.php">Кибербезопасность</a>
                        <p></p>
                    </div>
                    <div class="article-item" data-title="Основы информационной безопасности" data-description="">
                        <a href="/knowledge-base/safety/osnov_bz.php">Основы информационной безопасности</a>
                        <p></p>
                    </div>
                </div>
            </div>

            <!-- Категория 1 -->
            <div class="category-card" data-category="Основы газовой отрасли">
                <h2>Основы газовой отрасли</h2>
                <div class="article-list">
                    <div class="article-item" data-title="Природный газ" data-description="Oсновы, добыча, транспортировка и применение">
                        <a href="/knowledge-base/safety/gaz_st.php">Природный газ</a>
                        <p>Oсновы, добыча, транспортировка и применение</p>
                    </div>
                    <div class="article-item" data-title="Хранение природного газа" data-description="Технологии и инфраструктура">
                        <a href="/knowledge-base/safety/hran_gaz.php">Хранение природного газа</a>
                        <p>Технологии и инфраструктура</p>
                    </div>
                    <div class="article-item" data-title="Трубопроводный транспорт газа" data-description="Принципы работы и основные компоненты">
                        <a href="/knowledge-base/safety/truba.php">Трубопроводный транспорт газа</a>
                        <p>Принципы работы и основные компоненты</p>
                    </div>
                    <div class="article-item" data-title="Технологии переработки природного газа" data-description="От сырья к готовым продуктам">
                        <a href="/knowledge-base/safety/pererabotka.php">Технологии переработки природного газа</a>
                        <p>От сырья к готовым продуктам</p>
                    </div>
                </div>
            </div>

            <!-- Категория 2 -->
            <div class="category-card" data-category="Технологические процессы">
                <h2>Технологические процессы</h2>
                <div class="article-list">
                    <div class="article-item" data-title="Подготовка газа к транспортировке" data-description="Осушка, очистка от примесей">
                        <a href="/knowledge-base/safety/transport.php">Подготовка газа к транспортировке</a>
                        <p>Осушка, очистка от примесей</p>
                    </div>
                    <div class="article-item" data-title="Принципы работы установок комплексной подготовки газа" data-description="(УКПГ)">
                        <a href="/knowledge-base/safety/rabota_ust.php">Принципы работы установок комплексной подготовки газа</a>
                        <p>(УКПГ)</p>
                    </div>
                    <div class="article-item" data-title="Технологии сжижения природного газа" data-description="(СПГ)">
                        <a href="/knowledge-base/safety/sjiganie.php">Технологии сжижения природного газа</a>
                        <p>(СПГ)</p>
                    </div>
                    <div class="article-item" data-title="Особенности транспортировки сжиженного газа" data-description="">
                        <a href="/knowledge-base/safety/osobenosti_tr.php">Особенности транспортировки сжиженного газа</a>
                    </div>
                </div>
            </div>

            <!-- Категория 3 -->
            <div class="category-card" data-category="Экологическая ответственность">
                <h2>Экологическая ответственность</h2>
                <div class="article-list">
                    <div class="article-item" data-title="Методы снижения выбросов метана" data-description="">
                        <a href="/knowledge-base/safety/snij_metana.php">Методы снижения выбросов метана</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Функция для выполнения поиска
function performSearch() {
    const searchTerm = document.getElementById('search-input').value.trim().toLowerCase();
    const articles = document.querySelectorAll('.article-item');
    const categories = document.querySelectorAll('.category-card');
    const noResults = document.getElementById('no-results');
    let hasResults = false;
    
    // Сначала сбросим предыдущие результаты
    resetSearch();
    
    if (searchTerm === '') {
        return; // Не ищем пустую строку
    }
    
    // Ищем по статьям
    articles.forEach(article => {
        const title = article.getAttribute('data-title').toLowerCase();
        const description = article.getAttribute('data-description') ? article.getAttribute('data-description').toLowerCase() : '';
        const linkText = article.querySelector('a').textContent.toLowerCase();
        const pText = article.querySelector('p') ? article.querySelector('p').textContent.toLowerCase() : '';
        
        if (title.includes(searchTerm) || 
            description.includes(searchTerm) || 
            linkText.includes(searchTerm) || 
            pText.includes(searchTerm)) {
            
            // Показываем статью
            article.classList.remove('hidden-article');
            
            // Подсвечиваем совпадения
            highlightMatches(article, searchTerm);
            
            // Показываем родительскую категорию
            const category = article.closest('.category-card');
            category.classList.remove('hidden-category');
            category.classList.add('visible-category');
            
            hasResults = true;
        } else {
            article.classList.add('hidden-article');
        }
    });
    
    // Проверяем, есть ли видимые статьи в каждой категории
    categories.forEach(category => {
        const visibleArticles = category.querySelectorAll('.article-item:not(.hidden-article)');
        if (visibleArticles.length === 0) {
            category.classList.add('hidden-category');
            category.classList.remove('visible-category');
        } else {
            category.classList.remove('hidden-category');
            category.classList.add('visible-category');
        }
    });
    
    // Показываем сообщение, если нет результатов
    noResults.style.display = hasResults ? 'none' : 'block';
}

// Функция для подсветки совпадений
function highlightMatches(element, searchTerm) {
    const titleLink = element.querySelector('a');
    const description = element.querySelector('p');
    
    // Подсвечиваем в заголовке ссылки
    if (titleLink) {
        const linkText = titleLink.textContent;
        titleLink.innerHTML = linkText.replace(
            new RegExp(escapeRegExp(searchTerm), 'gi'),
            match => `<span class="search-highlight">${match}</span>`
        );
    }
    
    // Подсвечиваем в описании, если оно есть
    if (description) {
        const descText = description.textContent;
        description.innerHTML = descText.replace(
            new RegExp(escapeRegExp(searchTerm), 'gi'),
            match => `<span class="search-highlight">${match}</span>`
        );
    }
}

// Экранирование специальных символов для RegExp
function escapeRegExp(string) {
    return string.replace(/[.*+?^${}()|[\]\\]/g, '\\$&');
}

// Функция для сброса поиска
function resetSearch() {
    // Показываем все статьи и категории
    document.querySelectorAll('.article-item').forEach(article => {
        article.classList.remove('hidden-article');
        
        // Убираем подсветку
        const titleLink = article.querySelector('a');
        const description = article.querySelector('p');
        
        if (titleLink) {
            titleLink.innerHTML = titleLink.textContent;
        }
        
        if (description) {
            description.innerHTML = description.textContent;
        }
    });
    
    document.querySelectorAll('.category-card').forEach(category => {
        category.classList.remove('hidden-category');
        category.classList.add('visible-category');
    });
    
    document.getElementById('no-results').style.display = 'none';
}

// Добавляем обработчики событий
document.addEventListener('DOMContentLoaded', function() {
    // Обработчик нажатия Enter в поле поиска
    document.getElementById('search-input').addEventListener('keyup', function(e) {
        if (e.key === 'Enter') {
            performSearch();
        }
    });
    
    // Обработчик очистки поиска при изменении поля
    document.getElementById('search-input').addEventListener('input', function(e) {
        if (this.value.trim() === '') {
            resetSearch();
        }
    });
});
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

</body>
</html>