<?php
$page_title = "Аварийное восстановление (DRP): полное руководство для системных администраторов";
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
            <span>Время чтения: 15-18 минут</span>
        </div>

        <div class="content">
            <h2>Введение в аварийное восстановление</h2>
            <p>Аварийное восстановление (Disaster Recovery Plan, DRP) — это комплекс мер и процедур, направленных на восстановление работы информационных систем после критических сбоев или катастроф. В отличие от резервного копирования, которое защищает данные, DRP охватывает всю инфраструктуру — от оборудования до бизнес-процессов.</p>
            
            <div class="infographic">
                <div class="infographic-item">
                    <div class="infographic-number">40%</div>
                    <div class="infographic-label">компаний без DRP закрываются после крупного сбоя</div>
                </div>
                <div class="infographic-item">
                    <div class="infographic-number">$9,000</div>
                    <div class="infographic-label">средние потери в минуту простоя для среднего бизнеса</div>
                </div>
                <div class="infographic-item">
                    <div class="infographic-number">72 ч</div>
                    <div class="infographic-label">максимально допустимый простой для 90% компаний</div>
                </div>
            </div>
            
            <div class="security-alert">
                <h3>Важно!</h3>
                <p>Согласно исследованию Gartner, 93% компаний, потерявших доступ к своим данным на 10 и более дней, подают заявление о банкротстве в течение года. При этом 50% компаний без DRP никогда не восстанавливаются после катастрофы.</p>
            </div>

            <h2>Ключевые компоненты DRP</h2>
            
            <div class="method-card">
                <h3>1. Анализ рисков (BIA)</h3>
                <p>Business Impact Analysis — процесс определения критически важных систем и допустимого времени простоя:</p>
                <ul>
                    <li><strong>RTO (Recovery Time Objective):</strong> Максимально допустимое время восстановления</li>
                    <li><strong>RPO (Recovery Point Objective):</strong> Максимально допустимая потеря данных</li>
                    <li><strong>MTD (Maximum Tolerable Downtime):</strong> Общее время простоя до необратимых последствий</li>
                </ul>
            </div>
            
            <div class="method-card">
                <h3>2. Стратегии восстановления</h3>
                <p>Основные подходы к организации аварийного восстановления:</p>
                <ul>
                    <li><strong>Холодный сайт:</strong> Пустое помещение с инфраструктурой</li>
                    <li><strong>Теплый сайт:</strong> Частично готовые системы</li>
                    <li><strong>Горячий сайт:</strong> Полностью готовый дублирующий ЦОД</li>
                    <li><strong>Облачное решение:</strong> DRaaS (Disaster Recovery as a Service)</li>
                </ul>
            </div>
            
            <div class="method-card">
                <h3>3. План коммуникации</h3>
                <p>Критически важный компонент, который часто упускают:</p>
                <ul>
                    <li>Контакты ответственных лиц</li>
                    <li>Процедуры оповещения персонала</li>
                    <li>Коммуникация с клиентами и партнерами</li>
                    <li>Взаимодействие с регуляторами и СМИ</li>
                </ul>
            </div>

            <h2>Технические решения для DRP</h2>
            
            <table class="comparison-table">
                <tr>
                    <th>Решение</th>
                    <th>Описание</th>
                    <th>RTO</th>
                    <th>RPO</th>
                    <th>Стоимость</th>
                </tr>
                <tr>
                    <td><strong>Резервные копии на лентах</strong></td>
                    <td>Традиционный метод с ручным восстановлением</td>
                    <td>24-72 ч</td>
                    <td>24 ч</td>
                    <td>Низкая</td>
                </tr>
                <tr>
                    <td><strong>Репликация на горячий сайт</strong></td>
                    <td>Постоянная синхронизация с резервным ЦОД</td>
                    <td>1-4 ч</td>
                    <td>15 мин</td>
                    <td>Высокая</td>
                </tr>
                <tr>
                    <td><strong>Гиперконвергентные системы</strong></td>
                    <td>Автоматическое восстановление виртуальных машин</td>
                    <td>15-60 мин</td>
                    <td>5 мин</td>
                    <td>Средняя</td>
                </tr>
                <tr>
                    <td><strong>Облачные DRaaS</strong></td>
                    <td>Восстановление в облаке провайдера</td>
                    <td>2-8 ч</td>
                    <td>1 ч</td>
                    <td>Гибкая</td>
                </tr>
            </table>
            
            <h3>Пример настройки репликации в VMware</h3>
            <div class="code-example">
                <span class="code-comment"># Настройка Site Recovery Manager</span><br>
                <span class="code-comment"># 1. Установка соединения между сайтами</span><br>
                New-SrmConnection -Name "DR-Site" -Server "dr-vcenter.company.com"<br>
                <span class="code-comment"># 2. Создание пар защитных групп</span><br>
                New-SrmProtectionGroup -Name "Critical-VMs" -PrimarySite "vcenter1" -RecoverySite "vcenter2"<br>
                <span class="code-comment"># 3. Настройка плана восстановления</span><br>
                New-SrmRecoveryPlan -Name "Full-Recovery" -ProtectionGroup "Critical-VMs"<br>
                <span class="code-comment"># 4. Тестирование плана</span><br>
                Start-SrmRecoveryPlan -Name "Full-Recovery" -Test
            </div>
            
            <h3>Автоматизация мониторинга DRP</h3>
            <div class="code-example">
                <span class="code-comment"># PowerShell скрипт проверки репликации</span><br>
                $replicationStatus = Get-VMReplication -Name "SQL-Server" | Select Status<br>
                $lastSyncTime = Get-VMReplication -Name "SQL-Server" | Select LastReplicationTime<br>
                <br>
                if ($replicationStatus.Status -ne "Replicating") {<br>
                &nbsp;&nbsp;Send-MailMessage -From "dr-monitor@company.com" -To "admin@company.com" `<br>
                &nbsp;&nbsp;&nbsp;&nbsp;-Subject "[CRITICAL] Остановлена репликация SQL-Server" `<br>
                &nbsp;&nbsp;&nbsp;&nbsp;-Body "Репликация остановлена. Последняя синхронизация: $($lastSyncTime.LastReplicationTime)" `<br>
                &nbsp;&nbsp;&nbsp;&nbsp;-Priority High -SmtpServer "mail.company.com"<br>
                }
            </div>

            <h2>Этапы реализации DRP</h2>
            
            <div class="method-card">
                <h3>1. Планирование</h3>
                <ul>
                    <li>Определение критических активов</li>
                    <li>Оценка рисков и последствий</li>
                    <li>Установка RTO и RPO</li>
                    <li>Выбор стратегии восстановления</li>
                </ul>
            </div>
            
            <div class="method-card">
                <h3>2. Разработка</h3>
                <ul>
                    <li>Создание документации</li>
                    <li>Настройка технических решений</li>
                    <li>Обучение персонала</li>
                    <li>Интеграция с другими процессами</li>
                </ul>
            </div>
            
            <div class="method-card">
                <h3>3. Тестирование</h3>
                <ul>
                    <li>Плановые тесты восстановления</li>
                    <li>Внеплановые проверки</li>
                    <li>Сценарные учения</li>
                    <li>Анализ результатов</li>
                </ul>
            </div>
            
            <div class="method-card">
                <h3>4. Поддержка</h3>
                <ul>
                    <li>Регулярные обновления</li>
                    <li>Адаптация к изменениям</li>
                    <li>Непрерывное улучшение</li>
                    <li>Аудит эффективности</li>
                </ul>
            </div>

            <div class="best-practice">
                <h3>Лучшие практики DRP</h3>
                <ul>
                    <li>Тестируйте план минимум 2 раза в год</li>
                    <li>Храните копии документации вне офиса</li>
                    <li>Автоматизируйте мониторинг критических систем</li>
                    <li>Учитывайте человеческий фактор в планах</li>
                    <li>Интегрируйте DRP с инцидент-менеджментом</li>
                </ul>
            </div>

            <div class="test-container">
                <h2>Проверьте свои знания</h2>
                <form id="drpTest">
                    
                    <div class="question">
                        <p><strong>1. Что означает аббревиатура RTO в контексте DRP?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q1" id="q1a" value="a">
                                <label for="q1a">Recovery Time Objective - целевое время восстановления</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1b" value="b">
                                <label for="q1b">Return To Operation - возврат к нормальной работе</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1c" value="c">
                                <label for="q1c">Real Time Operation - работа в реальном времени</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q1" value="a">
                    </div>
                    
                    <div class="question">
                        <p><strong>2. Какие из перечисленных элементов должны быть в DRP? (Выберите все верные)</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="checkbox" name="q2" id="q2a" value="a">
                                <label for="q2a">Контакты ответственных лиц</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q2" id="q2b" value="b">
                                <label for="q2b">Процедуры восстановления данных</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q2" id="q2c" value="c">
                                <label for="q2c">План коммуникации с клиентами</label>
                            </div>
                            <div class="option">
                                <input type="checkbox" name="q2" id="q2d" value="d">
                                <label for="q2d">График уборки офиса</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q2" value="a,b,c">
                    </div>
                    
                    <div class="question">
                        <p><strong>3. Какие преимущества у облачного DRaaS? (Опишите 2-3 ключевых преимущества)</strong></p>
                        <textarea id="q3_answer" class="text-answer" rows="4"></textarea>
                        <input type="hidden" id="correct_q3_keywords" value="масштабируемость,гибкость,экономия,удаленный доступ,быстрое развертывание">
                    </div>
                    
                    <div class="question">
                        <p><strong>4. Как часто нужно тестировать план аварийного восстановления?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q4" id="q4a" value="a">
                                <label for="q4a">Раз в год</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q4" id="q4b" value="b">
                                <label for="q4b">Раз в квартал</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q4" id="q4c" value="c">
                                <label for="q4c">Минимум 2 раза в год</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q4" id="q4d" value="d">
                                <label for="q4d">Только после изменений в инфраструктуре</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q4" value="c">
                    </div>
                    
                    <button type="button" onclick="checkDRPTest()">Проверить ответы</button>
                </form>
                
                <div id="testResults" class="results"></div>
            </div>
        </div>
    </div>
</article>

<script>
function checkDRPTest() {
    let score = 0;
    let resultsHTML = "<h3>Результаты теста:</h3><ol>";
    const keywordThreshold = 2;
    
    // Вопрос 1
    const q1Selected = document.querySelector('input[name="q1"]:checked');
    if (q1Selected && q1Selected.value === document.getElementById('correct_q1').value) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 1: Верно! RTO (Recovery Time Objective) - это целевое время восстановления.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 1: Неверно. Правильный ответ: Recovery Time Objective - целевое время восстановления.</li>`;
    }
    
    // Вопрос 2
    const q2Selected = Array.from(document.querySelectorAll('input[name="q2"]:checked')).map(el => el.value).sort().join(',');
    const q2Correct = document.getElementById('correct_q2').value.split(',').sort().join(',');
    if (q2Selected === q2Correct) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 2: Правильно! Все выбранные элементы должны быть в DRP.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 2: Неполный ответ. В DRP должны быть контакты, процедуры восстановления и план коммуникации.</li>`;
    }
    
    // Вопрос 3
    const q3Answer = document.getElementById('q3_answer').value.toLowerCase();
    const q3Keywords = document.getElementById('correct_q3_keywords').value.split(',');
    let foundKeywords = q3Keywords.filter(word => q3Answer.includes(word));
    
    if (foundKeywords.length >= keywordThreshold) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 3: Принято! Вы указали ключевые преимущества DRaaS: ${foundKeywords.join(', ')}.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 3: Ответ недостаточно полный. Ключевые преимущества: масштабируемость, гибкость, экономия, удаленный доступ.</li>`;
    }
    
    // Вопрос 4
    const q4Selected = document.querySelector('input[name="q4"]:checked');
    if (q4Selected && q4Selected.value === document.getElementById('correct_q4').value) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 4: Абсолютно верно! План нужно тестировать минимум 2 раза в год.</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 4: Неверно. Рекомендуется тестировать DRP минимум 2 раза в год.</li>`;
    }
    
    resultsHTML += `</ol><p><strong>Итоговый результат: ${score} из 4 (${Math.round(score/4*100)}%)</strong></p>`;
    document.getElementById('testResults').innerHTML = resultsHTML;
    document.getElementById('testResults').style.display = 'block';
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>