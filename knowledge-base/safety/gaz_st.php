<?php 
$page_title = "Природный газ: основы, добыча, транспортировка и применение";
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
        background-color: #ffffff !important; /* Белый фон на всей странице */
    }
    
    .centered-content {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        text-align: left;
        background-color: #ffffff; /* Белый фон контентной области */
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
</style>
</head>
<body>
<article class="kb-article">
    <div class="centered-content">
        <h1><?= $page_title ?></h1>
        <div class="meta">
            <span>Категория: <a href="/knowledge-base/gas/">Газовая отрасль</a></span>
        </div>

        <div class="content">
            <h2>Введение</h2>
            <p>Природный газ — один из ключевых энергоресурсов современности, играющий важную роль в мировой экономике и энергетике. Компания «Газпром» является лидером в сфере добычи, транспортировки и реализации газа, обеспечивая энергетическую безопасность России и многих зарубежных стран.</p>
            <p>В данной статье рассмотрены основные свойства природного газа, технологии его добычи, методы транспортировки и сферы применения.</p>

            <h2>1. Что такое природный газ?</h2>
            <p>Природный газ — это смесь углеводородов, основным компонентом которой является метан (CH₄, 70–98%). В состав также входят:</p>
            <ul>
                <li>Этан (C₂H₆)</li>
                <li>Пропан (C₃H₈)</li>
                <li>Бутан (C₄H₁₀)</li>
                <li>Азот (N₂)</li>
                <li>Углекислый газ (CO₂)</li>
                <li>Сероводород (H₂S) и другие примеси.</li>
            </ul>
            <p>Газ находится в недрах Земли в пористых горных породах (часто вместе с нефтью) и образуется в результате разложения органических веществ под действием высоких температур и давления.</p>

            <h3>Основные свойства природного газа:</h3>
            <ul>
                <li>Легче воздуха (плотность ~0,7 кг/м³)</li>
                <li>Бесцветный и без запаха (одоранты добавляют для обнаружения утечек)</li>
                <li>Взрывоопасен при концентрации в воздухе 4,5–17%</li>
                <li>Энергоемкий: теплота сгорания ~31–39 МДж/м³</li>
            </ul>

            <h2>2. Добыча природного газа</h2>
            <h3>2.1. Разведка месторождений</h3>
            <p>Прежде чем начать добычу, проводятся геологоразведочные работы (ГРР):</p>
            <ul>
                <li>Сейсморазведка (анализ волн для определения залежей)</li>
                <li>Бурение разведочных скважин</li>
                <li>Оценка запасов (категории A, B, C₁, C₂)</li>
            </ul>

            <h3>2.2. Основные методы добычи</h3>
            <ol>
                <li>Фонтанный способ – газ выходит под собственным давлением.</li>
                <li>Компрессорный способ – применяется при снижении пластового давления.</li>
                <li>Гидроразрыв пласта (ГРП) – увеличивает проницаемость породы.</li>
            </ol>

            <p>Крупнейшие месторождения России:</p>
            <ul>
                <li>Уренгойское (Ямало-Ненецкий АО)</li>
                <li>Ямбургское (ЯНАО)</li>
                <li>Бованенковское (Ямал)</li>
                <li>Штокмановское (шельф Баренцева моря)</li>
            </ul>

            <h2>3. Транспортировка газа</h2>
            <h3>3.1. Магистральные газопроводы</h3>
            <p>Основной способ доставки газа на большие расстояния.</p>
            <ul>
                <li>Давление в трубах: 5,5–11,8 МПа</li>
                <li>Диаметр труб: 700–1420 мм</li>
                <li>Компрессорные станции (поддерживают давление)</li>
            </ul>

            <p>Примеры крупных газопроводов:</p>
            <ul>
                <li>«Северный поток» (Россия – Германия)</li>
                <li>«Сила Сибири» (Россия – Китай)</li>
                <li>«Турецкий поток» (Россия – Турция)</li>
            </ul>

            <h3>3.2. Сжиженный природный газ (СПГ)</h3>
            <p>Газ охлаждается до -162°C, превращаясь в жидкость (уменьшается объем в 600 раз).</p>
            <ul>
                <li>Перевозится танкерами</li>
                <li>Основные рынки: Япония, Китай, Европа</li>
                <li>Крупные СПГ-проекты: «Сахалин-2», «Ямал СПГ», «Арктик СПГ-2»</li>
            </ul>

            <h2>4. Применение природного газа</h2>
            <ol>
                <li>Энергетика (ТЭС, когенерационные установки)</li>
                <li>Промышленность (металлургия, химия, производство удобрений)</li>
                <li>Коммунальное хозяйство (отопление, приготовление пищи)</li>
                <li>Транспорт (газомоторное топливо – КПГ и СПГ)</li>
                <li>Нефтехимия (производство пластмасс, метанола, водорода)</li>
            </ol>

            <h2>5. Экология и будущее газа</h2>
            <p>Природный газ считается наиболее экологичным ископаемым топливом (меньше выбросов CO₂, чем у угля и нефти). Однако в долгосрочной перспективе развиваются:</p>
            <ul>
                <li>Водородная энергетика (смеси H₂ и CH₄)</li>
                <li>Улавливание и хранение углерода (CCS)</li>
                <li>Биометан (из органических отходов)</li>
            </ul>

            <h2>Заключение</h2>
            <p>Природный газ остается стратегически важным ресурсом для мировой экономики. «Газпром» продолжает развивать технологии добычи, транспортировки и переработки газа, обеспечивая энергетическую стабильность и экологическую безопасность.</p>
            <p>Знание основ газовой отрасли помогает сотрудникам компании эффективно решать профессиональные задачи и способствовать развитию энергетики будущего.</p>
        </div>

        <div class="test-container">
                <h2>Тест для самопроверки</h2>
                
                <form id="gasTestForm">
                    <!-- Вопрос 1 -->
                    <div class="question">
                        <p><strong>1. Какой компонент является основным в составе природного газа?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q1" id="q1a" value="a">
                                <label for="q1a">Этан (C₂H₆)</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1b" value="b">
                                <label for="q1b">Метан (CH₄)</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1c" value="c">
                                <label for="q1c">Пропан (C₃H₈)</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1d" value="d">
                                <label for="q1d">Бутан (C₄H₁₀)</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q1" value="b">
                    </div>
                    
                    <!-- Вопрос 2 -->
                    <div class="question">
                        <p><strong>2. Какое давление поддерживается в магистральных газопроводах?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q2" id="q2a" value="a">
                                <label for="q2a">1-3 МПа</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2b" value="b">
                                <label for="q2b">5,5-11,8 МПа</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2c" value="c">
                                <label for="q2c">15-20 МПа</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2d" value="d">
                                <label for="q2d">0,5-1 МПа</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q2" value="b">
                    </div>
                    
                    <!-- Вопрос 3 -->
                    <div class="question">
                        <p><strong>3. При какой температуре газ превращается в сжиженный природный газ (СПГ)?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q3" id="q3a" value="a">
                                <label for="q3a">-50°C</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q3" id="q3b" value="b">
                                <label for="q3b">-100°C</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q3" id="q3c" value="c">
                                <label for="q3c">-162°C</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q3" id="q3d" value="d">
                                <label for="q3d">-200°C</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q3" value="c">
                    </div>
                    
                    <!-- Вопрос 4 (текстовый ответ) -->
                    <div class="question">
                        <p><strong>4. Как называется метод увеличения проницаемости породы при добыче газа?</strong></p>
                        <input type="text" id="q4_answer" class="text-answer" placeholder="Введите ответ">
                        <input type="hidden" id="correct_q4" value="Гидроразрыв пласта">
                    </div>
                    
                    <!-- Вопрос 5 (текстовый ответ) -->
                    <div class="question">
                        <p><strong>5. Назовите одно из крупнейших газовых месторождений России (Ямало-Ненецкий АО)</strong></p>
                        <input type="text" id="q5_answer" class="text-answer" placeholder="Введите ответ">
                        <input type="hidden" id="correct_q5" value="Уренгойское">
                    </div>
                    
                    <!-- Вопрос 6 (текстовый ответ) -->
                    <div class="question">
                        <p><strong>6. Как называется газ с добавкой этилмеркаптана для обнаружения утечек?</strong></p>
                        <input type="text" id="q6_answer" class="text-answer" placeholder="Введите ответ">
                        <input type="hidden" id="correct_q6" value="Одорированный">
                    </div>
                    
                    <button type="button" onclick="checkTest()">Проверить ответы</button>
                </form>
                
                <div id="testResults" class="results"></div>
            </div>

            <!-- Связанные статьи -->
            <div class="related">
                <h3>Смотрите также:</h3>
                <ul>
                    <li><a href="/knowledge-base/gas/extraction-methods.php">Современные методы добычи газа</a></li>
                    <li><a href="/knowledge-base/gas/safety.php">Техника безопасности при работе с газом</a></li>
                </ul>
            </div>
        </div>
    </div>
</article>

<script>
function checkTest() {
    let score = 0;
    let resultsHTML = "<h3>Результаты теста:</h3><ol>";
    
    // Проверка вопросов 1-3 (радио кнопки)
    for (let i = 1; i <= 3; i++) {
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
    
    // Проверка вопросов 4-6 (текстовые ответы)
    for (let i = 4; i <= 6; i++) {
        const answer = document.getElementById(`q${i}_answer`).value.trim();
        const correct = document.getElementById(`correct_q${i}`).value;
        
        if (answer.toLowerCase() === correct.toLowerCase()) {
            score++;
            resultsHTML += `<li class="correct">Вопрос ${i}: Правильно! Ваш ответ: ${answer}</li>`;
        } else {
            resultsHTML += `<li class="incorrect">Вопрос ${i}: Неправильно. Ваш ответ: ${answer || "Нет ответа"}. Правильный ответ: ${correct}</li>`;
        }
    }
    
    resultsHTML += `</ol><p><strong>Итоговый результат: ${score} из 6 (${Math.round(score/6*100)}%)</strong></p>`;
    
    document.getElementById('testResults').innerHTML = resultsHTML;
    document.getElementById('testResults').style.display = 'block';
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
