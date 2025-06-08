<?php 
$page_title = "Реагирование на DDoS-атаки: руководство для системного администратора";
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
    
    .attack-box {
        background-color: #fff5f5;
        border-left: 4px solid #e53e3e;
        padding: 15px;
        margin: 20px 0;
        border-radius: 0 4px 4px 0;
    }
    
    .protection-box {
        background-color: #f0fdf4;
        border-left: 4px solid #4ade80;
        padding: 15px;
        margin: 20px 0;
        border-radius: 0 4px 4px 0;
    }
    
    .command {
        font-family: monospace;
        background-color: #2d3748;
        color: #f7fafc;
        padding: 8px 12px;
        border-radius: 4px;
        display: inline-block;
        margin: 5px 0;
    }
    
    .attack-type {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        margin: 20px 0;
    }
    
    .attack-card {
        flex: 1 1 200px;
        padding: 15px;
        background-color: #f8fafc;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
    }
    
    .attack-card h4 {
        margin-top: 0;
        color: #1e40af;
    }
    
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
    }
    
    table, th, td {
        border: 1px solid #e2e8f0;
    }
    
    th {
        background-color: #f8fafc;
        text-align: left;
        padding: 10px;
    }
    
    td {
        padding: 8px 10px;
    }
    
    @media (max-width: 768px) {
        .attack-card {
            flex: 1 1 100%;
        }
    }
</style>
</head>
<body>
<article class="kb-article">
    <div class="centered-content">
        <h1><?= $page_title ?></h1>
        <div class="meta">
            <span>Категория: <a href="/knowledge-base/incidents/">Инциденты и решения</a></span>
            <span>Обновлено: <?= date('d.m.Y') ?></span>
        </div>

        <div class="content">
            <div class="attack-box">
                <h3>Важно!</h3>
                <p>DDoS-атаки могут полностью парализовать работу корпоративных сервисов. В нефтегазовой отрасли это особенно критично, так как может повлиять на системы мониторинга и управления производственными процессами.</p>
            </div>

            <h2>1. Типы DDoS-атак и их признаки</h2>
            
            <div class="attack-type">
                <div class="attack-card">
                    <h4>Объемные атаки (Volumetric)</h4>
                    <p>Заполнение канала связи мусорным трафиком (UDP/ICMP флуд). Признаки:</p>
                    <ul>
                        <li>100% загрузка сетевого интерфейса</li>
                        <li>Рост трафика в 10-100 раз</li>
                        <li>Потеря пакетов на маршрутизаторах</li>
                    </ul>
                </div>
                
                <div class="attack-card">
                    <h4>Атаки на приложения (L7)</h4>
                    <p>Эксплуатация уязвимостей веб-серверов. Признаки:</p>
                    <ul>
                        <li>Множество HTTP-запросов к одному URL</li>
                        <li>Рост 404/503 ошибок</li>
                        <li>Высокая нагрузка на CPU сервера</li>
                    </ul>
                </div>
                
                <div class="attack-card">
                    <h4>Атаки на протоколы (SYN flood)</h4>
                    <p>Исчерпание ресурсов сервера. Признаки:</p>
                    <ul>
                        <li>Рост числа полуоткрытых соединений</li>
                        <li>Переполнение очереди SYN</li>
                        <li>Недоступность TCP-сервисов</li>
                    </ul>
                </div>
            </div>

            <h2>2. Пошаговый план реагирования</h2>
            
            <h3>2.1. Обнаружение атаки</h3>
            <ol>
                <li>Мониторинг необычной активности:
                    <div class="command">iftop -i eth0</div>
                    <div class="command">netstat -ntu | awk '{print $5}' | cut -d: -f1 | sort | uniq -c | sort -n</div>
                </li>
                <li>Анализ логов веб-сервера:
                    <div class="command">tail -f /var/log/nginx/access.log | grep -E '404|503'</div>
                </li>
                <li>Проверка нагрузки на сервер:
                    <div class="command">htop</div>
                    <div class="command">nload</div>
                </li>
            </ol>
            
            <h3>2.2. Немедленные меры</h3>
            <table>
                <tr>
                    <th>Тип атаки</th>
                    <th>Действия</th>
                </tr>
                <tr>
                    <td>Volumetric</td>
                    <td>
                        <ol>
                            <li>Активировать DDoS-защиту у провайдера</li>
                            <li>Перенаправить трафик через scrubbing-центр</li>
                            <li>Включить rate limiting на маршрутизаторах</li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <td>L7</td>
                    <td>
                        <ol>
                            <li>Включить WAF (Web Application Firewall)</li>
                            <li>Настроить ограничение запросов:
                                <div class="command">iptables -A INPUT -p tcp --dport 80 -m connlimit --connlimit-above 50 -j DROP</div>
                            </li>
                            <li>Использовать CAPTCHA для подозрительных запросов</li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <td>SYN flood</td>
                    <td>
                        <ol>
                            <li>Включить SYN cookies:
                                <div class="command">sysctl -w net.ipv4.tcp_syncookies=1</div>
                            </li>
                            <li>Уменьшить время SYN_RECV:
                                <div class="command">sysctl -w net.ipv4.tcp_synack_retries=3</div>
                            </li>
                            <li>Увеличить очередь SYN:
                                <div class="command">sysctl -w net.ipv4.tcp_max_syn_backlog=2048</div>
                            </li>
                        </ol>
                    </td>
                </tr>
            </table>
            
            <div class="protection-box">
                <h3>2.3. Эскалация инцидента</h3>
                <ol>
                    <li>Уведомить руководителя ИБ и технического директора</li>
                    <li>Связаться с провайдером для активации дополнительной защиты</li>
                    <li>При крупной атаке - сообщить в ГосСОПКА (для КИИ)</li>
                    <li>Зафиксировать время начала атаки и все предпринятые меры</li>
                </ol>
            </div>

            <h2>3. Профилактические меры</h2>
            
            <h3>3.1. Подготовка инфраструктуры</h3>
            <ul>
                <li>Развертывание облачного анти-DDoS (Cloudflare, Akamai, Qrator)</li>
                <li>Настройка Anycast для критических сервисов</li>
                <li>Избыточность каналов связи (разные провайдеры)</li>
                <li>Регулярные нагрузочные тестирования</li>
            </ul>
            
            <h3>3.2. Конфигурация серверов</h3>
            <table>
                <tr>
                    <th>Параметр</th>
                    <th>Рекомендуемое значение</th>
                </tr>
                <tr>
                    <td>net.ipv4.tcp_syncookies</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>net.ipv4.tcp_max_syn_backlog</td>
                    <td>2048</td>
                </tr>
                <tr>
                    <td>net.core.somaxconn</td>
                    <td>1024</td>
                </tr>
                <tr>
                    <td>net.ipv4.conf.all.rp_filter</td>
                    <td>1</td>
                </tr>
            </table>
            
            <h3>3.3. Мониторинг и анализ</h3>
            <ul>
                <li>Настройка алертов при аномальном росте трафика</li>
                <li>Регулярный анализ логов на предмет сканеров уязвимостей</li>
                <li>Ведение blacklist подозрительных IP-адресов</li>
                <li>Использование SIEM-систем для корреляции событий</li>
            </ul>

            <h2>4. Особенности для нефтегазовой отрасли</h2>
            
            <div class="protection-box">
                <h3>4.1. Защита промышленных систем</h3>
                <p>Для АСУ ТП и SCADA-систем необходимо:</p>
                <ul>
                    <li>Полная изоляция от публичного интернета</li>
                    <li>Использование специализированных промышленных firewall</li>
                    <li>Регулярное обновление PLC-контроллеров</li>
                    <li>Мониторинг аномальных команд в промышленных протоколах</li>
                </ul>
            </div>
            
            <h3>4.2. Нормативные требования</h3>
            <ul>
                <li>Соблюдение ФЗ-187 "О безопасности КИИ"</li>
                <li>Выполнение приказов ФСТЭК для систем спецучета</li>
                <li>Регулярные проверки на соответствие требованиям PCI DSS</li>
                <li>Обязательное наличие плана реагирования на инциденты</li>
            </ul>
            
            <div class="attack-box">
                <h3>Важно помнить!</h3>
                <p>При защите от DDoS важно соблюдать баланс между безопасностью и доступностью сервисов. Чрезмерно агрессивные фильтры могут блокировать легитимных пользователей. Все изменения должны тестироваться в staging-среде перед применением на production.</p>
            </div>
        </div>
    </div>
</article>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>