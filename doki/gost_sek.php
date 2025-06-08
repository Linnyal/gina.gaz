<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сертификат соответствия ISO 14001:2015</title>
    <style>
        body {
            background-color: #f5f5f5;
            font-family: 'Times New Roman', serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0;
            padding: 20px 0;
        }
        
        .document-page {
            width: 210mm;
            min-height: 297mm;
            background: white;
            padding: 20mm;
            margin-bottom: 20px;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
            position: relative;
            border: 1px solid #e0e0e0;
        }
        
        /* Стили для страницы сертификата */
        .certificate {
            text-align: center;
        }
        
        .header {
            font-size: 24pt;
            font-weight: bold;
            margin-bottom: 30px;
            text-transform: uppercase;
        }
        
        .main-text {
            font-size: 14pt;
            line-height: 1.8;
            margin-bottom: 30px;
        }
        
        .company-name {
            font-size: 18pt;
            font-weight: bold;
            margin: 25px 0;
        }
        
        .company-address {
            font-size: 12pt;
            margin-bottom: 30px;
            font-style: italic;
        }
        
        .standard {
            font-size: 16pt;
            font-weight: bold;
            margin: 40px 0;
            padding: 15px;
            border-top: 2px solid #000;
            border-bottom: 2px solid #000;
        }
        
        .certificate-number {
            font-size: 12pt;
            margin-top: 40px;
        }
        
        .scope-title {
            font-size: 14pt;
            font-weight: bold;
            margin: 30px 0 15px 0;
            text-align: left;
        }
        
        .scope-list {
            text-align: left;
            font-size: 12pt;
            line-height: 1.6;
            margin-left: 20px;
        }
        
        .footer {
            position: absolute;
            bottom: 30px;
            left: 0;
            right: 0;
            font-size: 10pt;
        }
        
        .signature {
            margin-top: 50px;
            display: flex;
            justify-content: space-around;
        }
        
        .signature-line {
            width: 200px;
            border-bottom: 1px solid #000;
            margin: 0 auto;
        }
        
        /* Стили для пояснительной страницы */
        .info-page {
            text-align: left;
        }
        
        .info-title {
            font-size: 20pt;
            font-weight: bold;
            text-align: center;
            margin-bottom: 30px;
        }
        
        .section-title {
            font-size: 16pt;
            font-weight: bold;
            margin: 25px 0 15px 0;
            color: #006400;
        }
        
        .text-block {
            font-size: 12pt;
            line-height: 1.6;
            margin-bottom: 15px;
            text-align: justify;
        }
        
        .benefits-list {
            margin-left: 20px;
        }
        
        .benefits-list li {
            margin-bottom: 10px;
        }
        
        .logo {
            text-align: center;
            margin: 30px 0;
        }
        
        .history-item {
            margin-bottom: 15px;
            padding-left: 20px;
            position: relative;
        }
        
        .history-item:before {
            content: "•";
            position: absolute;
            left: 0;
            color: #006400;
            font-weight: bold;
        }
        
        @media print {
            body {
                background: none;
                padding: 0;
            }
            .document-page {
                box-shadow: none;
                margin: 0;
                page-break-after: always;
            }
            .document-page:last-child {
                page-break-after: auto;
            }
        }
    </style>
</head>
<body>

<!-- Страница сертификата -->
<div class="document-page certificate">
    <div class="header">сертификат соответствия</div>
    
    <div class="main-text">
        Настоящим удостоверяется, что система экологического менеджмента
    </div>
    
    <div class="company-name">Публичного акционерного общества «Газпром»</div>
    <div class="company-address">
        Лахтинский проспект, д. 2, корп. 3, стр. 1, Санкт-Петербург, 197229
    </div>
    
    <div class="main-text">
        успешно прошла аудит и соответствует требованиям стандарта
    </div>
    
    <div class="standard">ISO 14001:2015</div>
    
    <div class="scope-title">Область сертификации:</div>
    <div class="scope-list">
        <ul>
            <li>Управление дочерними обществами, осуществляющими добычу природного газа и газового конденсата</li>
            <li>Транспортировка и хранение углеводородного сырья</li>
            <li>Переработка газа и газового конденсата</li>
            <li>Геологоразведочные и геофизические работы</li>
            <li>Эксплуатация морских месторождений и береговой инфраструктуры</li>
            <li>Обеспечение экологической безопасности производственных процессов</li>
            <li>Управление экологическими аспектами инвестиционных проектов</li>
        </ul>
    </div>
    
    <div class="certificate-number">
        Регистрационный номер: 20.1809.026<br>
        Дата выдачи: 2 декабря 2022 г.<br>
        Срок действия: до 2 декабря 2025 г.<br>
        Система менеджмента сертифицирована с 2011 года
    </div>
    
    <div class="signature">
        <div>
            Руководитель органа по сертификации<br>
            <div class="signature-line"></div>
        </div>
        <div>
            Аудитор-эксперт<br>
            <div class="signature-line"></div>
        </div>
    </div>
    
    <div class="footer">
        Сертификат выдан ООО "Международный центр экологической сертификации" (аккредитация № EA-045)
    </div>
</div>

<!-- Пояснительная страница о ISO 14001:2015 -->
<div class="document-page info-page">
    
    <div class="info-title">О СТАНДАРТЕ ISO 14001:2015</div>
    
    <div class="section-title">Что такое ISO 14001:2015?</div>
    
    <div class="text-block">
        ISO 14001:2015 — международный стандарт систем экологического менеджмента (СЭМ), 
        разработанный Международной организацией по стандартизации (ISO). 
        Это ключевой стандарт в семействе ISO 14000, устанавливающий требования 
        к системе экологического менеджмента для эффективного управления экологическими аспектами, 
        выполнения обязательных требований и достижения экологических целей.
    </div>
    
    <div class="section-title">История сертификации ПАО «Газпром»</div>
    
    <div class="history-item">2011 г. — Первичная сертификация системы экологического менеджмента</div>
    <div class="history-item">2015 г. — Переход на обновленную версию стандарта ISO 14001:2015</div>
    <div class="history-item">2018 г. — Расширение области сертификации на новые виды деятельности</div>
    <div class="history-item">2022 г. — Успешный ресертификационный аудит с положительными заключениями</div>
    
    <div class="section-title">Для чего нужен этот стандарт?</div>
    
    <div class="text-block">
        Сертификация по ISO 14001:2015 подтверждает, что компания:
    </div>
    
    <ul class="benefits-list">
        <li>Идентифицирует и контролирует экологические аспекты своей деятельности</li>
        <li>Соблюдает природоохранное законодательство и нормативные требования</li>
        <li>Постоянно работает над снижением негативного воздействия на окружающую среду</li>
        <li>Имеет эффективную систему управления экологическими рисками</li>
        <li>Реализует принципы устойчивого развития</li>
    </ul>
    
    <div class="section-title">Преимущества для ПАО «Газпром»</div>
    
    <div class="text-block">
        Сертификация системы экологического менеджмента по ISO 14001:2015 обеспечивает:
    </div>
    
    <ul class="benefits-list">
        <li><strong>Снижение экологических рисков</strong> — системный подход к управлению воздействием на окружающую среду</li>
        <li><strong>Повышение эффективности</strong> — оптимизация использования ресурсов и снижение затрат</li>
        <li><strong>Соответствие законодательству</strong> — гарантия выполнения всех природоохранных требований</li>
        <li><strong>Улучшение репутации</strong> — демонстрация экологической ответственности перед акционерами и обществом</li>
        <li><strong>Конкурентные преимущества</strong> — соответствие требованиям международных партнеров и инвесторов</li>
        <li><strong>Развитие персонала</strong> — повышение экологической культуры сотрудников</li>
    </ul>
    
    <div class="section-title">Область применения в ПАО «Газпром»</div>
    
    <div class="text-block">
        В ПАО «Газпром» стандарт ISO 14001:2015 применяется ко всем видам деятельности Группы компаний, 
        включая управление дочерними обществами, осуществляющими:
    </div>
    
    <ul class="benefits-list">
        <li>Геологоразведку и добычу углеводородов (включая шельфовые проекты)</li>
        <li>Транспортировку газа по магистральным трубопроводам</li>
        <li>Подземное хранение газа</li>
        <li>Переработку газа и газового конденсата</li>
        <li>Строительство и эксплуатацию производственных объектов</li>
        <li>Реализацию инвестиционных проектов</li>
    </ul>
    
    <div class="text-block">
        Система охватывает более 300 производственных объектов компании в России и за рубежом.
    </div>
    
    <div class="footer">
        ПАО «Газпром» — лидер в области экологически ответственного ведения бизнеса в энергетическом секторе
    </div>
</div>

</body>
</html>