<?php 
$page_title = "Модель OSI и TCP/IP: глубокий разбор";
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
    
    .model-layer {
        background-color: #f8fafc;
        border-left: 4px solid #3182ce;
        padding: 15px;
        margin: 15px 0;
        border-radius: 0 4px 4px 0;
    }
    
    .layer-title {
        font-weight: 600;
        color: #2c5282;
        margin-bottom: 8px;
    }
    
    .protocol-list {
        margin-left: 20px;
    }
    
    .protocol-item {
        margin: 8px 0;
    }
    
    .comparison-table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
    }
    
    .comparison-table th, .comparison-table td {
        border: 1px solid #e2e8f0;
        padding: 12px;
        text-align: left;
    }
    
    .comparison-table th {
        background-color: #ebf8ff;
    }
    
    .encapsulation-diagram {
        text-align: center;
        margin: 25px 0;
        padding: 15px;
        background-color: #f8fafc;
        border-radius: 8px;
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
            <h2>Введение в сетевые модели</h2>
            <p>Сетевые модели OSI и TCP/IP являются фундаментальными концепциями в компьютерных сетях. Понимание этих моделей критически важно для системных администраторов, сетевых инженеров и специалистов по безопасности. В этой лекции мы подробно разберем обе модели, их сходства и различия, а также практическое применение в реальных сетях.</p>

            <h2>Модель OSI (Open Systems Interconnection)</h2>
            <p>Модель OSI была разработана ISO в 1984 году как концептуальная основа для стандартизации сетевых протоколов. Она состоит из 7 уровней, каждый из которых выполняет определенные функции:</p>
            
            <div class="model-layer">
                <div class="layer-title">7. Прикладной уровень (Application Layer)</div>
                <p>Обеспечивает интерфейс между сетевыми службами и приложениями пользователя. Примеры протоколов:</p>
                <ul class="protocol-list">
                    <li class="protocol-item">HTTP/HTTPS - веб-браузинг</li>
                    <li class="protocol-item">FTP - передача файлов</li>
                    <li class="protocol-item">SMTP/POP3/IMAP - электронная почта</li>
                    <li class="protocol-item">DNS - разрешение имен</li>
                </ul>
            </div>
            
            <div class="model-layer">
                <div class="layer-title">6. Уровень представления (Presentation Layer)</div>
                <p>Отвечает за преобразование данных в формат, понятный прикладному уровню. Функции:</p>
                <ul class="protocol-list">
                    <li class="protocol-item">Шифрование/дешифрование данных</li>
                    <li class="protocol-item">Сжатие/распаковка</li>
                    <li class="protocol-item">Преобразование кодировок (ASCII, Unicode)</li>
                    <li class="protocol-item">Сериализация объектов</li>
                </ul>
            </div>
            
            <div class="model-layer">
                <div class="layer-title">5. Сеансовый уровень (Session Layer)</div>
                <p>Управляет сеансами связи между компьютерами. Основные задачи:</p>
                <ul class="protocol-list">
                    <li class="protocol-item">Установка, поддержка и завершение сеансов</li>
                    <li class="protocol-item">Синхронизация диалога</li>
                    <li class="protocol-item">Управление токенами (кто говорит)</li>
                    <li class="protocol-item">Восстановление сеансов после сбоев</li>
                </ul>
            </div>
            
            <div class="model-layer">
                <div class="layer-title">4. Транспортный уровень (Transport Layer)</div>
                <p>Обеспечивает надежную передачу данных между конечными системами. Ключевые протоколы:</p>
                <ul class="protocol-list">
                    <li class="protocol-item">TCP - надежная передача с установлением соединения</li>
                    <li class="protocol-item">UDP - ненадежная передача без установления соединения</li>
                    <li class="protocol-item">Функции: сегментация, управление потоком, контроль ошибок</li>
                </ul>
            </div>
            
            <div class="model-layer">
                <div class="layer-title">3. Сетевой уровень (Network Layer)</div>
                <p>Обеспечивает логическую адресацию и маршрутизацию между сетями. Основные аспекты:</p>
                <ul class="protocol-list">
                    <li class="protocol-item">IP-адресация (IPv4/IPv6)</li>
                    <li class="protocol-item">Маршрутизация (OSPF, BGP, EIGRP)</li>
                    <li class="protocol-item">Фрагментация пакетов</li>
                    <li class="protocol-item">Протоколы: IP, ICMP, ARP</li>
                </ul>
            </div>
            
            <div class="model-layer">
                <div class="layer-title">2. Канальный уровень (Data Link Layer)</div>
                <p>Обеспечивает надежную передачу данных по физическому каналу. Подразделяется на:</p>
                <ul class="protocol-list">
                    <li class="protocol-item">LLC (Logical Link Control) - управление потоком и ошибками</li>
                    <li class="protocol-item">MAC (Media Access Control) - доступ к среде и физическая адресация</li>
                    <li class="protocol-item">Примеры: Ethernet, Wi-Fi (802.11), PPP, VLAN</li>
                </ul>
            </div>
            
            <div class="model-layer">
                <div class="layer-title">1. Физический уровень (Physical Layer)</div>
                <p>Отвечает за передачу битов по физической среде. Характеристики:</p>
                <ul class="protocol-list">
                    <li class="protocol-item">Кабели: витая пара (UTP/STP), оптоволокно, коаксиал</li>
                    <li class="protocol-item">Беспроводные технологии: радиоволны, ИК</li>
                    <li class="protocol-item">Кодирование сигналов: NRZ, Manchester, 4B/5B</li>
                    <li class="protocol-item">Разъемы: RJ-45, LC/SC, BNC</li>
                </ul>
            </div>

            <h2>Модель TCP/IP</h2>
            <p>Модель TCP/IP была разработана Министерством обороны США и легла в основу современного интернета. Она состоит из 4 уровней:</p>
            
            <div class="model-layer">
                <div class="layer-title">Прикладной уровень (Application Layer)</div>
                <p>Объединяет функции прикладного, представительского и сеансового уровней OSI. Примеры протоколов:</p>
                <ul class="protocol-list">
                    <li class="protocol-item">HTTP, FTP, SMTP, DNS, DHCP</li>
                    <li class="protocol-item">SSH, Telnet, SNMP</li>
                </ul>
            </div>
            
            <div class="model-layer">
                <div class="layer-title">Транспортный уровень (Transport Layer)</div>
                <p>Аналогичен транспортному уровню OSI. Основные протоколы:</p>
                <ul class="protocol-list">
                    <li class="protocol-item">TCP - надежная передача с установлением соединения</li>
                    <li class="protocol-item">UDP - ненадежная передача без установления соединения</li>
                </ul>
            </div>
            
            <div class="model-layer">
                <div class="layer-title">Межсетевой уровень (Internet Layer)</div>
                <p>Соответствует сетевому уровню OSI. Ключевые протоколы:</p>
                <ul class="protocol-list">
                    <li class="protocol-item">IP (IPv4, IPv6) - логическая адресация</li>
                    <li class="protocol-item">ICMP - диагностика и ошибки</li>
                    <li class="protocol-item">ARP - разрешение IP в MAC-адреса</li>
                </ul>
            </div>
            
            <div class="model-layer">
                <div class="layer-title">Уровень сетевого доступа (Network Access Layer)</div>
                <p>Объединяет функции канального и физического уровней OSI. Примеры технологий:</p>
                <ul class="protocol-list">
                    <li class="protocol-item">Ethernet (IEEE 802.3)</li>
                    <li class="protocol-item">Wi-Fi (IEEE 802.11)</li>
                    <li class="protocol-item">PPP, Frame Relay</li>
                </ul>
            </div>

            <h2>Сравнение моделей OSI и TCP/IP</h2>
            <table class="comparison-table">
                <tr>
                    <th>Критерий</th>
                    <th>Модель OSI</th>
                    <th>Модель TCP/IP</th>
                </tr>
                <tr>
                    <td>Количество уровней</td>
                    <td>7</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>Разработчик</td>
                    <td>ISO (международный стандарт)</td>
                    <td>DARPA (практическая реализация)</td>
                </tr>
                <tr>
                    <td>Гибкость</td>
                    <td>Жесткое разделение уровней</td>
                    <td>Более гибкая архитектура</td>
                </tr>
                <tr>
                    <td>Использование</td>
                    <td>Концептуальная модель</td>
                    <td>Фактический стандарт интернета</td>
                </tr>
                <tr>
                    <td>Подход</td>
                    <td>Сверху вниз (от приложений)</td>
                    <td>Снизу вверх (от сети)</td>
                </tr>
            </table>

            <h2>Процесс инкапсуляции данных</h2>
            <div class="encapsulation-diagram">
                <p><strong>Данные → Сегменты → Пакеты → Кадры → Биты</strong></p>
                <p>Прикладные данные проходят через уровни модели, на каждом из которых добавляется служебная информация (заголовки). Этот процесс называется инкапсуляцией.</p>
            </div>

            <h2>Практическое применение</h2>
            <p>Понимание моделей OSI и TCP/IP помогает в:</p>
            <ul class="protocol-list">
                <li class="protocol-item">Диагностике сетевых проблем (определение уровня, на котором возникла ошибка)</li>
                <li class="protocol-item">Проектировании сетевой инфраструктуры</li>
                <li class="protocol-item">Настройке межсетевых экранов и систем безопасности</li>
                <li class="protocol-item">Оптимизации производительности сети</li>
            </ul>

            <div class="test-container">
                <h2>Проверьте свои знания</h2>
                <form id="osiTest">
                    
                    <!-- Вопрос 1 -->
                    <div class="question">
                        <p><strong>1. Какой уровень модели OSI отвечает за маршрутизацию между сетями?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q1" id="q1a" value="a">
                                <label for="q1a">Физический</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1b" value="b">
                                <label for="q1b">Канальный</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1c" value="c">
                                <label for="q1c">Сетевой</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1d" value="d">
                                <label for="q1d">Транспортный</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q1" value="c">
                    </div>
                    
                    <!-- Вопрос 2 -->
                    <div class="question">
                        <p><strong>2. Какие уровни модели TCP/IP соответствуют прикладному уровню модели OSI? (Выберите все верные варианты)</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="checkbox" name="q2" id="q2a" value="a">
                                <label for="q2a">Прикладной</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q2" id="q2b" value="b">
                                <label for="q2b">Представительский</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q2" id="q2c" value="c">
                                <label for="q2c">Сеансовый</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q2" id="q2d" value="d">
                                <label for="q2d">Транспортный</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q2" value="a,b,c">
                    </div>
                    
                    <!-- Вопрос 3 -->
                    <div class="question">
                        <p><strong>3. Какой протокол работает на транспортном уровне?</strong></p>
                        <input type="text" id="q3_answer" class="text-answer" placeholder="Введите название протокола">
                        <input type="hidden" id="correct_q3" value="TCP">
                    </div>
                    
                    <!-- Вопрос 4 -->
                    <div class="question">
                        <p><strong>4. Опишите процесс инкапсуляции данных в сетевых моделях</strong></p>
                        <textarea id="q4_answer" class="text-answer" rows="4" placeholder="Опишите процесс"></textarea>
                        <input type="hidden" id="correct_q4_keywords" value="данные,сегменты,пакеты,кадры,биты,заголовки">
                    </div>
                    
                    <!-- Вопрос 5 -->
                    <div class="question">
                        <p><strong>5. Какой уровень модели OSI отсутствует в модели TCP/IP?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q5" id="q5a" value="a">
                                <label for="q5a">Физический</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q5" id="q5b" value="b">
                                <label for="q5b">Представительский</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q5" id="q5c" value="c">
                                <label for="q5c">Сетевой</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q5" id="q5d" value="d">
                                <label for="q5d">Транспортный</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q5" value="b">
                    </div>
                    
                    <button type="button" onclick="checkOsiTest()">Проверить ответы</button>
                </form>
                
                <div id="testResults" class="results"></div>
            </div>
        </div>
    </div>
</article>

<script>
function checkOsiTest() {
    let score = 0;
    let resultsHTML = "<h3>Результаты теста:</h3><ol>";
    const keywordThreshold = 3; // Минимальное количество ключевых слов для зачета вопроса 4
    
    // Вопрос 1
    const q1Selected = document.querySelector('input[name="q1"]:checked');
    if (q1Selected && q1Selected.value === document.getElementById('correct_q1').value) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 1: Верно! Сетевой уровень (3) отвечает за маршрутизацию.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 1: Неверно. Правильный ответ: Сетевой уровень.</li>`;
    }
    
    // Вопрос 2 (множественный выбор)
    const q2Selected = Array.from(document.querySelectorAll('input[name="q2"]:checked')).map(el => el.value).sort().join(',');
    const q2Correct = document.getElementById('correct_q2').value.split(',').sort().join(',');
    if (q2Selected === q2Correct) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 2: Правильно! Прикладной, представительский и сеансовый уровни OSI соответствуют прикладному уровню TCP/IP.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 2: Неполный ответ. Прикладной, представительский и сеансовый уровни OSI соответствуют прикладному уровню TCP/IP.</li>`;
    }
    
    // Вопрос 3
    const q3Answer = document.getElementById('q3_answer').value.trim().toUpperCase();
    if (q3Answer === 'TCP' || q3Answer === 'UDP') {
        score++;
        resultsHTML += `<li class="correct">Вопрос 3: Верно! TCP и UDP работают на транспортном уровне.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 3: Неверно. Правильные ответы: TCP или UDP.</li>`;
    }
    
    // Вопрос 4 (анализ ключевых слов)
    const q4Answer = document.getElementById('q4_answer').value.toLowerCase();
    const keywords = document.getElementById('correct_q4_keywords').value.split(',');
    let foundKeywords = keywords.filter(word => q4Answer.includes(word));
    
    if (foundKeywords.length >= keywordThreshold) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 4: Принято! Вы указали ключевые аспекты: ${foundKeywords.join(', ')}.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 4: Ответ недостаточно полный. Ожидались упоминания: данные, сегменты, пакеты, кадры, биты, заголовки.</li>`;
    }
    
    // Вопрос 5
    const q5Selected = document.querySelector('input[name="q5"]:checked');
    if (q5Selected && q5Selected.value === document.getElementById('correct_q5').value) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 5: Абсолютно верно! Представительский уровень отсутствует в модели TCP/IP.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 5: Неверно. Правильный ответ: Представительский уровень.</li>`;
    }
    
    resultsHTML += `</ol><p><strong>Итоговый результат: ${score} из 5 (${Math.round(score/5*100)}%)</strong></p>`;
    document.getElementById('testResults').innerHTML = resultsHTML;
    document.getElementById('testResults').style.display = 'block';
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>