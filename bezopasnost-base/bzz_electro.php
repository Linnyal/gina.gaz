<?php 
$page_title = "Правила безопасности с электрооборудованием: как предотвратить возгорание";
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
        color: #e74c3c;
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
        border-color: #e74c3c;
        background-color: #e74c3c;
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
        border-color: #e74c3c;
        box-shadow: 0 0 0 3px rgba(231, 76, 60, 0.2);
    }
    
    button[type="button"] {
        padding: 12px 24px;
        background-color: #e74c3c;
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
        background-color: #c0392b;
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
        border-bottom: 2px solid #e74c3c;
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
        color: #e74c3c;
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
            <span>Категория: <a href="/knowledge-base/electrical-safety/">Электробезопасность</a></span>
            <span>Обновлено: <?= date('d.m.Y') ?></span>
        </div>

        <div class="content">
            <h2>Основные причины возгораний электрооборудования</h2>
            <p>Электрооборудование представляет повышенную пожарную опасность из-за возможности коротких замыканий, перегрузок и искрения. Наиболее частыми причинами возгораний становятся неисправная электропроводка, использование поврежденных электроприборов и неправильная эксплуатация электрооборудования. Особую опасность представляют самодельные электронагревательные приборы, не соответствующие требованиям безопасности.</p>
            <p>Перегрузка сети при подключении нескольких мощных приборов в одну розетку через тройники часто приводит к перегреву проводки. Старая алюминиевая электропроводка с поврежденной изоляцией также является частой причиной пожаров. Нельзя забывать и о коррозии контактов, которая увеличивает сопротивление и вызывает нагрев соединений.</p>

            <h2>Профилактические меры безопасности</h2>
            <p>Регулярный осмотр и техническое обслуживание электрооборудования - основа пожарной безопасности. Все электроприборы должны проходить периодическую проверку квалифицированными специалистами. Особое внимание следует уделять состоянию розеток, выключателей и вилок - они не должны искрить, нагреваться или иметь следы оплавления.</p>
            <p>При монтаже новой электропроводки используйте только качественные материалы и привлекайте профессиональных электриков. Установка устройств защитного отключения (УЗО) и автоматических выключателей значительно снижает риск возгорания. Не допускайте скрутки проводов из разных металлов - такие соединения со временем окисляются и перегреваются.</p>

            <h2>Правила эксплуатации электроприборов</h2>
            <p>Никогда не оставляйте включенные электронагревательные приборы без присмотра. Соблюдайте безопасное расстояние между обогревателями и горючими материалами - не менее 1 метра. После использования утюга, паяльника или других нагревательных устройств убедитесь, что они отключены от сети. Не накрывайте работающие электроприборы и не размещайте их в замкнутых пространствах без вентиляции.</p>
            <p>При использовании удлинителей следите, чтобы они были полностью размотаны - в свернутом состоянии кабель может перегреться. Не допускайте механических повреждений проводов - не вешайте на них тяжелые предметы, не пережимайте дверьми и мебелью. При обнаружении повреждений изоляции немедленно прекратите использование прибора до ремонта.</p>

            <h2>Действия при неисправностях электрооборудования</h2>
            <p>При появлении запаха горелой изоляции, искрении или дыме от электроприбора немедленно отключите его от сети. Если прибор загорелся, не пытайтесь тушить его водой - сначала обесточьте его, затем используйте огнетушитель класса E или плотную ткань. В случае возгорания электропроводки отключите электричество на щитке и вызовите пожарных.</p>
            <p>После срабатывания автоматических выключателей не включайте их повторно, не установив и не устранив причину отключения. Помните, что частые "выбивания" пробок свидетельствуют о серьезных проблемах в электросети. При обнаружении неисправностей в электрооборудовании обращайтесь только к квалифицированным электрикам - самостоятельный ремонт может привести к трагическим последствиям.</p>

            <div class="test-container">
                <h2>Проверьте свои знания</h2>
                <form id="electricalSafetyTest">
                    
                    <!-- Вопрос 1 -->
                    <div class="question">
                        <p><strong>1. Что является основной причиной возгораний электрооборудования?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q1" id="q1a" value="a">
                                <label for="q1a">Низкое напряжение в сети</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1b" value="b">
                                <label for="q1b">Короткие замыкания и перегрузки</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1c" value="c">
                                <label for="q1c">Слишком высокое качество изоляции</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q1" value="b">
                    </div>
                    
                    <!-- Вопрос 2 -->
                    <div class="question">
                        <p><strong>2. Какое минимальное расстояние должно быть между обогревателем и горючими материалами?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q2" id="q2a" value="a">
                                <label for="q2a">20 см</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2b" value="b">
                                <label for="q2b">50 см</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2c" value="c">
                                <label for="q2c">1 метр</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q2" value="c">
                    </div>
                    
                    <!-- Вопрос 3 -->
                    <div class="question">
                        <p><strong>3. Что нужно сделать в первую очередь при возгорании электроприбора?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q3" id="q3a" value="a">
                                <label for="q3a">Залить водой</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q3" id="q3b" value="b">
                                <label for="q3b">Обесточить прибор</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q3" id="q3c" value="c">
                                <label for="q3c">Вынести на улицу</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q3" value="b">
                    </div>
                    
                    <!-- Вопрос 4 -->
                    <div class="question">
                        <p><strong>4. Можно ли использовать поврежденные электроприборы с потертой изоляцией?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q4" id="q4a" value="a">
                                <label for="q4a">Да, если аккуратно</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q4" id="q4b" value="b">
                                <label for="q4b">Нет, это опасно</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q4" id="q4c" value="c">
                                <label for="q4c">Только в сухих помещениях</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q4" value="b">
                    </div>
                    
                    <!-- Вопрос 5 -->
                    <div class="question">
                        <p><strong>5. Какой класс огнетушителя следует использовать для тушения электрооборудования?</strong></p>
                        <input type="text" id="q5_answer" class="text-answer" placeholder="Введите ответ">
                        <input type="hidden" id="correct_q5" value="e">
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
    const questions = [
        {
            id: 1,
            type: 'radio',
            name: 'q1',
            correct: 'b',
            answers: {
                a: 'Низкое напряжение в сети',
                b: 'Короткие замыкания и перегрузки',
                c: 'Слишком высокое качество изоляции'
            },
            correctText: 'Короткие замыкания и перегрузки'
        },
        {
            id: 2,
            type: 'radio',
            name: 'q2',
            correct: 'c',
            answers: {
                a: '20 см',
                b: '50 см',
                c: '1 метр'
            },
            correctText: '1 метр'
        },
        {
            id: 3,
            type: 'radio',
            name: 'q3',
            correct: 'b',
            answers: {
                a: 'Залить водой',
                b: 'Обесточить прибор',
                c: 'Вынести на улицу'
            },
            correctText: 'Обесточить прибор'
        },
        {
            id: 4,
            type: 'radio',
            name: 'q4',
            correct: 'b',
            answers: {
                a: 'Да, если аккуратно',
                b: 'Нет, это опасно',
                c: 'Только в сухих помещениях'
            },
            correctText: 'Нет, это опасно'
        },
        {
            id: 5,
            type: 'text',
            name: 'q5_answer',
            correct: 'e',
            correctText: 'E (для тушения электроустановок под напряжением)'
        }
    ];

    questions.forEach(question => {
        if (question.type === 'radio') {
            const selected = document.querySelector(`input[name="${question.name}"]:checked`);
            
            if (selected && selected.value === question.correct) {
                score++;
                resultsHTML += `<li class="correct">Вопрос ${question.id}: Правильно! Ваш ответ: ${question.answers[selected.value]}</li>`;
            } else {
                const userAnswer = selected ? question.answers[selected.value] : "Нет ответа";
                resultsHTML += `<li class="incorrect">Вопрос ${question.id}: Неправильно. Ваш ответ: ${userAnswer}. Правильный ответ: ${question.correctText}</li>`;
            }
        } else if (question.type === 'text') {
            const answer = document.getElementById(question.name).value.trim().toLowerCase();
            if (answer.includes(question.correct.toLowerCase())) {
                score++;
                resultsHTML += `<li class="correct">Вопрос ${question.id}: Правильно! Ваш ответ: ${answer}</li>`;
            } else {
                resultsHTML += `<li class="incorrect">Вопрос ${question.id}: Неверно. Ваш ответ: ${answer || "Нет ответа"}. Правильный ответ: ${question.correctText}</li>`;
            }
        }
    });
    
    resultsHTML += `</ol><p><strong>Итоговый результат: ${score} из ${questions.length} (${Math.round(score/questions.length*100)}%)</strong></p>`;
    document.getElementById('testResults').innerHTML = resultsHTML;
    document.getElementById('testResults').style.display = 'block';
}
</script>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>