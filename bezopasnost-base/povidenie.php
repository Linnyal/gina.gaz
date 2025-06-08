<?php 
$page_title = "Общие правила поведения при пожаре: как действовать при обнаружении дыма или огня";
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
            <span>Категория: <a href="/knowledge-base/fire-safety/">Пожарная безопасность</a></span>
            <span>Обновлено: <?= date('d.m.Y') ?></span>
        </div>

        <div class="content">
            <h2>Первые действия при обнаружении пожара</h2>
            <p>При первых признаках пожара - запахе дыма, появлении пламени или повышении температуры - важно сохранять спокойствие и действовать быстро, но без паники. Первым делом необходимо немедленно сообщить о возгорании в пожарную охрану по телефону 101 или 112. Назовите точный адрес, место возникновения пожара и свою фамилию. Если пожар начался в многоквартирном доме, предупредите соседей, особенно пожилых людей и семьи с детьми.</p>
            <p>Оцените обстановку - если очаг возгорания небольшой и нет непосредственной угрозы вашей жизни, попробуйте потушить его самостоятельно, используя огнетушитель, плотную ткань или воду (если это не электрооборудование). Однако не рискуйте - при быстром распространении огня главной задачей становится эвакуация людей.</p>

            <h2>Эвакуация из горящего помещения</h2>
            <p>Покидая помещение, закройте за собой двери, чтобы ограничить распространение огня и дыма. Двигайтесь к выходу, пригнувшись к полу - внизу меньше дыма и больше кислорода. Дышите через влажную ткань. Не пользуйтесь лифтами - они могут отключиться в любой момент. Если путь к основному выходу отрезан, оставайтесь в помещении, плотно закрыв двери и заткнув щели мокрыми тряпками. Постарайтесь привлечь внимание к окну, но не разбивайте стекла без крайней необходимости.</p>
            <p>При сильном задымлении лестничных клеток лучше оставаться в квартире. Современные строительные материалы обеспечивают достаточный предел огнестойкости, чтобы дождаться прибытия пожарных. Выйдя на улицу, встретьте пожарных и сообщите им о возможном нахождении людей в здании.</p>

            <h2>Чего нельзя делать при пожаре</h2>
            <p>Никогда не пытайтесь героически спасать имущество, если это угрожает вашей жизни. Не открывайте окна без необходимости - приток кислорода усилит горение. Не тушите водой горящие электроприборы, включенные в сеть. Избегайте паники и не поддавайтесь ей сами - организованные действия спасают жизни. Не возвращайтесь в горящее здание без разрешения пожарных, даже если кажется, что опасность миновала.</p>
            <p>Особую осторожность следует проявлять при тушении жидкостей - бензина, масла, спирта. Используйте для этого огнетушитель, песок или плотную ткань. Помните, что при горении многих синтетических материалов выделяются ядовитые вещества, поэтому даже при небольшом пожаре лучше быстро эвакуироваться.</p>

            <h2>Действия после эвакуации</h2>
            <p>После выхода из опасной зоны сообщите о своем спасении прибывшим пожарным и спасателям. Пройдите медицинский осмотр, даже если чувствуете себя хорошо - последствия отравления дымом могут проявиться позже. Не пытайтесь сразу вернуться в здание после тушения пожара - дождитесь разрешения специалистов, которые оценят конструктивную безопасность помещений.</p>
            <p>Если вы оказали первую помощь пострадавшим, сообщите об этом медикам. По возможности сохраните для следствия обстановку на месте происшествия. В последующие дни будьте особенно внимательны к своему здоровью - при появлении кашля, одышки или других симптомов обратитесь к врачу.</p>

            <div class="test-container">
                <h2>Проверьте свои знания</h2>
                <form id="fireBehaviorTest">
                    
                    <!-- Вопрос 1 -->
                    <div class="question">
                        <p><strong>1. Что следует сделать в первую очередь при обнаружении пожара?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q1" id="q1a" value="a">
                                <label for="q1a">Начать тушить огонь</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1b" value="b">
                                <label for="q1b">Сообщить в пожарную охрану</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q1" id="q1c" value="c">
                                <label for="q1c">Собрать ценные вещи</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q1" value="b">
                    </div>
                    
                    <!-- Вопрос 2 -->
                    <div class="question">
                        <p><strong>2. Как правильно двигаться в задымленном помещении?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q2" id="q2a" value="a">
                                <label for="q2a">Быстро бежать к выходу</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2b" value="b">
                                <label for="q2b">Двигаться пригнувшись к полу</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q2" id="q2c" value="c">
                                <label for="q2c">Идти обычным шагом</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q2" value="b">
                    </div>
                    
                    <!-- Вопрос 3 -->
                    <div class="question">
                        <p><strong>3. Можно ли пользоваться лифтом при пожаре?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q3" id="q3a" value="a">
                                <label for="q3a">Да, если он работает</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q3" id="q3b" value="b">
                                <label for="q3b">Нет, это опасно</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q3" id="q3c" value="c">
                                <label for="q3c">Только если нет дыма</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q3" value="b">
                    </div>
                    
                    <!-- Вопрос 4 -->
                    <div class="question">
                        <p><strong>4. Что делать, если пути эвакуации отрезаны?</strong></p>
                        <div class="options">
                            <div class="option">
                                <input type="radio" name="q4" id="q4a" value="a">
                                <label for="q4a">Попытаться прорваться через огонь</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q4" id="q4b" value="b">
                                <label for="q4b">Остаться в помещении, закрыв двери</label>
                            </div>
                            <div class="option">
                                <input type="radio" name="q4" id="q4c" value="c">
                                <label for="q4c">Прыгнуть в окно</label>
                            </div>
                        </div>
                        <input type="hidden" id="correct_q4" value="b">
                    </div>
                    
                    <!-- Вопрос 5 -->
                    <div class="question">
                        <p><strong>5. Как правильно дышать в задымленном помещении?</strong></p>
                        <input type="text" id="q5_answer" class="text-answer" placeholder="Введите ответ">
                        <input type="hidden" id="correct_q5" value="через влажную ткань">
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
                a: 'Начать тушить огонь',
                b: 'Сообщить в пожарную охрану',
                c: 'Собрать ценные вещи'
            },
            correctText: 'Сообщить в пожарную охрану'
        },
        {
            id: 2,
            type: 'radio',
            name: 'q2',
            correct: 'b',
            answers: {
                a: 'Быстро бежать к выходу',
                b: 'Двигаться пригнувшись к полу',
                c: 'Идти обычным шагом'
            },
            correctText: 'Двигаться пригнувшись к полу'
        },
        {
            id: 3,
            type: 'radio',
            name: 'q3',
            correct: 'b',
            answers: {
                a: 'Да, если он работает',
                b: 'Нет, это опасно',
                c: 'Только если нет дыма'
            },
            correctText: 'Нет, это опасно'
        },
        {
            id: 4,
            type: 'radio',
            name: 'q4',
            correct: 'b',
            answers: {
                a: 'Попытаться прорваться через огонь',
                b: 'Остаться в помещении, закрыв двери',
                c: 'Прыгнуть в окно'
            },
            correctText: 'Остаться в помещении, закрыв двери'
        },
        {
            id: 5,
            type: 'text',
            name: 'q5_answer',
            correct: 'через влажную ткань',
            correctText: 'через влажную ткань'
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