<?php 
$page_title = "Принципы работы установок комплексной подготовки газа (УКПГ)";
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
            <span>Категория: <a href="/knowledge-base/gas-processing/">Подготовка газа</a></span>
            <span>Обновлено: <?= date('d.m.Y') ?></span>
        </div>

        <div class="content">
            <h2>Введение в УКПГ</h2>
            <p>Установки комплексной подготовки газа (УКПГ) представляют собой технологические комплексы, предназначенные для приёма, обработки и подготовки природного газа к транспортировке. Основная задача УКПГ - доведение сырого газа до требований ГОСТ 5542-2014 путём удаления нежелательных компонентов: воды, сероводорода, углекислого газа, механических примесей и тяжёлых углеводородов. Современные УКПГ способны обрабатывать от 1 до 10 млрд м³ газа в год.</p>

            <h2>Основные технологические узлы УКПГ</h2>
            
            <h3>1. Узел приёма и сепарации газа</h3>
            <p>На входной сепарационной установке происходит первичная очистка газа от механических примесей и капельной жидкости. Газ проходит через циклонные сепараторы, где под действием центробежных сил частицы отделяются от газового потока. Современные сепараторы обеспечивают очистку с эффективностью до 99,9% для частиц размером более 10 микрон.</p>
            
            <h3>2. Узел осушки газа</h3>
            <p>Осушка осуществляется в абсорбционных колоннах с гликолями (чаще всего триэтиленгликоль - ТЭГ). Газ проходит через насадочную колонну, где контактирует с нисходящим потоком ТЭГ, который поглощает влагу. После осушки точка росы газа по воде достигает -20°C...-30°C, что предотвращает образование гидратов в трубопроводах.</p>
            
            <h3>3. Узел очистки от кислых компонентов</h3>
            <p>Для удаления H₂S и CO₂ применяют аминовые установки, где газ пропускают через раствор моноэтаноламина (МЭА). Процесс идёт при температуре 40-50°C и давлении до 7,5 МПа. На выходе содержание сероводорода не превышает 5 мг/м³, что соответствует требованиям к товарному газу.</p>

            <h3>4. Узел низкотемпературной сепарации (НТС)</h3>
            <p>В турбодетандерных агрегатах газ охлаждается до -30°C...-60°C, что позволяет отделить тяжёлые углеводороды (С3+). Полученный газовый конденсат стабилизируют и направляют на дальнейшую переработку, а осушенный метановый газ поступает в магистральный газопровод.</p>

            <h2>Автоматизация и контроль</h2>
            <p>Современные УКПГ оснащены системами автоматизированного управления технологическим процессом (АСУ ТП). Датчики непрерывно контролируют: давление (с точностью ±0,1%), температуру (±0,5°C), состав газа (хроматографы с погрешностью ≤1%). Все данные в реальном времени передаются в центральный диспетчерский пункт.</p>

            <h2>Экологические аспекты</h2>
            <p>На УКПГ реализованы замкнутые технологические циклы. Сероводород перерабатывается в элементарную серу (по процессу Клауса), сточные воды проходят многоступенчатую очистку, а выбросы в атмосферу не превышают ПДК. Современные установки соответствуют стандарту ISO 14001.</p>

            <div class="test-container">
                <h2>Проверьте свои знания</h2>
                <form id="ukpgTest">
                    
                    <!-- Вопрос 1 -->
                    <div class="question">
                        <p><strong>1. Какой компонент УКПГ отвечает за удаление влаги из газа?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q1" id="q1a" value="a">
                                <label for="q1a">Аминовая колонна</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1b" value="b">
                                <label for="q1b">Гликолевая установка</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1c" value="c">
                                <label for="q1c">Турбодетандер</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q1" value="b">
                    </div>
                    
                    <!-- Вопрос 2 -->
                    <div class="question">
                        <p><strong>2. До какой температуры охлаждается газ в узле НТС?</strong></p>
                        <input type="text" id="q2_answer" class="text-answer" placeholder="Введите температуру в °C">
                        <input type="hidden" id="correct_q2" value="-30...-60">
                    </div>
                    
                    <!-- Вопрос 3 -->
                    <div class="question">
                        <p><strong>3. Какой стандарт регламентирует качество товарного газа?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q3" id="q3a" value="a">
                                <label for="q3a">ГОСТ 5542-2014</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q3" id="q3b" value="b">
                                <label for="q3b">ГОСТ Р 51649-2014</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q3" id="q3c" value="c">
                                <label for="q3c">ГОСТ 32569-2013</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q3" value="a">
                    </div>
                    
                    <!-- Вопрос 4 -->
                    <div class="question">
                        <p><strong>4. Какой процесс используется для переработки сероводорода?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q4" id="q4a" value="a">
                                <label for="q4a">Процесс Фишера-Тропша</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q4" id="q4b" value="b">
                                <label for="q4b">Процесс Клауса</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q4" id="q4c" value="c">
                                <label for="q4c">Процесс Габера</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q4" value="b">
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
    
    // Проверка вопросов 1, 3, 4
    for (let i = 1; i <= 4; i++) {
        if (i === 2) continue;
        
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
    
    // Проверка текстового вопроса 2
    const answer2 = document.getElementById('q2_answer').value.trim();
    const correct2 = document.getElementById('correct_q2').value;
    if (answer2.includes("-30") || answer2.includes("-60")) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 2: Правильно! Ваш ответ: ${answer2}</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 2: Неверно. Ваш ответ: ${answer2 || "Нет ответа"}. Правильный ответ: ${correct2}</li>`;
    }
    
    resultsHTML += `</ol><p><strong>Итоговый результат: ${score} из 4 (${Math.round(score/4*100)}%)</strong></p>`;
    document.getElementById('testResults').innerHTML = resultsHTML;
    document.getElementById('testResults').style.display = 'block';
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>