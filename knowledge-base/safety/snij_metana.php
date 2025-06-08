<?php 
$page_title = "Методы снижения выбросов метана в газовой отрасли";
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
        font-family: 'Arial', sans-serif;
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
    
    .test-container {
        margin: 40px 0;
        padding: 25px;
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        background-color: #f8fafc;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }
    
    h1 {
        color: #000000;
        border-bottom: 2px solid #3498db;
        padding-bottom: 10px;
        margin-bottom: 20px;
    }
    
    h2 {
        color: #3498db;
        margin-top: 30px;
        font-size: 1.5rem;
    }
    
    h3 {
        color: #2c3e50;
        margin-top: 25px;
        font-size: 1.3rem;
    }
    
    p {
        margin-bottom: 15px;
        text-align: justify;
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
    
    @media (max-width: 768px) {
        .test-container {
            padding: 15px;
        }
        
        h1 {
            font-size: 1.8rem;
        }
        
        h2 {
            font-size: 1.3rem;
        }
    }
</style>
</head>
<body>
<article class="kb-article">
    <div class="centered-content">
        <h1><?= $page_title ?></h1>
        <div class="meta">
            <span>Категория: <a href="/knowledge-base/gas-processing/">Экология и безопасность</a></span>
            <span>Обновлено: <?= date('d.m.Y') ?></span>
        </div>

        <div class="content">
            <h2>Проблема выбросов метана в газовой отрасли</h2>
            <p>Метан (CH₄) является основным компонентом природного газа и мощным парниковым газом. Его потенциал глобального потепления в 28-36 раз выше, чем у CO₂ на 100-летнем горизонте. В газовой отрасли основные источники выбросов метана включают утечки оборудования, вентиляционные выбросы, сжигание на факелах и аварийные ситуации. По данным Международного энергетического агентства (IEA), на нефтегазовый сектор приходится около 40% антропогенных выбросов метана.</p>
            
            <div class="notice info">
                <p>Снижение выбросов метана - одна из ключевых задач Парижского соглашения по климату и Глобального метанового обязательства, подписанного более чем 100 странами.</p>
            </div>

            <h2>Технологические методы снижения выбросов</h2>
            
            <h3>1. Обнаружение и устранение утечек (LDAR)</h3>
            <p>Программы по обнаружению и ремонту утечек (Leak Detection and Repair - LDAR) являются основным инструментом снижения выбросов. Современные методы включают:</p>
            
            <p>- <strong>Оптическую газовую визуализацию</strong> (OGI): использование инфракрасных камер для визуализации утечек<br>
            - <strong>Лазерные детекторы</strong>: портативные устройства для точечного измерения<br>
            - <strong>Дроны с датчиками метана</strong>: для обследования труднодоступных участков<br>
            - <strong>Стационарные системы мониторинга</strong>: непрерывный контроль концентрации метана</p>
            
            <p>Эффективные программы LDAR могут сократить выбросы от утечек на 60-80%.</p>
            
            <h3>2. Модернизация оборудования</h3>
            <p>Замена устаревшего оборудования на современные низкоэмиссионные модели позволяет существенно снизить выбросы:</p>
            
            <p>- <strong>Компрессоры с сухими уплотнениями</strong>: вместо традиционных сальниковых<br>
            - <strong>Пневматические устройства с низким уровнем выбросов</strong>: работают на сжатом воздухе вместо газа<br>
            - <strong>Системы рекуперации паров</strong>: для улавливания метана при загрузке/разгрузке<br>
            - <strong>Запорная арматура с нулевой эмиссией</strong>: специальные конструкции для предотвращения утечек</p>
            
            <h3>3. Оптимизация процессов</h3>
            <p>Изменение технологических процессов может значительно сократить выбросы:</p>
            
            <p>- <strong>Снижение продувочных операций</strong>: минимизация вентиляционных выбросов<br>
            - <strong>Рекуперация газа при техническом обслуживании</strong>: вместо сброса в атмосферу<br>
            - <strong>Оптимизация работы факелов</strong>: обеспечение постоянного горения<br>
            - <strong>Использование попутного нефтяного газа</strong>: вместо сжигания на факелах</p>

            <h2>Инновационные технологии улавливания метана</h2>
            
            <h3>1. Мембранные технологии</h3>
            <p>Современные мембранные системы позволяют отделять метан от других газов с эффективностью до 95%. Применяются:</p>
            
            <p>- <strong>Полимерные мембраны</strong>: для очистки вентиляционных выбросов<br>
            - <strong>Керамические мембраны</strong>: для высокотемпературных процессов<br>
            - <strong>Гибридные системы</strong>: комбинация с адсорбцией</p>
            
            <h3>2. Метанокисляющие биореакторы</h3>
            <p>Биотехнологические решения используют метанотрофные бактерии для преобразования CH₄ в CO₂ и биомассу. Эффективность современных биореакторов достигает 90%.</p>
            
            <h3>3. Каталитическое окисление</h3>
            <p>Каталитические системы окисляют метан при температурах 300-500°C (вместо 800-1000°C при обычном сжигании). Применяются:</p>
            
            <p>- <strong>Палладиевые катализаторы</strong>: для низких концентраций метана<br>
            - <strong>Композитные материалы</strong>: с повышенной устойчивостью к ядам</p>

            <h2>Экономические механизмы снижения выбросов</h2>
            
            <p>1. <strong>Системы торговли выбросами</strong>: включение метана в углеродные рынки<br>
            2. <strong>Налоговые льготы</strong>: для компаний, внедряющих технологии снижения выбросов<br>
            3. <strong>Зеленые финансы</strong>: льготное кредитование экологических проектов<br>
            4. <strong>Страхование рисков</strong>: специальные продукты для метановых проектов</p>
            
            <div class="notice warning">
                <p>По оценкам McKinsey, внедрение доступных технологий может сократить выбросы метана в газовой отрасли на 50% с окупаемостью менее 3 лет.</p>
            </div>

            <div class="test-container">
                <h2>Проверьте свои знания</h2>
                <form id="methaneTest">
                    
                    <!-- Вопрос 1 -->
                    <div class="question">
                        <p><strong>1. Во сколько раз потенциал глобального потепления метана выше, чем у CO₂ на 100-летнем горизонте?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q1" id="q1a" value="a">
                                <label for="q1a">5-10 раз</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1b" value="b">
                                <label for="q1b">28-36 раз</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1c" value="c">
                                <label for="q1c">50-60 раз</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q1" value="b">
                    </div>
                    
                    <!-- Вопрос 2 -->
                    <div class="question">
                        <p><strong>2. Как называется программа по обнаружению и ремонту утечек метана?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q2" id="q2a" value="a">
                                <label for="q2a">OGI</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2b" value="b">
                                <label for="q2b">LDAR</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2c" value="c">
                                <label for="q2c">VOC</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q2" value="b">
                    </div>
                    
                    <!-- Вопрос 3 -->
                    <div class="question">
                        <p><strong>3. Какой метод обнаружения утечек использует инфракрасные камеры?</strong></p>
                        <input type="text" id="q3_answer" class="text-answer" placeholder="Введите аббревиатуру">
                        <input type="hidden" id="correct_q3" value="OGI">
                    </div>
                    
                    <!-- Вопрос 4 -->
                    <div class="question">
                        <p><strong>4. Какие компрессоры имеют меньшие выбросы метана?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q4" id="q4a" value="a">
                                <label for="q4a">С сальниковыми уплотнениями</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q4" id="q4b" value="b">
                                <label for="q4b">С сухими уплотнениями</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q4" id="q4c" value="c">
                                <label for="q4c">Мембранные</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q4" value="b">
                    </div>
                    
                    <!-- Вопрос 5 -->
                    <div class="question">
                        <p><strong>5. Какой катализатор наиболее эффективен для окисления метана?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q5" id="q5a" value="a">
                                <label for="q5a">Железный</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q5" id="q5b" value="b">
                                <label for="q5b">Палладиевый</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q5" id="q5c" value="c">
                                <label for="q5c">Медный</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q5" value="b">
                    </div>
                    
                    <!-- Вопрос 6 -->
                    <div class="question">
                        <p><strong>6. Какой процент выбросов метана может быть сокращен с помощью доступных технологий?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q6" id="q6a" value="a">
                                <label for="q6a">20%</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q6" id="q6b" value="b">
                                <label for="q6b">50%</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q6" id="q6c" value="c">
                                <label for="q6c">80%</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q6" value="b">
                    </div>
                    
                    <!-- Вопрос 7 -->
                    <div class="question">
                        <p><strong>7. Какой микроорганизм используется в биореакторах для утилизации метана?</strong></p>
                        <input type="text" id="q7_answer" class="text-answer" placeholder="Введите термин">
                        <input type="hidden" id="correct_q7" value="метанотрофные бактерии">
                    </div>
                    
                    <!-- Вопрос 8 -->
                    <div class="question">
                        <p><strong>8. Какая температура требуется для каталитического окисления метана?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q8" id="q8a" value="a">
                                <label for="q8a">100-200°C</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q8" id="q8b" value="b">
                                <label for="q8b">300-500°C</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q8" id="q8c" value="c">
                                <label for="q8c">800-1000°C</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q8" value="b">
                    </div>
                    
                    <button type="button" onclick="checkMethaneTest()">Проверить ответы</button>
                </form>
                
                <div id="testResults" class="results"></div>
            </div>
        </div>
    </div>
</article>

<script>
function checkMethaneTest() {
    let score = 0;
    let resultsHTML = "<h3>Результаты теста:</h3><ol>";
    const totalQuestions = 8;
    
    // Проверка вопросов с вариантами ответов (1,2,4,5,6,8)
    for (let i = 1; i <= totalQuestions; i++) {
        if (i === 3 || i === 7) continue;
        
        const selected = document.querySelector(`input[name="q${i}"]:checked`);
        const correct = document.getElementById(`correct_q${i}`).value;
        
        if (selected && selected.value === correct) {
            score++;
            resultsHTML += `<li class="correct">Вопрос ${i}: Правильно! Ваш ответ: ${selected.nextElementSibling.textContent}</li>`;
        } else {
            const correctLabel = document.querySelector(`label[for="q${i}${correct}"]`).textContent;
            const userAnswer = selected ? selected.nextElementSibling.textContent : "Нет ответа";
            resultsHTML += `<li class="incorrect">Вопрос ${i}: Неправильно. Ваш ответ: ${userAnswer}. Правильный ответ: ${correctLabel}</li>`;
        }
    }
    
    // Проверка текстовых вопросов (3,7)
    const answer3 = document.getElementById('q3_answer').value.trim().toUpperCase();
    const correct3 = document.getElementById('correct_q3').value.toUpperCase();
    if (answer3 === correct3) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 3: Правильно! Ваш ответ: ${answer3}</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 3: Неверно. Ваш ответ: ${answer3 || "Нет ответа"}. Правильный ответ: ${correct3}</li>`;
    }
    
    const answer7 = document.getElementById('q7_answer').value.trim().toLowerCase();
    const correct7 = document.getElementById('correct_q7').value.toLowerCase();
    if (answer7 === correct7 || answer7 === "метанотрофы") {
        score++;
        resultsHTML += `<li class="correct">Вопрос 7: Правильно! Ваш ответ: ${answer7}</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 7: Неверно. Ваш ответ: ${answer7 || "Нет ответа"}. Правильный ответ: ${correct7}</li>`;
    }
    
    resultsHTML += `</ol><p><strong>Итоговый результат: ${score} из ${totalQuestions} (${Math.round(score/totalQuestions*100)}%)</strong></p>`;
    document.getElementById('testResults').innerHTML = resultsHTML;
    document.getElementById('testResults').style.display = 'block';
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>