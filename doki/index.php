<?php 
$page_title = "Нормативные документы";
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
            background-color: #f8f9fa;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .content-wrapper {
            flex: 1;
        }
        .document-card {
            transition: transform 0.2s;
            border-left: 4px solid #007bff;
            margin-bottom: 25px;
            height: 100%;
        }
        .document-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .badge-gost {
            background-color: #28a745;
        }
        .badge-internal {
            background-color: #6c757d;
        }
        .badge-template {
            background-color: #6f42c1;
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
        footer {
            margin-top: auto;
        }
    </style>
</head>
<body>

        <!-- Основной контент -->
        <div class="container py-4">
            
            <h1 class="text-center mb-4"><?= $page_title ?></h1>
            
            <!-- Поиск и фильтры -->
            <div class="search-container">
                <div class="search-box input-group">
                    <input type="text" id="searchInput" class="form-control" placeholder="Поиск по документам...">
                    <button class="btn btn-primary" type="button" id="searchButton">
                        <i class="fas fa-search"></i> Найти
                    </button>
                </div>
                
                <div class="category-buttons">
                    <button class="btn btn-outline-secondary category-btn active" data-filter="all">Все документы</button>
                    <button class="btn btn-outline-secondary category-btn" data-filter="gost">Стандарты</button>
                    <button class="btn btn-outline-secondary category-btn" data-filter="internal">Внутренние</button>
                    <button class="btn btn-outline-secondary category-btn" data-filter="templates">Шаблоны</button>
                </div>
            </div>
            
            <div id="no-results" class="no-results">
                <i class="fas fa-search fa-lg mb-2"></i>
                <h5>Документы не найдены</h5>
                <p class="mb-0">Попробуйте изменить поисковый запрос или выбрать другую категорию</p>
            </div>

            <!-- Список документов -->
            <div class="row document-grid" id="documentsContainer">
                <!-- Документы будут добавлены через JavaScript -->
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
                id: 5,
                title: "Шаблон заявления о переводе на другую должность",
                type: "templates",
                viewLink: "/doki/dok_perevo_d.php",
                description: "Форма для заявления перевода другую должность"
            },
            {
                id: 8,
                title: "Кодекс корпоративного управления ПАО «Газпром»",
                type: "internal",
                viewLink: "/doki/kodeks_gz.php",
                description: "Кодекс корпоративного управления"
            },
            {
                id: 7,
                title: "Шаблон журнала учета инструктажей по технике безопасности",
                type: "templates",
                viewLink: "/doki/tb_jurnal.php",
                description: "Форма для инструктажей по технике безопасности"
            },
            {
                id: 1,
                title: "ГОСТ Р ИСО 14001–2016:",
                type: "gost",
                viewLink: "/doki/gost_ek.php",
                description: "Система экологического менеджмента"
            },
            {
                id: 6,
                title: "Шаблон заявления на изменение трудового договора",
                type: "templates",
                viewLink: "/doki/dogovor_ch.php",
                description: "Форма для заявления на изменение договора"
            },
            {
                id: 2,
                title: "ISO 45001:2018",
                type: "gost",
                viewLink: "/doki/gost_zdorov.php",
                description: "Системы менеджмента профессиональногоздоровья и безопасности. требования и руководство по применению"
            },
            {
                id: 3,
                title: "ISO 14001:2015 ",
                type: "gost",
                viewLink: "/doki/gost_sek.php",
                description: "Системы экологического менеджмента"
            },
            {
                id: 4,
                title: "Шаблон акта осмотра оборудования",
                type: "templates",
                viewLink: "/doki/osmotr_ob.php",
                description: "Форма для оформления результатов осмотра"
            },
            {
                id: 9,
                title: "Политика ПАО «Газпром» в области качества",
                type: "internal",
                viewLink: "/doki/polit_kach.php",
                description: "Политика качества",
            },
            {
                id: 10,
                title: "Экологическая политика ПАО «Газпром»",
                type: "internal",
                viewLink: "/doki/ekolog_p.php",
                description: "Экологическая политика",
            }
        ];

        // Функция для отображения документов
        function renderDocuments(filter = "all", searchQuery = "") {
            const container = document.getElementById("documentsContainer");
            container.innerHTML = "";

            const filteredDocs = documents.filter(doc => {
                const matchesFilter = filter === "all" || doc.type === filter;
                const matchesSearch = doc.title.toLowerCase().includes(searchQuery.toLowerCase()) || 
                                     doc.description.toLowerCase().includes(searchQuery.toLowerCase());
                return matchesFilter && matchesSearch;
            });

            if (filteredDocs.length === 0) {
                document.getElementById('no-results').style.display = 'block';
                return;
            } else {
                document.getElementById('no-results').style.display = 'none';
            }

            filteredDocs.forEach(doc => {
                let badgeClass, badgeText;
                switch(doc.type) {
                    case "gost":
                        badgeClass = "badge-gost";
                        badgeText = "ГОСТ";
                        break;
                    case "internal":
                        badgeClass = "badge-internal";
                        badgeText = "Внутренний";
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
            });
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
        });
    </script>
</body>
</html>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>