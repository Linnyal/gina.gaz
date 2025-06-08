<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сертификат соответствия ISO 45001:2018</title>
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
        Настоящим удостоверяется, что система менеджмента в области профессиональной безопасности и охраны труда
    </div>
    
    <div class="company-name">Публичного акционерного общества «Газпром»</div>
    <div class="company-address">
        ул. Наметкина, д. 16, Москва, ГСП-7, 117997
    </div>
    
    <div class="main-text">
        успешно прошла аудит и соответствует требованиям стандарта
    </div>
    
    <div class="standard">ISO 45001:2018</div>
    
    <div class="scope-title">Область сертификации:</div>
    <div class="scope-list">
        <ul>
            <li>Добыча природного газа, газового конденсата и нефти</li>
            <li>Подготовка и переработка углеводородного сырья</li>
            <li>Транспортировка газа, газового конденсата и нефти</li>
            <li>Хранение углеводородов</li>
            <li>Распределение природного газа</li>
            <li>Эксплуатация объектов газовой инфраструктуры</li>
            <li>Строительство и обслуживание производственных объектов</li>
        </ul>
    </div>
    
    <div class="certificate-number">
        Регистрационный номер: 22.1845.035<br>
        Дата выдачи: 10 декабря 2022 г.<br>
        Срок действия: до 10 декабря 2025 г.
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
        Сертификат выдан ООО "Международный центр сертификации" (аккредитация № IA-001)
    </div>
</div>

<!-- Пояснительная страница о ISO 45001:2018 -->
<div class="document-page info-page">

    <div class="info-title">О СТАНДАРТЕ ISO 45001:2018</div>
    
    <div class="section-title">Что такое ISO 45001:2018?</div>
    
    <div class="text-block">
        ISO 45001:2018 — международный стандарт систем менеджмента профессиональной безопасности 
        и охраны труда (СМПБиОТ). Это первый в мире стандарт ISO по охране труда, который заменяет 
        OHSAS 18001. Стандарт устанавливает требования к системе управления охраной труда, 
        направленные на предотвращение производственного травматизма и профессиональных заболеваний, 
        а также на обеспечение безопасных условий труда.
    </div>
    
    <div class="section-title">Для чего нужен этот стандарт?</div>
    
    <div class="text-block">
        Сертификация по ISO 45001:2018 подтверждает, что компания:
    </div>
    
    <ul class="benefits-list">
        <li>Имеет эффективную систему управления профессиональными рисками</li>
        <li>Обеспечивает безопасные условия труда для всех работников</li>
        <li>Системно снижает уровень производственного травматизма</li>
        <li>Соответствует международным требованиям в области охраны труда</li>
        <li>Постоянно улучшает показатели безопасности труда</li>
    </ul>
    
    <div class="section-title">Преимущества внедрения стандарта</div>
    
    <div class="text-block">
        Для ПАО «Газпром» сертификация системы менеджмента профессиональной безопасности и охраны труда означает:
    </div>
    
    <ul class="benefits-list">
        <li><strong>Снижение производственного травматизма</strong> - системный подход к выявлению и устранению опасностей</li>
        <li><strong>Повышение культуры безопасности</strong> - вовлечение всех сотрудников в процесс обеспечения безопасных условий труда</li>
        <li><strong>Соответствие законодательству</strong> - выполнение требований трудового законодательства и нормативов по охране труда</li>
        <li><strong>Снижение операционных рисков</strong> - предупреждение аварий и инцидентов на производстве</li>
        <li><strong>Улучшение репутации</strong> - демонстрация заботы о здоровье и безопасности персонала</li>
        <li><strong>Экономия затрат</strong> - сокращение расходов на компенсации, простои и штрафы</li>
        <li><strong>Конкурентное преимущество</strong> - соответствие требованиям международных партнеров и инвесторов</li>
    </ul>
    
    <div class="section-title">Область применения в ПАО «Газпром»</div>
    
    <div class="text-block">
        В ПАО «Газпром» стандарт ISO 45001:2018 применяется ко всем видам деятельности, 
        связанным с добычей, транспортировкой, переработкой и хранением углеводородов, 
        а также к строительству и обслуживанию производственных объектов.
    </div>
    
    <div class="text-block">
        Система охватывает все подразделения компании и направлена на создание безопасных 
        условий труда для более чем 400 000 сотрудников Группы Газпром.
    </div>
    
    <div class="footer">
        ПАО «Газпром» — лидер в области промышленной безопасности и охраны труда в энергетическом секторе
    </div>
</div>

</body>
</html>