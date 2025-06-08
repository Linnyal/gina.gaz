<?php 
$page_title = "Теория и практика резервного копирования: полное руководство";
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
    
    .security-alert {
        padding: 20px;
        margin: 25px 0;
        border-left: 4px solid #e53e3e;
        background-color: #fff5f5;
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
        text-align: left;
    }
    
    .comparison-table td {
        border: 1px solid #e2e8f0;
        padding: 12px 15px;
    }

    /* Обновленные стили для теста (как в предыдущих версиях) */
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
    
    @media (max-width: 768px) {
        .test-container {
            padding: 15px;
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
            <span>Время чтения: 18-22 минуты</span>
        </div>

        <div class="content">
            <h2>Фундаментальные принципы резервного копирования</h2>
            <p>Резервное копирование представляет собой процесс создания копий данных с целью их восстановления в случае утраты или повреждения оригинальной информации. В современной IT-инфраструктуре это не просто дополнительная мера предосторожности, а обязательный компонент стратегии защиты данных.</p>
            
            <p>Основные причины потери данных, против которых направлено резервное копирование:</p>
            <ul>
                <li><strong>Аппаратные сбои:</strong> Выход из строя жестких дисков, SSD-накопителей, RAID-массивов и других носителей информации</li>
                <li><strong>Человеческий фактор:</strong> Случайное удаление или перезапись важных данных, ошибочные изменения конфигураций</li>
                <li><strong>Вредоносное ПО:</strong> Вирусы-шифровальщики (ransomware), трояны, другие виды кибератак</li>
                <li><strong>Природные катастрофы:</strong> Пожары, наводнения, землетрясения, способные уничтожить оборудование</li>
                <li><strong>Программные сбои:</strong> Ошибки в приложениях, СУБД, операционных системах, ведущие к повреждению данных</li>
            </ul>

            <div class="security-alert">
                <h3>Критическая важность резервного копирования</h3>
                <p>Согласно исследованиям, 60% компаний, потерявших критически важные данные, прекращают свою деятельность в течение шести месяцев после инцидента. При этом 51% потерь данных вызван человеческим фактором, а не техническими неисправностями.</p>
            </div>

            <h2>Типы резервного копирования: сравнительный анализ</h2>
            
            <p>В современных системах применяются три основных метода резервного копирования, каждый из которых имеет свои преимущества и ограничения:</p>
            
            <div class="method-card">
                <h3>1. Полное резервное копирование (Full Backup)</h3>
                <p>Полное копирование предполагает создание копии всех выбранных данных без исключений. Это наиболее надежный и простой в восстановлении метод, но он требует значительных ресурсов хранения и времени выполнения.</p>
                <p><strong>Преимущества:</strong></p>
                <ul>
                    <li>Простота восстановления - все данные содержатся в одном месте</li>
                    <li>Быстрое время восстановления</li>
                    <li>Не требует сложных цепочек восстановления</li>
                </ul>
                <p><strong>Недостатки:</strong></p>
                <ul>
                    <li>Требует большого объема хранилища</li>
                    <li>Длительное время выполнения</li>
                    <li>Высокая нагрузка на сеть и системы</li>
                </ul>
            </div>
            
            <div class="method-card">
                <h3>2. Инкрементное копирование (Incremental Backup)</h3>
                <p>Инкрементный метод копирует только те данные, которые изменились с момента последнего резервного копирования любого типа. Это значительно экономит место и время, но усложняет процесс восстановления.</p>
                <p><strong>Преимущества:</strong></p>
                <ul>
                    <li>Минимальный объем хранилища</li>
                    <li>Быстрое выполнение</li>
                    <li>Низкая нагрузка на систему</li>
                </ul>
                <p><strong>Недостатки:</strong></p>
                <ul>
                    <li>Сложное восстановление - требуется цепочка из полной копии и всех последующих инкрементных</li>
                    <li>Риск потери данных при повреждении одного звена цепочки</li>
                    <li>Длительное время восстановления</li>
                </ul>
            </div>
            
            <div class="method-card">
                <h3>3. Дифференциальное копирование (Differential Backup)</h3>
                <p>Дифференциальный метод сохраняет все изменения, произошедшие с момента последнего полного копирования. Это компромисс между полным и инкрементным методами.</p>
                <p><strong>Преимущества:</strong></p>
                <ul>
                    <li>Более простое восстановление, чем у инкрементного метода</li>
                    <li>Меньший объем хранилища, чем при полном копировании</li>
                    <li>Быстрее восстановление, чем при инкрементном методе</li>
                </ul>
                <p><strong>Недостатки:</strong></p>
                <ul>
                    <li>Требует больше места, чем инкрементный метод</li>
                    <li>Время выполнения увеличивается с каждым последующим копированием</li>
                    <li>Все еще требует цепочки восстановления (полная + последняя дифференциальная копия)</li>
                </ul>
            </div>

            <h2>Правило 3-2-1-1-0: современный стандарт защиты данных</h2>
            
            <p>Классическое правило 3-2-1 было расширено для соответствия современным угрозам. Рассмотрим каждую его составляющую подробно:</p>
            
            <table class="comparison-table">
                <tr>
                    <th>Компонент</th>
                    <th>Описание</th>
                    <th>Практическая реализация</th>
                </tr>
                <tr>
                    <td><strong>3 копии</strong></td>
                    <td>Оригинальные данные и две дополнительные копии</td>
                    <td>Основные данные на рабочих серверах + две отдельные резервные копии</td>
                </tr>
                <tr>
                    <td><strong>2 разных носителя</strong></td>
                    <td>Использование различных типов хранилищ</td>
                    <td>Например, HDD + ленточные накопители или SSD + облачное хранилище</td>
                </tr>
                <tr>
                    <td><strong>1 копия вне офиса</strong></td>
                    <td>Географическое разделение копий</td>
                    <td>Облачное хранилище или резервный дата-центр в другом регионе</td>
                </tr>
                <tr>
                    <td><strong>1 иммутабельная копия</strong></td>
                    <td>Неизменяемая (WORM) копия для защиты от ransomware</td>
                    <td>Запись на ленту или использование S3 Object Lock в облаке</td>
                </tr>
                <tr>
                    <td><strong>0 ошибок при проверке</strong></td>
                    <td>Регулярное тестирование восстановления</td>
                    <td>Ежеквартальные тесты восстановления с фиксацией результатов</td>
                </tr>
            </table>

            <h2>Технологии и решения для резервного копирования</h2>
            
            <p>Современный рынок предлагает множество решений для резервного копирования, от простых встроенных утилит до комплексных корпоративных систем. Рассмотрим ключевые категории:</p>
            
            <h3>1. Встроенные средства операционных систем</h3>
            <p>Большинство ОС включают базовые инструменты для резервного копирования:</p>
            
            <div class="code-example">
                <span class="code-comment"># Windows Server Backup (PowerShell)</span><br>
                Install-WindowsFeature -Name Windows-Server-Backup<br>
                $policy = New-WBPolicy<br>
                $backupLocation = New-WBBackupTarget -VolumePath "E:"<br>
                Add-WBBackupTarget -Policy $policy -Target $backupLocation<br>
                Add-WBVolume -Policy $policy -VolumePath "C:"<br>
                Start-WBBackup -Policy $policy
            </div>
            
            <div class="code-example">
                <span class="code-comment"># Linux (tar + cron для автоматизации)</span><br>
                tar -czvf /backups/full-backup-$(date +%F).tar.gz /var/www /etc /home<br>
                <span class="code-comment"># Добавляем в cron для ежедневного выполнения:</span><br>
                0 2 * * * root tar -czvf /backups/daily-$(date +\%F).tar.gz --newer-mtime="1 day ago" /var/www /etc /home
            </div>
            
            <h3>2. Специализированное программное обеспечение</h3>
            <p>Профессиональные решения предлагают расширенные возможности:</p>
            
            <table class="comparison-table">
                <tr>
                    <th>Решение</th>
                    <th>Тип</th>
                    <th>Ключевые особенности</th>
                </tr>
                <tr>
                    <td>Veeam Backup & Replication</td>
                    <td>Коммерческое</td>
                    <td>Поддержка виртуальных сред, мгновенное восстановление VM, интеграция с облаками</td>
                </tr>
                <tr>
                    <td>Acronis Cyber Backup</td>
                    <td>Коммерческое</td>
                    <td>Защита от ransomware, гибридное облако, поддержка физических и виртуальных систем</td>
                </tr>
                <tr>
                    <td>Bacula</td>
                    <td>Open-source</td>
                    <td>Модульная архитектура, поддержка ленточных библиотек, низкие требования к ресурсам</td>
                </tr>
                <tr>
                    <td>Duplicati</td>
                    <td>Open-source</td>
                    <td>Шифрование, дедупликация, поддержка облачных хранилищ</td>
                </tr>
            </table>

            <h2>Практические аспекты реализации</h2>
            
            <h3>1. Планирование стратегии резервного копирования</h3>
            <p>Эффективная стратегия должна учитывать:</p>
            <ul>
                <li><strong>Критичность данных:</strong> Классификация данных по важности и частоте изменений</li>
                <li><strong>RPO (Recovery Point Objective):</strong> Максимально допустимый период потери данных</li>
                <li><strong>RTO (Recovery Time Objective):</strong> Максимально допустимое время восстановления</li>
                <li><strong>Ресурсы:</strong> Доступные вычислительные мощности, сетевую инфраструктуру и бюджет</li>
            </ul>
            
            <h3>2. Организация хранилища резервных копий</h3>
            <p>Оптимальная архитектура хранилища включает:</p>
            
            <div class="method-card">
                <h3>Многоуровневая система хранения</h3>
                <ul>
                    <li><strong>Горячий уровень:</strong> Быстрые SSD/NVMe для частых инкрементных копий</li>
                    <li><strong>Теплый уровень:</strong> HDD-массивы для еженедельных полных копий</li>
                    <li><strong>Холодный уровень:</strong> Ленточные библиотеки или облако для архивных копий</li>
                    <li><strong>Иммутабельное хранилище:</strong> WORM-носители для защиты от ransomware</li>
                </ul>
            </div>
            
            <h3>3. Автоматизация и мониторинг</h3>
            <p>Ключевые компоненты автоматизированной системы:</p>
            
            <div class="code-example">
                <span class="code-comment"># Пример скрипта мониторинга состояния backup'ов</span><br>
                $backupDir = "\\backup-srv\share$\*"<br>
                $threshold = (Get-Date).AddDays(-2)<br>
                $alertSent = $false<br><br>
                
                <span class="code-comment"># Проверяем наличие свежих копий</span><br>
                Get-ChildItem $backupDir -Recurse | Where {<br>
                &nbsp;&nbsp;if ($_.LastWriteTime -lt $threshold) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;$alertSent = $true<br>
                &nbsp;&nbsp;&nbsp;&nbsp;Write-EventLog -LogName "Application" -Source "Backup Monitor" `<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-EntryType Error -EventId 1001 `<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-Message "Обнаружены устаревшие резервные копии: $($_.FullName)"<br>
                &nbsp;&nbsp;}<br>
                }<br><br>
                
                if ($alertSent) {<br>
                &nbsp;&nbsp;Send-MailMessage -From "backup-monitor@company.com" -To "admin@company.com" `<br>
                &nbsp;&nbsp;&nbsp;&nbsp;-Subject "[CRITICAL] Проблемы с резервным копированием" `<br>
                &nbsp;&nbsp;&nbsp;&nbsp;-Body "Некоторые резервные копии не обновлялись более 2 дней" `<br>
                &nbsp;&nbsp;&nbsp;&nbsp;-Priority High -SmtpServer "mail.company.com"<br>
                }
            </div>

            <div class="test-container">
            <h2>Проверка знаний</h2>
            <form id="backupTest">
                
                <div class="question">
                    <p><strong>1. Какие из перечисленных методов резервного копирования требуют для восстановления только последнюю полную копию и последнюю дифференциальную?</strong></p>
                    <div class="options">
                        <div class="option">
                            <input type="radio" name="q1" id="q1a" value="a">
                            <label for="q1a">Полное + инкрементное</label>
                        </div>
                        <div class="option">
                            <input type="radio" name="q1" id="q1b" value="b">
                            <label for="q1b">Полное + дифференциальное</label>
                        </div>
                        <div class="option">
                            <input type="radio" name="q1" id="q1c" value="c">
                            <label for="q1c">Только полное</label>
                        </div>
                    </div>
                    <input type="hidden" id="correct_q1" value="b">
                </div>
                
                <div class="question">
                    <p><strong>2. Какие компоненты входят в современное правило 3-2-1-1-0? (Выберите все верные)</strong></p>
                    <div class="options">
                        <div class="option">
                            <input type="checkbox" name="q2" id="q2a" value="a">
                            <label for="q2a">3 копии данных</label>
                        </div>
                        <div class="option">
                            <input type="checkbox" name="q2" id="q2b" value="b">
                            <label for="q2b">2 разных типа носителей</label>
                        </div>
                        <div class="option">
                            <input type="checkbox" name="q2" id="q2c" value="c">
                            <label for="q2c">1 копия в облаке</label>
                        </div>
                        <div class="option">
                            <input type="checkbox" name="q2" id="q2d" value="d">
                            <label for="q2d">1 иммутабельная копия</label>
                        </div>
                    </div>
                    <input type="hidden" id="correct_q2" value="a,b,d">
                </div>
                
                <div class="question">
                    <p><strong>3. Опишите преимущества и недостатки инкрементного метода резервного копирования.</strong></p>
                    <textarea id="q3_answer" class="text-answer" rows="4"></textarea>
                    <input type="hidden" id="correct_q3_keywords" value="экономия места,быстрое выполнение,сложное восстановление,цепочка копий">
                </div>
                
                <button type="button" onclick="checkBackupTest()">Проверить ответы</button>
            </form>
            
            <div id="testResults" class="results"></div>
        </div>
    </div>
</article>

<script>
function checkBackupTest() {
    let score = 0;
    let resultsHTML = "<h3>Результаты теста:</h3><ol>";
    const keywordThreshold = 2; // Минимальное количество ключевых слов для зачета
    
    // Вопрос 1
    const q1Selected = document.querySelector('input[name="q1"]:checked');
    if (q1Selected && q1Selected.value === document.getElementById('correct_q1').value) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 1: Верно! Для дифференциального метода нужно последнее полное копирование и последняя дифференциальная копия.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 1: Неверно. Правильный ответ: Полное + дифференциальное.</li>`;
    }
    
    // Вопрос 2
    const q2Selected = Array.from(document.querySelectorAll('input[name="q2"]:checked')).map(el => el.value).sort().join(',');
    const q2Correct = document.getElementById('correct_q2').value.split(',').sort().join(',');
    if (q2Selected === q2Correct) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 2: Правильно! Все выбранные элементы входят в правило 3-2-1-1-0.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 2: Неполный ответ. Правило включает: 3 копии, 2 носителя, 1 вне офиса, 1 иммутабельная.</li>`;
    }
    
    // Вопрос 3
    const q3Answer = document.getElementById('q3_answer').value.toLowerCase();
    const q3Keywords = document.getElementById('correct_q3_keywords').value.split(',');
    let foundKeywords = q3Keywords.filter(word => q3Answer.includes(word));
    
    if (foundKeywords.length >= keywordThreshold) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 3: Принято! Вы указали ключевые аспекты инкрементного копирования.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 3: Ответ недостаточно полный. Основные аспекты: экономия места, быстрое выполнение, сложное восстановление, цепочка копий.</li>`;
    }
    
    resultsHTML += `</ol><p><strong>Итоговый результат: ${score} из 3 (${Math.round(score/3*100)}%)</strong></p>`;
    document.getElementById('testResults').innerHTML = resultsHTML;
    document.getElementById('testResults').style.display = 'block';
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>