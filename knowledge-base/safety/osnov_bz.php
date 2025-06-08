<?php 
$page_title = "Основы информационной безопасности для системных администраторов";
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
    
    .security-principle {
        background-color: #f0f7ff;
        padding: 15px;
        border-radius: 5px;
        margin: 15px 0;
        border-left: 4px solid #3182ce;
    }
    
    .security-principle h4 {
        margin-top: 0;
        color: #2c5282;
    }
</style>
</head>
<body>
<article class="kb-article">
    <div class="centered-content">
        <h1><?= $page_title ?></h1>
        <div class="meta">
            <span>Категория: <a href="/knowledge-base/it-security/">Информационная безопасность</a></span>
            <span>Обновлено: <?= date('d.m.Y') ?></span>
        </div>

        <div class="content">
            <h2>Введение в информационную безопасность</h2>
            <p>Информационная безопасность (ИБ) — это комплекс мер, направленных на защиту информации от несанкционированного доступа, использования, раскрытия, искажения, модификации или уничтожения. Для системного администратора понимание основ ИБ является критически важным, так как именно он отвечает за настройку и поддержание защитных механизмов инфраструктуры.</p>
            
            <div class="notice info">
                <p>Согласно исследованию Verizon Data Breach Investigations Report, 82% утечек данных происходят из-за человеческого фактора, что подчеркивает важность грамотной настройки систем и обучения пользователей.</p>
            </div>
            
            <h2>Основные принципы информационной безопасности</h2>
            
            <div class="security-principle">
                <h4>Конфиденциальность</h4>
                <p>Обеспечение доступа к информации только авторизованным пользователям. На практике реализуется через:</p>
                <ul>
                    <li>Системы аутентификации и авторизации (Active Directory, LDAP)</li>
                    <li>Шифрование данных (AES, RSA, TLS)</li>
                    <li>Механизмы контроля доступа (ACL, RBAC)</li>
                </ul>
            </div>
            
            <div class="security-principle">
                <h4>Целостность</h4>
                <p>Гарантия точности и полноты информации, защита от несанкционированных изменений. Обеспечивается:</p>
                <ul>
                    <li>Хеш-функциями (SHA-256, MD5)</li>
                    <li>Цифровыми подписями</li>
                    <li>Системами контроля версий</li>
                    <li>Журналированием изменений</li>
                </ul>
            </div>
            
            <div class="security-principle">
                <h4>Доступность</h4>
                <p>Гарантия доступа к информации и системам для авторизованных пользователей в любое время. Поддерживается:</p>
                <ul>
                    <li>Резервным копированием</li>
                    <li>Отказоустойчивыми системами</li>
                    <li>Защитой от DDoS-атак</li>
                    <li>Планами аварийного восстановления</li>
                </ul>
            </div>

            <h2>Основные угрозы информационной безопасности</h2>
            
            <h3>Вредоносное программное обеспечение</h3>
            <p>Вирусы, черви, трояны, ransomware — все эти типы вредоносного ПО могут нанести значительный ущерб инфраструктуре. Современные антивирусные решения используют:</p>
            <ul>
                <li>Сигнатурный анализ</li>
                <li>Эвристический анализ</li>
                <li>Поведенческий анализ</li>
                <li>Машинное обучение</li>
            </ul>
            
            <h3>Социальная инженерия</h3>
            <p>Методы манипуляции людьми для получения конфиденциальной информации. Наиболее распространенные атаки:</p>
            <ul>
                <li>Фишинг (поддельные письма и сайты)</li>
                <li>Претекстинг (создание ложного предлога)</li>
                <li>Кви про кво (предложение "услуги" в обмен на информацию)</li>
            </ul>
            
            <div class="notice warning">
                <p>По данным FBI, ущерб от бизнес-компрометации через email (BEC) составил $1.8 миллиарда в 2020 году, что делает фишинг одной из самых опасных угроз.</p>
            </div>
            
            <h3>Атаки на сетевые сервисы</h3>
            <p>Эксплуатация уязвимостей в сетевых протоколах и сервисах:</p>
            <ul>
                <li>DDoS-атаки</li>
                <li>MITM (атаки "человек посередине")</li>
                <li>Эксплуатация уязвимостей в веб-приложениях (SQL-инъекции, XSS)</li>
                <li>Атаки на беспроводные сети</li>
            </ul>

            <h2>Ключевые технологии защиты</h2>
            
            <h3>Межсетевые экраны (Firewalls)</h3>
            <p>Сетевые устройства или ПО, контролирующие входящий и исходящий трафик на основе правил. Современные решения включают:</p>
            <ul>
                <li>Stateful inspection (анализ состояния соединений)</li>
                <li>Глубокий анализ пакетов (DPI)</li>
                <li>Интеграцию с системами обнаружения вторжений (IDS/IPS)</li>
            </ul>
            
            <h3>Системы обнаружения и предотвращения вторжений (IDS/IPS)</h3>
            <p>Технологии для мониторинга сетевой активности на предмет подозрительных действий:</p>
            <ul>
                <li>Сетевые IDS (NIDS) — анализ сетевого трафика</li>
                <li>Хостные IDS (HIDS) — мониторинг активности на конкретных системах</li>
                <li>IPS — активное блокирование подозрительной активности</li>
            </ul>
            
            <h3>VPN и шифрование</h3>
            <p>Технологии для безопасной передачи данных:</p>
            <ul>
                <li>IPSec — защита на сетевом уровне</li>
                <li>SSL/TLS — защита прикладного уровня</li>
                <li>WireGuard — современный легковесный VPN-протокол</li>
            </ul>

            <h2>Практические рекомендации для системных администраторов</h2>
            
            <h3>Управление учетными записями</h3>
            <p>Принцип минимальных привилегий — пользователи должны получать ровно столько прав, сколько необходимо для работы. Рекомендации:</p>
            <ul>
                <li>Регулярный аудит учетных записей</li>
                <li>Использование групп для управления правами</li>
                <li>Обязательная смена паролей при первом входе</li>
                <li>Реализация многофакторной аутентификации</li>
            </ul>
            
            <h3>Обновление систем</h3>
            <p>Своевременное применение обновлений безопасности — одна из самых эффективных мер защиты:</p>
            <ul>
                <li>Централизованное управление обновлениями (WSUS, SCCM для Windows; Spacewalk для Linux)</li>
                <li>Тестирование обновлений перед развертыванием</li>
                <li>Планирование "окон обслуживания" для критических систем</li>
            </ul>
            
            <h3>Резервное копирование</h3>
            <p>Правило 3-2-1 для резервных копий:</p>
            <ul>
                <li>3 копии данных</li>
                <li>2 разных типа носителей</li>
                <li>1 копия вне площадки</li>
            </ul>
            
            <h3>Мониторинг и аудит</h3>
            <p>Регулярный анализ логов и событий безопасности помогает выявлять инциденты на ранней стадии:</p>
            <ul>
                <li>Использование SIEM-систем (Splunk, ELK Stack, IBM QRadar)</li>
                <li>Настройка алертов на подозрительную активность</li>
                <li>Регулярные проверки соответствия политикам безопасности</li>
            </ul>

            <h2>Нормативная база и стандарты</h2>
            <p>Системным администраторам важно знать основные стандарты и регуляторные требования:</p>
            <ul>
                <li><strong>ISO/IEC 27001</strong> — международный стандарт по управлению информационной безопасностью</li>
                <li><strong>PCI DSS</strong> — стандарт безопасности данных индустрии платежных карт</li>
                <li><strong>GDPR</strong> — Общий регламент по защите данных в ЕС</li>
                <li><strong>ФЗ-152</strong> — российский закон о персональных данных</li>
                <li><strong>Приказы ФСТЭК</strong> — требования к защите информации в России</li>
            </ul>

            <div class="test-container">
                <h2>Проверьте свои знания по информационной безопасности</h2>
                <form id="securityTest">
                    
                    <!-- Вопрос 1 -->
                    <div class="question">
                        <p><strong>1. Какие три основных принципа составляют триаду информационной безопасности?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="checkbox" name="q1" id="q1a" value="a">
                                <label for="q1a">Конфиденциальность</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q1" id="q1b" value="b">
                                <label for="q1b">Целостность</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q1" id="q1c" value="c">
                                <label for="q1c">Доступность</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q1" id="q1d" value="d">
                                <label for="q1d">Анонимность</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q1" value="a,b,c">
                    </div>
                    
                    <!-- Вопрос 2 -->
                    <div class="question">
                        <p><strong>2. Как называется метод атаки, при котором злоумышленник пытается получить доступ к системе, используя множество возможных паролей?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q2" id="q2a" value="a">
                                <label for="q2a">Фишинг</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2b" value="b">
                                <label for="q2b">Брутфорс</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2c" value="c">
                                <label for="q2c">SQL-инъекция</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2d" value="d">
                                <label for="q2d">XSS</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q2" value="b">
                    </div>
                    
                    <!-- Вопрос 3 -->
                    <div class="question">
                        <p><strong>3. Какая технология позволяет безопасно передавать данные через открытые сети, создавая зашифрованный "туннель"?</strong></p>
                        <input type="text" id="q3_answer" class="text-answer" placeholder="Введите ответ">
                        <input type="hidden" id="correct_q3" value="VPN">
                    </div>
                    
                    <!-- Вопрос 4 -->
                    <div class="question">
                        <p><strong>4. Какие меры защиты вы бы реализовали для web-сервера? (Выберите все подходящие варианты)</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="checkbox" name="q4" id="q4a" value="a">
                                <label for="q4a">Настройка WAF (Web Application Firewall)</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q4" id="q4b" value="b">
                                <label for="q4b">Регулярное обновление ПО</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q4" id="q4c" value="c">
                                <label for="q4c">Отключение ненужных сервисов</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q4" id="q4d" value="d">
                                <label for="q4d">Использование HTTP вместо HTTPS</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q4" value="a,b,c">
                    </div>
                    
                    <!-- Вопрос 5 -->
                    <div class="question">
                        <p><strong>5. Опишите правило 3-2-1 для резервного копирования</strong></p>
                        <textarea id="q5_answer" class="text-answer" rows="4" placeholder="Опишите правило"></textarea>
                        <input type="hidden" id="correct_q5_keywords" value="3 копии,2 носителя,1 вне площадки,3 copies,2 media,1 offsite">
                    </div>
                    
                    <button type="button" onclick="checkSecurityTest()">Проверить ответы</button>
                </form>
                
                <div id="testResults" class="results"></div>
            </div>
        </div>
    </div>
</article>

<script>
function checkSecurityTest() {
    let score = 0;
    let resultsHTML = "<h3>Результаты теста:</h3><ol>";
    const keywordThreshold = 3; // Минимальное количество ключевых слов для зачета вопроса 5
    
    // Вопрос 1
    const q1Selected = Array.from(document.querySelectorAll('input[name="q1"]:checked')).map(el => el.value).sort().join(',');
    const q1Correct = document.getElementById('correct_q1').value.split(',').sort().join(',');
    if (q1Selected === q1Correct) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 1: Верно! Основные принципы ИБ: конфиденциальность, целостность и доступность.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 1: Неверно. Правильные ответы: конфиденциальность, целостность и доступность.</li>`;
    }
    
    // Вопрос 2
    const q2Selected = document.querySelector('input[name="q2"]:checked');
    if (q2Selected && q2Selected.value === document.getElementById('correct_q2').value) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 2: Правильно! Брутфорс-атака предполагает перебор паролей.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 2: Неверно. Правильный ответ: брутфорс.</li>`;
    }
    
    // Вопрос 3
    const q3Answer = document.getElementById('q3_answer').value.trim().toUpperCase();
    if (q3Answer === 'VPN') {
        score++;
        resultsHTML += `<li class="correct">Вопрос 3: Абсолютно верно! VPN создает зашифрованный туннель для безопасной передачи данных.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 3: Неверно. Правильный ответ: VPN.</li>`;
    }
    
    // Вопрос 4
    const q4Selected = Array.from(document.querySelectorAll('input[name="q4"]:checked')).map(el => el.value).sort().join(',');
    const q4Correct = document.getElementById('correct_q4').value.split(',').sort().join(',');
    if (q4Selected === q4Correct) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 4: Верно! WAF, обновления и отключение ненужных сервисов повышают безопасность.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 4: Неполный ответ. HTTP не является безопасным протоколом.</li>`;
    }
    
    // Вопрос 5 (анализ ключевых слов)
    const q5Answer = document.getElementById('q5_answer').value.toLowerCase();
    const keywords = document.getElementById('correct_q5_keywords').value.split(',');
    let foundKeywords = keywords.filter(word => q5Answer.includes(word.toLowerCase()));
    
    if (foundKeywords.length >= keywordThreshold) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 5: Принято! Вы описали ключевые элементы правила 3-2-1.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 5: Ответ недостаточно полный. Правило 3-2-1: 3 копии данных, 2 разных носителя, 1 копия вне площадки.</li>`;
    }
    
    resultsHTML += `</ol><p><strong>Итоговый результат: ${score} из 5 (${Math.round(score/5*100)}%)</strong></p>`;
    document.getElementById('testResults').innerHTML = resultsHTML;
    document.getElementById('testResults').style.display = 'block';
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>