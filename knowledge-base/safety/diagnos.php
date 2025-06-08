<?php 
$page_title = "Настройка и диагностика сетевых интерфейсов";
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
            <h2>Введение в настройку сетевых интерфейсов</h2>
            <p>Правильная настройка сетевых интерфейсов - фундаментальный навык системного администратора. Эта лекция охватывает все аспекты конфигурации и диагностики сетевых интерфейсов в различных операционных системах, а также методы устранения распространенных проблем.</p>

            <h2>Основные понятия</h2>
            <p>Сетевой интерфейс - это точка соединения между компьютером и сетью. Основные типы:</p>
            <ul>
                <li><strong>Физические интерфейсы</strong> (eth0, enp3s0, GigabitEthernet0/1)</li>
                <li><strong>Виртуальные интерфейсы</strong> (lo, VLAN, VPN, bridge)</li>
                <li><strong>Беспроводные интерфейсы</strong> (wlan0, wlp2s0)</li>
            </ul>

            <div class="os-tabs">
                <div class="os-tab active" onclick="showOsTab('linux')">Linux</div>
                <div class="os-tab" onclick="showOsTab('windows')">Windows</div>
                <div class="os-tab" onclick="showOsTab('cisco')">Cisco</div>
            </div>

            <div id="linux" class="os-content active">
                <h3>Настройка в Linux</h3>
                
                <h4>1. Просмотр интерфейсов</h4>
                <div class="command-block">
                    <span class="command">ip addr show</span><br>
                    <span class="command">ifconfig -a</span> <span class="comment"># устаревшая команда</span>
                </div>
                
                <h4>2. Временная настройка IP-адреса</h4>
                <div class="command-block">
                    <span class="command">sudo ip addr add 192.168.1.100/24 dev eth0</span><br>
                    <span class="command">sudo ip link set eth0 up</span>
                </div>
                
                <h4>3. Постоянная настройка (Netplan в Ubuntu)</h4>
                <div class="config-example">
                    <p>Файл /etc/netplan/01-netcfg.yaml:</p>
                    <pre>network:
  version: 2
  renderer: networkd
  ethernets:
    eth0:
      addresses: [192.168.1.100/24]
      gateway4: 192.168.1.1
      nameservers:
        addresses: [8.8.8.8, 8.8.4.4]</pre>
                    <p>Применить изменения:</p>
                    <div class="command-block">
                        <span class="command">sudo netplan apply</span>
                    </div>
                </div>
                
                <h4>4. Настройка маршрутов</h4>
                <div class="command-block">
                    <span class="command">ip route add 10.0.0.0/8 via 192.168.1.1 dev eth0</span><br>
                    <span class="command">ip route show</span>
                </div>
            </div>

            <div id="windows" class="os-content">
                <h3>Настройка в Windows</h3>
                
                <h4>1. Просмотр интерфейсов</h4>
                <div class="command-block">
                    <span class="command">ipconfig /all</span>
                </div>
                
                <h4>2. Настройка через PowerShell</h4>
                <div class="command-block">
                    <span class="command">Get-NetAdapter</span> <span class="comment"># список интерфейсов</span><br>
                    <span class="command">New-NetIPAddress -InterfaceAlias "Ethernet" -IPAddress 192.168.1.100 -PrefixLength 24 -DefaultGateway 192.168.1.1</span><br>
                    <span class="command">Set-DnsClientServerAddress -InterfaceAlias "Ethernet" -ServerAddresses 8.8.8.8,8.8.4.4</span>
                </div>
                
                <h4>3. Настройка маршрутов</h4>
                <div class="command-block">
                    <span class="command">route print</span> <span class="comment"># просмотр таблицы маршрутизации</span><br>
                    <span class="command">route add 10.0.0.0 mask 255.0.0.0 192.168.1.1</span>
                </div>
            </div>

            <div id="cisco" class="os-content">
                <h3>Настройка в Cisco IOS</h3>
                
                <h4>1. Настройка интерфейса</h4>
                <div class="command-block">
                    <span class="command">enable</span><br>
                    <span class="command">configure terminal</span><br>
                    <span class="command">interface GigabitEthernet0/1</span><br>
                    <span class="command">ip address 192.168.1.1 255.255.255.0</span><br>
                    <span class="command">no shutdown</span><br>
                    <span class="command">exit</span>
                </div>
                
                <h4>2. Настройка маршрута по умолчанию</h4>
                <div class="command-block">
                    <span class="command">ip route 0.0.0.0 0.0.0.0 192.168.0.1</span>
                </div>
            </div>

            <h2>Диагностика сетевых интерфейсов</h2>
            
            <div class="troubleshooting-step">
                <h3>1. Проверка состояния интерфейса</h3>
                <p><strong>Linux:</strong></p>
                <div class="command-block">
                    <span class="command">ip link show eth0</span><br>
                    <span class="comment"># Обратите внимание на состояние UP/DOWN</span>
                </div>
                
                <p><strong>Windows:</strong></p>
                <div class="command-block">
                    <span class="command">netsh interface show interface</span>
                </div>
            </div>
            
            <div class="troubleshooting-step">
                <h3>2. Проверка подключения</h3>
                <div class="command-block">
                    <span class="command">ping 8.8.8.8</span> <span class="comment"># проверка доступности</span><br>
                    <span class="command">traceroute 8.8.8.8</span> <span class="comment"># Linux/macOS</span><br>
                    <span class="command">tracert 8.8.8.8</span> <span class="comment"># Windows</span>
                </div>
            </div>
            
            <div class="troubleshooting-step">
                <h3>3. Проверка DNS</h3>
                <div class="command-block">
                    <span class="command">nslookup example.com</span><br>
                    <span class="command">dig example.com</span> <span class="comment"># Linux/macOS</span>
                </div>
            </div>
            
            <div class="troubleshooting-step">
                <h3>4. Анализ сетевого трафика</h3>
                <div class="command-block">
                    <span class="command">tcpdump -i eth0 -n</span> <span class="comment"># Linux</span><br>
                    <span class="command">wireshark</span> <span class="comment"># графический анализатор</span>
                </div>
            </div>
            
            <div class="troubleshooting-step">
                <h3>5. Проверка скорости интерфейса</h3>
                <div class="command-block">
                    <span class="command">ethtool eth0</span> <span class="comment"># Linux</span><br>
                    <span class="command">Get-NetAdapter | Select Name, LinkSpeed</span> <span class="comment"># Windows PowerShell</span>
                </div>
            </div>

            <h2>Распространенные проблемы и решения</h2>
            
            <div class="notice info">
                <h3>Интерфейс не поднимается (DOWN)</h3>
                <p><strong>Возможные причины:</strong> неправильный кабель, отключен порт на коммутаторе, драйверы</p>
                <p><strong>Решение:</strong> проверьте физическое подключение, состояние порта на коммутаторе, обновите драйверы</p>
            </div>
            
            <div class="notice info">
                <h3>Нет связи при правильной настройке IP</h3>
                <p><strong>Возможные причины:</strong> неправильный VLAN, firewall, неправильный MTU</p>
                <p><strong>Решение:</strong> проверьте настройки VLAN, отключите firewall для теста, проверьте MTU (ping с фрагментацией)</p>
            </div>
            
            <div class="notice warning">
                <h3>Медленная скорость соединения</h3>
                <p><strong>Возможные причины:</strong> дуплексные настройки, качество кабеля, перегрузка сети</p>
                <p><strong>Решение:</strong> проверьте настройки дуплекса (autonegotiation), замените кабель, проанализируйте трафик</p>
            </div>
            
            <div class="notice warning">
                <h3>Периодические разрывы соединения</h3>
                <p><strong>Возможные причины:</strong> проблемы с кабелем, перегрев оборудования, IP-конфликты</p>
                <p><strong>Решение:</strong> проверьте кабель на повреждения, обеспечьте охлаждение, проверьте на конфликты IP (arping)</p>
            </div>

            <div class="test-container">
                <h2>Проверьте свои знания</h2>
                <form id="networkTest">
                    
                    <!-- Вопрос 1 -->
                    <div class="question">
                        <p><strong>1. Какая команда в Linux показывает текущие IP-адреса интерфейсов?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q1" id="q1a" value="a">
                                <label for="q1a">ip addr show</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1b" value="b">
                                <label for="q1b">netstat -rn</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1c" value="c">
                                <label for="q1c">route -n</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1d" value="d">
                                <label for="q1d">ping -c 4</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q1" value="a">
                    </div>
                    
                    <!-- Вопрос 2 -->
                    <div class="question">
                        <p><strong>2. Какой инструмент используется для анализа сетевого трафика? (Выберите все верные варианты)</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="checkbox" name="q2" id="q2a" value="a">
                                <label for="q2a">tcpdump</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q2" id="q2b" value="b">
                                <label for="q2b">wireshark</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q2" id="q2c" value="c">
                                <label for="q2c">ping</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q2" id="q2d" value="d">
                                <label for="q2d">traceroute</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q2" value="a,b">
                    </div>
                    
                    <!-- Вопрос 3 -->
                    <div class="question">
                        <p><strong>3. Какой командой в Windows можно настроить статический IP-адрес?</strong></p>
                        <input type="text" id="q3_answer" class="text-answer" placeholder="Введите команду">
                        <input type="hidden" id="correct_q3" value="New-NetIPAddress">
                    </div>
                    
                    <!-- Вопрос 4 -->
                    <div class="question">
                        <p><strong>4. Опишите последовательность действий для диагностики проблемы "нет интернета"</strong></p>
                        <textarea id="q4_answer" class="text-answer" rows="4" placeholder="Опишите шаги"></textarea>
                        <input type="hidden" id="correct_q4_keywords" value="ping,ip,dns,маршрут,интерфейс,кабель">
                    </div>
                    
                    <!-- Вопрос 5 -->
                    <div class="question">
                        <p><strong>5. Какой командой в Cisco IOS включается интерфейс?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q5" id="q5a" value="a">
                                <label for="q5a">interface up</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q5" id="q5b" value="b">
                                <label for="q5b">enable interface</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q5" id="q5c" value="c">
                                <label for="q5c">no shutdown</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q5" id="q5d" value="d">
                                <label for="q5d">activate</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q5" value="c">
                    </div>
                    
                    <button type="button" onclick="checkNetworkTest()">Проверить ответы</button>
                </form>
                
                <div id="testResults" class="results"></div>
            </div>
        </div>
    </div>
</article>

<script>
function showOsTab(tabName) {
    // Скрыть все вкладки
    document.querySelectorAll('.os-content').forEach(tab => {
        tab.classList.remove('active');
    });
    
    // Убрать активный класс у всех кнопок
    document.querySelectorAll('.os-tab').forEach(tab => {
        tab.classList.remove('active');
    });
    
    // Показать выбранную вкладку
    document.getElementById(tabName).classList.add('active');
    
    // Сделать кнопку активной
    event.currentTarget.classList.add('active');
}

function checkNetworkTest() {
    let score = 0;
    let resultsHTML = "<h3>Результаты теста:</h3><ol>";
    const keywordThreshold = 3; // Минимальное количество ключевых слов для зачета вопроса 4
    
    // Вопрос 1
    const q1Selected = document.querySelector('input[name="q1"]:checked');
    if (q1Selected && q1Selected.value === document.getElementById('correct_q1').value) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 1: Верно! "ip addr show" показывает IP-адреса интерфейсов.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 1: Неверно. Правильный ответ: "ip addr show".</li>`;
    }
    
    // Вопрос 2 (множественный выбор)
    const q2Selected = Array.from(document.querySelectorAll('input[name="q2"]:checked')).map(el => el.value).sort().join(',');
    const q2Correct = document.getElementById('correct_q2').value.split(',').sort().join(',');
    if (q2Selected === q2Correct) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 2: Правильно! tcpdump и wireshark используются для анализа трафика.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 2: Неполный ответ. tcpdump и wireshark используются для анализа трафика.</li>`;
    }
    
    // Вопрос 3
    const q3Answer = document.getElementById('q3_answer').value.trim();
    if (q3Answer.toLowerCase().includes('new-netipaddress')) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 3: Верно! New-NetIPAddress настраивает статический IP в Windows.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 3: Неверно. Правильный ответ: New-NetIPAddress.</li>`;
    }
    
    // Вопрос 4 (анализ ключевых слов)
    const q4Answer = document.getElementById('q4_answer').value.toLowerCase();
    const keywords = document.getElementById('correct_q4_keywords').value.split(',');
    let foundKeywords = keywords.filter(word => q4Answer.includes(word));
    
    if (foundKeywords.length >= keywordThreshold) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 4: Принято! Вы указали ключевые аспекты: ${foundKeywords.join(', ')}.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 4: Ответ недостаточно полный. Ожидались упоминания: ping, ip, dns, маршрут, интерфейс, кабель.</li>`;
    }
    
    // Вопрос 5
    const q5Selected = document.querySelector('input[name="q5"]:checked');
    if (q5Selected && q5Selected.value === document.getElementById('correct_q5').value) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 5: Абсолютно верно! "no shutdown" включает интерфейс в Cisco IOS.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 5: Неверно. Правильный ответ: "no shutdown".</li>`;
    }
    
    resultsHTML += `</ol><p><strong>Итоговый результат: ${score} из 5 (${Math.round(score/5*100)}%)</strong></p>`;
    document.getElementById('testResults').innerHTML = resultsHTML;
    document.getElementById('testResults').style.display = 'block';
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>