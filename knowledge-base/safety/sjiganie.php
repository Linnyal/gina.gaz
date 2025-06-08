<?php 
$page_title = "Технологии сжижения природного газа (СПГ)";
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
            <h2>Основы процесса сжижения природного газа</h2>
            <p>Сжижение природного газа (СПГ) представляет собой сложный технологический процесс преобразования газообразного метана в жидкое состояние. Это достигается путем охлаждения очищенного природного газа до криогенных температур порядка -162°C (-260°F) при атмосферном давлении. В жидком состоянии объем природного газа уменьшается приблизительно в 600 раз, что делает его экономически выгодным для транспортировки на большие расстояния, особенно в случаях, когда строительство газопроводов невозможно или нерентабельно.</p>
            
            <p>Современные заводы по сжижению природного газа (LNG plants) различаются по своей производительности - от небольших установок мощностью 1 млн тонн в год до гигантских комплексов, таких как "Сахалин-2" или заводы в Катаре, способных производить до 7-8 млн тонн СПГ ежегодно. Ключевыми характеристиками качества СПГ являются его состав (преимущественно метан с небольшими добавками этана, пропана и бутана), минимальное содержание примесей и стабильность при хранении.</p>

            <h2>Подробный обзор технологий сжижения</h2>
            
            <h3>1. Технология AP-C3MR (Air Products)</h3>
            <p>Разработанная американской компанией Air Products, технология AP-C3MR (Advanced Propane Precooled Mixed Refrigerant) доминирует на мировом рынке, будучи примененной примерно на 70% существующих СПГ-заводов. Этот метод использует каскадное охлаждение с тремя хладагентами: пропаном (для предварительного охлаждения до -35°C), этиленом (для промежуточного охлаждения до -100°C) и метаном (для финального охлаждения до -162°C).</p>
            
            <p>Преимущества AP-C3MR включают высокий КПД (до 90%), надежность и проверенность технологии. Типичное энергопотребление составляет около 300 кВт·ч на тонну СПГ, что делает этот метод одним из самых энергоэффективных. Однако сложность системы и необходимость использования нескольких хладагентов увеличивают капитальные затраты на строительство.</p>
            
            <h3>2. Технология DMR (Dual Mixed Refrigerant)</h3>
            <p>Технология DMR использует два контура охлаждения со смешанными хладагентами (обычно азот, метан, этан и пропан в различных пропорциях). В отличие от AP-C3MR, DMR требует меньше оборудования и проще в управлении, что делает ее особенно подходящей для арктических условий и плавучих СПГ-заводов.</p>
            
            <p>На российском заводе "Ямал СПГ" применена именно технология DMR, адаптированная для работы при экстремально низких температурах. Энергопотребление DMR-установок несколько выше (320-340 кВт·ч/тонну), но меньшая сложность компенсирует этот недостаток в сложных климатических условиях.</p>
            
            <h3>3. Каскадная технология (Cascade Process)</h3>
            <p>Каскадная технология, исторически первая коммерчески успешная методика сжижения газа, использует три независимых холодильных цикла с разными хладагентами (пропан, этилен и метан). Каждый цикл работает при оптимальных для своего хладагента параметрах, обеспечивая высокую общую энергоэффективность.</p>
            
            <p>Хотя современные каскадные установки достигают КПД до 92%, их сложность и высокая стоимость ограничивают применение. Тем не менее, эта технология остается востребованной для некоторых специализированных проектов, где критична максимальная энергоэффективность.</p>

            <h2>Ключевые компоненты современного СПГ-завода</h2>
            
            <h3>1. Установка предварительной очистки газа</h3>
            <p>Перед сжижением газ должен быть тщательно очищен от всех примесей, которые могут замерзнуть при низких температурах или повредить оборудование. Современные системы очистки удаляют:</p>
            
            <p>- Воду (до содержания менее 0,1 ppm, чтобы предотвратить образование гидратов)<br>
            - Диоксид углерода (CO₂, до уровня менее 50 ppm)<br>
            - Сероводород (H₂S, до менее 4 ppm)<br>
            - Ртуть (до менее 0,01 μg/m³)</p>
            
            <p>Очистка осуществляется с помощью молекулярных сит, аминовых скрубберов и специальных сорбентов на основе серы или иодида калия.</p>
            
            <h3>2. Основные теплообменники</h3>
            <p>Сердце любого СПГ-завода - криогенные теплообменники, где происходит собственно процесс сжижения. Наиболее распространены:</p>
            
            <p>- Алфиновые теплообменники: компактные устройства с высокой эффективностью теплопередачи<br>
            - Спирально-навитые теплообменники (SWHE): особенно хороши для больших объемов газа<br>
            - Пластинчато-ребристые теплообменники: используются в некоторых современных установках</p>
            
            <p>Все они изготавливаются из специальных алюминиевых сплавов, сохраняющих прочность при криогенных температурах.</p>
            
            <h3>3. Холодильные компрессоры</h3>
            <p>Для сжатия хладагентов используются мощные турбокомпрессоры (центробежные или осевые) производительностью до 80 МВт. Современные тенденции включают применение магнитных подшипников и частотно-регулируемых приводов для повышения эффективности.</p>
            
            <h3>4. Резервуары хранения СПГ</h3>
            <p>СПГ хранится в специальных двустенных резервуарах с вакуумной перлитовой изоляцией между стенками. Крупнейшие наземные хранилища имеют объем до 200 000 м³, а на танкерах-газовозах - до 266 000 м³. Температура поддерживается на уровне -163°C с точностью ±0,5°C.</p>

            <h2>Транспортировка и регазификация СПГ</h2>
            
            <p>СПГ транспортируется в специализированных танкерах-газовозах, оснащенных сложными системами изоляции и безопасности. Современные газовозы Q-Max имеют вместимость до 266 000 м³ и оснащены двигателями, работающими на частично испаряющемся газе (boil-off gas).</p>
            
            <p>Регазификация - процесс превращения СПГ обратно в газообразное состояние - осуществляется на специальных терминалах с использованием:</p>
            
            <p>- Оросительных испарителей (используют тепло морской воды)<br>
            - Промежуточных теплоносителей (пропан, гликоль)<br>
            - Открытых испарителей (сжигание части газа для нагрева)</p>
            
            <p>Плавучие регазификационные установки (FSRU) стали популярным решением, позволяющим сократить капитальные затраты и сроки реализации проектов.</p>

            <h2>Эксплуатационные параметры и стандарты качества</h2>
            
            <p>Качество СПГ регламентируется международными и национальными стандартами, включая ISO 13686 и ГОСТ Р 55472-2013. Основные требования:</p>
            
            <p>1. Температура хранения: -163°C ±0,5°C<br>
            2. Давление в резервуарах: 100-250 мбар (наддув паровой фазы)<br>
            3. Состав:<br>
            - Метан: 85-99%<br>
            - Этан: 1-10%<br>
            - Пропан/бутан: до 5%<br>
            - Азот: не более 1%<br>
            4. Теплота сгорания: 38-42 МДж/м³<br>
            5. Содержание примесей:<br>
            - Сероводород: ≤4 ppm<br>
            - Общая сера: ≤30 mg/m³<br>
            - Вода: ≤0,1 ppm<br>
            - CO₂: ≤50 ppm</p>

            <div class="test-container">
                <h2>Проверьте свои знания</h2>
                <form id="lngTest">
                    
                    <!-- Вопрос 1 -->
                    <div class="question">
                        <p><strong>1. Какая температура требуется для сжижения природного газа при атмосферном давлении?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q1" id="q1a" value="a">
                                <label for="q1a">-100°C</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1b" value="b">
                                <label for="q1b">-162°C</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1c" value="c">
                                <label for="q1c">-196°C</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q1" value="b">
                    </div>
                    
                    <!-- Вопрос 2 -->
                    <div class="question">
                        <p><strong>2. Какая из перечисленных технологий сжижения наиболее распространена в мире?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q2" id="q2a" value="a">
                                <label for="q2a">AP-C3MR</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2b" value="b">
                                <label for="q2b">DMR</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2c" value="c">
                                <label for="q2c">Каскадная</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2d" value="d">
                                <label for="q2d">Мембранная</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q2" value="a">
                    </div>
                    
                    <!-- Вопрос 3 -->
                    <div class="question">
                        <p><strong>3. Во сколько раз уменьшается объём природного газа при сжижении?</strong></p>
                        <input type="text" id="q3_answer" class="text-answer" placeholder="Введите число">
                        <input type="hidden" id="correct_q3" value="600">
                    </div>
                    
                    <!-- Вопрос 4 -->
                    <div class="question">
                        <p><strong>4. Какой компонент должен быть удалён до содержания менее 0,01 μg/m³?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q4" id="q4a" value="a">
                                <label for="q4a">Азот</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q4" id="q4b" value="b">
                                <label for="q4b">Ртуть</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q4" id="q4c" value="c">
                                <label for="q4c">Этан</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q4" id="q4d" value="d">
                                <label for="q4d">Сероводород</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q4" value="b">
                    </div>
                    
                    <!-- Вопрос 5 -->
                    <div class="question">
                        <p><strong>5. Какое максимальное содержание азота допускается в СПГ?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q5" id="q5a" value="a">
                                <label for="q5a">0,1%</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q5" id="q5b" value="b">
                                <label for="q5b">1%</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q5" id="q5c" value="c">
                                <label for="q5c">5%</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q5" id="q5d" value="d">
                                <label for="q5d">10%</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q5" value="b">
                    </div>
                    
                    <!-- Вопрос 6 -->
                    <div class="question">
                        <p><strong>6. Какой тип теплообменников наиболее распространён на крупных СПГ-заводах?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q6" id="q6a" value="a">
                                <label for="q6a">Пластинчатые</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q6" id="q6b" value="b">
                                <label for="q6b">Спирально-навитые</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q6" id="q6c" value="c">
                                <label for="q6c">Трубчатые</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q6" id="q6d" value="d">
                                <label for="q6d">Алфиновые</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q6" value="b">
                    </div>
                    
                    <!-- Вопрос 7 -->
                    <div class="question">
                        <p><strong>7. Как называется газ, образующийся при естественном испарении СПГ в резервуарах?</strong></p>
                        <input type="text" id="q7_answer" class="text-answer" placeholder="Введите термин">
                        <input type="hidden" id="correct_q7" value="boil-off gas">
                    </div>
                    
                    <!-- Вопрос 8 -->
                    <div class="question">
                        <p><strong>8. Какая технология сжижения применяется на заводе "Ямал СПГ"?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q8" id="q8a" value="a">
                                <label for="q8a">AP-C3MR</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q8" id="q8b" value="b">
                                <label for="q8b">DMR</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q8" id="q8c" value="c">
                                <label for="q8c">Каскадная</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q8" id="q8d" value="d">
                                <label for="q8d">Мембранная</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q8" value="b">
                    </div>
                    
                    <button type="button" onclick="checkTest()">Проверить ответы</button>
                </form>
                
                <div id="testResults" class="results"></div>
            </div>
        </div>
    </div>
</article>

<script>
function checkTest() {
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
    const answer3 = document.getElementById('q3_answer').value.trim();
    const correct3 = document.getElementById('correct_q3').value;
    if (answer3 === correct3) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 3: Правильно! Ваш ответ: ${answer3}</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 3: Неверно. Ваш ответ: ${answer3 || "Нет ответа"}. Правильный ответ: ${correct3}</li>`;
    }
    
    const answer7 = document.getElementById('q7_answer').value.trim().toLowerCase();
    const correct7 = document.getElementById('correct_q7').value.toLowerCase();
    if (answer7 === correct7 || answer7 === "газ испарения") {
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