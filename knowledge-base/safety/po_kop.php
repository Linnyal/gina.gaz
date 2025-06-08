<?php 
$page_title = "Лицензирование программного обеспечения";
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
    /* Основные стили */
    body {
        background-color: #ffffff !important;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        line-height: 1.6;
        color: #333;
    }
    
    .centered-content {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        text-align: left;
        background-color: #ffffff;
    }
    
    .kb-article h1 {
        color: #000000;
        border-bottom: 2px solid #3498db;
        padding-bottom: 10px;
        margin-top: 0;
    }
    
    h2 {
        color: #3498db;
        margin-top: 30px;
    }
    
    h3 {
        color: #000000;
        margin-top: 25px;
    }
    
    .meta {
        color: #666;
        font-size: 0.9rem;
        margin-bottom: 20px;
        display: flex;
        gap: 15px;
    }
    
    /* Стили для типов лицензий */
    .license-types {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        margin: 20px 0;
    }
    
    .license-card {
        flex: 1 1 300px;
        background-color: #f8f9fa;
        padding: 15px;
        border-radius: 8px;
        border-left: 4px solid #3182ce;
    }
    
    /* Стили для таблиц сравнения */
    .license-comparison {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
    }
    
    .license-comparison th, 
    .license-comparison td {
        border: 1px solid #ddd;
        padding: 12px;
        text-align: left;
    }
    
    .license-comparison th {
        background-color: #f2f2f2;
    }
    
    /* Стили для важных заметок */
    .compliance-alert {
        padding: 15px;
        margin: 20px 0;
        border-left: 4px solid #e53e3e;
        background-color: #fff5f5;
        border-radius: 4px;
    }
    
    /* Стили для теста */
    .test-container {
        margin: 40px 0;
        padding: 25px;
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        background-color: #f8fafc;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }
    
    .question {
        margin-bottom: 25px;
        padding-bottom: 20px;
        border-bottom: 1px dashed #e2e8f0;
    }
    
    .options {
        margin-left: 5px;
    }
    
    .option {
        margin: 12px 0;
        position: relative;
        display: flex;
        align-items: center;
    }
    
    .option input[type="radio"],
    .option input[type="checkbox"] {
        appearance: none;
        width: 18px;
        height: 18px;
        border: 2px solid #a0aec0;
        border-radius: 50%;
        margin-right: 12px;
        cursor: pointer;
        transition: all 0.2s ease;
    }
    
    .option input[type="checkbox"] {
        border-radius: 4px;
    }
    
    .option input[type="radio"]:checked,
    .option input[type="checkbox"]:checked {
        border-color: #3182ce;
        background-color: #3182ce;
    }
    
    .option input[type="radio"]:checked::after,
    .option input[type="checkbox"]:checked::after {
        content: '';
        position: absolute;
        width: 8px;
        height: 8px;
        background: white;
        border-radius: 50%;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    
    .option label {
        cursor: pointer;
        color: #000000;
    }
    
    .text-answer {
        width: 100%;
        padding: 12px 15px;
        margin-top: 8px;
        border: 1px solid #cbd5e0;
        border-radius: 6px;
    }
    
    button[type="button"] {
        padding: 12px 24px;
        background-color: #3182ce;
        color: white;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        margin: 25px auto 0;
        display: block;
    }
    
    .results {
        margin-top: 30px;
        padding: 20px;
        border-radius: 8px;
        background-color: #ffffff;
        border: 1px solid #e2e8f0;
        display: none;
    }
    
    .correct {
        color: #38a169;
    }
    
    .incorrect {
        color: #e53e3e;
    }
    
    @media (max-width: 768px) {
        .license-types {
            flex-direction: column;
        }
        
        .license-comparison {
            font-size: 0.85rem;
        }
    }
</style>
</head>
<body>
<article class="kb-article">
    <div class="centered-content">
        <h1><?= $page_title ?></h1>
        <div class="meta">
            <span>Категория: <a href="/knowledge-base/sysadmin/">Системное администрирование</a></span>
            <span>Обновлено: <?= date('d.m.Y') ?></span>
        </div>

        <div class="content">
            <h2>Введение в лицензирование ПО</h2>
            <p>Правильное управление лицензиями программного обеспечения — критически важная задача для системного администратора. Нарушения лицензионных соглашений могут привести к значительным штрафам и репутационным потерям компании.</p>
            
            <div class="compliance-alert">
                <h3>Важно!</h3>
                <p>Несоблюдение лицензионных соглашений может повлечь штрафы до 5 млн рублей по статье 146 УК РФ и до 10 млн рублей по статье 7.12 КоАП РФ.</p>
            </div>

            <h2>Основные типы лицензий</h2>
            
            <div class="license-types">
                <div class="license-card">
                    <h3>1. Проприетарные лицензии</h3>
                    <ul>
                        <li>Perpetual (бессрочные)</li>
                        <li>Подписка (Subscription)</li>
                        <li>Однопользовательские</li>
                        <li>Корпоративные</li>
                    </ul>
                </div>
                
                <div class="license-card">
                    <h3>2. Открытые лицензии</h3>
                    <ul>
                        <li>GPL</li>
                        <li>MIT</li>
                        <li>Apache</li>
                        <li>BSD</li>
                    </ul>
                </div>
                
                <div class="license-card">
                    <h3>3. Облачные лицензии</h3>
                    <ul>
                        <li>SaaS (по пользователям)</li>
                        <li>PaaS (по ресурсам)</li>
                        <li>IaaS (по экземплярам)</li>
                    </ul>
                </div>
            </div>

            <h2>Популярные модели лицензирования</h2>
            
            <table class="license-comparison">
                <tr>
                    <th>Модель</th>
                    <th>Описание</th>
                    <th>Примеры ПО</th>
                </tr>
                <tr>
                    <td>Per User</td>
                    <td>Лицензия на каждого пользователя</td>
                    <td>Microsoft Office 365, Adobe Creative Cloud</td>
                </tr>
                <tr>
                    <td>Per Device</td>
                    <td>Лицензия на каждое устройство</td>
                    <td>Windows OS, антивирусы</td>
                </tr>
                <tr>
                    <td>Concurrent</td>
                    <td>Одновременные подключения</td>
                    <td>Citrix, терминальные лицензии</td>
                </tr>
                <tr>
                    <td>Core-based</td>
                    <td>По количеству ядер CPU</td>
                    <td>SQL Server, VMware</td>
                </tr>
                <tr>
                    <td>Volume Licensing</td>
                    <td>Корпоративные соглашения</td>
                    <td>Microsoft VL, Oracle ELA</td>
                </tr>
            </table>

            <h2>Управление лицензиями в организации</h2>
            
            <h3>1. Инвентаризация ПО</h3>
            <p>Используйте специализированные инструменты:</p>
            <ul>
                <li>Microsoft SCCM</li>
                <li>Lansweeper</li>
                <li>GLPI</li>
                <li>Open-AudIT</li>
            </ul>
            
            <h3>2. Контроль соответствия</h3>
            <p>Методы поддержания лицензионной чистоты:</p>
            <ul>
                <li>Регулярные аудиты</li>
                <li>Централизованное развертывание</li>
                <li>Политики использования ПО</li>
                <li>Документирование лицензий</li>
            </ul>
            
            <h3>3. Оптимизация затрат</h3>
            <p>Как снизить расходы на лицензии:</p>
            <ul>
                <li>Использование Volume Licensing</li>
                <li>Переход на подписки</li>
                <li>Консолидация серверного ПО</li>
                <li>Внедрение открытого ПО</li>
            </ul>

            <h2>Особенности лицензирования популярного ПО</h2>
            
            <h3>Microsoft</h3>
            <ul>
                <li>Windows: Per Device или Per User</li>
                <li>Office: Подписка или бессрочные</li>
                <li>Server: Core-based + CAL</li>
            </ul>
            
            <h3>Oracle</h3>
            <ul>
                <li>Сложные метрики (Processor, Named User+)</li>
                <li>Обязательные техподдержка и обновления</li>
                <li>Агрессивный аудит лицензий</li>
            </ul>
            
            <h3>VMware</h3>
            <ul>
                <li>Лицензирование по ядрам CPU</li>
                <li>vSphere Editions (Standard, Enterprise)</li>
                <li>Дополнительные лицензии для vSAN, NSX</li>
            </ul>

            <div class="test-container">
                <h2>Проверьте свои знания</h2>
                <form id="licenseTest">
                    
                    <!-- Вопрос 1 -->
                    <div class="question">
                        <p><strong>1. Какая модель лицензирования используется для Microsoft Windows?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q1" id="q1a" value="a">
                                <label for="q1a">Per Device</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1b" value="b">
                                <label for="q1b">Per User</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1c" value="c">
                                <label for="q1c">Concurrent</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1d" value="d">
                                <label for="q1d">Core-based</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q1" value="a">
                    </div>
                    
                    <!-- Вопрос 2 -->
                    <div class="question">
                        <p><strong>2. Какие из перечисленных лицензий являются открытыми? (Выберите все верные варианты)</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="checkbox" name="q2" id="q2a" value="a">
                                <label for="q2a">GPL</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q2" id="q2b" value="b">
                                <label for="q2b">MIT</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q2" id="q2c" value="c">
                                <label for="q2c">Microsoft EULA</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q2" id="q2d" value="d">
                                <label for="q2d">Apache</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q2" value="a,b,d">
                    </div>
                    
                    <!-- Вопрос 3 -->
                    <div class="question">
                        <p><strong>3. Какой инструмент можно использовать для инвентаризации ПО?</strong></p>
                        <input type="text" id="q3_answer" class="text-answer" placeholder="Введите название инструмента">
                        <input type="hidden" id="correct_q3_keywords" value="sccm,lansweeper,glpi,open-audit">
                    </div>
                    
                    <!-- Вопрос 4 -->
                    <div class="question">
                        <p><strong>4. Какие основные риски несет несоблюдение лицензионных соглашений?</strong></p>
                        <textarea id="q4_answer" class="text-answer" rows="4" placeholder="Опишите возможные последствия"></textarea>
                        <input type="hidden" id="correct_q4_keywords" value="штраф,аудит,репутация,уголовная">
                    </div>
                    
                    <!-- Вопрос 5 -->
                    <div class="question">
                        <p><strong>5. Как лицензируется Oracle Database?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q5" id="q5a" value="a">
                                <label for="q5a">По количеству ядер процессора</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q5" id="q5b" value="b">
                                <label for="q5b">По количеству пользователей</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q5" id="q5c" value="c">
                                <label for="q5c">По объему хранимых данных</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q5" id="q5d" value="d">
                                <label for="q5d">По времени использования</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q5" value="a">
                    </div>
                    
                    <button type="button" onclick="checkLicenseTest()">Проверить ответы</button>
                </form>
                
                <div id="testResults" class="results"></div>
            </div>
        </div>
    </div>
</article>

<script>
function checkLicenseTest() {
    let score = 0;
    let resultsHTML = "<h3>Результаты теста:</h3><ol>";
    const keywordThreshold = 2;
    
    // Вопрос 1
    const q1Selected = document.querySelector('input[name="q1"]:checked');
    if (q1Selected && q1Selected.value === document.getElementById('correct_q1').value) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 1: Верно! Windows использует лицензирование Per Device.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 1: Неверно. Windows использует лицензирование Per Device.</li>`;
    }
    
    // Вопрос 2
    const q2Selected = Array.from(document.querySelectorAll('input[name="q2"]:checked')).map(el => el.value).sort().join(',');
    const q2Correct = document.getElementById('correct_q2').value.split(',').sort().join(',');
    if (q2Selected === q2Correct) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 2: Правильно! GPL, MIT и Apache - открытые лицензии.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 2: Неполный ответ. GPL, MIT и Apache - открытые лицензии.</li>`;
    }
    
    // Вопрос 3
    const q3Answer = document.getElementById('q3_answer').value.toLowerCase();
    const q3Keywords = document.getElementById('correct_q3_keywords').value.split(',');
    let foundKeywords = q3Keywords.filter(word => q3Answer.includes(word));
    
    if (foundKeywords.length >= 1) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 3: Принято! Примеры инструментов: SCCM, Lansweeper, GLPI.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 3: Неверно. Примеры инструментов: SCCM, Lansweeper, GLPI.</li>`;
    }
    
    // Вопрос 4
    const q4Answer = document.getElementById('q4_answer').value.toLowerCase();
    const q4Keywords = document.getElementById('correct_q4_keywords').value.split(',');
    foundKeywords = q4Keywords.filter(word => q4Answer.includes(word));
    
    if (foundKeywords.length >= keywordThreshold) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 4: Принято! Основные риски: штрафы, репутационные потери.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 4: Ответ недостаточно полный. Основные риски: штрафы, репутационные потери.</li>`;
    }
    
    // Вопрос 5
    const q5Selected = document.querySelector('input[name="q5"]:checked');
    if (q5Selected && q5Selected.value === document.getElementById('correct_q5').value) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 5: Абсолютно верно! Oracle лицензируется по ядрам процессора.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 5: Неверно. Oracle лицензируется по ядрам процессора.</li>`;
    }
    
    resultsHTML += `</ol><p><strong>Итоговый результат: ${score} из 5 (${Math.round(score/5*100)}%)</strong></p>`;
    document.getElementById('testResults').innerHTML = resultsHTML;
    document.getElementById('testResults').style.display = 'block';
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>