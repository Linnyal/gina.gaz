<?php
$page_title = "Wi-Fi: проектирование и безопасность";
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
    body {
        background-color: #ffffff !important;
    }
    
    .centered-content {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        text-align: left;
        background-color: #ffffff;
    }
    
    .test-container {
        margin: 40px 0;
        padding: 25px;
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        background-color: #f8fafc;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }
    
    h2 {
        color: #3498db;
        margin-top: 30px;
    }
    
    .question {
        margin-bottom: 25px;
        padding-bottom: 20px;
        border-bottom: 1px dashed #e2e8f0;
    }
    
    .question:last-child {
        border-bottom: none;
    }
    
    .question p {
        font-weight: 600;
        color: #000000;
        margin-bottom: 15px;
        font-size: 1.1rem;
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
    
    .option input[type="radio"] {
        appearance: none;
        width: 18px;
        height: 18px;
        border: 2px solid #a0aec0;
        border-radius: 50%;
        margin-right: 12px;
        cursor: pointer;
        transition: all 0.2s ease;
    }
    
    .option input[type="radio"]:checked {
        border-color: #3182ce;
        background-color: #3182ce;
    }
    
    .option input[type="radio"]:checked::after {
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
        transition: color 0.2s ease;
    }
    
    .text-answer {
        width: 100%;
        padding: 12px 15px;
        margin-top: 8px;
        border: 1px solid #cbd5e0;
        border-radius: 6px;
        transition: all 0.3s ease;
        color: #000000;
    }
    
    .text-answer:focus {
        border-color: #3182ce;
        box-shadow: 0 0 0 3px rgba(49, 130, 206, 0.2);
    }
    
    button[type="button"] {
        padding: 12px 24px;
        background-color: #3182ce;
        color: white;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        font-weight: 500;
        transition: all 0.3s ease;
        display: block;
        margin: 25px auto 0;
    }
    
    button[type="button"]:hover {
        background-color: #2b6cb0;
        transform: translateY(-1px);
    }
    
    .results {
        margin-top: 30px;
        padding: 20px;
        border-radius: 8px;
        background-color: #ffffff;
        border: 1px solid #e2e8f0;
        display: none;
        color: #000000;
    }
    
    .correct {
        color: #38a169;
    }
    
    .incorrect {
        color: #e53e3e;
    }
    
    .notice {
        padding: 15px;
        margin: 20px 0;
        border-left: 4px solid;
        border-radius: 4px;
    }
    
    .notice.info {
        background-color: #ebf8ff;
        border-color: #3182ce;
    }
    
    .notice.warning {
        background-color: #fff5f5;
        border-color: #e53e3e;
    }
    
    .notice.success {
        background-color: #f0fff4;
        border-color: #38a169;
    }
    
    @media (max-width: 768px) {
        .test-container {
            padding: 15px;
        }
    }
    
    .kb-article h1 {
        color: #000000;
        border-bottom: 2px solid #3498db;
        padding-bottom: 10px;
    }
    
    .kb-article h3 {
        color: #000000;
    }
    
    .meta {
        color: #666;
        font-size: 0.9rem;
        margin-bottom: 20px;
        display: flex;
        gap: 15px;
    }
    
    .meta a {
        color: #3182ce;
        text-decoration: none;
    }
    
    .meta a:hover {
        text-decoration: underline;
    }
    
    .command-block {
        background-color: #2d3748;
        color: #e2e8f0;
        padding: 15px;
        border-radius: 6px;
        font-family: monospace;
        margin: 15px 0;
        overflow-x: auto;
    }
    
    .command {
        color: #81e6d9;
    }
    
    .comment {
        color: #a0aec0;
        font-style: italic;
    }
    
    .config-example {
        background-color: #f8fafc;
        border-left: 4px solid #3182ce;
        padding: 15px;
        margin: 15px 0;
        border-radius: 0 4px 4px 0;
    }
    
    .troubleshooting-step {
        margin-bottom: 20px;
        padding: 15px;
        background-color: #f0fff4;
        border-left: 4px solid #38a169;
        border-radius: 0 4px 4px 0;
    }
    
    .os-tabs {
        display: flex;
        margin-bottom: 20px;
        border-bottom: 1px solid #e2e8f0;
    }
    
    .os-tab {
        padding: 10px 20px;
        cursor: pointer;
        border-bottom: 3px solid transparent;
    }
    
    .os-tab.active {
        border-bottom: 3px solid #3182ce;
        font-weight: 600;
    }
    
    .os-content {
        display: none;
    }
    
    .os-content.active {
        display: block;
    }
    
    .channel-table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
    }
    
    .channel-table th, .channel-table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }
    
    .channel-table th {
        background-color: #f2f2f2;
    }
    
    .channel-table tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    
    .channel-table .non-overlapping {
        background-color: #e6ffed;
    }
    
    .channel-table .overlapping {
        background-color: #ffebe9;
    }
</style>
</head>
<body>
<article class="kb-article">
    <div class="centered-content">
        <h1><?= $page_title ?></h1>
        <div class="meta">
            <span>Категория: <a href="/knowledge-base/networking/">Сетевые технологии</a></span>
            <span>Обновлено: <?= date('d.m.Y') ?></span>
        </div>

        <div class="content">
            <h2>Введение в беспроводные сети</h2>
            <p>Wi-Fi (Wireless Fidelity) - технология беспроводной локальной сети, основанная на стандартах IEEE 802.11. Проектирование и обеспечение безопасности Wi-Fi сетей - критически важные задачи для системного администратора.</p>

            <h2>Стандарты Wi-Fi и их характеристики</h2>
            <table class="channel-table">
                <tr>
                    <th>Стандарт</th>
                    <th>Год</th>
                    <th>Частота</th>
                    <th>Макс. скорость</th>
                    <th>Особенности</th>
                </tr>
                <tr>
                    <td>802.11a</td>
                    <td>1999</td>
                    <td>5 ГГц</td>
                    <td>54 Мбит/с</td>
                    <td>Малое распространение</td>
                </tr>
                <tr>
                    <td>802.11b</td>
                    <td>1999</td>
                    <td>2.4 ГГц</td>
                    <td>11 Мбит/с</td>
                    <td>Широкое распространение</td>
                </tr>
                <tr>
                    <td>802.11g</td>
                    <td>2003</td>
                    <td>2.4 ГГц</td>
                    <td>54 Мбит/с</td>
                    <td>Совместимость с 802.11b</td>
                </tr>
                <tr>
                    <td>802.11n</td>
                    <td>2009</td>
                    <td>2.4/5 ГГц</td>
                    <td>600 Мбит/с</td>
                    <td>MIMO, 40 МГц каналы</td>
                </tr>
                <tr>
                    <td>802.11ac</td>
                    <td>2013</td>
                    <td>5 ГГц</td>
                    <td>6.93 Гбит/с</td>
                    <td>MU-MIMO, 160 МГц каналы</td>
                </tr>
                <tr>
                    <td>802.11ax (Wi-Fi 6)</td>
                    <td>2019</td>
                    <td>2.4/5/6 ГГц</td>
                    <td>9.6 Гбит/с</td>
                    <td>OFDMA, TWT</td>
                </tr>
            </table>

            <h2>Проектирование Wi-Fi сети</h2>
            
            <div class="notice info">
                <h3>1. Анализ требований</h3>
                <p>Определите:</p>
                <ul>
                    <li>Количество пользователей</li>
                    <li>Типы устройств (старые/новые)</li>
                    <li>Требуемую пропускную способность</li>
                    <li>Зону покрытия</li>
                    <li>Критичные приложения (VoIP, видео и т.д.)</li>
                </ul>
            </div>
            
            <div class="notice info">
                <h3>2. Выбор частотного диапазона</h3>
                <p><strong>2.4 ГГц:</strong> лучшее проникновение через стены, но перегруженный диапазон</p>
                <p><strong>5 ГГц:</strong> больше каналов, меньше помех, но меньшая зона покрытия</p>
                <p><strong>6 ГГц (Wi-Fi 6E):</strong> новейший диапазон с максимальной пропускной способностью</p>
            </div>
            
            <div class="notice info">
                <h3>3. Планирование размещения точек доступа</h3>
                <p>Используйте инструменты для радиочастотного планирования (Ekahau, NetSpot, Ekahau Pro)</p>
                <p>Основные принципы:</p>
                <ul>
                    <li>Перекрытие зон покрытия 15-20%</li>
                    <li>Избегайте "мертвых зон"</li>
                    <li>Учитывайте материалы стен (бетон, металл ослабляют сигнал)</li>
                    <li>Оптимальная высота установки - 3-5 метров</li>
                </ul>
            </div>
            
            <h3>4. Выбор каналов в диапазоне 2.4 ГГц</h3>
            <table class="channel-table">
                <tr>
                    <th>Канал</th>
                    <th>Центральная частота</th>
                    <th>Перекрывающиеся каналы</th>
                    <th>Рекомендация</th>
                </tr>
                <tr class="non-overlapping">
                    <td>1</td>
                    <td>2.412 ГГц</td>
                    <td>2, 3, 4, 5</td>
                    <td>Использовать только 1, 6, 11</td>
                </tr>
                <tr class="overlapping">
                    <td>2</td>
                    <td>2.417 ГГц</td>
                    <td>1, 3, 4, 5, 6</td>
                    <td>Избегать</td>
                </tr>
                <tr class="overlapping">
                    <td>3</td>
                    <td>2.422 ГГц</td>
                    <td>1, 2, 4, 5, 6, 7</td>
                    <td>Избегать</td>
                </tr>
                <tr class="non-overlapping">
                    <td>6</td>
                    <td>2.437 ГГц</td>
                    <td>4, 5, 7, 8, 9, 10</td>
                    <td>Использовать только 1, 6, 11</td>
                </tr>
                <tr class="non-overlapping">
                    <td>11</td>
                    <td>2.462 ГГц</td>
                    <td>8, 9, 10, 12, 13</td>
                    <td>Использовать только 1, 6, 11</td>
                </tr>
            </table>
            
            <h3>5. Выбор каналов в диапазоне 5 ГГц</h3>
            <p>В диапазоне 5 ГГц доступно больше неперекрывающихся каналов (в зависимости от страны):</p>
            <div class="command-block">
                <span class="comment"># Пример неперекрывающихся каналов (20 МГц):</span><br>
                <span class="command">36, 40, 44, 48, 52, 56, 60, 64, 100, 104, 108, 112, 116, 120, 124, 128, 132, 136, 140, 144, 149, 153, 157, 161, 165</span>
            </div>
            
            <h2>Безопасность Wi-Fi сетей</h2>
            
            <div class="notice warning">
                <h3>1. Устаревшие и небезопасные методы аутентификации</h3>
                <p><strong>WEP (Wired Equivalent Privacy):</strong> взламывается за несколько минут</p>
                <p><strong>WPA с TKIP:</strong> уязвим к атакам</p>
                <p><strong>Открытые сети:</strong> отсутствие шифрования</p>
            </div>
            
            <div class="notice success">
                <h3>2. Рекомендуемые методы безопасности</h3>
                <p><strong>WPA3:</strong> современный стандарт безопасности</p>
                <p><strong>WPA2 с AES-CCMP:</strong> приемлемый вариант при отсутствии WPA3</p>
                <p><strong>Enterprise-режим:</strong> 802.1X с RADIUS-сервером</p>
            </div>
            
            <h3>3. Рекомендации по настройке безопасности</h3>
            <div class="config-example">
                <p><strong>Минимальные требования:</strong></p>
                <ul>
                    <li>Использовать WPA3 или WPA2 (AES)</li>
                    <li>Сложный пароль (минимум 12 символов, буквы, цифры, спецсимволы)</li>
                    <li>Отключить WPS (QSS)</li>
                    <li>Изменить пароль администратора точки доступа</li>
                    <li>Отключить удаленное управление</li>
                    <li>Регулярно обновлять firmware</li>
                </ul>
            </div>
            
            <h3>4. Дополнительные меры защиты</h3>
            <div class="config-example">
                <ul>
                    <li><strong>MAC-фильтрация:</strong> ограничение по MAC-адресам (не является надежной защитой)</li>
                    <li><strong>Скрытие SSID:</strong> не транслировать имя сети (ограниченная эффективность)</li>
                    <li><strong>Гостевые сети:</strong> изолированный доступ для посетителей</li>
                    <li><strong>Квоты трафика:</strong> ограничение скорости для гостевых пользователей</li>
                    <li><strong>VPN:</strong> обязательное использование VPN для доступа к корпоративным ресурсам</li>
                </ul>
            </div>
            
            <h2>Диагностика и устранение проблем</h2>
            
            <div class="troubleshooting-step">
                <h3>1. Анализ Wi-Fi среды</h3>
                <p><strong>Windows:</strong></p>
                <div class="command-block">
                    <span class="command">netsh wlan show networks mode=bssid</span>
                </div>
                
                <p><strong>Linux:</strong></p>
                <div class="command-block">
                    <span class="command">sudo iwlist scanning</span><br>
                    <span class="command">sudo iw dev wlan0 scan</span>
                </div>
                
                <p><strong>Android/iOS:</strong> приложения WiFi Analyzer, NetSpot</p>
            </div>
            
            <div class="troubleshooting-step">
                <h3>2. Измерение скорости соединения</h3>
                <div class="command-block">
                    <span class="command">iperf3 -c server_ip</span> <span class="comment"># измерение пропускной способности</span><br>
                    <span class="command">speedtest-cli</span> <span class="comment"># тест скорости интернета</span>
                </div>
            </div>
            
            <div class="troubleshooting-step">
                <h3>3. Анализ помех и перегрузки каналов</h3>
                <p>Используйте инструменты:</p>
                <ul>
                    <li>inSSIDer</li>
                    <li>Acrylic Wi-Fi</li>
                    <li>Ekahau Sidekick</li>
                    <li>Wi-Fi Explorer</li>
                </ul>
            </div>
            
            <div class="troubleshooting-step">
                <h3>4. Типичные проблемы и решения</h3>
                <table class="channel-table">
                    <tr>
                        <th>Проблема</th>
                        <th>Возможные причины</th>
                        <th>Решение</th>
                    </tr>
                    <tr>
                        <td>Медленная скорость</td>
                        <td>Перегрузка канала, помехи, устаревшее оборудование</td>
                        <td>Сменить канал, обновить оборудование, перейти на 5 ГГц</td>
                    </tr>
                    <tr>
                        <td>Обрывы соединения</td>
                        <td>Помехи, слабый сигнал, проблемы с драйверами</td>
                        <td>Проверить уровень сигнала, обновить драйверы, устранить помехи</td>
                    </tr>
                    <tr>
                        <td>Не подключаются устройства</td>
                        <td>Несовместимость, неправильные настройки безопасности</td>
                        <td>Проверить совместимость, временно упростить настройки</td>
                    </tr>
                    <tr>
                        <td>Низкая зона покрытия</td>
                        <td>Недостаточное количество точек доступа, препятствия</td>
                        <td>Добавить точки доступа, изменить их расположение</td>
                    </tr>
                </table>
            </div>

            <div class="test-container">
                <h2>Проверьте свои знания</h2>
                <form id="wifiTest">
                    
                    <!-- Вопрос 1 -->
                    <div class="question">
                        <p><strong>1. Какие три канала в диапазоне 2.4 ГГц не перекрываются?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q1" id="q1a" value="a">
                                <label for="q1a">1, 6, 11</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1b" value="b">
                                <label for="q1b">3, 7, 11</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1c" value="c">
                                <label for="q1c">1, 5, 9</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1d" value="d">
                                <label for="q1d">2, 6, 10</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q1" value="a">
                    </div>
                    
                    <!-- Вопрос 2 -->
                    <div class="question">
                        <p><strong>2. Какой стандарт безопасности Wi-Fi следует использовать в 2023 году?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q2" id="q2a" value="a">
                                <label for="q2a">WPA3</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2b" value="b">
                                <label for="q2b">WPA2</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2c" value="c">
                                <label for="q2c">WPA</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2d" value="d">
                                <label for="q2d">WEP</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q2" value="a">
                    </div>
                    
                    <!-- Вопрос 3 -->
                    <div class="question">
                        <p><strong>3. Какие из перечисленных мер повышают безопасность Wi-Fi сети? (Выберите все верные варианты)</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="checkbox" name="q3" id="q3a" value="a">
                                <label for="q3a">Использование WPA3</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q3" id="q3b" value="b">
                                <label for="q3b">Скрытие SSID</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q3" id="q3c" value="c">
                                <label for="q3c">MAC-фильтрация</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q3" id="q3d" value="d">
                                <label for="q3d">Сложный пароль (12+ символов)</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q3" value="a,d">
                    </div>
                    
                    <!-- Вопрос 4 -->
                    <div class="question">
                        <p><strong>4. Какой командой в Windows можно просмотреть список доступных Wi-Fi сетей с информацией о каналах?</strong></p>
                        <input type="text" id="q4_answer" class="text-answer" placeholder="Введите команду">
                        <input type="hidden" id="correct_q4" value="netsh wlan show networks mode=bssid">
                    </div>
                    
                    <!-- Вопрос 5 -->
                    <div class="question">
                        <p><strong>5. Какие преимущества имеет диапазон 5 ГГц по сравнению с 2.4 ГГц?</strong></p>
                        <textarea id="q5_answer" class="text-answer" rows="4" placeholder="Опишите преимущества"></textarea>
                        <input type="hidden" id="correct_q5_keywords" value="каналы,помехи,скорость,перегрузка">
                    </div>
                    
                    <button type="button" onclick="checkWifiTest()">Проверить ответы</button>
                </form>
                
                <div id="testResults" class="results"></div>
            </div>
        </div>
    </div>
</article>

<script>
function checkWifiTest() {
    let score = 0;
    let resultsHTML = "<h3>Результаты теста:</h3><ol>";
    const keywordThreshold = 3; // Минимальное количество ключевых слов для зачета вопроса 5
    
    // Вопрос 1
    const q1Selected = document.querySelector('input[name="q1"]:checked');
    if (q1Selected && q1Selected.value === document.getElementById('correct_q1').value) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 1: Верно! Каналы 1, 6 и 11 не перекрываются в диапазоне 2.4 ГГц.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 1: Неверно. Правильный ответ: 1, 6, 11.</li>`;
    }
    
    // Вопрос 2
    const q2Selected = document.querySelector('input[name="q2"]:checked');
    if (q2Selected && q2Selected.value === document.getElementById('correct_q2').value) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 2: Правильно! WPA3 - современный стандарт безопасности Wi-Fi.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 2: Неверно. Правильный ответ: WPA3.</li>`;
    }
    
    // Вопрос 3 (множественный выбор)
    const q3Selected = Array.from(document.querySelectorAll('input[name="q3"]:checked')).map(el => el.value).sort().join(',');
    const q3Correct = document.getElementById('correct_q3').value.split(',').sort().join(',');
    if (q3Selected === q3Correct) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 3: Абсолютно верно! WPA3 и сложный пароль действительно повышают безопасность.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 3: Неполный ответ. WPA3 и сложный пароль - основные меры безопасности.</li>`;
    }
    
    // Вопрос 4
    const q4Answer = document.getElementById('q4_answer').value.trim().toLowerCase();
    if (q4Answer.includes('netsh wlan show networks mode=bssid') || q4Answer.includes('netsh wlan show networks')) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 4: Верно! Эта команда показывает список сетей с детальной информацией.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 4: Неверно. Правильный ответ: netsh wlan show networks mode=bssid.</li>`;
    }
    
    // Вопрос 5 (анализ ключевых слов)
    const q5Answer = document.getElementById('q5_answer').value.toLowerCase();
    const keywords = document.getElementById('correct_q5_keywords').value.split(',');
    let foundKeywords = keywords.filter(word => q5Answer.includes(word));
    
    if (foundKeywords.length >= keywordThreshold) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 5: Принято! Вы указали ключевые преимущества: ${foundKeywords.join(', ')}.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 5: Ответ недостаточно полный. Ожидались упоминания: больше каналов, меньше помех, выше скорость, меньше перегрузка.</li>`;
    }
    
    resultsHTML += `</ol><p><strong>Итоговый результат: ${score} из 5 (${Math.round(score/5*100)}%)</strong></p>`;
    document.getElementById('testResults').innerHTML = resultsHTML;
    document.getElementById('testResults').style.display = 'block';
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>