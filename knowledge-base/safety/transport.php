<?php 
$page_title = "Подготовка газа к транспортировке: осушка и очистка от примесей";
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
            <h2>Введение в подготовку газа</h2>
            <p>Природный газ, добываемый из месторождений, содержит множество примесей, которые необходимо удалить перед транспортировкой по магистральным трубопроводам. Сырой газ может содержать воду, сероводород, углекислый газ, ртуть, азот и другие компоненты, которые снижают качество топлива и могут повредить оборудование. Современные технологии подготовки газа позволяют довести сырье до требований ГОСТ 5542-2014, обеспечивая безопасную и эффективную транспортировку.</p>

            <h2>Основные этапы подготовки</h2>
            
            <h3>1. Очистка от механических примесей</h3>
            <p>Первичная стадия подготовки начинается с удаления твердых частиц (песка, окалины, продуктов коррозии) с помощью сепараторов. Центробежные сепараторы создают вихревой поток, где тяжелые частицы оседают на стенках, а газ продолжает движение. Для тонкой очистки применяют фильтры с пористыми элементами из спеченного металла или керамики, задерживающие частицы размером до 5 микрон.</p>
            
            <h3>2. Удаление воды и осушка</h3>
            <p>Водяной пар в газе приводит к образованию гидратов - кристаллических соединений, забивающих трубопроводы. Осушка выполняется тремя методами: абсорбция гликолями (чаще всего триэтиленгликолем), адсорбция на молекулярных ситах и охлаждение. Гликолевые установки снижают точку росы до -15°C, а адсорбционные - до -70°C, что критически важно для транспортировки газа в северных регионах.</p>
            
            <h3>3. Очистка от кислых компонентов</h3>
            <p>Сероводород (H₂S) и углекислый газ (CO₂) вызывают коррозию оборудования и опасны для здоровья. Наиболее распространен метод аминовой очистки, где газ пропускают через раствор моноэтаноламина (МЭА), поглощающий кислые компоненты. На установках с высоким содержанием сероводорода применяют процесс Клауса, преобразующий H₂S в элементарную серу - ценное сырье для химической промышленности.</p>

            <h3>4. Удаление ртути</h3>
            <p>Даже следовые количества ртути (менее 0.1 мкг/м³) разрушают алюминиевое оборудование СПГ-заводов. Для очистки используют адсорбенты на основе серы или иодида калия, задерживающие пары ртути. Современные системы контроля непрерывно анализируют содержание ртути на выходе с точностью до нанограмма.</p>

            <h2>Инновационные технологии</h2>
            <p>Мембранное разделение - перспективная технология, где газ под давлением проходит через полупроницаемые полимерные мембраны, избирательно пропускающие разные компоненты. Этот метод особенно эффективен для удаления CO₂ и N₂, снижая энергозатраты на 30% по сравнению с традиционными методами. Цифровые двойники установок подготовки позволяют оптимизировать параметры в реальном времени, прогнозируя изменение состава сырья.</p>

            <h2>Контроль качества</h2>
            <p>На выходе с установки подготовки газ анализируют хроматографами, определяющими состав с точностью до 0.0001%. Обязательно контролируются: точка росы по воде (не выше -20°C для магистральных газопроводов), содержание сероводорода (не более 7 мг/м³), объемная доля кислорода (до 0.5%). Данные передаются в единую систему мониторинга Газпрома для обеспечения стабильного качества.</p>

            <div class="test-container">
                <h2>Проверьте свои знания</h2>
                <form id="gasPreparationTest">
                    
                    <!-- Вопрос 1 -->
                    <div class="question">
                        <p><strong>1. Какой компонент газа наиболее опасен для алюминиевого оборудования?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q1" id="q1a" value="a">
                                <label for="q1a">Углекислый газ</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1b" value="b">
                                <label for="q1b">Ртуть</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1c" value="c">
                                <label for="q1c">Азот</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q1" value="b">
                    </div>
                    
                    <!-- Вопрос 2 -->
                    <div class="question">
                        <p><strong>2. Какой раствор используется в аминовой очистке газа?</strong></p>
                        <input type="text" id="q2_answer" class="text-answer" placeholder="Введите название раствора">
                        <input type="hidden" id="correct_q2" value="моноэтаноламин">
                    </div>
                    
                    <!-- Вопрос 3 -->
                    <div class="question">
                        <p><strong>3. Для чего нужна осушка газа перед транспортировкой?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q3" id="q3a" value="a">
                                <label for="q3a">Для увеличения теплотворной способности</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q3" id="q3b" value="b">
                                <label for="q3b">Для предотвращения образования гидратов</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q3" id="q3c" value="c">
                                <label for="q3c">Для удаления механических примесей</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q3" value="b">
                    </div>
                    
                    <!-- Вопрос 4 -->
                    <div class="question">
                        <p><strong>4. Какая технология позволяет снизить энергозатраты на удаление CO₂?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q4" id="q4a" value="a">
                                <label for="q4a">Криогенное разделение</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q4" id="q4b" value="b">
                                <label for="q4b">Мембранное разделение</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q4" id="q4c" value="c">
                                <label for="q4c">Адсорбция на угле</label>
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
    const answer2 = document.getElementById('q2_answer').value.trim().toLowerCase();
    const correct2 = document.getElementById('correct_q2').value.toLowerCase();
    if (answer2.includes(correct2)) {
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