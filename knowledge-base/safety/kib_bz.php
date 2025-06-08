<?php
$page_title = "Кибербезопасность в корпоративной среде: полное руководство для системных администраторов";
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
        background-color: #f5f7fa !important;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        line-height: 1.6;
    }
    
    .centered-content {
        max-width: 900px;
        margin: 0 auto;
        padding: 30px;
        background-color: #ffffff;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
        border-radius: 8px;
    }
    
    .kb-article h1 {
        color: #2d3748;
        border-bottom: 2px solid #3182ce;
        padding-bottom: 15px;
        margin-top: 0;
        font-size: 2.2rem;
    }
    
    h2 {
        color: #3182ce;
        margin-top: 40px;
        font-size: 1.8rem;
        border-left: 4px solid #3182ce;
        padding-left: 15px;
    }
    
    h3 {
        color: #2d3748;
        margin-top: 30px;
        font-size: 1.4rem;
    }
    
    .meta {
        color: #718096;
        font-size: 0.95rem;
        margin-bottom: 25px;
        display: flex;
        gap: 20px;
        padding-bottom: 15px;
        border-bottom: 1px solid #e2e8f0;
    }
    
    .infographic {
        margin: 30px 0;
        padding: 20px;
        background-color: #f8fafc;
        border-radius: 8px;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
    }
    
    .method-card {
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 8px;
        border-left: 4px solid #3182ce;
        margin: 15px 0;
        transition: transform 0.3s ease;
    }
    
    .method-card:hover {
        transform: translateY(-3px);
    }
    
    .code-example {
        background-color: #2d3748;
        color: #f7fafc;
        padding: 15px;
        border-radius: 6px;
        font-family: 'Courier New', Courier, monospace;
        overflow-x: auto;
        margin: 20px 0;
    }
    
    .code-comment {
        color: #a0aec0;
    }
    
    .security-alert {
        padding: 20px;
        margin: 25px 0;
        border-left: 4px solid #e53e3e;
        background-color: #fff5f5;
        border-radius: 6px;
    }
    
    .best-practice {
        padding: 20px;
        margin: 25px 0;
        border-left: 4px solid #38a169;
        background-color: #f0fff4;
        border-radius: 6px;
    }
    
    .comparison-table {
        width: 100%;
        border-collapse: collapse;
        margin: 25px 0;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }
    
    .comparison-table th {
        background-color: #3182ce;
        color: white;
        font-weight: 500;
        padding: 12px 15px;
    }
    
    .comparison-table td {
        border: 1px solid #e2e8f0;
        padding: 12px 15px;
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
    
    .option input[type="radio"],
    .option input[type="checkbox"] {
        appearance: none;
        width: 18px;
        height: 18px;
        border: 2px solid #a0aec0;
        border-radius: 50%;
        margin-right: 12px;
        cursor: pointer;
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
        transition: background-color 0.3s;
    }
    
    button[type="button"]:hover {
        background-color: #2b6cb0;
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
        .centered-content {
            padding: 20px;
        }
        
        .infographic {
            flex-direction: column;
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
            <span>Время чтения: 20-25 минут</span>
        </div>

        <div class="content">
            <h2>Основы кибербезопасности: современные вызовы</h2>
            <p>Кибербезопасность в современном корпоративном мире перешла из разряда технической необходимости в стратегический приоритет бизнеса. С ростом цифровизации и переходом бизнес-процессов в онлайн, риски кибератак стали одной из главных угроз для организаций любого масштаба.</p>
            
            <div class="infographic">
                <div class="infographic-item">
                    <div class="infographic-number">68%</div>
                    <div class="infographic-label">компаний отмечают рост киберугроз за последний год</div>
                </div>
                <div class="infographic-item">
                    <div class="infographic-number">$4.35 млн</div>
                    <div class="infographic-label">средняя стоимость утечки данных в 2023 году</div>
                </div>
                <div class="infographic-item">
                    <div class="infographic-number">287 дней</div>
                    <div class="infographic-label">среднее время обнаружения утечки</div>
                </div>
            </div>
            
            <div class="security-alert">
                <h3>Эволюция киберугроз</h3>
                <p>Современные киберугрозы становятся все более изощренными и целевыми. Если раньше атаки носили массовый характер, то сегодня 83% атак являются целевыми (таргетированными). Злоумышленники проводят тщательную разведку, изучая уязвимости конкретной организации, ее сотрудников и бизнес-процессы.</p>
            </div>

            <h2>Основные угрозы информационной безопасности</h2>
            
            <div class="threat-card">
                <h3>1. Фишинг и социальная инженерия</h3>
                <p>Фишинг остается самым распространенным методом атаки - 36% всех утечек данных начинаются с фишинга. Современные фишинговые атаки используют:</p>
                <ul>
                    <li>Персонализированные письма (spear phishing)</li>
                    <li>Поддельные сайты-двойники</li>
                    <li>Сообщения в корпоративных мессенджерах</li>
                    <li>Имитацию голоса руководителей (vishing)</li>
                </ul>
                <p>По данным Verizon DBIR, 74% успешных атак включают человеческий фактор - ошибки сотрудников или их сознательные действия.</p>
            </div>
            
            <div class="threat-card">
                <h3>2. Вредоносное ПО (Malware)</h3>
                <p>Современное вредоносное ПО эволюционировало от простых вирусов до сложных многоуровневых угроз:</p>
                <ul>
                    <li><strong>Ransomware:</strong> Шифровальщики, требующие выкуп (WannaCry, Petya, LockBit)</li>
                    <li><strong>Spyware:</strong> Шпионские программы для кражи данных</li>
                    <li><strong>Botnets:</strong> Сети зараженных компьютеров для DDoS-атак</li>
                    <li><strong>Fileless malware:</strong> Вредоносный код в оперативной памяти без записи на диск</li>
                </ul>
                <p>В 2023 году каждые 11 секунд происходила новая ransomware-атака на бизнес.</p>
            </div>
            
            <div class="threat-card">
                <h3>3. Уязвимости программного обеспечения</h3>
                <p>Незакрытые уязвимости в ПО - одна из главных причин успешных атак:</p>
                <ul>
                    <li>Критические уязвимости в популярном ПО (например, Log4j)</li>
                    <li>Устаревшие системы без поддержки (Windows 7, Server 2008)</li>
                    <li>Ошибки конфигурации (открытые порты, стандартные пароли)</li>
                    <li>Уязвимости нулевого дня (zero-day)</li>
                </ul>
                <p>60% компаний не устанавливают критические обновления безопасности в течение первого месяца после выпуска.</p>
            </div>

            <h2>Стратегии защиты корпоративной инфраструктуры</h2>
            
            <div class="protection-card">
                <h3>1. Многоуровневая защита (Defense in Depth)</h3>
                <p>Принцип многоуровневой защиты предполагает создание нескольких рубежей безопасности:</p>
                <ol>
                    <li><strong>Периметровая защита:</strong> Межсетевые экраны (Firewall), IPS/IDS системы</li>
                    <li><strong>Защита конечных точек:</strong> Антивирусы, EDR-решения</li>
                    <li><strong>Контроль доступа:</strong> Ролевая модель, MFA, принцип минимальных привилегий</li>
                    <li><strong>Шифрование данных:</strong> TLS, VPN, шифрование дисков</li>
                    <li><strong>Мониторинг и анализ:</strong> SIEM-системы, поведенческий анализ</li>
                </ol>
                <p>Такой подход гарантирует, что при компрометации одного уровня остальные продолжат защищать инфраструктуру.</p>
            </div>
            
            <div class="protection-card">
                <h3>2. Управление уязвимостями</h3>
                <p>Эффективный процесс управления уязвимостями включает:</p>
                <table class="comparison-table">
                    <tr>
                        <th>Этап</th>
                        <th>Методы</th>
                        <th>Инструменты</th>
                    </tr>
                    <tr>
                        <td>Выявление</td>
                        <td>Сканирование сети, аудит конфигураций</td>
                        <td>Nessus, OpenVAS, Qualys</td>
                    </tr>
                    <tr>
                        <td>Оценка</td>
                        <td>Определение критичности, оценка рисков</td>
                        <td>CVSS, Risk assessment матрицы</td>
                    </tr>
                    <tr>
                        <td>Лечение</td>
                        <td>Установка обновлений, настройка WAF</td>
                        <td>WSUS, SCCM, Ansible</td>
                    </tr>
                    <tr>
                        <td>Мониторинг</td>
                        <td>Постоянный контроль новых угроз</td>
                        <td>SIEM, Threat intelligence платформы</td>
                    </tr>
                </table>
                <p>Регулярное обновление ПО снижает риск успешной атаки на 80%.</p>
            </div>
            
            <div class="protection-card">
                <h3>3. Идентификация и аутентификация</h3>
                <p>Современные методы контроля доступа:</p>
                <ul>
                    <li><strong>Многофакторная аутентификация (MFA):</strong> Комбинация пароля + SMS/токен/биометрия</li>
                    <li><strong>Единый вход (SSO):</strong> Централизованное управление доступом</li>
                    <li><strong>Адаптивная аутентификация:</strong> Анализ поведения пользователя</li>
                    <li><strong>Zero Trust:</strong> Принцип "никому не доверяй, проверяй всех"</li>
                </ul>
                <p>Внедрение MFA блокирует 99.9% автоматических атак на учетные записи.</p>
            </div>

            <h2>Практическая реализация мер безопасности</h2>
            
            <h3>1. Настройка групповых политик безопасности в Active Directory</h3>
            <div class="code-example">
                <span class="code-comment"># Пример настройки политик паролей через PowerShell</span><br>
                Set-ADDefaultDomainPasswordPolicy -Identity domain.com `<br>
                &nbsp;&nbsp;-MinPasswordLength 12 `<br>
                &nbsp;&nbsp;-ComplexityEnabled $true `<br>
                &nbsp;&nbsp;-LockoutThreshold 5 `<br>
                &nbsp;&nbsp;-LockoutDuration 00:30:00 `<br>
                &nbsp;&nbsp;-MinPasswordAge 1 `<br>
                &nbsp;&nbsp;-MaxPasswordAge 90<br>
                <br>
                <span class="code-comment"># Включение аудитa критичных событий</span><br>
                auditpol /set /subcategory:"Logon" /success:enable /failure:enable<br>
                auditpol /set /subcategory:"Account Lockout" /success:enable /failure:enable
            </div>
            
            <h3>2. Мониторинг безопасности с помощью SIEM</h3>
            <div class="code-example">
                <span class="code-comment"># Пример правила для обнаружения bruteforce-атак в Splunk</span><br>
                index=wineventlog EventCode=4625<br>
                | stats count by _time, user, src_ip<br>
                | where count > 5<br>
                | table _time, user, src_ip, count<br>
                <br>
                <span class="code-comment"># Создание алерта на подозрительную активность</span><br>
                index=main (EventCode=4688 OR EventCode=4104)<br>
                | search ProcessName IN ("powershell.exe", "cmd.exe", "wmic.exe")<br>
                | stats count by host, user, ProcessName
            </div>
            
            <h3>3. Автоматизация реагирования на инциденты</h3>
            <div class="code-example">
                <span class="code-comment"># PowerShell скрипт для блокировки компрометированного пользователя</span><br>
                $compromisedUser = Get-ADUser -Identity "jdoe"<br>
                if ($compromisedUser.Enabled) {<br>
                &nbsp;&nbsp;Disable-ADAccount -Identity $compromisedUser<br>
                &nbsp;&nbsp;$userSessions = quser /server:$env:COMPUTERNAME | Where {$_ -match $compromisedUser.SamAccountName}<br>
                &nbsp;&nbsp;foreach ($session in $userSessions) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;$id = ($session -split '\s+')[2]<br>
                &nbsp;&nbsp;&nbsp;&nbsp;logoff $id /server:$env:COMPUTERNAME<br>
                &nbsp;&nbsp;}<br>
                &nbsp;&nbsp;Send-MailMessage -From "security@company.com" -To "soc@company.com" `<br>
                &nbsp;&nbsp;&nbsp;&nbsp;-Subject "[ALERT] User $($compromisedUser.SamAccountName) disabled" `<br>
                &nbsp;&nbsp;&nbsp;&nbsp;-Body "Account disabled due to security incident" `<br>
                &nbsp;&nbsp;&nbsp;&nbsp;-Priority High<br>
                }
            </div>

            <div class="test-container">
                <h2>Проверка знаний по кибербезопасности</h2>
                <form id="cyberSecurityTest">
                    
                    <div class="question">
                        <p><strong>1. Какие из перечисленных мер наиболее эффективны против фишинга? (Выберите 3 варианта)</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="checkbox" name="q1" id="q1a" value="a">
                                <label for="q1a">Обучение сотрудников</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q1" id="q1b" value="b">
                                <label for="q1b">Многофакторная аутентификация</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q1" id="q1c" value="c">
                                <label for="q1c">Антифишинговые фильтры почты</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q1" id="q1d" value="d">
                                <label for="q1d">Увеличение длины паролей</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q1" value="a,b,c">
                    </div>
                    
                    <div class="question">
                        <p><strong>2. Какой принцип безопасности описывается как "никому не доверяй, проверяй всех"?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q2" id="q2a" value="a">
                                <label for="q2a">Defense in Depth</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2b" value="b">
                                <label for="q2b">Zero Trust</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2c" value="c">
                                <label for="q2c">Least Privilege</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2d" value="d">
                                <label for="q2d">Need to Know</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q2" value="b">
                    </div>
                    
                    <div class="question">
                        <p><strong>3. Какие три основных типа киберугроз наиболее опасны для бизнеса в 2023 году?</strong></p>
                        <textarea id="q3_answer" class="text-answer" rows="4"></textarea>
                        <input type="hidden" id="correct_q3_keywords" value="фишинг,ransomware,уязвимости,социальная инженерия,вредоносное по">
                    </div>
                    
                    <div class="question">
                        <p><strong>4. Какие технологии относятся к EDR-решениям? (Выберите все верные)</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="checkbox" name="q4" id="q4a" value="a">
                                <label for="q4a">CrowdStrike Falcon</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q4" id="q4b" value="b">
                                <label for="q4b">Microsoft Defender ATP</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q4" id="q4c" value="c">
                                <label for="q4c">Nessus</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q4" id="q4d" value="d">
                                <label for="q4d">Carbon Black</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q4" value="a,b,d">
                    </div>
                    
                    <button type="button" onclick="checkCyberSecurityTest()">Проверить ответы</button>
                </form>
                
                <div id="testResults" class="results"></div>
            </div>
        </div>
    </div>
</article>

<script>
function checkCyberSecurityTest() {
    let score = 0;
    let resultsHTML = "<h3>Результаты теста:</h3><ol>";
    const keywordThreshold = 2;
    
    // Вопрос 1
    const q1Selected = Array.from(document.querySelectorAll('input[name="q1"]:checked')).map(el => el.value).sort().join(',');
    const q1Correct = document.getElementById('correct_q1').value.split(',').sort().join(',');
    if (q1Selected === q1Correct) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 1: Верно! Обучение, MFA и антифишинговые фильтры - ключевые меры против фишинга.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 1: Неполный ответ. Правильные варианты: обучение сотрудников, MFA, антифишинговые фильтры.</li>`;
    }
    
    // Вопрос 2
    const q2Selected = document.querySelector('input[name="q2"]:checked');
    if (q2Selected && q2Selected.value === document.getElementById('correct_q2').value) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 2: Правильно! Zero Trust - это принцип "никому не доверяй, проверяй всех".</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 2: Неверно. Правильный ответ: Zero Trust.</li>`;
    }
    
    // Вопрос 3
    const q3Answer = document.getElementById('q3_answer').value.toLowerCase();
    const q3Keywords = document.getElementById('correct_q3_keywords').value.split(',');
    let foundKeywords = q3Keywords.filter(word => q3Answer.includes(word));
    
    if (foundKeywords.length >= keywordThreshold) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 3: Принято! Вы указали ключевые угрозы: ${foundKeywords.join(', ')}.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 3: Ответ недостаточно полный. Основные угрозы: фишинг, ransomware, уязвимости ПО.</li>`;
    }
    
    // Вопрос 4
    const q4Selected = Array.from(document.querySelectorAll('input[name="q4"]:checked')).map(el => el.value).sort().join(',');
    const q4Correct = document.getElementById('correct_q4').value.split(',').sort().join(',');
    if (q4Selected === q4Correct) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 4: Абсолютно верно! CrowdStrike, Defender ATP и Carbon Black - это EDR-решения.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 4: Неполный ответ. EDR-решения: CrowdStrike Falcon, Microsoft Defender ATP, Carbon Black.</li>`;
    }
    
    resultsHTML += `</ol><p><strong>Итоговый результат: ${score} из 4 (${Math.round(score/4*100)}%)</strong></p>`;
    document.getElementById('testResults').innerHTML = resultsHTML;
    document.getElementById('testResults').style.display = 'block';
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>