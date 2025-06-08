<?php 
$page_title = "Инциденты и решения";
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; 
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title ?></title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Иконки Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
      :root {
        --primary: #4A89DC;           /* Основной голубой */
        --primary-light: #E4F1FE;     /* Светлый голубой фон */
        --primary-dark: #3B7DD8;      /* Темный голубой для ховеров */
        --accent: #5D9CEC;            /* Акцентный голубой */
        --background: #F9FCFF;        /* Очень светлый голубой фон */
        --text-dark: #2C3E50;         /* Основной текст */
        --text-light: #FFFFFF;        /* Белый текст */
        --border-radius: 10px;        /* Скругление углов */
        --box-shadow: 0 4px 20px rgba(93, 156, 236, 0.15); /* Голубая тень */
        --card-bg: #FFFFFF;           /* Фон карточек */
        --border-color: #D6E4F0;      /* Цвет границ */
      }
      
      /* Шапка */
      header {
        background-color: var(--primary);
        color: var(--text-light);
        padding: 1.2rem 2rem;
        box-shadow: var(--box-shadow);
        position: sticky;
        top: 0;
        z-index: 100;
        display: flex;
        justify-content: space-between;
        align-items: center;
      }

      .logo img {
        height: 40px;
        transition: transform 0.3s ease;
      }

      .logo img:hover {
        transform: scale(1.05);
      }

      nav ul {
        display: flex;
        gap: 1.8rem;
        list-style: none;
      }

      nav a {
        color: var(--text-light);
        text-decoration: none;
        font-weight: 500;
        padding: 0.5rem 0;
        position: relative;
        transition: all 0.3s ease;
      }

      nav a::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0;
        height: 2px;
        background-color: var(--text-light);
        transition: width 0.3s ease;
      }

      nav a:hover::after {
        width: 100%;
      }
      
      body {
        background-color: var(--background);
        display: flex;
        flex-direction: column;
        min-height: 100vh;
      }
      
      .content-wrapper {
        flex: 1;
      }
      
      .document-card {
        transition: transform 0.2s;
        border-left: 4px solid var(--primary);
        margin-bottom: 25px;
        height: 100%;
      }
      
      .document-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--box-shadow);
      }
      
      .badge-gost {
        background-color: #28a745;
        color: white;
      }
      
      .badge-internal {
        background-color: #6c757d;
        color: white;
      }
      
      .badge-template {
        background-color: #6f42c1;
        color: white;
      }
      
      .search-container {
        margin-bottom: 30px;
      }
      
      .search-box {
        max-width: 600px;
        margin: 0 auto 20px;
      }
      
      .category-buttons {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        justify-content: center;
        margin-bottom: 20px;
      }
      
      .category-btn {
        white-space: nowrap;
      }
      
      .document-description {
        color: #6c757d;
        margin-bottom: 12px;
      }
      
      .document-actions {
        display: flex;
        gap: 10px;
        margin-top: 15px;
      }
      
      .no-results {
        padding: 1.5rem;
        background-color: #fff5f5;
        border: 1px solid #ffebee;
        border-radius: 8px;
        margin: 2rem 0;
        text-align: center;
        display: none;
      }
      
      .document-grid {
        margin-bottom: 40px;
      }
      
      /* Быстрые решения */
      .quick-fixes {
        margin: 50px 0;
      }
      
      .section-title {
        color: var(--primary);
        margin: 0 0 20px;
        font-size: 1.5rem;
        border-bottom: 2px solid var(--primary);
        padding-bottom: 10px;
        display: flex;
        align-items: center;
        gap: 10px;
      }
      
      .section-title i {
        font-size: 1.3rem;
      }
      
      .fixes-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 20px;
        margin-top: 20px;
      }
      
      .fix-card {
        background: var(--card-bg);
        padding: 20px;
        border-radius: var(--border-radius);
        box-shadow: var(--box-shadow);
        border: 1px solid var(--border-color);
      }
      
      .fix-title {
        margin: 0 0 15px;
        color: var(--text-dark);
        font-size: 1.1rem;
      }
      
      .fix-steps {
        margin: 0;
        padding-left: 20px;
        color: var(--text-dark);
        font-size: 0.95rem;
        line-height: 1.6;
      }
      
      .fix-steps li {
        margin-bottom: 8px;
      }
      
      footer {
        margin-top: auto;
      }
      
      .load-more-container {
        text-align: center;
        margin: 30px 0;
      }
      
      .document-item {
        display: none;
      }
      
      .document-item.visible {
        display: block;
      }
    </style>
</head>
<body>

    <!-- Основной контент -->
    <div class="content-wrapper">
        <div class="container py-4">
            
            <h1 class="text-center mb-4"><?= $page_title ?></h1>
            
            <!-- Поиск и фильтры -->
            <div class="search-container">
                <div class="search-box input-group">
                    <input type="text" id="searchInput" class="form-control" placeholder="Поиск по решениям...">
                    <button class="btn btn-primary" type="button" id="searchButton">
                        <i class="fas fa-search"></i> Найти
                    </button>
                </div>
                
                <div class="category-buttons">
                    <button class="btn btn-outline-primary category-btn active" data-filter="all">Все решения</button>
                    <button class="btn btn-outline-primary category-btn" data-filter="gost">Технические сбои и ИТ-проблемы</button>
                    <button class="btn btn-outline-primary category-btn" data-filter="internal">Безопасность и производственные инциденты</button>
                </div>
            </div>
            
            <div id="no-results" class="no-results">
                <i class="fas fa-search fa-lg mb-2"></i>
                <h5>Решения не найдены</h5>
                <p class="mb-0">Попробуйте изменить поисковый запрос или выбрать другую категорию</p>
            </div>

            <!-- Список документов -->
            <div class="row document-grid" id="documentsContainer">
                <!-- Документы будут добавлены через JavaScript -->
            </div>
            
            <!-- Кнопка "Показать еще" -->
            <div class="load-more-container" id="loadMoreContainer" style="display: none;">
                <button class="btn btn-outline-primary" id="loadMoreBtn">
                    <i class="fas fa-chevron-down me-2"></i>Показать еще
                </button>
            </div>
            
            <!-- Быстрые решения -->
            <div class="quick-fixes">
                <h2 class="section-title"><i class="fas fa-bolt"></i> Быстрые решения</h2>
                <p>Простые инструкции для самых распространенных проблем</p>
                
                <div class="fixes-grid">
                    <div class="fix-card">
                        <h3 class="fix-title">Не работает мышь/клавиатура</h3>
                        <ol class="fix-steps">
                            <li>Проверить подключение USB</li>
                            <li>Переподключить в другой порт</li>
                            <li>Перезагрузить компьютер</li>
                        </ol>
                    </div>
                    
                    <div class="fix-card">
                        <h3 class="fix-title">Не открывается сайт</h3>
                        <ol class="fix-steps">
                            <li>Проверить интернет-соединение</li>
                            <li>Очистить кэш браузера</li>
                            <li>Попробовать другой браузер</li>
                        </ol>
                    </div>
                    
                    <div class="fix-card">
                        <h3 class="fix-title">Нет звука</h3>
                        <ol class="fix-steps">
                            <li>Проверить громкость</li>
                            <li>Убедиться, что звук не отключен</li>
                            <li>Проверить подключение колонок/наушников</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS + Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Скрипт для работы страницы -->
    <script>
        // Массив документов с ссылками на страницы просмотра (без метаданных)
        const documents = [
            {
                id: 1,
                title: "Принтер не печатает. Сканер не работает.",
                type: "gost",
                viewLink: "/inzident/print_sk.php",
                description: "Проверка очереди, драйверов, сети. Типовые ошибки подключения"
            },
            {
                id: 2,
                title: "Ошибки DNS, VPN-подключения.",
                type: "gost",
                viewLink: "/inzident/oshibki.php",
                description: "Диагностика и устранение проблем с сетевыми подключениями"
            },
            {
                id: 3,
                title: "Утечка газа или опасных веществ",
                type: "internal",
                viewLink: "/inzident/utech.php",
                description: "Признаки утечки, немедленные действия, контакты аварийных служб"
            },
            {
                id: 4,
                title: "Реагирование на DDoS-атаки",
                type: "gost",
                viewLink: "/inzident/ddos.php",
                description: "Алгоритм действий при кибератаках на сетевую инфраструктуру"
            },
            {
                id: 5,
                title: "Пожары и эвакуация на объектах",
                type: "internal",
                viewLink: "/inzident/pj_evak.php",
                description: "План действий при пожаре, эвакуационные маршруты"
            },
            {
                id: 6,
                title: "Кибератаки и утечки данных",
                type: "internal",
                viewLink: "/inzident/ut_dann.php",
                description: "Действия при компрометации корпоративных данных"
            },
            {
                id: 7,
                title: "Разгерметизация трубопроводов",
                type: "internal",
                viewLink: "/inzident/truby.php",
                description: "Аварийные процедуры при повреждении трубопроводов"
            },
            {
                id: 8,
                title: "Ошибки лицензирования программ",
                type: "gost",
                viewLink: "/inzident/license.php",
                description: "Решение проблем с лицензиями корпоративного ПО"
            },
            {
                id: 9,
                title: "Повреждение сетевого оборудования",
                type: "gost",
                viewLink: "/inzident/network.php",
                description: "Действия при выходе из строя сетевой инфраструктуры"
            },
        ];

        // Переменные для управления отображением
        let visibleCount = 6;
        let currentFilter = "all";
        let currentSearch = "";
        let filteredDocuments = [];

        // Функция для отображения документов
        function renderDocuments(filter = "all", searchQuery = "") {
            const container = document.getElementById("documentsContainer");
            container.innerHTML = "";
            
            // Сохраняем текущие параметры фильтрации
            currentFilter = filter;
            currentSearch = searchQuery.toLowerCase();

            // Фильтрация документов
            filteredDocuments = documents.filter(doc => {
                const matchesFilter = filter === "all" || doc.type === filter;
                const matchesSearch = doc.title.toLowerCase().includes(currentSearch) || 
                                     doc.description.toLowerCase().includes(currentSearch);
                return matchesFilter && matchesSearch;
            });

            if (filteredDocuments.length === 0) {
                document.getElementById('no-results').style.display = 'block';
                document.getElementById('loadMoreContainer').style.display = 'none';
                return;
            } else {
                document.getElementById('no-results').style.display = 'none';
            }

            // Сброс счетчика видимых элементов при новом поиске/фильтрации
            visibleCount = 6;
            
            // Отображаем документы
            showDocuments();
        }

        // Функция для отображения видимых документов
        function showDocuments() {
            const container = document.getElementById("documentsContainer");
            container.innerHTML = "";

            // Определяем сколько документов показать (не больше общего количества)
            const docsToShow = Math.min(visibleCount, filteredDocuments.length);
            
            for (let i = 0; i < docsToShow; i++) {
                const doc = filteredDocuments[i];
                
                let badgeClass, badgeText;
                switch(doc.type) {
                    case "gost":
                        badgeClass = "badge-gost";
                        badgeText = "Технические сбои и ИТ-проблемы";
                        break;
                    case "internal":
                        badgeClass = "badge-internal";
                        badgeText = "Безопасность и производственные инциденты";
                        break;
                    case "templates":
                        badgeClass = "badge-template";
                        badgeText = "Шаблон";
                        break;
                    default:
                        badgeClass = "bg-secondary";
                        badgeText = "Документ";
                }

                const docElement = `
                    <div class="col-md-6 col-lg-4">
                        <div class="document-card card h-100">
                            <div class="card-body">
                                <span class="badge ${badgeClass} mb-2">${badgeText}</span>
                                <h5 class="card-title">${doc.title}</h5>
                                <p class="document-description">${doc.description}</p>
                                <div class="document-actions">
                                    <a href="${doc.viewLink}" class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-eye me-1"></i> Просмотр
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
                container.innerHTML += docElement;
            }

            // Показываем или скрываем кнопку "Показать еще"
            if (filteredDocuments.length > visibleCount) {
                document.getElementById('loadMoreContainer').style.display = 'block';
            } else {
                document.getElementById('loadMoreContainer').style.display = 'none';
            }
        }

        // Функция для загрузки дополнительных документов
        function loadMoreDocuments() {
            visibleCount += 6;
            showDocuments();
        }

        // Инициализация при загрузке страницы
        document.addEventListener("DOMContentLoaded", () => {
            renderDocuments();

            // Фильтрация по кнопкам категорий
            document.querySelectorAll(".category-btn").forEach(btn => {
                btn.addEventListener("click", function() {
                    document.querySelectorAll(".category-btn").forEach(b => b.classList.remove("active"));
                    this.classList.add("active");
                    renderDocuments(this.dataset.filter, document.getElementById("searchInput").value);
                });
            });

            // Поиск при вводе текста
            document.getElementById("searchInput").addEventListener("input", function() {
                const activeFilter = document.querySelector(".category-btn.active").dataset.filter;
                renderDocuments(activeFilter, this.value);
            });

            // Поиск по кнопке
            document.getElementById("searchButton").addEventListener("click", function() {
                const activeFilter = document.querySelector(".category-btn.active").dataset.filter;
                renderDocuments(activeFilter, document.getElementById("searchInput").value);
            });

            // Обработка нажатия Enter в поле поиска
            document.getElementById("searchInput").addEventListener("keypress", function(e) {
                if (e.key === "Enter") {
                    const activeFilter = document.querySelector(".category-btn.active").dataset.filter;
                    renderDocuments(activeFilter, this.value);
                }
            });

            // Обработка клика на кнопку "Показать еще"
            document.getElementById("loadMoreBtn").addEventListener("click", loadMoreDocuments);
        });
    </script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
</body>
</html>