<?php 
$page_title = "Технологии переработки природного газа: от сырья к готовым продуктам";
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
            <span>Категория: <a href="/knowledge-base/gas-processing/">Переработка газа</a></span>
            <span>Обновлено: <?= date('d.m.Y') ?></span>
        </div>

        <div class="content">
            <h2>Введение в переработку природного газа</h2>
            <p>Природный газ, поступающий из месторождений, содержит множество примесей и сопутствующих компонентов, которые необходимо удалить или переработать в ценные продукты. Современные газоперерабатывающие заводы (ГПЗ) представляют собой сложные технологические комплексы, где сырье последовательно проходит несколько стадий обработки.</p>
            <p>Основная цель переработки - получение товарного газа, соответствующего строгим стандартам качества, и извлечение ценных компонентов для нефтехимической промышленности. Этот процесс требует точного соблюдения технологических режимов и использования специализированного оборудования.</p>

            <h2>Этапы очистки природного газа</h2>
            
            <h3>Удаление кислых компонентов</h3>
            <p>Первая критически важная стадия - очистка от сероводорода и углекислого газа. Эти соединения вызывают коррозию оборудования и недопустимы в конечном продукте. На большинстве современных предприятий применяется аминовая очистка, где газ пропускают через раствор моноэтаноламина (МЭА). Этот раствор избирательно поглощает кислые компоненты, которые затем выделяются при нагреве для регенерации амина.</p>
            
            <h3>Осушка газа</h3>
            <p>Далее следует удаление водяных паров, которые при определенных условиях могут образовывать гидраты - кристаллические соединения, способные забивать трубопроводы. Для осушки используют гликолевые установки или адсорбенты - молекулярные сита. Особенно тщательная осушка требуется перед низкотемпературной переработкой или транспортировкой газа по магистральным трубопроводам.</p>
            
            <h3>Извлечение ртути</h3>
            <p>Некоторые месторождения содержат следы ртути, которая крайне опасна для оборудования и персонала. Для ее удаления применяют специальные угольные фильтры, пропитанные серой или иодом. Этот этап особенно важен на установках по производству сжиженного природного газа (СПГ).</p>

            <h2>Разделение углеводородных компонентов</h2>
            
            <h3>Низкотемпературная сепарация</h3>
            <p>Основной метод выделения тяжелых углеводородов из природного газа - охлаждение до температур от -30°C до -70°C. При этом этане, пропане, бутанах и более тяжелых компонентах конденсируются, а метан остается в газообразном состоянии. Современные установки используют турбодетандеры, позволяющие эффективно охлаждать большие объемы газа.</p>
            
            <h3>Ректификация</h3>
            <p>Полученный конденсат поступает на ректификационные колонны, где разделяется на фракции. Этот процесс основан на разнице температур кипения компонентов. На выходе получают широкую фракцию легких углеводородов (ШФЛУ), стабильный газовый бензин и отдельные фракции этана, пропана и бутанов.</p>

            <h2>Современные технологии и инновации</h2>
            
            <h3>Мембранное разделение</h3>
            <p>Перспективное направление - использование полимерных мембран, избирательно пропускающих определенные компоненты. Этот метод требует меньше энергии по сравнению с традиционными способами и особенно эффективен для выделения гелия и водорода.</p>
            
            <h3>Цифровые технологии</h3>
            <p>Внедрение систем цифрового мониторинга позволяет оптимизировать технологические параметры в реальном времени. "Цифровые двойники" установок помогают моделировать различные режимы работы и прогнозировать возможные проблемы.</p>

            <h2>Экологические аспекты переработки</h2>
            <p>Современные ГПЗ оснащаются системами замкнутого цикла, минимизирующими выбросы. Сероводород перерабатывается в элементарную серу по процессу Клауса, которая затем используется в химической промышленности. Все технологические воды проходят многоступенчатую очистку перед сбросом или повторным использованием.</p>

            <h2>Заключение</h2>
            <p>Современные технологии переработки газа позволяют не только получать высококачественное топливо, но и ценные химические продукты. Постоянное совершенствование процессов способствует повышению эффективности и снижению экологической нагрузки. Дальнейшее развитие отрасли связано с внедрением цифровых технологий и комплексной переработкой всех компонентов газа.</p>

            <div class="test-container">
                <h2>Проверьте свои знания</h2>
                <form id="gasProcessingTest">
                    
                    <!-- Вопрос с вариантами ответов 1 -->
                    <div class="question">
                        <p><strong>1. Какой раствор чаще всего используется для очистки газа от сероводорода?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q1" id="q1a" value="a">
                                <label for="q1a">Серная кислота</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1b" value="b">
                                <label for="q1b">Моноэтаноламин (МЭА)</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1c" value="c">
                                <label for="q1c">Гидроксид натрия</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q1" value="b">
                    </div>
                    
                    <!-- Вопрос с вариантами ответов 2 -->
                    <div class="question">
                        <p><strong>2. Какое оборудование используется для осушки газа?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q2" id="q2a" value="a">
                                <label for="q2a">Центрифуги</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2b" value="b">
                                <label for="q2b">Гликолевые установки</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2c" value="c">
                                <label for="q2c">Электролизеры</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q2" value="b">
                    </div>
                    
                    <!-- Текстовый вопрос 3 -->
                    <div class="question">
                        <p><strong>3. Как называется процесс переработки сероводорода в элементарную серу?</strong></p>
                        <input type="text" id="q3_answer" class="text-answer" placeholder="Введите ответ">
                        <input type="hidden" id="correct_q3" value="процесс Клауса">
                    </div>
                    
                    <!-- Вопрос с вариантами ответов 4 -->
                    <div class="question">
                        <p><strong>4. Для чего нужна низкотемпературная сепарация?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q4" id="q4a" value="a">
                                <label for="q4a">Для увеличения давления газа</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q4" id="q4b" value="b">
                                <label for="q4b">Для выделения тяжелых углеводородов</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q4" id="q4c" value="c">
                                <label for="q4c">Для удаления азота</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q4" value="b">
                    </div>
                    
                    <!-- Вопрос с вариантами ответов 5 -->
                    <div class="question">
                        <p><strong>5. Какое современное перспективное направление используется для разделения газов?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q5" id="q5a" value="a">
                                <label for="q5a">Электромагнитная сепарация</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q5" id="q5b" value="b">
                                <label for="q5b">Мембранное разделение</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q5" id="q5c" value="c">
                                <label for="q5c">Ультразвуковая обработка</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q5" value="b">
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
    
    // Проверка вопросов с вариантами ответов (1, 2, 4, 5)
    for (let i = 1; i <= 5; i++) {
        if (i === 3) continue; // Пропускаем текстовый вопрос
        
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
    
    // Проверка текстового вопроса (3)
    const answer3 = document.getElementById('q3_answer').value.trim().toLowerCase();
    const correct3 = document.getElementById('correct_q3').value.toLowerCase();
    if (answer3.includes(correct3)) {
        score++;
        resultsHTML += `<li class="correct">Вопрос 3: Правильно! Ваш ответ: ${answer3}</li>`;
    } else {
        resultsHTML += `<li class="incorrect">Вопрос 3: Неверно. Ваш ответ: ${answer3 || "Нет ответа"}. Правильный ответ: ${correct3}</li>`;
    }
    
    resultsHTML += `</ol><p><strong>Итоговый результат: ${score} из 5 (${Math.round(score/5*100)}%)</strong></p>`;
    document.getElementById('testResults').innerHTML = resultsHTML;
    document.getElementById('testResults').style.display = 'block';
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>