<?php 
$page_title = "Кибератаки и утечки данных: руководство по реагированию";
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
    
    .critical-box {
        background-color: #fff5f5;
        border-left: 4px solid #e53e3e;
        padding: 15px;
        margin: 20px 0;
        border-radius: 0 4px 4px 0;
    }
    
    .procedure-steps {
        counter-reset: step-counter;
        margin-left: 20px;
    }
    
    .procedure-steps li {
        position: relative;
        margin-bottom: 15px;
        list-style-type: none;
    }
    
    .procedure-steps li:before {
        counter-increment: step-counter;
        content: counter(step-counter);
        position: absolute;
        left: -35px;
        top: 0;
        background-color: #3182ce;
        color: white;
        width: 25px;
        height: 25px;
        border-radius: 50%;
        text-align: center;
        line-height: 25px;
        font-weight: bold;
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
    
    .contact-card {
        background-color: #f0fdf4;
        border: 1px solid #4ade80;
        border-radius: 8px;
        padding: 15px;
        margin: 20px 0;
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
            <div class="critical-box">
                <h3>Важно!</h3>
                <p>Кибератаки и утечки данных могут нанести значительный ущерб репутации компании и привести к финансовым потерям. Немедленное и правильное реагирование минимизирует последствия.</p>
            </div>

            <h2>1. Виды кибератак и их признаки</h2>
            
            <div class="attack-type">
                <div class="attack-card">
                    <h4>Фишинг и социальная инженерия</h4>
                    <ul>
                        <li>Подозрительные письма с просьбой предоставить данные</li>
                        <li>Неожиданные звонки "из техподдержки"</li>
                        <li>Фальшивые страницы авторизации</li>
                    </ul>
                </div>
                
                <div class="attack-card">
                    <h4>Вредоносное ПО</h4>
                    <ul>
                        <li>Неожиданные всплывающие окна</li>
                        <li>Замедление работы системы</li>
                        <li>Неизвестные процессы в диспетчере задач</li>
                    </ul>
                </div>
                
                <div class="attack-card">
                    <h4>Утечки данных</h4>
                    <ul>
                        <li>Несанкционированный доступ к файлам</li>
                        <li>Подозрительная активность в логах</li>
                        <li>Жалобы клиентов на спам</li>
                    </ul>
                </div>
            </div>

            <h2>2. Алгоритм действий при обнаружении атаки</h2>
            
            <h3>2.1. Первоочередные меры</h3>
            <ol class="procedure-steps">
                <li><strong>Изолируйте пораженную систему</strong> от сети (отключите кабель или Wi-Fi)</li>
                <li><strong>Сохраните доказательства</strong> (скриншоты, логи, подозрительные файлы)</li>
                <li><strong>Сообщите в службу информационной безопасности</strong>:
                    <div class="contact-card">
                        <ul>
                            <li><strong>Горячая линия ИБ:</strong> 555 (внутренний)</li>
                            <li><strong>Электронная почта:</strong> soc@gazprom.ru</li>
                            <li><strong>Экстренный номер:</strong> +7 (XXX) XXX-XX-XX</li>
                        </ul>
                    </div>
                </li>
                <li><strong>Смените пароли</strong> всех затронутых учетных записей</li>
                <li><strong>Заблокируйте компрометированные учетные записи</strong> в Active Directory:
                    <div class="command">Disable-ADAccount -Identity "username"</div>
                </li>
            </ol>
            
            <h3>2.2. Действия при разных типах атак</h3>
            <table>
                <tr>
                    <th>Тип атаки</th>
                    <th>Действия</th>
                </tr>
                <tr>
                    <td>Фишинг</td>
                    <td>
                        <ol>
                            <li>Не переходить по ссылкам и не открывать вложения</li>
                            <li>Сообщить в антифишинговую службу</li>
                            <li>Проверить аналогичные письма у других сотрудников</li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <td>Вредоносное ПО</td>
                    <td>
                        <ol>
                            <li>Запустить антивирусное сканирование</li>
                            <li>Проверить запущенные процессы</li>
                            <li>Восстановить систему из чистой резервной копии</li>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <td>Утечка данных</td>
                    <td>
                        <ol>
                            <li>Определить объем и тип утекших данных</li>
                            <li>Уведомить регуляторов (при необходимости)</li>
                            <li>Информировать затронутых клиентов</li>
                        </ol>
                    </td>
                </tr>
            </table>

            <h2>3. Расследование инцидента</h2>
            
            <h3>3.1. Сбор информации</h3>
            <ul>
                <li>Логи сетевой активности:
                    <div class="command">netstat -ano</div>
                </li>
                <li>Активные подключения:
                    <div class="command">Get-NetTCPConnection</div>
                </li>
                <li>Журналы событий Windows:
                    <div class="command">eventvwr.msc</div>
                </li>
                <li>Дампы памяти (для сложных случаев)</li>
            </ul>
            
            <h3>3.2. Анализ и документирование</h3>
            <ol>
                <li>Определить вектор атаки</li>
                <li>Выявить уязвимость, которая была использована</li>
                <li>Оценить масштаб повреждений</li>
                <li>Заполнить форму отчета об инциденте (Форма ИБ-07)</li>
            </ol>
            
            <div class="critical-box">
                <h3>3.3. Уведомление регуляторов</h3>
                <p>При утечке персональных данных необходимо уведомить Роскомнадзор в течение 72 часов с момента обнаружения, если существует риск для прав субъектов данных.</p>
            </div>

            <h2>4. Восстановление и профилактика</h2>
            
            <h3>4.1. Восстановительные мероприятия</h3>
            <ul>
                <li>Установка всех обновлений безопасности</li>
                <li>Смена всех компрометированных паролей</li>
                <li>Проверка резервных копий на целостность</li>
                <li>Мониторинг на предмет повторных атак</li>
            </ul>
            
            <h3>4.2. Профилактические меры</h3>
            <table>
                <tr>
                    <th>Мера</th>
                    <th>Периодичность</th>
                </tr>
                <tr>
                    <td>Обучение сотрудников</td>
                    <td>Ежеквартально</td>
                </tr>
                <tr>
                    <td>Пентест и аудит безопасности</td>
                    <td>Ежегодно</td>
                </tr>
                <tr>
                    <td>Обновление ПО и прошивок</td>
                    <td>По мере выхода обновлений</td>
                </tr>
                <tr>
                    <td>Проверка прав доступа</td>
                    <td>Ежеквартально</td>
                </tr>
            </table>
            
            <h2>5. Особенности для нефтегазовой отрасли</h2>
            
            <div class="critical-box">
                <h3>5.1. Защита промышленных систем</h3>
                <p>Для АСУ ТП и SCADA-систем необходимо:</p>
                <ul>
                    <li>Физическая изоляция от корпоративной сети</li>
                    <li>Специальные правила доступа</li>
                    <li>Мониторинг аномальных команд</li>
                </ul>
            </div>
            
            <h3>5.2. Нормативные требования</h3>
            <ul>
                <li>ФЗ-187 "О безопасности КИИ"</li>
                <li>Приказы ФСТЭК для систем спецучета</li>
                <li>Требования PCI DSS для платежных систем</li>
            </ul>
        </div>
    </div>
</article>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>