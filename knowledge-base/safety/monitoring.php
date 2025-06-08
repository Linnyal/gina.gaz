$page_title = "Системы мониторинга. Мониторинг промышленного оборудования";
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
    
    .protocol-table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
    }
    
    .protocol-table th, .protocol-table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }
    
    .protocol-table th {
        background-color: #f2f2f2;
    }
    
    .protocol-table tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    
    .comparison-table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
    }
    
    .comparison-table th, .comparison-table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }
    
    .comparison-table th {
        background-color: #f2f2f2;
    }
    
    .comparison-table tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    
    .architecture-diagram {
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 8px;
        margin: 20px 0;
        text-align: center;
        border: 1px solid #e2e8f0;
    }
    
    .sensor-types {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        margin: 20px 0;
    }
    
    .sensor-card {
        flex: 1 1 300px;
        background-color: #f8f9fa;
        padding: 15px;
        border-radius: 8px;
        border-left: 4px solid #3182ce;
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
            <h2>Введение в системы мониторинга</h2>
            <p>Системы мониторинга позволяют в реальном времени отслеживать состояние оборудования, сетей и приложений, своевременно выявлять проблемы и предотвращать простои. В промышленной сфере мониторинг критически важен для обеспечения бесперебойной работы оборудования.</p>

            <h2>Типы систем мониторинга</h2>
            
            <div class="notice info">
                <h3>1. Инфраструктурный мониторинг</h3>
                <p>Отслеживание серверов, сетевого оборудования, виртуальных машин:</p>
                <ul>
                    <li>Zabbix</li>
                    <li>Nagios</li>
                    <li>Prometheus</li>
                    <li>PRTG</li>
                </ul>
            </div>
            
            <div class="notice info">
                <h3>2. Промышленный мониторинг</h3>
                <p>Контроль промышленного оборудования, датчиков, PLC:</p>
                <ul>
                    <li>SCADA-системы (Ignition, WinCC, Citect)</li>
                    <li>IIoT-платформы (PTC ThingWorx, Siemens MindSphere)</li>
                    <li>Специализированные решения (GE Predix, RockFactory Talk)</li>
                </ul>
            </div>
            
            <div class="notice info">
                <h3>3. Логический мониторинг</h3>
                <p>Анализ журналов событий и показателей приложений:</p>
                <ul>
                    <li>ELK Stack (Elasticsearch, Logstash, Kibana)</li>
                    <li>Graylog</li>
                    <li>Splunk</li>
                </ul>
            </div>

            <h2>Архитектура системы мониторинга</h2>
            
            <div class="architecture-diagram">
                <p><strong>Типовая архитектура:</strong></p>
                <p>Датчики → Шлюзы → Сервер обработки данных → База данных → Визуализация → Оповещения</p>
            </div>
            
            <h3>Компоненты системы</h3>
            <div class="config-example">
                <ul>
                    <li><strong>Агенты/датчики:</strong> сбор данных с оборудования</li>
                    <li><strong>Шлюзы:</strong> агрегация данных с датчиков</li>
                    <li><strong>Сервер обработки:</strong> анализ и хранение данных</li>
                    <li><strong>База данных:</strong> хранение исторических данных</li>
                    <li><strong>Визуализация:</strong> панели управления, графики</li>
                    <li><strong>Оповещения:</strong> уведомления о проблемах</li>
                </ul>
            </div>

            <h2>Протоколы промышленного мониторинга</h2>
            
            <table class="protocol-table">
                <tr>
                    <th>Протокол</th>
                    <th>Описание</th>
                    <th>Применение</th>
                </tr>
                <tr>
                    <td>Modbus</td>
                    <td>Открытый протокол, работает по RS-485 или TCP</td>
                    <td>Промышленные контроллеры, датчики</td>
                </tr>
                <tr>
                    <td>OPC UA</td>
                    <td>Современный стандарт для промышленной автоматизации</td>
                    <td>Обмен данными между оборудованием и SCADA</td>
                </tr>
                <tr>
                    <td>PROFINET</td>
                    <td>Промышленный Ethernet стандарт</td>
                    <td>Автоматизация производственных линий</td>
                </tr>
                <tr>
                    <td>MQTT</td>
                    <td>Легковесный протокол для IoT</td>
                    <td>Удаленный мониторинг оборудования</td>
                </tr>
                <tr>
                    <td>SNMP</td>
                    <td>Протокол управления сетями</td>
                    <td>Мониторинг сетевого оборудования</td>
                </tr>
            </table>

            <h2>Датчики и сбор данных</h2>
            
            <div class="sensor-types">
                <div class="sensor-card">
                    <h3>Температурные датчики</h3>
                    <p>PT100, термопары, цифровые (DS18B20)</p>
                    <p>Диапазон: -200°C до +1000°C</p>
                </div>
                
                <div class="sensor-card">
                    <h3>Датчики давления</h3>
                    <p>Пьезоэлектрические, тензометрические</p>
                    <p>Диапазон: 0-1000 бар</p>
                </div>
                
                <div class="sensor-card">
                    <h3>Датчики вибрации</h3>
                    <p>Акселерометры, пьезоэлектрические</p>
                    <p>Частота: 0.5-5000 Гц</p>
                </div>
                
                <div class="sensor-card">
                    <h3>Датчики тока</h3>
                    <p>Трансформаторы тока, эффект Холла</p>
                    <p>Диапазон: 0-5000А</p>
                </div>
            </div>

            <h2>Настройка Zabbix для промышленного мониторинга</h2>
            
            <h3>1. Установка Zabbix сервера</h3>
            <div class="command-block">
                <span class="comment"># Для Ubuntu/Debian:</span><br>
                <span class="command">wget https://repo.zabbix.com/zabbix/6.0/ubuntu/pool/main/z/zabbix-release/zabbix-release_6.0-1+ubuntu20.04_all.deb</span><br>
                <span class="command">sudo dpkg -i zabbix-release_6.0-1+ubuntu20.04_all.deb</span><br>
                <span class="command">sudo apt update</span><br>
                <span class="command">sudo apt install zabbix-server-mysql zabbix-frontend-php zabbix-agent</span>
            </div>
            
            <h3>2. Настройка мониторинга Modbus устройства</h3>
            <div class="config-example">
                <p>Конфигурация в zabbix_agentd.conf:</p>
                <pre>UserParameter=modbus.temperature[*],/usr/bin/modbus-read -a $1 -r $2 -t $3</pre>
                <p>Создание элемента данных в Zabbix:</p>
                <ul>
                    <li>Тип: Zabbix агент</li>
                    <li>Ключ: modbus.temperature[1, 40001, float]</li>
                    <li>Интервал: 30s</li>
                </ul>
            </div>
            
            <h3>3. Настройка триггера для аварийного значения</h3>
            <div class="config-example">
                <p>Выражение триггера:</p>
                <pre>{Template_Modbus:modbus.temperature[1,40001,float].last()} > 90</pre>
                <p>Действие (action):</p>
                <ul>
                    <li>Условие: Значение температуры выше 90°C</li>
                    <li>Операция: Отправка email/SMS</li>
                </ul>
            </div>

            <h2>SCADA системы для промышленного мониторинга</h2>
            
            <table class="comparison-table">
                <tr>
                    <th>Система</th>
                    <th>Производитель</th>
                    <th>Поддержка OPC</th>
                    <th>Веб-интерфейс</th>
                    <th>Ценовая категория</th>
                </tr>
                <tr>
                    <td>Ignition</td>
                    <td>Inductive Automation</td>
                    <td>Да</td>
                    <td>Да</td>
                    <td>$$$</td>
                </tr>
                <tr>
                    <td>WinCC</td>
                    <td>Siemens</td>
                    <td>Да</td>
                    <td>Ограниченный</td>
                    <td>$$$$</td>
                </tr>
                <tr>
                    <td>Citect</td>
                    <td>Schneider Electric</td>
                    <td>Да</td>
                    <td>Нет</td>
                    <td>$$$</td>
                </tr>
                <tr>
                    <td>VTScada</td>
                    <td>Trihedral</td>
                    <td>Да</td>
                    <td>Да</td>
                    <td>$$$$</td>
                </tr>
            </table>

            <h2>Практические примеры мониторинга</h2>
            
            <div class="troubleshooting-step">
                <h3>1. Мониторинг температуры двигателя</h3>
                <ul>
                    <li>Датчик: PT100 с Modbus RTU выходом</li>
                    <li>Частота опроса: 10 секунд</li>
                    <li>Аварийные значения: >85°C (предупреждение), >95°C (авария)</li>
                    <li>Интеграция: Zabbix + Grafana для визуализации</li>
                </ul>
            </div>
            
            <div class="troubleshooting-step">
                <h3>2. Контроль вибрации насоса</h3>
                <ul>
                    <li>Датчик: беспроводной акселерометр с выходом 4-20 мА</li>
                    <li>Пороговые значения: 4 mm/s (норма), 8 mm/s (предупреждение), 12 mm/s (авария)</li>
                    <li>Анализ: FFT-анализ для выявления частотных составляющих</li>
                </ul>
            </div>
            
            <div class="troubleshooting-step">
                <h3>3. Мониторинг потребления энергии</h3>
                <ul>
                    <li>Датчик: трехфазный счетчик с Modbus TCP</li>
                    <li>Метрики: мгновенная мощность, суммарное потребление, cos φ</li>
                    <li>Интеграция: SCADA система с генерацией отчетов</li>
                </ul>
            </div>

            <h2>Проблемы и решения</h2>
            
            <div class="notice warning">
                <h3>1. Потеря связи с датчиками</h3>
                <p><strong>Причины:</strong> обрыв линии, помехи, питание датчика</p>
                <p><strong>Решение:</strong> резервирование каналов связи, использование беспроводных технологий</p>
            </div>
            
            <div class="notice warning">
                <h3>2. Неточные показания</h3>
                <p><strong>Причины:</strong> калибровка датчика, электромагнитные помехи</p>
                <p><strong>Решение:</strong> регулярная калибровка, экранирование линий</p>
            </div>
            
            <div class="notice warning">
                <h3>3. Перегрузка системы мониторинга</h3>
                <p><strong>Причины:</strong> слишком частая выборка, большое количество датчиков</p>
                <p><strong>Решение:</strong> оптимизация интервалов опроса, агрегация данных на шлюзах</p>
            </div>

            <div class="test-container">
                <h2>Проверьте свои знания</h2>
                <form id="monitoringTest">
                    
                    <!-- Вопрос 1 -->
                    <div class="question">
                        <p><strong>1. Какой протокол чаще всего используется для связи с промышленными контроллерами?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q1" id="q1a" value="a">
                                <label for="q1a">Modbus</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1b" value="b">
                                <label for="q1b">HTTP</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1c" value="c">
                                <label for="q1c">FTP</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1d" value="d">
                                <label for="q1d">SMTP</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q1" value="a">
                    </div>
                    
                    <!-- Вопрос 2 -->
                    <div class="question">
                        <p><strong>2. Какие системы используются для визуализации промышленных данных? (Выберите все верные варианты)</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="checkbox" name="q2" id="q2a" value="a">
                                <label for="q2a">SCADA</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q2" id="q2b" value="b">
                                <label for="q2b">Grafana</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q2" id="q2c" value="c">
                                <label for="q2c">Microsoft Word</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q2" id="q2d" value="d">
                                <label for="q2d">HMI</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q2" value="a,b,d">
                    </div>
                    
                    <!-- Вопрос 3 -->
                    <div class="question">
                        <p><strong>3. Какой командой в Linux можно установить Zabbix сервер?</strong></p>
                        <input type="text" id="q3_answer" class="text-answer" placeholder="Введите команду">
                        <input type="hidden" id="correct_q3_keywords" value="apt,install,zabbix-server">
                    </div>
                    
                    <!-- Вопрос 4 -->
                    <div class="question">
                        <p><strong>4. Какие датчики используются для мониторинга промышленного оборудования? (Выберите все верные варианты)</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="checkbox" name="q4" id="q4a" value="a">
                                <label for="q4a">Температурные</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q4" id="q4b" value="b">
                                <label for="q4b">Датчики вибрации</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q4" id="q4c" value="c">
                                <label for="q4c">Датчики давления</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q4" id="q4d" value="d">
                                <label for="q4d">Датчики цвета</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q4" value="a,b,c">
                    </div>
                    
                    <!-- Вопрос 5 -->
                    <div class="question">
                        <p><strong>5. Опишите типовую архитектуру системы промышленного мониторинга</strong></p>
                        <textarea id="q5_answer" class="text-answer" rows="4" placeholder="Опишите компоненты системы"></textarea>
                        <input type="hidden" id="correct_q5_keywords" value="датчики,шлюз,сервер,база,визуализация">
                    </div>
                    
                    <button type="button" onclick="checkMonitoringTest()">Проверить ответы</button>
                </form>
                
                <div id="testResults" class="results"></div>
            </div>
        </div>
    </div>
</article>

<script>
function checkMonitoringTest() {
    let score = 0;
    let resultsHTML = "<h3>Результаты теста:</h3><ol>";
    const keywordThreshold = 3; // Минимальное количество ключевых слов для зачета вопроса
    
    // Вопрос 1
    const q1Selected = document.querySelector('input[name="q1"]:checked');
    if (q1Selected && q1Selected.value === document.getElementById('correct_q1').value) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 1: Верно! Modbus - основной протокол для промышленных контроллеров.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 1: Неверно. Правильный ответ: Modbus.</li>`;
    }
    
    // Вопрос 2 (множественный выбор)
    const q2Selected = Array.from(document.querySelectorAll('input[name="q2"]:checked')).map(el => el.value).sort().join(',');
    const q2Correct = document.getElementById('correct_q2').value.split(',').sort().join(',');
    if (q2Selected === q2Correct) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 2: Правильно! SCADA, Grafana и HMI используются для визуализации.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 2: Неполный ответ. SCADA, Grafana и HMI используются для визуализации.</li>`;
    }
    
    // Вопрос 3 (анализ ключевых слов)
    const q3Answer = document.getElementById('q3_answer').value.toLowerCase();
    const q3Keywords = document.getElementById('correct_q3_keywords').value.split(',');
    let foundKeywords = q3Keywords.filter(word => q3Answer.includes(word));
    
    if (foundKeywords.length >= 2) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 3: Принято! Пример команды: sudo apt install zabbix-server-mysql.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 3: Неверно. Пример команды: sudo apt install zabbix-server-mysql.</li>`;
    }
    
    // Вопрос 4 (множественный выбор)
    const q4Selected = Array.from(document.querySelectorAll('input[name="q4"]:checked')).map(el => el.value).sort().join(',');
    const q4Correct = document.getElementById('correct_q4').value.split(',').sort().join(',');
    if (q4Selected === q4Correct) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 4: Абсолютно верно! Температурные, вибрации и давления - основные датчики.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 4: Неполный ответ. Температурные, вибрации и давления - основные датчики.</li>`;
    }
    
    // Вопрос 5 (анализ ключевых слов)
    const q5Answer = document.getElementById('q5_answer').value.toLowerCase();
    const q5Keywords = document.getElementById('correct_q5_keywords').value.split(',');
    foundKeywords = q5Keywords.filter(word => q5Answer.includes(word));
    
    if (foundKeywords.length >= keywordThreshold) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 5: Принято! Вы указали ключевые компоненты: ${foundKeywords.join(', ')}.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 5: Ответ недостаточно полный. Ожидались: датчики, шлюз, сервер, база данных, визуализация.</li>`;
    }
    
    resultsHTML += `</ol><p><strong>Итоговый результат: ${score} из 5 (${Math.round(score/5*100)}%)</strong></p>`;
    document.getElementById('testResults').innerHTML = resultsHTML;
    document.getElementById('testResults').style.display = 'block';
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>