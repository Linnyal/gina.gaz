<?php 
$page_title = "База знаний по безопасности";
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
            
            <!-- Категория 1 -->
            <div class="category-card" data-category="Пожарная безопасность">
                <h2>Пожарная безопасность</h2>
                <div class="article-list">
                    <div class="article-item" data-title="Введение в пожарную безопасность" data-description="Основные понятия и значение пожарной безопасности на рабочих местах.">
                        <a href="/bezopasnost-base/vveden_v_bz.php">Введение в пожарную безопасность</a>
                        <p>Основные понятия и значение пожарной безопасности на рабочих местах.</p>
                    </div>
                    <div class="article-item" data-title="Общие правила поведения при пожаре" data-description="Как действовать при обнаружении дыма или огня: пошаговая инструкция.">
                        <a href="/bezopasnost-base/povidenie.php">Общие правила поведения при пожаре</a>
                        <p>Как действовать при обнаружении дыма или огня: пошаговая инструкция.</p>
                    </div>
                    <div class="article-item" data-title="Правила безопасности с электрооборудованием" data-description="Как предотвратить возгорание из-за неисправного оборудования.">
                        <a href="/bezopasnost-base/bzz_electro.php">Правила безопасности с электрооборудованием</a>
                        <p>Как предотвратить возгорание из-за неисправного оборудования.</p>
                    </div>
                    <div class="article-item" data-title="Безопасное обращение с огнеопасными материалами" data-description="Правила хранения и использования легковоспламеняющихся веществ.">
                        <a href="/bezopasnost-base/ogneopas_mat.php">Безопасное обращение с огнеопасными материалами</a>
                        <p>Правила хранения и использования легковоспламеняющихся веществ.</p>
                    </div>
                    <div class="article-item" data-title="Огнетушители и их использование" data-description="Виды огнетушителей и как правильно ими пользоваться.">
                        <a href="/bezopasnost-base/ognetush.php">Огнетушители и их использование</a>
                        <p>Виды огнетушителей и как правильно ими пользоваться.</p>
                    </div>
                    <div class="article-item" data-title="Пожарная безопасность в офисе" data-description="Создание безопасной рабочей среды: рекомендации для офисных сотрудников.">
                        <a href="/bezopasnost-base/ofis_bz.php">Пожарная безопасность в офисе</a>
                        <p>Создание безопасной рабочей среды: рекомендации для офисных сотрудников.</p>
                    </div>
                </div>
            </div>

            <!-- Категория 2 -->
            <div class="category-card" data-category="Информационная безопасность">
                <h2>Информационная безопасность</h2>
                <div class="article-list">
                    <div class="article-item" data-title="Защита конфиденциальной информации" data-description="Основы информационной безопасности на предприятиях.">
                        <a href="/bezopasnost-base/konf_inf.php">Защита конфиденциальной информации</a>
                        <p>Основы информационной безопасности на предприятиях.</p>
                    </div>
                    <div class="article-item" data-title="Правила работы с корпоративной электронной почтой" data-description="Безопасное использование электронной почты в рабочих целях.">
                        <a href="/bezopasnost-base/pochta.php">Правила работы с корпоративной электронной почтой</a>
                        <p>Безопасное использование электронной почты в рабочих целях.</p>
                    </div>
                    <div class="article-item" data-title="Обнаружение и предотвращение кибератак" data-description="Методы выявления и защиты от киберугроз.">
                        <a href="/bezopasnost-base/obnaruj_kibera.php">Обнаружение и предотвращение кибератак</a>
                        <p>Методы выявления и защиты от киберугроз.</p>
                    </div>
                    <div class="article-item" data-title="План реагирования на инциденты информационной безопасности" data-description="Процедуры действий при нарушениях информационной безопасности.">
                        <a href="/bezopasnost-base/plan_infbz.php">План реагирования на инциденты информационной безопасности</a>
                        <p>Процедуры действий при нарушениях информационной безопасности.</p>
                    </div>
                    <div class="article-item" data-title="Безопасность мобильных устройств в корпоративной среде" data-description="Защита данных при использовании мобильных устройств.">
                        <a href="/bezopasnost-base/bz_mobilet.php">Безопасность мобильных устройств в корпоративной среде</a>
                        <p>Защита данных при использовании мобильных устройств.</p>
                    </div>
                    <div class="article-item" data-title="Резервное копирование данных: важность и методы" data-description="Стратегии и технологии резервного копирования информации.">
                        <a href="/bezopasnost-base/rezerf_kop.php">Резервное копирование данных: важность и методы</a>
                        <p>Стратегии и технологии резервного копирования информации.</p>
                    </div>
                </div>
            </div>

            <!-- Категория 3 -->
            <div class="category-card" data-category="Промышленная безопасность">
                <h2>Промышленная безопасность</h2>
                <div class="article-list">
                    <div class="article-item" data-title="Основные требования к промышленной безопасности на производстве" data-description="Ключевые нормы и правила промышленной безопасности.">
                        <a href="/bezopasnost-base/promish_bz.php">Основные требования к промышленной безопасности на производстве</a>
                        <p>Ключевые нормы и правила промышленной безопасности.</p>
                    </div>
                    <div class="article-item" data-title="Безопасные технологии работы с газовым оборудованием" data-description="Меры предосторожности при работе с газовыми системами.">
                        <a href="/bezopasnost-base/rab_sgaz.php">Безопасные технологии работы с газовым оборудованием</a>
                        <p>Меры предосторожности при работе с газовыми системами.</p>
                    </div>
                    <div class="article-item" data-title="Правила работы на опасных производственных участках" data-description="Особенности работы в зонах повышенной опасности.">
                        <a href="/bezopasnost-base/pravila_opuch.php">Правила работы на опасных производственных участках</a>
                        <p>Особенности работы в зонах повышенной опасности.</p>
                    </div>
                    <div class="article-item" data-title="Использование средств индивидуальной защиты (СИЗ)" data-description="Правила применения средств индивидуальной защиты.">
                        <a href="/bezopasnost-base/infid_za.php">Использование средств индивидуальной защиты (СИЗ)</a>
                        <p>Правила применения средств индивидуальной защиты.</p>
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
        const title = article.dataset.title.toLowerCase();
        const description = article.dataset.description.toLowerCase();
        const linkText = article.querySelector('a').textContent.toLowerCase();
        const pText = article.querySelector('p').textContent.toLowerCase();
        
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
    const title = element.querySelector('a');
    const description = element.querySelector('p');
    
    // Подсвечиваем в заголовке
    highlightText(title, searchTerm);
    
    // Подсвечиваем в описании
    if (description) {
        highlightText(description, searchTerm);
    }
}

// Функция для подсветки текста в элементе
function highlightText(element, searchTerm) {
    const text = element.textContent;
    const regex = new RegExp(escapeRegExp(searchTerm), 'gi');
    const highlightedText = text.replace(regex, match => 
        `<span class="search-highlight">${match}</span>`
    );
    element.innerHTML = highlightedText;
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
        const title = article.querySelector('a');
        const description = article.querySelector('p');
        
        if (title) {
            title.innerHTML = title.textContent;
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