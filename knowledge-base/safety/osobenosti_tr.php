<?php 
$page_title = "Особенности транспортировки сжиженного газа (СПГ)";
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
            <span>Категория: <a href="/knowledge-base/gas-processing/">Переработка газа</a></span>
            <span>Обновлено: <?= date('d.m.Y') ?></span>
        </div>

        <div class="content">
            <h2>Основные методы транспортировки сжиженного газа</h2>
            <p>Транспортировка сжиженного природного газа (СПГ) представляет собой сложный технологический процесс, требующий специальной инфраструктуры и соблюдения строгих мер безопасности. Основными способами перевозки СПГ являются морские перевозки с использованием специализированных танкеров-газовозов, автомобильные перевозки в криогенных цистернах и, в ограниченных масштабах, железнодорожные перевозки. Каждый из этих методов имеет свои особенности, преимущества и ограничения, которые определяют сферу их применения.</p>
            
            <p>Современные танкеры-газовозы классифицируются по объёму перевозимого СПГ: от небольших судов вместимостью 6 000-30 000 м³ до гигантских Q-Max танкеров, способных перевозить до 266 000 м³ сжиженного газа. Ключевыми характеристиками газовозов являются тип системы хранения (мембранная или сферическая), энергетическая установка (паровые турбины, дизельные двигатели или двигатели на boil-off gas) и уровень автоматизации.</p>

            <h2>Морская транспортировка СПГ</h2>
            
            <h3>1. Типы танкеров-газовозов</h3>
            <p>Современный флот СПГ-танкеров можно разделить на несколько основных категорий:</p>
            
            <p><strong>Мембранные танкеры</strong> (составляют около 80% флота) используют тонкие нержавеющие мембраны, поддерживаемые изоляцией из перлита и пенополиуретана. Они позволяют оптимально использовать пространство судна, но требуют тщательного контроля давления.</p>
            
            <p><strong>Сферические танкеры</strong> (типа Moss) имеют самостоятельные алюминиевые резервуары сферической формы, которые менее чувствительны к динамическим нагрузкам, но менее эффективно используют пространство. Такие танкеры особенно популярны для перевозок в сложных метеоусловиях.</p>
            
            <p><strong>Комбинированные газовозы</strong> способны перевозить как СПГ, так и другие сжиженные газы (например, LPG или этилен), что повышает их гибкость, но увеличивает стоимость.</p>
            
            <h3>2. Системы управления boil-off gas</h3>
            <p>Boil-off gas (BOG) - естественно испаряющийся газ - является ключевым вызовом при транспортировке СПГ. Современные газовозы используют три основных подхода:</p>
            
            <p>- <strong>Рециркуляция BOG</strong>: испарения сжижаются и возвращаются в резервуары<br>
            - <strong>Использование BOG как топлива</strong>: газ направляется в судовые двигатели<br>
            - <strong>Сжигание в факеле</strong>: применяется в аварийных ситуациях</p>
            
            <p>Средний уровень испарения составляет 0,1-0,15% от объёма СПГ в сутки, но может увеличиваться до 0,3% в тропических широтах.</p>
            
            <h3>3. Маршруты и логистика</h3>
            <p>Основные международные маршруты транспортировки СПГ включают:</p>
            
            <p>- Катар → Япония/Китай/Южная Корея (≈6 000 морских миль)<br>
            - Австралия → Китай (≈3 500 морских миль)<br>
            - США → Европа (≈3 000 морских миль)<br>
            - Россия (Ямал) → Европа/Азия (≈2 500-4 000 морских миль)</p>
            
            <p>Средняя скорость газовозов составляет 18-20 узлов, а время перехода через Суэцкий канал может увеличивать стоимость перевозки на 15-20%.</p>

            <h2>Наземная транспортировка СПГ</h2>
            
            <h3>1. Автомобильные перевозки</h3>
            <p>Для перевозки СПГ автомобильным транспортом используются специальные криогенные полуприцепы с вакуумной изоляцией. Типичные характеристики:</p>
            
            <p>- Вместимость: 30-60 м³ СПГ<br>
            - Давление: 4-6 бар<br>
            - Температура: -162°C<br>
            - Автономность: до 30 суток без потерь<br>
            - Дальность перевозки: до 1 500 км</p>
            
            <p>Такие перевозки экономически оправданы для снабжения удалённых потребителей и малых СПГ-заводов.</p>
            
            <h3>2. Железнодорожные перевозки</h3>
            <p>Железнодорожные цистерны для СПГ имеют ёмкость до 120 м³ и используются в основном для:</p>
            
            <p>- Снабжения отдалённых регионов<br>
            - Аварийных поставок<br>
            - Специальных проектов (например, заправка ракетного топлива)</p>
            
            <p>В России разработаны специальные ваго-цистерны модели 15-558 с усиленной изоляцией, позволяющие перевозить СПГ на большие расстояния.</p>
            
            <h3>3. Трубопроводный транспорт</h3>
            <p>Хотя СПГ обычно транспортируется в жидком виде, существуют экспериментальные проекты по передаче сжиженного газа по трубопроводам. Основные сложности:</p>
            
            <p>- Необходимость поддержания криогенных температур<br>
            - Высокие требования к материалам труб<br>
            - Большие энергозатраты на перекачку</p>

            <h2>Технологии хранения СПГ</h2>
            
            <h3>1. Типы резервуаров</h3>
            <p>Современные хранилища СПГ классифицируются по:</p>
            
            <p><strong>Объёму</strong>:<br>
            - Малые (до 1 000 м³)<br>
            - Средние (1 000-50 000 м³)<br>
            - Крупные (50 000-200 000 м³)</p>
            
            <p><strong>Конструкции</strong>:<br>
            - Наземные (самые распространённые)<br>
            - Подземные (более безопасные, но дорогие)<br>
            - Плавучие (FSRU)</p>
            
            <p><strong>Системе изоляции</strong>:<br>
            - Двойные стенки с вакуумом<br>
            - Перлитовая засыпка<br>
            - Пенополиуретановая изоляция</p>
            
            <h3>2. Безопасность хранения</h3>
            <p>Хранение СПГ требует соблюдения строгих мер безопасности:</p>
            
            <p>- Системы мониторинга температуры и давления<br>
            - Детекторы утечки метана<br>
            - Системы аварийного сброса давления<br>
            - Защитные дамбы для сдерживания возможных разливов<br>
            - Системы азотной завесы</p>
            
            <p>Современные резервуары проектируются с расчётом на землетрясения до 9 баллов и ураганные ветры.</p>

            <h2>Экономические аспекты транспортировки СПГ</h2>
            
            <p>Стоимость транспортировки СПГ складывается из нескольких компонентов:</p>
            
            <p>1. <strong>Фрахт танкера</strong>: $30 000-100 000 в сутки в зависимости от размера судна и рыночной конъюнктуры<br>
            2. <strong>Портовые сборы</strong>: $50 000-200 000 за заход<br>
            3. <strong>Страхование</strong>: 0,1-0,3% от стоимости груза<br>
            4. <strong>Потери от испарения</strong>: 0,1-0,3% в сутки<br>
            5. <strong>Энергозатраты</strong>: около 10-15% перевозимого газа расходуется на собственные нужды судна</p>
            
            <p>Для маршрута Катар-Япония стоимость транспортировки составляет $1,5-3 за млн БТЕ, что эквивалентно 15-30% стоимости самого газа.</p>

            <div class="test-container">
                <h2>Проверьте свои знания</h2>
                <form id="lngTransportTest">
                    
                    <!-- Вопрос 1 -->
                    <div class="question">
                        <p><strong>1. Какой тип танкеров для СПГ наиболее распространён?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q1" id="q1a" value="a">
                                <label for="q1a">Мембранные</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1b" value="b">
                                <label for="q1b">Сферические (Moss)</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1c" value="c">
                                <label for="q1c">Цилиндрические</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q1" value="a">
                    </div>
                    
                    <!-- Вопрос 2 -->
                    <div class="question">
                        <p><strong>2. Каков средний уровень испарения СПГ в сутки при морской транспортировке?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q2" id="q2a" value="a">
                                <label for="q2a">0,01-0,05%</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2b" value="b">
                                <label for="q2b">0,1-0,15%</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2c" value="c">
                                <label for="q2c">0,5-1%</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q2" value="b">
                    </div>
                    
                    <!-- Вопрос 3 -->
                    <div class="question">
                        <p><strong>3. Как называется газ, образующийся при естественном испарении СПГ?</strong></p>
                        <input type="text" id="q3_answer" class="text-answer" placeholder="Введите термин">
                        <input type="hidden" id="correct_q3" value="boil-off gas">
                    </div>
                    
                    <!-- Вопрос 4 -->
                    <div class="question">
                        <p><strong>4. Какой объём СПГ может перевозить крупнейший танкер класса Q-Max?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q4" id="q4a" value="a">
                                <label for="q4a">50 000 м³</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q4" id="q4b" value="b">
                                <label for="q4b">150 000 м³</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q4" id="q4c" value="c">
                                <label for="q4c">266 000 м³</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q4" value="c">
                    </div>
                    
                    <!-- Вопрос 5 -->
                    <div class="question">
                        <p><strong>5. Какой тип изоляции используется в автомобильных цистернах для СПГ?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q5" id="q5a" value="a">
                                <label for="q5a">Вакуумная</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q5" id="q5b" value="b">
                                <label for="q5b">Пенопластовая</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q5" id="q5c" value="c">
                                <label for="q5c">Минераловатная</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q5" value="a">
                    </div>
                    
                    <!-- Вопрос 6 -->
                    <div class="question">
                        <p><strong>6. Какой основной способ утилизации boil-off gas на современных газовозах?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q6" id="q6a" value="a">
                                <label for="q6a">Сжигание в факеле</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q6" id="q6b" value="b">
                                <label for="q6b">Использование в судовых двигателях</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q6" id="q6c" value="c">
                                <label for="q6c">Выброс в атмосферу</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q6" value="b">
                    </div>
                    
                    <!-- Вопрос 7 -->
                    <div class="question">
                        <p><strong>7. Какова примерная стоимость транспортировки СПГ из Катара в Японию ($ за млн БТЕ)?</strong></p>
                        <input type="text" id="q7_answer" class="text-answer" placeholder="Введите число">
                        <input type="hidden" id="correct_q7" value="1.5-3">
                    </div>
                    
                    <!-- Вопрос 8 -->
                    <div class="question">
                        <p><strong>8. Какой тип резервуаров для СПГ считается наиболее безопасным?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q8" id="q8a" value="a">
                                <label for="q8a">Наземные</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q8" id="q8b" value="b">
                                <label for="q8b">Подземные</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q8" id="q8c" value="c">
                                <label for="q8c">Плавучие</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q8" value="b">
                    </div>
                    
                    <button type="button" onclick="checkTransportTest()">Проверить ответы</button>
                </form>
                
                <div id="testResults" class="results"></div>
            </div>
        </div>
    </div>
</article>

<script>
function checkTransportTest() {
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
    const answer3 = document.getElementById('q3_answer').value.trim().toLowerCase();
    const correct3 = document.getElementById('correct_q3').value.toLowerCase();
    if (answer3 === correct3 || answer3 === "газ испарения") {
        score++;
        resultsHTML += `<li class="correct">Вопрос 3: Правильно! Ваш ответ: ${answer3}</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 3: Неверно. Ваш ответ: ${answer3 || "Нет ответа"}. Правильный ответ: ${correct3}</li>`;
    }
    
    const answer7 = document.getElementById('q7_answer').value.trim();
    const correct7 = document.getElementById('correct_q7').value;
    if (answer7 === correct7 || answer7 === "1.5-3" || answer7 === "1,5-3") {
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