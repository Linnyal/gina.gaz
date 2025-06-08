<?php
$page_title = "Мобильные устройства в корпоративной сети";
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
    
    /* Стили для блоков */
    .device-types {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        margin: 20px 0;
    }
    
    .device-card {
        flex: 1 1 300px;
        background-color: #f8f9fa;
        padding: 15px;
        border-radius: 8px;
        border-left: 4px solid #3182ce;
    }
    
    /* Стили для таблиц */
    .mdm-comparison {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
    }
    
    .mdm-comparison th, 
    .mdm-comparison td {
        border: 1px solid #ddd;
        padding: 12px;
        text-align: left;
    }
    
    .mdm-comparison th {
        background-color: #f2f2f2;
    }
    
    /* Стили для важных заметок */
    .security-note {
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
        .device-types {
            flex-direction: column;
        }
        
        .mdm-comparison {
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
            <h2>Введение в управление мобильными устройствами</h2>
            <p>Интеграция мобильных устройств в корпоративную сеть требует особого подхода к безопасности и управлению. BYOD (Bring Your Own Device) и корпоративные устройства должны соответствовать политикам компании.</p>
            
            <div class="security-note">
                <h3>Важно!</h3>
                <p>Незащищенные мобильные устройства — один из основных векторов кибератак. По данным Verizon, более 40% утечек данных происходят через мобильные устройства.</p>
            </div>

            <h2>Типы мобильных устройств в корпоративной среде</h2>
            
            <div class="device-types">
                <div class="device-card">
                    <h3>1. Корпоративные устройства</h3>
                    <ul>
                        <li>Полностью управляемые компанией</li>
                        <li>Строгие политики безопасности</li>
                        <li>Установка только разрешенных приложений</li>
                    </ul>
                </div>
                
                <div class="device-card">
                    <h3>2. BYOD (Bring Your Own Device)</h3>
                    <ul>
                        <li>Личные устройства сотрудников</li>
                        <li>Разделение личных и рабочих данных</li>
                        <li>Ограниченный контроль</li>
                    </ul>
                </div>
                
                <div class="device-card">
                    <h3>3. COPE (Corporate Owned, Personally Enabled)</h3>
                    <ul>
                        <li>Компания владеет устройством</li>
                        <li>Разрешен личный контент</li>
                        <li>Баланс контроля и гибкости</li>
                    </ul>
                </div>
            </div>

            <h2>Системы управления мобильными устройствами (MDM)</h2>
            
            <table class="mdm-comparison">
                <tr>
                    <th>Решение</th>
                    <th>Платформы</th>
                    <th>Ключевые функции</th>
                    <th>Ценовая категория</th>
                </tr>
                <tr>
                    <td>Microsoft Intune</td>
                    <td>iOS, Android, Windows</td>
                    <td>Интеграция с Azure AD, условный доступ</td>
                    <td>$$$</td>
                </tr>
                <tr>
                    <td>VMware Workspace ONE</td>
                    <td>iOS, Android, Windows, macOS</td>
                    <td>Управление приложениями, безопасность</td>
                    <td>$$$$</td>
                </tr>
                <tr>
                    <td>MobileIron</td>
                    <td>iOS, Android</td>
                    <td>Защита данных, VPN, шифрование</td>
                    <td>$$$</td>
                </tr>
                <tr>
                    <td>Google Endpoint Management</td>
                    <td>Android, Chrome OS</td>
                    <td>Интеграция с G Suite, простота</td>
                    <td>$$</td>
                </tr>
            </table>

            <h2>Политики безопасности для мобильных устройств</h2>
            
            <h3>1. Базовые меры защиты</h3>
            <ul>
                <li>Обязательная блокировка экрана (PIN, биометрия)</li>
                <li>Шифрование данных на устройстве</li>
                <li>Регулярные обновления ОС</li>
                <li>Антивирусная защита</li>
            </ul>
            
            <h3>2. Управление приложениями</h3>
            <ul>
                <li>White list разрешенных приложений</li>
                <li>Запрет root/jailbreak</li>
                <li>Контейнеризация рабочих данных</li>
                <li>MAM (Mobile Application Management)</li>
            </ul>
            
            <h3>3. Сетевые политики</h3>
            <ul>
                <li>Обязательное использование VPN</li>
                <li>Фильтрация трафика</li>
                <li>Сегментация сети</li>
                <li>Контроль доступа (NAC)</li>
            </ul>

            <h2>Практическая реализация</h2>
            
            <h3>1. Настройка Microsoft Intune</h3>
            <ol>
                <li>Регистрация устройств в Azure AD</li>
                <li>Создание профилей соответствия</li>
                <li>Настройка политик защиты приложений</li>
                <li>Включение условного доступа</li>
            </ol>
            
            <h3>2. Развертывание корпоративного VPN</h3>
            <ul>
                <li>Выбор решения (Cisco AnyConnect, OpenVPN)</li>
                <li>Настройка аутентификации (RADIUS, сертификаты)</li>
                <li>Политика автоматического подключения</li>
                <li>Мониторинг сессий</li>
            </ul>
            
            <h3>3. Внедрение MAM-решения</h3>
            <ul>
                <li>Разделение личных и рабочих данных</li>
                <li>Шифрование корпоративной информации</li>
                <li>Удаленный wipe рабочих данных</li>
                <li>Контроль обмена данными между приложениями</li>
            </ul>

            <div class="test-container">
                <h2>Проверьте свои знания</h2>
                <form id="mobileTest">
                    
                    <!-- Вопрос 1 -->
                    <div class="question">
                        <p><strong>1. Какая модель предполагает полный контроль компании над устройством?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q1" id="q1a" value="a">
                                <label for="q1a">Корпоративные устройства</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1b" value="b">
                                <label for="q1b">BYOD</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1c" value="c">
                                <label for="q1c">COPE</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q1" value="a">
                    </div>
                    
                    <!-- Вопрос 2 -->
                    <div class="question">
                        <p><strong>2. Какие системы относятся к MDM? (Выберите все верные варианты)</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="checkbox" name="q2" id="q2a" value="a">
                                <label for="q2a">Microsoft Intune</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q2" id="q2b" value="b">
                                <label for="q2b">VMware Workspace ONE</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q2" id="q2c" value="c">
                                <label for="q2c">Cisco AnyConnect</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q2" id="q2d" value="d">
                                <label for="q2d">MobileIron</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q2" value="a,b,d">
                    </div>
                    
                    <!-- Вопрос 3 -->
                    <div class="question">
                        <p><strong>3. Какие основные меры безопасности необходимы для мобильных устройств?</strong></p>
                        <textarea id="q3_answer" class="text-answer" rows="4" placeholder="Перечислите основные меры"></textarea>
                        <input type="hidden" id="correct_q3_keywords" value="блокировка,шифрование,обновления,vpn,антивирус">
                    </div>
                    
                    <!-- Вопрос 4 -->
                    <div class="question">
                        <p><strong>4. Что означает аббревиатура BYOD?</strong></p>
                        <input type="text" id="q4_answer" class="text-answer" placeholder="Введите расшифровку">
                        <input type="hidden" id="correct_q4_keywords" value="bring,device,own">
                    </div>
                    
                    <!-- Вопрос 5 -->
                    <div class="question">
                        <p><strong>5. Какой порт обычно используется для VPN подключений?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q5" id="q5a" value="a">
                                <label for="q5a">1194</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q5" id="q5b" value="b">
                                <label for="q5b">443</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q5" id="q5c" value="c">
                                <label for="q5c">3389</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q5" id="q5d" value="d">
                                <label for="q5d">21</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q5" value="b">
                    </div>
                    
                    <button type="button" onclick="checkMobileTest()">Проверить ответы</button>
                </form>
                
                <div id="testResults" class="results"></div>
            </div>
        </div>
    </div>
</article>

<script>
function checkMobileTest() {
    let score = 0;
    let resultsHTML = "<h3>Результаты теста:</h3><ol>";
    const keywordThreshold = 3;
    
    // Вопрос 1
    const q1Selected = document.querySelector('input[name="q1"]:checked');
    if (q1Selected && q1Selected.value === document.getElementById('correct_q1').value) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 1: Верно! Корпоративные устройства полностью контролируются компанией.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 1: Неверно. Корпоративные устройства полностью контролируются компанией.</li>`;
    }
    
    // Вопрос 2
    const q2Selected = Array.from(document.querySelectorAll('input[name="q2"]:checked')).map(el => el.value).sort().join(',');
    const q2Correct = document.getElementById('correct_q2').value.split(',').sort().join(',');
    if (q2Selected === q2Correct) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 2: Правильно! Intune, Workspace ONE и MobileIron являются MDM-решениями.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 2: Неполный ответ. Intune, Workspace ONE и MobileIron являются MDM-решениями.</li>`;
    }
    
    // Вопрос 3
    const q3Answer = document.getElementById('q3_answer').value.toLowerCase();
    const q3Keywords = document.getElementById('correct_q3_keywords').value.split(',');
    let foundKeywords = q3Keywords.filter(word => q3Answer.includes(word));
    
    if (foundKeywords.length >= keywordThreshold) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 3: Принято! Основные меры: блокировка экрана, шифрование, VPN.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 3: Ответ недостаточно полный. Основные меры: блокировка экрана, шифрование, VPN.</li>`;
    }
    
    // Вопрос 4
    const q4Answer = document.getElementById('q4_answer').value.toLowerCase();
    const q4Keywords = document.getElementById('correct_q4_keywords').value.split(',');
    foundKeywords = q4Keywords.filter(word => q4Answer.includes(word));
    
    if (foundKeywords.length >= 2) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 4: Верно! BYOD = Bring Your Own Device.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 4: Неверно. BYOD = Bring Your Own Device.</li>`;
    }
    
    // Вопрос 5
    const q5Selected = document.querySelector('input[name="q5"]:checked');
    if (q5Selected && q5Selected.value === document.getElementById('correct_q5').value) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 5: Абсолютно верно! VPN часто использует порт 443 (HTTPS).</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 5: Неверно. VPN часто использует порт 443 (HTTPS).</li>`;
    }
    
    resultsHTML += `</ol><p><strong>Итоговый результат: ${score} из 5 (${Math.round(score/5*100)}%)</strong></p>`;
    document.getElementById('testResults').innerHTML = resultsHTML;
    document.getElementById('testResults').style.display = 'block';
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>