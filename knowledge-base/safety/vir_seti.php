<?php
$page_title = "Виртуальные сети: VLAN, VPN, VXLAN";
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
    
    .kb-article h2 {
        color: #3498db;
        margin-top: 30px;
    }
    
    .kb-article h3 {
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
    
    .meta a {
        color: #3182ce;
        text-decoration: none;
    }
    
    .meta a:hover {
        text-decoration: underline;
    }

    /* Стили для блоков с кодом и конфигурацией */
    .command-block, .cli-example {
        background-color: #2d3748;
        color: #e2e8f0;
        padding: 15px;
        border-radius: 6px;
        font-family: monospace;
        margin: 15px 0;
        overflow-x: auto;
    }
    
    .command, .cli-command {
        color: #81e6d9;
    }
    
    .comment, .cli-comment {
        color: #a0aec0;
        font-style: italic;
    }
    
    .config-example, .config-block {
        background-color: #f8fafc;
        border-left: 4px solid #3182ce;
        padding: 15px;
        margin: 15px 0;
        border-radius: 0 4px 4px 0;
    }
    
    /* Стили для таблиц */
    .protocol-comparison, .comparison-table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        font-size: 0.95rem;
    }
    
    .protocol-comparison th, 
    .protocol-comparison td,
    .comparison-table th,
    .comparison-table td {
        border: 1px solid #ddd;
        padding: 12px;
        text-align: left;
    }
    
    .protocol-comparison th,
    .comparison-table th {
        background-color: #f2f2f2;
        font-weight: 600;
    }
    
    .protocol-comparison tr:nth-child(even),
    .comparison-table tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    
    /* Стили для вкладок */
    .vendor-tabs, .os-tabs {
        display: flex;
        margin-bottom: 20px;
        border-bottom: 1px solid #e2e8f0;
    }
    
    .vendor-tab, .os-tab {
        padding: 10px 20px;
        cursor: pointer;
        border-bottom: 3px solid transparent;
        transition: all 0.3s ease;
    }
    
    .vendor-tab:hover, .os-tab:hover {
        background-color: #ebf8ff;
    }
    
    .vendor-tab.active, .os-tab.active {
        border-bottom: 3px solid #3182ce;
        font-weight: 600;
    }
    
    .vendor-content, .os-content {
        display: none;
    }
    
    .vendor-content.active, .os-content.active {
        display: block;
    }
    
    /* Стили для уведомлений и предупреждений */
    .notice, .security-note {
        padding: 15px;
        margin: 20px 0;
        border-left: 4px solid;
        border-radius: 4px;
    }
    
    .notice.info, .troubleshooting-step {
        background-color: #ebf8ff;
        border-color: #3182ce;
    }
    
    .notice.warning, .security-note {
        background-color: #fff5f5;
        border-color: #e53e3e;
    }
    
    .notice.success {
        background-color: #f0fff4;
        border-color: #38a169;
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
    
    .option input[type="checkbox"]:checked::after {
        border-radius: 2px;
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
        font-family: inherit;
    }
    
    .text-answer:focus {
        border-color: #3182ce;
        box-shadow: 0 0 0 3px rgba(49, 130, 206, 0.2);
        outline: none;
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
    
    /* Адаптивные стили */
    @media (max-width: 768px) {
        .centered-content {
            padding: 15px;
        }
        
        .test-container {
            padding: 15px;
        }
        
        .vendor-tabs, .os-tabs {
            flex-direction: column;
        }
        
        .vendor-tab, .os-tab {
            padding: 10px;
        }
        
        .protocol-comparison, .comparison-table {
            font-size: 0.85rem;
        }
        
        .protocol-comparison th, 
        .protocol-comparison td,
        .comparison-table th,
        .comparison-table td {
            padding: 8px;
        }
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
            <h2>Введение в виртуальные сети</h2>
            <p>Виртуальные сети позволяют создавать логические изолированные сетевые среды поверх физической инфраструктуры. Они обеспечивают гибкость, безопасность и эффективное использование ресурсов.</p>
            
            <div class="network-diagram">
                <p><strong>Типовая архитектура виртуальной сети:</strong></p>
                <p>Физическая инфраструктура → Гипервизор → Виртуальные коммутаторы → Виртуальные сети</p>
            </div>

            <h2>Сравнение технологий виртуальных сетей</h2>
            
            <table class="protocol-comparison">
                <tr>
                    <th>Технология</th>
                    <th>Уровень</th>
                    <th>Использование</th>
                    <th>Масштабируемость</th>
                    <th>Сложность</th>
                </tr>
                <tr>
                    <td>VLAN</td>
                    <td>L2 (Data Link)</td>
                    <td>Локальные сети</td>
                    <td>До 4094 VLAN</td>
                    <td>Низкая</td>
                </tr>
                <tr>
                    <td>VPN</td>
                    <td>L3 (Network) и выше</td>
                    <td>Удаленный доступ, site-to-site</td>
                    <td>Высокая</td>
                    <td>Средняя</td>
                </tr>
                <tr>
                    <td>VXLAN</td>
                    <td>L2 over L3</td>
                    <td>ЦОД, облачные среды</td>
                    <td>До 16 млн сегментов</td>
                    <td>Высокая</td>
                </tr>
            </table>

            <h2>Настройка VLAN</h2>
            
            <div class="config-block">
                <h3>Основные понятия VLAN</h3>
                <ul>
                    <li><strong>VLAN ID:</strong> идентификатор виртуальной сети (1-4094)</li>
                    <li><strong>Access Port:</strong> порт, принадлежащий одному VLAN</li>
                    <li><strong>Trunk Port:</strong> порт, передающий трафик нескольких VLAN</li>
                    <li><strong>Native VLAN:</strong> VLAN для untagged трафика на trunk</li>
                </ul>
            </div>
            
            <div class="vendor-tabs">
                <div class="vendor-tab active" onclick="showVendorTab('cisco-vlan')">Cisco</div>
                <div class="vendor-tab" onclick="showVendorTab('hp-vlan')">HP/Aruba</div>
                <div class="vendor-tab" onclick="showVendorTab('linux-vlan')">Linux</div>
            </div>
            
            <div id="cisco-vlan" class="vendor-content active">
                <h3>Настройка VLAN на Cisco</h3>
                <div class="cli-example">
                    <span class="cli-command">enable</span><br>
                    <span class="cli-command">configure terminal</span><br>
                    <span class="cli-command">vlan 10</span><br>
                    <span class="cli-command">name SALES</span><br>
                    <span class="cli-command">exit</span><br>
                    <span class="cli-command">interface gigabitethernet 1/0/1</span><br>
                    <span class="cli-command">switchport mode access</span><br>
                    <span class="cli-command">switchport access vlan 10</span><br>
                    <span class="cli-command">interface gigabitethernet 1/0/24</span><br>
                    <span class="cli-command">switchport mode trunk</span><br>
                    <span class="cli-command">switchport trunk allowed vlan 10,20,30</span><br>
                    <span class="cli-command">switchport trunk native vlan 99</span>
                </div>
            </div>
            
            <div id="hp-vlan" class="vendor-content">
                <h3>Настройка VLAN на HP/Aruba</h3>
                <div class="cli-example">
                    <span class="cli-command">configure</span><br>
                    <span class="cli-command">vlan 10</span><br>
                    <span class="cli-command">name "SALES"</span><br>
                    <span class="cli-command">tagged 24</span><br>
                    <span class="cli-command">untagged 1</span><br>
                    <span class="cli-command">exit</span>
                </div>
            </div>
            
            <div id="linux-vlan" class="vendor-content">
                <h3>Настройка VLAN в Linux</h3>
                <div class="cli-example">
                    <span class="cli-comment"># Установка пакетов</span><br>
                    <span class="cli-command">sudo apt install vlan</span><br><br>
                    <span class="cli-comment"># Создание VLAN интерфейса</span><br>
                    <span class="cli-command">sudo vconfig add eth0 10</span><br>
                    <span class="cli-command">sudo ip addr add 192.168.10.1/24 dev eth0.10</span><br>
                    <span class="cli-command">sudo ip link set up eth0.10</span>
                </div>
            </div>

            <h2>Настройка VPN</h2>
            
            <div class="config-block">
                <h3>Типы VPN</h3>
                <ul>
                    <li><strong>Site-to-Site:</strong> соединение между сетями</li>
                    <li><strong>Remote Access:</strong> подключение удаленных пользователей</li>
                    <li><strong>SSL VPN:</strong> доступ через веб-браузер</li>
                    <li><strong>IPsec VPN:</strong> защищенный туннель на сетевом уровне</li>
                </ul>
            </div>
            
            <h3>Настройка IPsec VPN (StrongSwan)</h3>
            <div class="cli-example">
                <span class="cli-comment"># Установка StrongSwan</span><br>
                <span class="cli-command">sudo apt install strongswan</span><br><br>
                <span class="cli-comment"># Конфигурация /etc/ipsec.conf</span><br>
                <span class="cli-command">conn myvpn</span><br>
                <span class="cli-command">  left=192.168.1.1</span><br>
                <span class="cli-command">  leftsubnet=192.168.1.0/24</span><br>
                <span class="cli-command">  right=203.0.113.2</span><br>
                <span class="cli-command">  rightsubnet=10.0.0.0/24</span><br>
                <span class="cli-command">  keyexchange=ikev2</span><br>
                <span class="cli-command">  ike=aes256-sha1-modp1024</span><br>
                <span class="cli-command">  esp=aes256-sha1</span><br>
                <span class="cli-command">  authby=secret</span><br>
                <span class="cli-command">  auto=start</span>
            </div>
            
            <div class="security-note">
                <h3>Рекомендации по безопасности VPN</h3>
                <ul>
                    <li>Используйте IKEv2 вместо устаревших протоколов</li>
                    <li>Применяйте стойкие алгоритмы шифрования (AES-256)</li>
                    <li>Регулярно обновляйте PSK или сертификаты</li>
                    <li>Ограничивайте доступ по MFA</li>
                </ul>
            </div>

            <h2>Настройка VXLAN</h2>
            
            <div class="config-block">
                <h3>Основы VXLAN</h3>
                <ul>
                    <li><strong>VNI (VXLAN Network Identifier):</strong> 24-битный идентификатор сети</li>
                    <li><strong>VTEP (VXLAN Tunnel End Point):</strong> конечные точки туннеля</li>
                    <li><strong>Underlay сеть:</strong> физическая инфраструктура</li>
                    <li><strong>Overlay сеть:</strong> виртуальная сеть поверх underlay</li>
                </ul>
            </div>
            
            <h3>Настройка VXLAN в Linux</h3>
            <div class="cli-example">
                <span class="cli-comment"># Создание VXLAN интерфейса</span><br>
                <span class="cli-command">sudo ip link add vxlan0 type vxlan id 100 dstport 4789 remote 203.0.113.2 local 192.168.1.1 dev eth0</span><br>
                <span class="cli-command">sudo ip addr add 10.0.0.1/24 dev vxlan0</span><br>
                <span class="cli-command">sudo ip link set up vxlan0</span><br><br>
                <span class="cli-comment"># Проверка состояния</span><br>
                <span class="cli-command">ip -d link show vxlan0</span>
            </div>

            <h2>Практические сценарии</h2>
            
            <div class="config-block">
                <h3>1. Сегментация сети с VLAN</h3>
                <p><strong>Задача:</strong> Разделить сеть на отделы (Финансы, HR, IT)</p>
                <ul>
                    <li>Создать VLAN 10 (Финансы), VLAN 20 (HR), VLAN 30 (IT)</li>
                    <li>Настроить межVLAN маршрутизацию</li>
                    <li>Применить ACL для ограничения доступа</li>
                </ul>
            </div>
            
            <div class="config-block">
                <h3>2. Защищенное соединение филиалов через VPN</h3>
                <p><strong>Задача:</strong> Соединить офисы в Москве и СПб</p>
                <ul>
                    <li>Настроить site-to-site IPsec VPN</li>
                    <li>Обеспечить failover через второй канал</li>
                    <li>Реализовать QoS для VoIP трафика</li>
                </ul>
            </div>
            
            <div class="config-block">
                <h3>3. Построение overlay сети с VXLAN</h3>
                <p><strong>Задача:</strong> Создать единую L2 сеть между ЦОД</p>
                <ul>
                    <li>Развернуть VTEP на граничных маршрутизаторах</li>
                    <li>Настроить BGP EVPN для управления MAC-адресами</li>
                    <li>Обеспечить отказоустойчивость</li>
                </ul>
            </div>

            <div class="test-container">
                <h2>Проверьте свои знания</h2>
                <form id="virtualNetworksTest">
                    
                    <!-- Вопрос 1 -->
                    <div class="question">
                        <p><strong>1. Какой максимальный идентификатор VLAN можно использовать?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q1" id="q1a" value="a">
                                <label for="q1a">1024</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1b" value="b">
                                <label for="q1b">4094</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1c" value="c">
                                <label for="q1c">65535</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1d" value="d">
                                <label for="q1d">16777215</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q1" value="b">
                    </div>
                    
                    <!-- Вопрос 2 -->
                    <div class="question">
                        <p><strong>2. Какие типы VPN вы знаете? (Выберите все верные варианты)</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="checkbox" name="q2" id="q2a" value="a">
                                <label for="q2a">Site-to-Site</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q2" id="q2b" value="b">
                                <label for="q2b">Remote Access</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q2" id="q2c" value="c">
                                <label for="q2c">SSL VPN</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q2" id="q2d" value="d">
                                <label for="q2d">MPLS VPN</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q2" value="a,b,c,d">
                    </div>
                    
                    <!-- Вопрос 3 -->
                    <div class="question">
                        <p><strong>3. Какой командой в Linux создать VLAN интерфейс?</strong></p>
                        <input type="text" id="q3_answer" class="text-answer" placeholder="Введите команду">
                        <input type="hidden" id="correct_q3_keywords" value="vconfig add,vlan">
                    </div>
                    
                    <!-- Вопрос 4 -->
                    <div class="question">
                        <p><strong>4. В чем преимущество VXLAN перед VLAN?</strong></p>
                        <textarea id="q4_answer" class="text-answer" rows="4" placeholder="Опишите преимущества"></textarea>
                        <input type="hidden" id="correct_q4_keywords" value="масштабируемость,сегментов,миллионы,overlay">
                    </div>
                    
                    <!-- Вопрос 5 -->
                    <div class="question">
                        <p><strong>5. Какой порт используется по умолчанию для VXLAN?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q5" id="q5a" value="a">
                                <label for="q5a">4789</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q5" id="q5b" value="b">
                                <label for="q5b">500</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q5" id="q5c" value="c">
                                <label for="q5c">1701</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q5" id="q5d" value="d">
                                <label for="q5d">1194</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q5" value="a">
                    </div>
                    
                    <button type="button" onclick="checkVirtualNetworksTest()">Проверить ответы</button>
                </form>
                
                <div id="testResults" class="results"></div>
            </div>
        </div>
    </div>
</article>

<script>
function showVendorTab(tabName) {
    // Скрыть все вкладки
    document.querySelectorAll('.vendor-content').forEach(tab => {
        tab.classList.remove('active');
    });
    
    // Убрать активный класс у всех кнопок
    document.querySelectorAll('.vendor-tab').forEach(tab => {
        tab.classList.remove('active');
    });
    
    // Показать выбранную вкладку
    document.getElementById(tabName).classList.add('active');
    
    // Сделать кнопку активной
    event.currentTarget.classList.add('active');
}

function checkVirtualNetworksTest() {
    let score = 0;
    let resultsHTML = "<h3>Результаты теста:</h3><ol>";
    const keywordThreshold = 2; // Минимальное количество ключевых слов
    
    // Вопрос 1
    const q1Selected = document.querySelector('input[name="q1"]:checked');
    if (q1Selected && q1Selected.value === document.getElementById('correct_q1').value) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 1: Верно! Максимальный VLAN ID - 4094.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 1: Неверно. Правильный ответ: 4094.</li>`;
    }
    
    // Вопрос 2 (множественный выбор)
    const q2Selected = Array.from(document.querySelectorAll('input[name="q2"]:checked')).map(el => el.value).sort().join(',');
    const q2Correct = document.getElementById('correct_q2').value.split(',').sort().join(',');
    if (q2Selected === q2Correct) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 2: Правильно! Все варианты являются типами VPN.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 2: Неполный ответ. Все варианты являются типами VPN.</li>`;
    }
    
    // Вопрос 3 (анализ ключевых слов)
    const q3Answer = document.getElementById('q3_answer').value.toLowerCase();
    const q3Keywords = document.getElementById('correct_q3_keywords').value.split(',');
    let foundKeywords = q3Keywords.filter(word => q3Answer.includes(word));
    
    if (foundKeywords.length >= 1) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 3: Принято! Пример команды: vconfig add eth0 10.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 3: Неверно. Пример команды: vconfig add eth0 10.</li>`;
    }
    
    // Вопрос 4 (анализ ключевых слов)
    const q4Answer = document.getElementById('q4_answer').value.toLowerCase();
    const q4Keywords = document.getElementById('correct_q4_keywords').value.split(',');
    foundKeywords = q4Keywords.filter(word => q4Answer.includes(word));
    
    if (foundKeywords.length >= keywordThreshold) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 4: Принято! VXLAN поддерживает до 16 млн сегментов.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 4: Ответ недостаточно полный. Основное преимущество - масштабируемость (до 16 млн сегментов).</li>`;
    }
    
    // Вопрос 5
    const q5Selected = document.querySelector('input[name="q5"]:checked');
    if (q5Selected && q5Selected.value === document.getElementById('correct_q5').value) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 5: Абсолютно верно! VXLAN использует порт 4789.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 5: Неверно. Правильный ответ: 4789.</li>`;
    }
    
    resultsHTML += `</ol><p><strong>Итоговый результат: ${score} из 5 (${Math.round(score/5*100)}%)</strong></p>`;
    document.getElementById('testResults').innerHTML = resultsHTML;
    document.getElementById('testResults').style.display = 'block';
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>