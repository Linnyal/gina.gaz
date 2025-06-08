<?php 
$page_title = "Ошибки DNS и VPN-подключения: диагностика и решения";
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
    /* Стили из предыдущего примера */
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
    
    /* ... остальные стили ... */
    
    .solution-box {
        background-color: #f0f9ff;
        border-left: 4px solid #3182ce;
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
    
    .network-diagram {
        max-width: 100%;
        height: auto;
        border: 1px solid #e2e8f0;
        margin: 20px 0;
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
            <h2>Введение</h2>
            <p>Проблемы с DNS и VPN-подключениями относятся к числу наиболее распространенных сетевых инцидентов в корпоративной среде. В нефтегазовой отрасли, где критически важна работа удаленных объектов и защита данных, стабильность этих служб особенно важна. В данной статье рассмотрены типовые сценарии сбоев и методы их устранения.</p>

            <div class="notice warning">
                <strong>Важно!</strong> Перед выполнением любых изменений убедитесь, что у вас есть актуальная резервная копия конфигураций и необходимые права доступа.
            </div>

            <h2>1. Проблемы с DNS</h2>
            
            <h3>1.1. Симптомы проблем с DNS</h3>
            <ul>
                <li>Сайты не открываются, хотя ping по IP-адресу работает</li>
                <li>Ошибки "DNS сервер не отвечает"</li>
                <li>Длительное время разрешения имен</li>
                <li>Некорректное перенаправление на другие сайты</li>
            </ul>
            
            <h3>1.2. Методы диагностики</h3>
            
            <div class="solution-box">
                <h4>Проверка базового подключения к DNS</h4>
                <p>Выполните в командной строке:</p>
                <div class="command">nslookup example.com</div>
                <p>Или для Linux:</p>
                <div class="command">dig example.com</div>
                <p>Если ответ не получен, проверьте доступность DNS-сервера:</p>
                <div class="command">ping 8.8.8.8</div>
            </div>
            
            <h3>1.3. Типовые решения</h3>
            
            <table>
                <tr>
                    <th>Проблема</th>
                    <th>Решение</th>
                </tr>
                <tr>
                    <td>DNS-сервер недоступен</td>
                    <td>
                        <ol>
                            <li>Проверить состояние службы DNS на сервере</li>
                            <li>Убедиться в правильности сетевых настроек</li>
                            <li>Проверить брандмауэр</li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <td>Некорректные записи в кэше</td>
                    <td>
                        <div class="command">ipconfig /flushdns</div>
                        <p>Или для Linux:</p>
                        <div class="command">systemd-resolve --flush-caches</div>
                    </td>
                </tr>
                <tr>
                    <td>Проблемы с внутренней DNS-зоной</td>
                    <td>
                        <ol>
                            <li>Проверить репликацию между контроллерами домена</li>
                            <li>Убедиться в отсутствии дублирующихся записей</li>
                            <li>Проверить журналы событий DNS</li>
                        </ol>
                    </td>
                </tr>
            </table>

            <h2>2. Проблемы с VPN</h2>
            
            <h3>2.1. Основные причины сбоев</h3>
            <ul>
                <li>Неправильные учетные данные</li>
                <li>Блокировка портов брандмауэром</li>
                <li>Проблемы с сертификатами</li>
                <li>Конфликты маршрутизации</li>
                <li>Перегрузка VPN-сервера</li>
            </ul>
            
            <h3>2.2. Пошаговая диагностика</h3>
            
            <div class="solution-box">
                <h4>Проверка базового подключения</h4>
                <ol>
                    <li>Убедитесь, что интернет-подключение активно</li>
                    <li>Попробуйте подключиться с другого устройства</li>
                    <li>Проверьте доступность VPN-сервера:</li>
                    <div class="command">ping vpn.company.com</div>
                    <li>Проверьте открытость портов:</li>
                    <div class="command">telnet vpn.company.com 443</div>
                </ol>
            </div>
            
            <h3>2.3. Решения для распространенных ошибок</h3>
            
            <table>
                <tr>
                    <th>Ошибка</th>
                    <th>Действия</th>
                </tr>
                <tr>
                    <td>Ошибка 619/691 (неверные учетные данные)</td>
                    <td>
                        <ol>
                            <li>Проверить правильность ввода логина/пароля</li>
                            <li>Убедиться, что учетная запись не заблокирована</li>
                            <li>Проверить необходимость двухфакторной аутентификации</li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <td>Ошибка 812 (фильтрация пакетов)</td>
                    <td>
                        <ol>
                            <li>Проверить настройки брандмауэра</li>
                            <li>Убедиться, что не блокируется IPSec</li>
                            <li>Проверить NAT-трансляцию</li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <td>Подключение есть, но нет доступа к ресурсам</td>
                    <td>
                        <ol>
                            <li>Проверить таблицу маршрутизации</li>
                            <div class="command">route print</div>
                            <li>Убедиться в правильности DNS-суффиксов</li>
                            <li>Проверить политики доступа на VPN-сервере</li>
                        </ol>
                    </td>
                </tr>
            </table>

            <h2>3. Интеграция с корпоративными системами Газпрома</h2>
            
            <h3>3.1. Особенности работы в защищенной среде</h3>
            <p>В корпоративной сети Газпрома VPN-подключения и DNS-сервисы имеют дополнительные уровни защиты:</p>
            <ul>
                <li>Обязательное использование сертификатов для аутентификации</li>
                <li>Дополнительная фильтрация DNS-запросов</li>
                <li>Сегментация сети для критически важных объектов</li>
            </ul>
            
            <div class="notice info">
                <strong>Специфика для нефтегазовой отрасли:</strong> При работе с удаленными объектами (месторождения, трубопроводы) могут использоваться специализированные VPN-шлюзы с поддержкой спутниковой связи.
            </div>
            
            <h3>3.2. Контакты для эскалации проблем</h3>
            <ul>
                <li><strong>Группа сетевой инфраструктуры:</strong> vpn-support@gazprom.ru</li>
                <li><strong>Служба информационной безопасности:</strong> soc@gazprom.ru</li>
                <li><strong>Аварийная поддержка:</strong> +7 (XXX) XXX-XX-XX (круглосуточно)</li>
            </ul>

            
        </div>
    </div>
</article>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>